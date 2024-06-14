<?php

namespace Webkul\Admin\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Laravel\Octane\Exceptions\DdException;

class APIResponseController extends Controller
{
    /**
     * @throws DdException
     */
    public function index(Request $request)
    {
        if($request->input('url')){
            $url = $request->input('url');

            $apiKey = 'AIzaSyChWARdOfD9rQS-fMnzHE2Jwc3Y_D4J414';

            $client = new Client();
            $apiUrl = 'https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=' . urlencode($url) . '&key=' . $apiKey;
            try {

                $response = $client->request('GET',$apiUrl);
                $data = json_decode($response->getBody(),true);
                return view('admin::api-response', ['response' => $data]);
            }catch (\Exception $e){
                return response()->json(['message'=>$e->getMessage()]);
            }

        }else{
            return view('admin::api-response',['response' => '']);
        }

    }
}

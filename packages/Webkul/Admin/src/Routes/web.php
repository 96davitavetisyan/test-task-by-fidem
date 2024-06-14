<?php

/**
 * Auth routes.
 */
require 'auth-routes.php';

/**
 * Sales routes.
 */
require 'sales-routes.php';

/**
 * Catalog routes.
 */
require 'catalog-routes.php';

/**
 * Customers routes.
 */
require 'customers-routes.php';

/**
 * Marketing routes.
 */
require 'marketing-routes.php';

/**
 * CMS routes.
 */
require 'cms-routes.php';

/**
 * Reporting routes.
 */
require 'reporting-routes.php';

/**
 * Settings routes.
 */
require 'settings-routes.php';

/**
 * Configuration routes.
 */
require 'configuration-routes.php';

/**
 * Notification routes.
 */
require 'notification-routes.php';

/**
 * Remaining routes.
 */
require 'rest-routes.php';

use Webkul\Admin\Http\Controllers\APIResponseController;
Route::group(['middleware' => ['admin'], 'prefix' => config('app.admin_url')], function () {

    Route::get('api-response', [APIResponseController::class, 'index'])->name('admin.api-response');
});

<?php 
namespace App\VoucherGateway;

use Illuminate\Support\ServiceProvider;
use App\VoucherGateway\VoucherGateway;

/**
* 
*/
class VoucherGatewayServiceProvider extends ServiceProvider {

    public function register()
    {
        //$this->app->bind('vouchergateway', 'App\VoucherGateway\VoucherGateway' );
        $this->app->bind('vouchergateway', function () {
            return new VoucherGateway;
        });
    }

}
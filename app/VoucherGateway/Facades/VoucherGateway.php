<?php 
namespace App\VoucherGateway\Facades;

use Illuminate\Support\Facades\Facade;


/**
* 
*/
class VoucherGateway extends Facade
{
	protected static function getFacadeAccessor() { return 'vouchergateway';  }
}
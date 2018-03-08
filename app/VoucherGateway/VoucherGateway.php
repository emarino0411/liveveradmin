<?php
namespace App\VoucherGateway;

use Carbon;
use Session;


class VoucherGateway
{

	protected $client_system_uuid;

	protected $api_url;

	protected $api_version;

	protected $auth_client_id;

	protected $auth_client_secret;

	protected $auth_username;

	protected $auth_password;

	protected $access_token;

	protected $access_token_expiration;

	protected $refresh_token;


	public function __construct() {
		$this->client_system_uuid      = config('voucher_gateway.client_system_uuid');
		$this->api_url                 = config('voucher_gateway.api_url');
		$this->api_version             = config('voucher_gateway.api_version');
		$this->auth_client_id          = config('voucher_gateway.auth_client_id');
		$this->auth_client_secret      = config('voucher_gateway.auth_client_secret');
		$this->auth_username           = config('voucher_gateway.auth_username');
		$this->auth_password           = config('voucher_gateway.auth_password');
		$this->access_token            = Session::get('vgw_access_token');
		$this->access_token_expiration = Session::get('vgw_access_token_expiration');
		$this->access_refresh_token    = Session::get('vgw_refresh_token');
		//Authentica request
		$this->authenticate();
    }

	public function request_code($payload)
	{
		if( $payload ) {
			$http_headers 	= array(
				'Authorization: Bearer ' . Session::get('vgw_access_token')
			);

			$data 			= array(
				'init'					=> $this->api_url . $this->api_version . '/vouchers/code',
				'custom_request'		=> 'POST',
				'postfields'			=> $payload,
				'return_transfer'		=> TRUE,
				'connection_timeout'	=> 0,
				'http_headers'			=> $http_headers,
				'ssl_verifypeer'		=> FALSE								
			);

			$result 	= $this->send( $data );
			return $result;
		}//end if
		return false;
	}//end request_code

	public function request_special_code($payload)
	{
		if( $payload ) {
			$http_headers 	= array(
				'Authorization: Bearer ' . Session::get('vgw_access_token')
			);

			$data 			= array(
				'init'					=> $this->api_url . $this->api_version . '/vouchers/code/special',
				'custom_request'		=> 'POST',
				'postfields'			=> $payload,
				'return_transfer'		=> TRUE,
				'connection_timeout'	=> 0,
				'http_headers'			=> $http_headers,
				'ssl_verifypeer'		=> FALSE								
			);

			$result 	= $this->send( $data );
			return $result;
		}//end if
		return false;
	}//end request_special_code

	public function client_programs()
	{
		$http_headers 	= array(
			'Authorization: Bearer ' . Session::get('vgw_access_token')
		);

		$data 			= array(
			'init'					=> $this->api_url . $this->api_version . '/clients',
			'custom_request'		=> 'GET',
			'postfields'			=> FALSE,
			'return_transfer'		=> TRUE,
			'connection_timeout'	=> 0,
			'http_headers'			=> $http_headers,
			'ssl_verifypeer'		=> FALSE								
		);

		$result 	= $this->send( $data );
		return $result;
	}//end request_special_code

	protected function authenticate()
	{
		$today = Carbon\Carbon::now();

		//if( empty($this->access_token) || $today->timestamp >= $this->access_token_expiration->timestamp ) {

			$http_headers = array();
			$payload      = array(
									'grant_type'    => 'password',
									'client_id'     => $this->auth_client_id,
									'client_secret' => $this->auth_client_secret,
									'username'      => $this->auth_username,
									'password'      => $this->auth_password
								);
			$data         = array(
				'init'					=> $this->api_url . 'oauth/token',
				'custom_request'		=> 'POST',
				'postfields'			=> $payload,
				'return_transfer'		=> TRUE,
				'connection_timeout'	=> 0,
				'http_headers'			=> $http_headers,
				'ssl_verifypeer'		=> FALSE								
			);
			
			$result 		= $this->send( $data );
			
			$response_data = $result['data'];
			
			if( !$response_data ) {
				return array(
							'status'    => false,
							'message'   => 'Failed connecting to server.',
							'data'      => $response_data
						);
			}

			if ( isset($response_data->error) ) {
				return array(
							'status'    => false,
							'message'   => $response_data->message,
							'data'      => $response_data
						);
			}//end if

			$today->addSeconds($response_data->expires_in);
			Session::put('vgw_access_token_expiration', $today);
			Session::put('vgw_access_token', $response_data->access_token);
			Session::put('vgw_refresh_token', $response_data->refresh_token);
			Session::save();

		//}//end if
		return true;
	}

	protected function send($data)
	{
		try {
				$message      = 'Oops! Failed connecting to server. Please try again later.';
				$ch           = curl_init( $data['init'] );

				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 	$data['custom_request']);
				curl_setopt($ch, CURLOPT_POSTFIELDS,		$data['postfields']);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 	$data['return_transfer']);
				curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 	$data['connection_timeout']);
				curl_setopt($ch, CURLOPT_HTTPHEADER, 		$data['http_headers']);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 	$data['ssl_verifypeer']);

				$_result = curl_exec($ch);
				$result  = json_decode( $_result );

				if ( FALSE === $result ) {
					return array(
						'status'    => false,
						'message'   => $message,
						'data'      => array()
					);
	            }//end if

	            curl_close($ch);

	            if ( isset($result->errors) ) {
	            	return array(
	            		'status'  => false,
	            		'message' => $result->errors[0]->detail,
	            		'data'    => array()
	            	);
	            }//end if

	            return array(
	            	'status'    => true,
	            	'message'   => '',
	            	'data'      => $result
	            );

            } catch(Exception $e) {
            	return array(
            		'status'    => false,
            		'message'   => $message,
            		'data'      => array()
            	);
            }//end catch

            return array(
            	'status'    => false,
            	'message'   => $message,
            	'data'      => array()
            );
        }
}
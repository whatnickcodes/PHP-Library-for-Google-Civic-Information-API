<?php

if (!function_exists('curl_init'))  throw new Exception("Dwolla's API Client Library requires the CURL PHP extension.");
if (!function_exists('json_decode')) throw new Exception("Dwolla's API Client Library requires the JSON PHP extension.");

class Polls {

	public $address;
	protected $url 			= '';
	protected $api_key 		= 'AIzaSyDfVpw7pa5EShxWEd2nG2oFUWWx2MUncWQ';
	protected $version 		= 'us_v1';
	protected $election_id 	= '4000';


	public function __construct($user_config = array())
	{
		$default_config = array(
            'api_key' => $this->api_key,
            'version' => $this->version,
            'election_id' => $this->election_id
        );

        $config = array_merge($default_config, $user_config);

        $this->api_key		= $config['api_key'];
        $this->version 		= $config['version'];
        $this->election_id	= $config['election_id'];
	}

	public function locate($address) {
		$this->url = 'https://www.googleapis.com/civicinfo/'.$this->version.'/voterinfo/'.$this->election_id.'/lookup?key='.$this->api_key;

		$request_body = json_encode(array('address' => $address));
						
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $request_body); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
		$output = curl_exec($ch);
		curl_close($ch);
		
		return json_decode($output, TRUE);
	}
}
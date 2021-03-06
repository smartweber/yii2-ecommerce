<?php

namespace common\components\lazada;

use common\components\lazada\Http\HttpClient;
use common\components\lazada\Http\HttpHelper;
use common\components\lazada\Http\ResponseHelper;

class ShippingProvider extends HttpClient {
	private $baseURL;
	private $version;
	private $userID;
	private $apiKey;
	private $format;

	private $parameters;

	/**
	 * Sets the private variables and base parameter array.
	 * 
	 * @param $baseURL Base URL of API
	 * @param $version Version (must always be 1.0)
	 * @param $userID User ID
	 * @param $apiKey API Key
	 * @param $format Format of response (always JSON)
	 */
	public function __construct($baseURL, $version, $userID, $apiKey, $format) {
		$this->baseURL = $baseURL;
		$this->version = $version;
		$this->userID = $userID;
		$this->apiKey = $apiKey;
		$this->format = $format;

		$this->parameters = [
			'UserID' => $this->userID,
			'Version' => $this->version,
			'Format' => $this->format,
			'APIKey' => $this->apiKey
		];
	}

	/**
	 * Get the customer details for a range of orders.
	 * Returns a list of all active shipping providers, which is needed when working with SetStatusToPackedByMarketplace.
	 *
	 * @return stdClass[]
	 */
	public function GetShipmentProviders() {
		// set the action as required
		$this->parameters['Action'] = 'GetShipmentProviders';

		// make the http request
		$data = HttpClient::makeCall($this->baseURL, $this->parameters);

		// handle the response given
		return ResponseHelper::property($data, 'SuccessResponse->Body->ShipmentProviders');
	}
}
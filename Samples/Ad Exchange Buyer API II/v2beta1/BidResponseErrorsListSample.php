﻿<?php
// Copyright 2017 DAIMTO ([Linda Lawton](https://twitter.com/LindaLawtonDK)) :  [www.daimto.com](http://www.daimto.com/)
//
// Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with
// the License. You may obtain a copy of the License at
//
// http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on
// an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the
// specific language governing permissions and limitations under the License.
//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated by DAIMTO-Google-apis-Sample-generator 1.0.0
//     Template File Name:  methodTemplate.tt
//     Build date: 2017-10-08
//     PHP generator version: 1.0.0
//     
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------  
// About 
// 
// Unofficial sample for the AdExchangeBuyerII v2beta1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Accesses the latest features for managing Ad Exchange accounts, Real-Time Bidding configurations and auction metrics, and Marketplace programmatic deals.
// API Documentation Link https://developers.google.com/ad-exchange/buyer-rest/reference/rest/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/adexchangebuyer2/v2beta1/rest
//
//------------------------------------------------------------------------------
// Installation
//
// The preferred method is via https://getcomposer.org. Follow the installation instructions https://getcomposer.org/doc/00-intro.md 
// if you do not already have composer installed.
//
// Once composer is installed, execute the following command in your project root to install this library:
//
// composer require google/apiclient:^2.0
//
//------------------------------------------------------------------------------  
// Load the Google API PHP Client Library.
require_once __DIR__ . '/vendor/autoload.php';
session_start();

/***************************************************
* Include this line for service account authencation.  Note: Not all APIs support service accounts.  
//require_once __DIR__ . '/ServiceAccount.php';     
* Include the following four lines Oauth2 authencation.
* require_once __DIR__ . '/Oauth2Authentication.php';
* $_SESSION['mainScript'] = basename($_SERVER['PHP_SELF']);   // Oauth2callback.php will return here.
* $client = getGoogleClient();
* $service = new Google_Service_Adexchangebuyerii($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'pageToken' => '[YourValue]',  // A token identifying a page of results the server should return.Typically, this is the value ofListBidResponseErrorsResponse.nextPageTokenreturned from the previous call to theaccounts.filterSets.bidResponseErrors.listmethod.
            
  //'pageSize' => '[YourValue]',  // Requested page size. The server may return fewer results than requested.If unspecified, the server will pick an appropriate default.
  'fields' => '*'
);
// Single Request.
$results = bidResponseErrorsListExample($service, $accountId, $filterSetId, $optParams);

// Paginiation Example
do {
    if (!$results->getNextPageToken()) 
		break;

	$optParams['pageToken'] = $results->getNextPageToken();
	$results = filesListExample($service, $accountId, $filterSetId, $optParams);	
} while($results->getNextPageToken());  

/**
* List all errors that occurred in bid responses, with the number of bidresponses affected for each reason.
* @service Authenticated Adexchangebuyerii service.
* @optParams Optional paramaters are not required by a request.
* @accountId Account ID of the buyer.
* @filterSetId The ID of the filter set to apply.
* @return ListBidResponseErrorsResponse
*/
function bidResponseErrorsListExample($service, $accountId, $filterSetId, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (accountId == null)
			throw new Exception("accountId is required.");
		if (filterSetId == null)
			throw new Exception("filterSetId is required.");
		// Make the request and return the results.
		return $service->bidResponseErrors->ListBidResponseErrors($accountId, $filterSetId, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>

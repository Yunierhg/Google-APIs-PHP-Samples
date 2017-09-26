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
//     Build date: 2017-09-26
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
            
  //'pageSize' => '[YourValue]',  //Requested page size. Server may return fewer associations than requested.If unspecified, server will pick an appropriate default.
            
  //'query' => '[YourValue]',  //An optional query string to filter deal associations. If no filter isspecified, all associations will be returned.Supported queries are:<ul><li>accountId=<i>account_id_string</i><li>creativeId=<i>creative_id_string</i><li>dealsId=<i>deals_id_string</i><li>dealsStatus:{approved, conditionally_approved, disapproved,                  not_checked}<li>openAuctionStatus:{approved, conditionally_approved, disapproved,                         not_checked}</ul>Example: 'dealsId=12345 AND dealsStatus:disapproved'
            
  //'pageToken' => '[YourValue]',  //A token identifying a page of results the server should return.Typically, this is the value ofListDealAssociationsResponse.next_page_tokenreturned from the previous call to 'ListDealAssociations' method.
  'fields' => '*'
);
// Single Request.
$results = dealAssociationsListExample($service, $accountId, $creativeId, $optParams);

// Paginiation Example
do {
    if (!$results->getNextPageToken()) 
		break;

	$optParams['pageToken'] = $results->getNextPageToken();
	$results = filesListExample($service, $accountId, $creativeId, $optParams);	
} while($results->getNextPageToken());  

/**
* List all creative-deal associations.
* @service Authenticated Adexchangebuyerii service.
* @optParams Optional paramaters are not required by a request.
* @accountId The account to list the associations from.
Specify "-" to list all creatives the current user has access to.
* @creativeId The creative ID to list the associations from.
Specify "-" to list all creatives under the above account.
* @return ListDealAssociationsResponse
*/
function dealAssociationsListExample($service, $accountId, $creativeId, $optParams)
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
		if (creativeId == null)
			throw new Exception("creativeId is required.");
		// Make the request and return the results.
		return $service->dealAssociations->ListDealAssociations($accountId, $creativeId, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>

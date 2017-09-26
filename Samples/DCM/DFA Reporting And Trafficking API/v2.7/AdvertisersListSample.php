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
// Unofficial sample for the dfareporting v2.7 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Manages your DoubleClick Campaign Manager ad campaigns and reports.
// API Documentation Link https://developers.google.com/doubleclick-advertisers/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/dfareporting/v2_7/rest
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
* $service = new Google_Service_Dfareporting($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'advertiserGroupIds' => '[YourValue]',  //Select only advertisers with these advertiser group IDs.
            
  //'floodlightConfigurationIds' => '[YourValue]',  //Select only advertisers with these floodlight configuration IDs.
            
  //'ids' => '[YourValue]',  //Select only advertisers with these IDs.
            
  //'includeAdvertisersWithoutGroupsOnly' => '[YourValue]',  //Select only advertisers which do not belong to any advertiser group.
            
  //'maxResults' => '[YourValue]',  //Maximum number of results to return.
            
  //'onlyParent' => '[YourValue]',  //Select only advertisers which use another advertiser's floodlight configuration.
            
  //'pageToken' => '[YourValue]',  //Value of the nextPageToken from the previous result page.
            
  //'searchString' => '[YourValue]',  //Allows searching for objects by name or ID. Wildcards (*) are allowed. For example, "advertiser*2015" will return objects with names like "advertiser June 2015", "advertiser April 2015", or simply "advertiser 2015". Most of the searches also add wildcards implicitly at the start and the end of the search string. For example, a search string of "advertiser" will match objects with name "my advertiser", "advertiser 2015", or simply "advertiser".
            
  //'sortField' => '[YourValue]',  //Field by which to sort the list.
            
  //'sortOrder' => '[YourValue]',  //Order of sorted results.
            
  //'status' => '[YourValue]',  //Select only advertisers with the specified status.
            
  //'subaccountId' => '[YourValue]',  //Select only advertisers with these subaccount IDs.
  'fields' => '*'
);
// Single Request.
$results = advertisersListExample($service, $profileId, $optParams);

// Paginiation Example
do {
    if (!$results->getNextPageToken()) 
		break;

	$optParams['pageToken'] = $results->getNextPageToken();
	$results = filesListExample($service, $profileId, $optParams);	
} while($results->getNextPageToken());  

/**
* Retrieves a list of advertisers, possibly filtered. This method supports paging.
* @service Authenticated Dfareporting service.
* @optParams Optional paramaters are not required by a request.
* @profileId User profile ID associated with this request.
* @return AdvertisersListResponse
*/
function advertisersListExample($service, $profileId, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (profileId == null)
			throw new Exception("profileId is required.");
		// Make the request and return the results.
		return $service->advertisers->ListAdvertisers($profileId, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>

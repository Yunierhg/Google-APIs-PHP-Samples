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
// Unofficial sample for the plus v1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Builds on top of the Google+ platform.
// API Documentation Link https://developers.google.com/+/api/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/plus/v1/rest
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
* $service = new Google_Service_Plus($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'language' => '[YourValue]',  //Specify the preferred language to search with. See search language codes for available values.
            
  //'maxResults' => '[YourValue]',  //The maximum number of people to include in the response, which is used for paging. For any response, the actual number returned might be less than the specified maxResults.
            
  //'pageToken' => '[YourValue]',  //The continuation token, which is used to page through large result sets. To get the next page of results, set this parameter to the value of "nextPageToken" from the previous response. This token can be of any length.
  'fields' => '*'
);
// Single Request.
$results = peopleSearchExample($service, $query, $optParams);

// Paginiation Example
do {
    if (!$results->getNextPageToken()) 
		break;

	$optParams['pageToken'] = $results->getNextPageToken();
	$results = filesListExample($service, $query, $optParams);	
} while($results->getNextPageToken());  

/**
* Search all public profiles.
* @service Authenticated Plus service.
* @optParams Optional paramaters are not required by a request.
* @query Specify a query string for full text search of public text in all profiles.
* @return PeopleFeed
*/
function peopleSearchExample($service, $query, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (query == null)
			throw new Exception("query is required.");
		// Make the request and return the results.
		return $service->people->SearchPeople($query, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>

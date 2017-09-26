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
// Unofficial sample for the analytics v2.4 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Views and manages your Google Analytics data.
// API Documentation Link https://developers.google.com/analytics/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/analytics/v2_4/rest
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
* $service = new Google_Service_Analytics($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'dimensions' => '[YourValue]',  //A comma-separated list of Analytics dimensions. E.g., 'ga:browser,ga:city'.
            
  //'filters' => '[YourValue]',  //A comma-separated list of dimension or metric filters to be applied to the report data.
            
  //'max-results' => '[YourValue]',  //The maximum number of entries to include in this feed.
            
  //'segment' => '[YourValue]',  //An Analytics advanced segment to be applied to the report data.
            
  //'sort' => '[YourValue]',  //A comma-separated list of dimensions or metrics that determine the sort order for the report data.
            
  //'start-index' => '[YourValue]',  //An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
  'fields' => '*'
);
// Single Request.
$results = dataGetExample($service, $ids, $start-date, $end-date, $metrics, $optParams);


/**
* Returns Analytics report data for a view (profile).
* @service Authenticated Analytics service.
* @optParams Optional paramaters are not required by a request.
* @end-date End date for fetching report data. All requests should specify an end date formatted as YYYY-MM-DD.
* @ids Unique table ID for retrieving report data. Table ID is of the form ga:XXXX, where XXXX is the Analytics view (profile) ID.
* @metrics A comma-separated list of Analytics metrics. E.g., 'ga:sessions,ga:pageviews'. At least one metric must be specified to retrieve a valid Analytics report.
* @start-date Start date for fetching report data. All requests should specify a start date formatted as YYYY-MM-DD.

*/
function dataGetExample($service, $ids, $start-date, $end-date, $metrics, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (end-date == null)
			throw new Exception("end-date is required.");
		if (ids == null)
			throw new Exception("ids is required.");
		if (metrics == null)
			throw new Exception("metrics is required.");
		if (start-date == null)
			throw new Exception("start-date is required.");
		// Make the request and return the results.
		 $service->data->GetData($ids, $start-date, $end-date, $metrics, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>

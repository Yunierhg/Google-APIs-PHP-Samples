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
// Unofficial sample for the YouTube Analytics v1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Retrieves your YouTube Analytics data.
// API Documentation Link http://developers.google.com/youtube/analytics/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/youtubeAnalytics/v1/rest
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
* $service = new Google_Service_Youtubeanalytics($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'currency' => '[YourValue]',  // The currency to which financial metrics should be converted. The default is US Dollar (USD). If the result contains no financial metrics, this flag will be ignored. Responds with an error if the specified currency is not recognized.
            
  //'dimensions' => '[YourValue]',  // A comma-separated list of YouTube Analytics dimensions, such as views or ageGroup,gender. See the Available Reports document for a list of the reports that you can retrieve and the dimensions used for those reports. Also see the Dimensions document for definitions of those dimensions.
            
  //'filters' => '[YourValue]',  // A list of filters that should be applied when retrieving YouTube Analytics data. The Available Reports document identifies the dimensions that can be used to filter each report, and the Dimensions document defines those dimensions. If a request uses multiple filters, join them together with a semicolon (;), and the returned result table will satisfy both filters. For example, a filters parameter value of video==dMH0bHeiRNg;country==IT restricts the result set to include data for the given video in Italy.
            
  //'include-historical-channel-data' => '[YourValue]',  // If set to true historical data (i.e. channel data from before the linking of the channel to the content owner) will be retrieved.
            
  //'max-results' => '[YourValue]',  // The maximum number of rows to include in the response.
            
  //'sort' => '[YourValue]',  // A comma-separated list of dimensions or metrics that determine the sort order for YouTube Analytics data. By default the sort order is ascending. The '-' prefix causes descending sort order.
            
  //'start-index' => '[YourValue]',  // An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter (one-based, inclusive).
  'fields' => '*'
);
// Single Request.
$results = reportsQueryExample($service, $ids, $start-date, $end-date, $metrics, $optParams);


/**
* Retrieve your YouTube Analytics reports.
* @service Authenticated Youtubeanalytics service.
* @optParams Optional paramaters are not required by a request.
* @end-date The end date for fetching YouTube Analytics data. The value should be in YYYY-MM-DD format.
* @ids Identifies the YouTube channel or content owner for which you are retrieving YouTube Analytics data.
- To request data for a YouTube user, set the ids parameter value to channel==CHANNEL_ID, where CHANNEL_ID specifies the unique YouTube channel ID.
- To request data for a YouTube CMS content owner, set the ids parameter value to contentOwner==OWNER_NAME, where OWNER_NAME is the CMS name of the content owner.
* @metrics A comma-separated list of YouTube Analytics metrics, such as views or likes,dislikes. See the Available Reports document for a list of the reports that you can retrieve and the metrics available in each report, and see the Metrics document for definitions of those metrics.
* @start-date The start date for fetching YouTube Analytics data. The value should be in YYYY-MM-DD format.
* @return ResultTable
*/
function reportsQueryExample($service, $ids, $start-date, $end-date, $metrics, $optParams)
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
		return $service->reports->QueryReports($ids, $start-date, $end-date, $metrics, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>

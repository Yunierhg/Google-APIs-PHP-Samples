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
// Unofficial sample for the Cloud Monitoring v2beta2 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Accesses Google Cloud Monitoring data.
// API Documentation Link https://cloud.google.com/monitoring/v2beta2/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/cloudmonitoring/v2beta2/rest
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
* $service = new Google_Service_Cloudmonitoring($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'aggregator' => '[YourValue]',  // The aggregation function that will reduce the data points in each window to a single point. This parameter is only valid for non-cumulative metrics with a value type of INT64 or DOUBLE.
            
  //'count' => '[YourValue]',  // Maximum number of data points per page, which is used for pagination of results.
            
  //'labels' => '[YourValue]',  // A collection of labels for the matching time series, which are represented as:  - key==value: key equals the value - key=~value: key regex matches the value - key!=value: key does not equal the value - key!~value: key regex does not match the value  For example, to list all of the time series descriptors for the region us-central1, you could specify:label=cloud.googleapis.com%2Flocation=~us-central1.*
            
  //'oldest' => '[YourValue]',  // Start of the time interval (exclusive), which is expressed as an RFC 3339 timestamp. If neither oldest nor timespan is specified, the default time interval will be (youngest - 4 hours, youngest]
            
  //'pageToken' => '[YourValue]',  // The pagination token, which is used to page through large result sets. Set this value to the value of the nextPageToken to retrieve the next page of results.
            
  //'timespan' => '[YourValue]',  // Length of the time interval to query, which is an alternative way to declare the interval: (youngest - timespan, youngest]. The timespan and oldest parameters should not be used together. Units:  - s: second - m: minute - h: hour - d: day - w: week  Examples: 2s, 3m, 4w. Only one unit is allowed, for example: 2w3d is not allowed; you should use 17d instead.If neither oldest nor timespan is specified, the default time interval will be (youngest - 4 hours, youngest].
            
  //'window' => '[YourValue]',  // The sampling window. At most one data point will be returned for each window in the requested time interval. This parameter is only valid for non-cumulative metric types. Units:  - m: minute - h: hour - d: day - w: week  Examples: 3m, 4w. Only one unit is allowed, for example: 2w3d is not allowed; you should use 17d instead.
  'fields' => '*'
);
// Single Request.
$results = timeseriesListExample($service, $project, $metric, $youngest, $optParams);

// Paginiation Example
do {
    if (!$results->getNextPageToken()) 
		break;

	$optParams['pageToken'] = $results->getNextPageToken();
	$results = filesListExample($service, $project, $metric, $youngest, $optParams);	
} while($results->getNextPageToken());  

/**
* List the data points of the time series that match the metric and labels values and that have data points in the interval. Large responses are paginated; use the nextPageToken returned in the response to request subsequent pages of results by setting the pageToken query parameter to the value of the nextPageToken.
* @service Authenticated Cloudmonitoring service.
* @optParams Optional paramaters are not required by a request.
* @metric Metric names are protocol-free URLs as listed in the Supported Metrics page. For example, compute.googleapis.com/instance/disk/read_ops_count.
* @project The project ID to which this time series belongs. The value can be the numeric project ID or string-based project name.
* @youngest End of the time interval (inclusive), which is expressed as an RFC 3339 timestamp.
* @return ListTimeseriesResponse
*/
function timeseriesListExample($service, $project, $metric, $youngest, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (metric == null)
			throw new Exception("metric is required.");
		if (project == null)
			throw new Exception("project is required.");
		if (youngest == null)
			throw new Exception("youngest is required.");
		// Make the request and return the results.
		return $service->timeseries->ListTimeseries($project, $metric, $youngest, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>

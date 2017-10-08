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
// Unofficial sample for the pagespeedonline v1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Analyzes the performance of a web page and provides tailored suggestions to make that page faster.
// API Documentation Link https://developers.google.com/speed/docs/insights/v1/getting_started
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/pagespeedonline/v1/rest
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
* $service = new Google_Service_Pagespeedonline($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'filter_third_party_resources' => '[YourValue]',  // Indicates if third party resources should be filtered out before PageSpeed analysis.
            
  //'locale' => '[YourValue]',  // The locale used to localize formatted results
            
  //'rule' => '[YourValue]',  // A PageSpeed rule to run; if none are given, all rules are run
            
  //'screenshot' => '[YourValue]',  // Indicates if binary data containing a screenshot should be included
            
  //'strategy' => '[YourValue]',  // The analysis strategy to use
  'fields' => '*'
);
// Single Request.
$results = pagespeedapiRunpagespeedExample($service, $url, $optParams);


/**
* Runs PageSpeed analysis on the page at the specified URL, and returns a PageSpeed score, a list of suggestions to make that page faster, and other information.
* @service Authenticated Pagespeedonline service.
* @optParams Optional paramaters are not required by a request.
* @url The URL to fetch and analyze
* @return Result
*/
function pagespeedapiRunpagespeedExample($service, $url, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (url == null)
			throw new Exception("url is required.");
		// Make the request and return the results.
		return $service->pagespeedapi->RunpagespeedPagespeedapi($url, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>

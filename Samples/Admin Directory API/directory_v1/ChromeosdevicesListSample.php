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
// Unofficial sample for the directory directory_v1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: The Admin SDK Directory API lets you view and manage enterprise resources such as users and groups, administrative notifications, security features, and more.
// API Documentation Link https://developers.google.com/admin-sdk/directory/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/admin/directory_v1/rest
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
* $service = new Google_Service_Directory($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'maxResults' => '[YourValue]',  //Maximum number of results to return. Default is 100
            
  //'orderBy' => '[YourValue]',  //Column to use for sorting results
            
  //'orgUnitPath' => '[YourValue]',  //Full path of the organization unit or its Id
            
  //'pageToken' => '[YourValue]',  //Token to specify next page in the list
            
  //'projection' => '[YourValue]',  //Restrict information returned to a set of selected fields.
            
  //'query' => '[YourValue]',  //Search string in the format given at http://support.google.com/chromeos/a/bin/answer.py?hl=en&answer=1698333
            
  //'sortOrder' => '[YourValue]',  //Whether to return results in ascending or descending order. Only of use when orderBy is also used
  'fields' => '*'
);
// Single Request.
$results = chromeosdevicesListExample($service, $customerId, $optParams);

// Paginiation Example
do {
    if (!$results->getNextPageToken()) 
		break;

	$optParams['pageToken'] = $results->getNextPageToken();
	$results = filesListExample($service, $customerId, $optParams);	
} while($results->getNextPageToken());  

/**
* Retrieve all Chrome OS Devices of a customer (paginated)
* @service Authenticated Directory service.
* @optParams Optional paramaters are not required by a request.
* @customerId Immutable ID of the G Suite account
* @return ChromeOsDevices
*/
function chromeosdevicesListExample($service, $customerId, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (customerId == null)
			throw new Exception("customerId is required.");
		// Make the request and return the results.
		return $service->chromeosdevices->ListChromeosdevices($customerId, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>

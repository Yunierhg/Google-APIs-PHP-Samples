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
// Unofficial sample for the storage v1beta2 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Lets you store and retrieve potentially-large, immutable data objects.
// API Documentation Link https://developers.google.com/storage/docs/json_api/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/storage/v1beta2/rest
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
* $service = new Google_Service_Storage($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'delimiter' => '[YourValue]',  // Returns results in a directory-like mode. items will contain only objects whose names, aside from the prefix, do not contain delimiter. Objects whose names, aside from the prefix, contain delimiter will have their name, truncated after the delimiter, returned in prefixes. Duplicate prefixes are omitted.
            
  //'maxResults' => '[YourValue]',  // Maximum number of items plus prefixes to return. As duplicate prefixes are omitted, fewer total results may be returned than requested.
            
  //'pageToken' => '[YourValue]',  // A previously-returned page token representing part of the larger set of results to view.
            
  //'prefix' => '[YourValue]',  // Filter results to objects whose names begin with this prefix.
            
  //'projection' => '[YourValue]',  // Set of properties to return. Defaults to noAcl.
            
  //'versions' => '[YourValue]',  // If true, lists all versions of a file as distinct results.
  'fields' => '*'
);
// Single Request.
$results = objectsWatchAllExample($service, $bucket, $optParams);

// Paginiation Example
do {
    if (!$results->getNextPageToken()) 
		break;

	$optParams['pageToken'] = $results->getNextPageToken();
	$results = filesListExample($service, $bucket, $optParams);	
} while($results->getNextPageToken());  

/**
* Watch for changes on all objects in a bucket.
* @service Authenticated Storage service.
* @optParams Optional paramaters are not required by a request.
* @bucket Name of the bucket in which to look for objects.
* @return Channel
*/
function objectsWatchAllExample($service, $bucket, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (bucket == null)
			throw new Exception("bucket is required.");
		// Make the request and return the results.
		return $service->objects->WatchAllObjects($bucket, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>

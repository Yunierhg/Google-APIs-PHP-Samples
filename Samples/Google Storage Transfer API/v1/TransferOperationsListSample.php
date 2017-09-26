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
// Unofficial sample for the storagetransfer v1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Transfers data from external data sources to a Google Cloud Storage bucket or between Google Cloud Storage buckets.
// API Documentation Link https://cloud.google.com/storage/transfer
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/storagetransfer/v1/rest
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
* $service = new Google_Service_Storagetransfer($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'filter' => '[YourValue]',  //A list of query parameters specified as JSON text in the form of {\"project_id\" : \"my_project_id\", \"job_names\" : [\"jobid1\", \"jobid2\",...], \"operation_names\" : [\"opid1\", \"opid2\",...], \"transfer_statuses\":[\"status1\", \"status2\",...]}. Since `job_names`, `operation_names`, and `transfer_statuses` support multiple values, they must be specified with array notation. `job_names`, `operation_names`, and `transfer_statuses` are optional.
            
  //'pageToken' => '[YourValue]',  //The list page token.
            
  //'pageSize' => '[YourValue]',  //The list page size. The max allowed value is 256.
  'fields' => '*'
);
// Single Request.
$results = transferOperationsListExample($service, $name, $optParams);

// Paginiation Example
do {
    if (!$results->getNextPageToken()) 
		break;

	$optParams['pageToken'] = $results->getNextPageToken();
	$results = filesListExample($service, $name, $optParams);	
} while($results->getNextPageToken());  

/**
* Lists operations that match the specified filter in the request. If theserver doesn't support this method, it returns `UNIMPLEMENTED`.NOTE: the `name` binding allows API services to override the bindingto use different resource name schemes, such as `users/*/operations`. Tooverride the binding, API services can add a binding such as`"/v1/{name=users/*}/operations"` to their service configuration.For backwards compatibility, the default name includes the operationscollection id, however overriding users must ensure the name bindingis the parent resource, without the operations collection id.
* @service Authenticated Storagetransfer service.
* @optParams Optional paramaters are not required by a request.
* @name The value `transferOperations`.
* @return ListOperationsResponse
*/
function transferOperationsListExample($service, $name, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (name == null)
			throw new Exception("name is required.");
		// Make the request and return the results.
		return $service->transferOperations->ListTransferOperations($name, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>

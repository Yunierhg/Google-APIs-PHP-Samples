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
// Unofficial sample for the Logging v2 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Writes log entries and manages your Stackdriver Logging configuration.
// API Documentation Link https://cloud.google.com/logging/docs/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/logging/v2/rest
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
* $service = new Google_Service_Logging($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'updateMask' => '[YourValue]',  // Optional. Field mask that specifies the fields in sink that need an update. A sink field will be overwritten if, and only if, it is in the update mask. name and output only fields cannot be updated.An empty updateMask is temporarily treated as using the following mask for backwards compatibility purposes:  destination,filter,includeChildren At some point in the future, behavior will be removed and specifying an empty updateMask will be an error.For a detailed FieldMask definition, see https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmaskExample: updateMask=filter.
            
  //'uniqueWriterIdentity' => '[YourValue]',  // Optional. See sinks.create for a description of this field. When updating a sink, the effect of this field on the value of writer_identity in the updated sink depends on both the old and new values of this field:If the old and new values of this field are both false or both true, then there is no change to the sink's writer_identity.If the old value is false and the new value is true, then writer_identity is changed to a unique service account.It is an error if the old value is true and the new value is set to false or defaulted to false.
  'fields' => '*'
);
// Single Request.
$results = sinksUpdateExample($service, $sinkName, $optParams);


/**
* Updates a sink. This method replaces the following fields in the existing sink with values from the new sink: destination, and filter. The updated sink might also have a new writer_identity; see the unique_writer_identity field.
* @service Authenticated Logging service.
* @optParams Optional paramaters are not required by a request.
* @sinkName Required. The full resource name of the sink to update, including the parent resource and the sink identifier:
"projects/[PROJECT_ID]/sinks/[SINK_ID]"
"organizations/[ORGANIZATION_ID]/sinks/[SINK_ID]"
"billingAccounts/[BILLING_ACCOUNT_ID]/sinks/[SINK_ID]"
"folders/[FOLDER_ID]/sinks/[SINK_ID]"
Example: "projects/my-project-id/sinks/my-sink-id".
* @return LogSink
*/
function sinksUpdateExample($service, $sinkName, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (sinkName == null)
			throw new Exception("sinkName is required.");
		// Make the request and return the results.
		return $service->sinks->UpdateSinks($sinkName, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>

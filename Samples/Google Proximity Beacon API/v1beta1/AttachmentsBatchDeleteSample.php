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
// Unofficial sample for the proximitybeacon v1beta1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Registers, manages, indexes, and searches beacons.
// API Documentation Link https://developers.google.com/beacons/proximity/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/proximitybeacon/v1beta1/rest
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
* $service = new Google_Service_Proximitybeacon($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'namespacedType' => '[YourValue]',  // Specifies the namespace and type of attachments to delete in`namespace/type` format. Accepts `*/*` to specify"all types in all namespaces".Optional.
            
  //'projectId' => '[YourValue]',  // The project id to delete beacon attachments under. This field can beused when "*" is specified to mean all attachment namespaces. Projectsmay have multiple attachments with multiple namespaces. If "*" isspecified and the projectId string is empty, then the projectmaking the request is used.Optional.
  'fields' => '*'
);
// Single Request.
$results = attachmentsBatchDeleteExample($service, $beaconName, $optParams);


/**
* Deletes multiple attachments on a given beacon. This operation ispermanent and cannot be undone.You can optionally specify `namespacedType` to choose which attachmentsshould be deleted. If you do not specify `namespacedType`,  all yourattachments on the given beacon will be deleted. You also may explicitlyspecify `*/*` to delete all.Authenticate using an [OAuth access token](https://developers.google.com/identity/protocols/OAuth2)from a signed-in user with **Is owner** or **Can edit** permissions in theGoogle Developers Console project.
* @service Authenticated Proximitybeacon service.
* @optParams Optional paramaters are not required by a request.
* @beaconName The beacon whose attachments should be deleted. A beacon name has the
format "beacons/N!beaconId" where the beaconId is the base16 ID broadcast
by the beacon and N is a code for the beacon's type. Possible values are
`3` for Eddystone-UID, `4` for Eddystone-EID, `1` for iBeacon, or `5`
for AltBeacon. For Eddystone-EID beacons, you may use either the
current EID or the beacon's "stable" UID.
Required.
* @return DeleteAttachmentsResponse
*/
function attachmentsBatchDeleteExample($service, $beaconName, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (beaconName == null)
			throw new Exception("beaconName is required.");
		// Make the request and return the results.
		return $service->attachments->BatchDeleteAttachments($beaconName, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>

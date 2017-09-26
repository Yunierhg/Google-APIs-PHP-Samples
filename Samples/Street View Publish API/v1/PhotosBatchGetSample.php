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
// Unofficial sample for the Street View Publish v1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Publishes 360 photos to Google Maps, along with position, orientation, and connectivity metadata. Apps can offer an interface for positioning, connecting, and uploading user-generated Street View images.
// API Documentation Link https://developers.google.com/streetview/publish/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/streetviewpublish/v1/rest
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
* $service = new Google_Service_Streetviewpublish($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'photoIds' => '[YourValue]',  //Required. IDs of the Photos. For HTTPGET requests, the URL query parameter should be`photoIds=<id1>&photoIds=<id2>&...`.
            
  //'view' => '[YourValue]',  //Specifies if a download URL for the photo bytes should be returned in thePhoto response.
  'fields' => '*'
);
// Single Request.
$results = photosBatchGetExample($service, $optParams);


/**
* Gets the metadata of the specifiedPhoto batch.Note that ifBatchGetPhotosfails, either critical fields are missing or there was an authenticationerror. Even ifBatchGetPhotossucceeds, there may have been failures for single photos in the batch.These failures will be specified in eachPhotoResponse.statusinBatchGetPhotosResponse.results.SeeGetPhotofor specific failures that can occur per photo.
* @service Authenticated Streetviewpublish service.
* @optParams Optional paramaters are not required by a request.
* @return BatchGetPhotosResponse
*/
function photosBatchGetExample($service, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		// Make the request and return the results.
		return $service->photos->BatchGetPhotos($optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>

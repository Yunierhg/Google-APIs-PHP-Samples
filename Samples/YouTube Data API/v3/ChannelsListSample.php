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
// Unofficial sample for the YouTube v3 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Supports core YouTube features, such as uploading videos, creating and managing playlists, searching for content, and much more.
// API Documentation Link https://developers.google.com/youtube/v3
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/youtube/v3/rest
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
* $service = new Google_Service_Youtube($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'categoryId' => '[YourValue]',  // The categoryId parameter specifies a YouTube guide category, thereby requesting YouTube channels associated with that category.
            
  //'forUsername' => '[YourValue]',  // The forUsername parameter specifies a YouTube username, thereby requesting the channel associated with that username.
            
  //'hl' => '[YourValue]',  // The hl parameter should be used for filter out the properties that are not in the given language. Used for the brandingSettings part.
            
  //'id' => '[YourValue]',  // The id parameter specifies a comma-separated list of the YouTube channel ID(s) for the resource(s) that are being retrieved. In a channel resource, the id property specifies the channel's YouTube channel ID.
            
  //'managedByMe' => '[YourValue]',  // Note: This parameter is intended exclusively for YouTube content partners.Set this parameter's value to true to instruct the API to only return channels managed by the content owner that the onBehalfOfContentOwner parameter specifies. The user must be authenticated as a CMS account linked to the specified content owner and onBehalfOfContentOwner must be provided.
            
  //'maxResults' => '[YourValue]',  // The maxResults parameter specifies the maximum number of items that should be returned in the result set.
            
  //'mine' => '[YourValue]',  // Set this parameter's value to true to instruct the API to only return channels owned by the authenticated user.
            
  //'mySubscribers' => '[YourValue]',  // Use the subscriptions.list method and its mySubscribers parameter to retrieve a list of subscribers to the authenticated user's channel.
            
  //'onBehalfOfContentOwner' => '[YourValue]',  // Note: This parameter is intended exclusively for YouTube content partners.The onBehalfOfContentOwner parameter indicates that the request's authorization credentials identify a YouTube CMS user who is acting on behalf of the content owner specified in the parameter value. This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and get access to all their video and channel data, without having to provide authentication credentials for each individual channel. The CMS account that the user authenticates with must be linked to the specified YouTube content owner.
            
  //'pageToken' => '[YourValue]',  // The pageToken parameter identifies a specific page in the result set that should be returned. In an API response, the nextPageToken and prevPageToken properties identify other pages that could be retrieved.
  'fields' => '*'
);
// Single Request.
$results = channelsListExample($service, $part, $optParams);

// Paginiation Example
do {
    if (!$results->getNextPageToken()) 
		break;

	$optParams['pageToken'] = $results->getNextPageToken();
	$results = filesListExample($service, $part, $optParams);	
} while($results->getNextPageToken());  

/**
* Returns a collection of zero or more channel resources that match the request criteria.
* @service Authenticated Youtube service.
* @optParams Optional paramaters are not required by a request.
* @part The part parameter specifies a comma-separated list of one or more channel resource properties that the API response will include.

If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in a channel resource, the contentDetails property contains other properties, such as the uploads properties. As such, if you set part=contentDetails, the API response will also contain all of those nested properties.
* @return ChannelListResponse
*/
function channelsListExample($service, $part, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (part == null)
			throw new Exception("part is required.");
		// Make the request and return the results.
		return $service->channels->ListChannels($part, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>

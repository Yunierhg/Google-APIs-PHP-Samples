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
// Unofficial sample for the drive v3 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Manages files in Drive including uploading, downloading, searching, detecting changes, and updating sharing permissions.
// API Documentation Link https://developers.google.com/drive/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/drive/v3/rest
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
* $service = new Google_Service_Drive($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'includeCorpusRemovals' => '[YourValue]',  // Whether changes should include the file resource if the file is still accessible by the user at the time of the request, even when a file was removed from the list of changes and there will be no further change entries for this file.
            
  //'includeRemoved' => '[YourValue]',  // Whether to include changes indicating that items have been removed from the list of changes, for example by deletion or loss of access.
            
  //'includeTeamDriveItems' => '[YourValue]',  // Whether Team Drive files or changes should be included in results.
            
  //'pageSize' => '[YourValue]',  // The maximum number of changes to return per page.
            
  //'restrictToMyDrive' => '[YourValue]',  // Whether to restrict the results to changes inside the My Drive hierarchy. This omits changes to files such as those in the Application Data folder or shared files which have not been added to My Drive.
            
  //'spaces' => '[YourValue]',  // A comma-separated list of spaces to query within the user corpus. Supported values are 'drive', 'appDataFolder' and 'photos'.
            
  //'supportsTeamDrives' => '[YourValue]',  // Whether the requesting application supports Team Drives.
            
  //'teamDriveId' => '[YourValue]',  // The Team Drive from which changes will be returned. If specified the change IDs will be reflective of the Team Drive; use the combined Team Drive ID and change ID as an identifier.
  'fields' => '*'
);
// Single Request.
$results = changesWatchExample($service, $pageToken, $optParams);

// Paginiation Example
do {
    if (!$results->getNextPageToken()) 
		break;

	$optParams['pageToken'] = $results->getNextPageToken();
	$results = filesListExample($service, $pageToken, $optParams);	
} while($results->getNextPageToken());  

/**
* Subscribes to changes for a user.
* @service Authenticated Drive service.
* @optParams Optional paramaters are not required by a request.
* @pageToken The token for continuing a previous list request on the next page. This should be set to the value of 'nextPageToken' from the previous response or to the response from the getStartPageToken method.
* @return Channel
*/
function changesWatchExample($service, $pageToken, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (pageToken == null)
			throw new Exception("pageToken is required.");
		// Make the request and return the results.
		return $service->changes->WatchChanges($pageToken, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>

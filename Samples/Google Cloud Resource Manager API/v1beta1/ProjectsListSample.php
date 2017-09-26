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
// Unofficial sample for the Cloud Resource Manager v1beta1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: The Google Cloud Resource Manager API provides methods for creating, reading, and updating project metadata.
// API Documentation Link https://cloud.google.com/resource-manager
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/cloudresourcemanager/v1beta1/rest
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
* $service = new Google_Service_Cloudresourcemanager($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'filter' => '[YourValue]',  //An expression for filtering the results of the request.  Filter rules arecase insensitive. The fields eligible for filtering are:+ `name`+ `id`+ <code>labels.<em>key</em></code> where *key* is the name of a labelSome examples of using labels as filters:|Filter|Description||------|-----------||name:how*|The project's name starts with "how".||name:Howl|The project's name is `Howl` or `howl`.||name:HOWL|Equivalent to above.||NAME:howl|Equivalent to above.||labels.color:*|The project has the label `color`.||labels.color:red|The project's label `color` has the value `red`.||labels.color:red&nbsp;labels.size:big|The project's label `color` has the value `red` and its label `size` has the value `big`.If you specify a filter that has both `parent.type` and `parent.id`, thenthe `resourcemanager.projects.list` permission is checked on the parent.If the user has this permission, all projects under the parent will bereturned after remaining filters have been applied. If the user lacks thispermission, then all projects for which the user has the`resourcemanager.projects.get` permission will be returned after remainingfilters have been applied. If no filter is specified, the call will returnprojects for which the user has `resourcemanager.projects.get` permissions.Optional.
            
  //'pageToken' => '[YourValue]',  //A pagination token returned from a previous call to ListProjectsthat indicates from where listing should continue.Optional.
            
  //'pageSize' => '[YourValue]',  //The maximum number of Projects to return in the response.The server can return fewer Projects than requested.If unspecified, server picks an appropriate default.Optional.
  'fields' => '*'
);
// Single Request.
$results = projectsListExample($service, $optParams);

// Paginiation Example
do {
    if (!$results->getNextPageToken()) 
		break;

	$optParams['pageToken'] = $results->getNextPageToken();
	$results = filesListExample($service, $optParams);	
} while($results->getNextPageToken());  

/**
* Lists Projects that are visible to the user and satisfy thespecified filter. This method returns Projects in an unspecified order.New Projects do not necessarily appear at the end of the list.
* @service Authenticated Cloudresourcemanager service.
* @optParams Optional paramaters are not required by a request.
* @return ListProjectsResponse
*/
function projectsListExample($service, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		// Make the request and return the results.
		return $service->projects->ListProjects($optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>

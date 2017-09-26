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
// Unofficial sample for the Deployment Manager V2Beta v2beta API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: The Deployment Manager API allows users to declaratively configure, deploy and run complex solutions on the Google Cloud Platform.
// API Documentation Link https://developers.google.com/deployment-manager/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/deploymentmanager/v2beta/rest
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
* $service = new Google_Service_Deploymentmanagerv2beta($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'createPolicy' => '[YourValue]',  //Sets the policy to use for creating new resources.
            
  //'deletePolicy' => '[YourValue]',  //Sets the policy to use for deleting resources.
            
  //'preview' => '[YourValue]',  //If set to true, updates the deployment and creates and updates the "shell" resources but does not actually alter or instantiate these resources. This allows you to preview what your deployment will look like. You can use this intent to preview how an update would affect your deployment. You must provide a target.config with a configuration if this is set to true. After previewing a deployment, you can deploy your resources by making a request with the update() or you can cancelPreview() to remove the preview altogether. Note that the deployment will still exist after you cancel the preview and you must separately delete this deployment if you want to remove it.
  'fields' => '*'
);
// Single Request.
$results = deploymentsPatchExample($service, $project, $deployment, $optParams);


/**
* Updates a deployment and all of the resources described by the deployment manifest. This method supports patch semantics.
* @service Authenticated Deploymentmanagerv2beta service.
* @optParams Optional paramaters are not required by a request.
* @deployment The name of the deployment for this request.
* @project The project ID for this request.
* @return Operation
*/
function deploymentsPatchExample($service, $project, $deployment, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (deployment == null)
			throw new Exception("deployment is required.");
		if (project == null)
			throw new Exception("project is required.");
		// Make the request and return the results.
		return $service->deployments->PatchDeployments($project, $deployment, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>

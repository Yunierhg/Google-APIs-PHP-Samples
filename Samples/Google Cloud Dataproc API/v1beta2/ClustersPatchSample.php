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
// Unofficial sample for the dataproc v1beta2 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Manages Hadoop-based clusters and jobs on Google Cloud Platform.
// API Documentation Link https://cloud.google.com/dataproc/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/dataproc/v1beta2/rest
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
* $service = new Google_Service_Dataproc($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'gracefulDecommissionTimeout' => '[YourValue]',  // Optional. Timeout for graceful YARN decomissioning. Graceful decommissioning allows removing nodes from the cluster without interrupting jobs in progress. Timeout specifies how long to wait for jobs in progress to finish before forcefully removing nodes (and potentially interrupting jobs). Default timeout is 0 (for forceful decommission), and the maximum allowed timeout is 1 day.Only supported on Dataproc image versions 1.2 and higher.
            
  //'updateMask' => '[YourValue]',  // Required. Specifies the path, relative to <code>Cluster</code>, of the field to update. For example, to change the number of workers in a cluster to 5, the <code>update_mask</code> parameter would be specified as <code>config.worker_config.num_instances</code>, and the PATCH request body would specify the new value, as follows:{  "config":{    "workerConfig":{      "numInstances":"5"    }  }}Similarly, to change the number of preemptible workers in a cluster to 5, the <code>update_mask</code> parameter would be <code>config.secondary_worker_config.num_instances</code>, and the PATCH request body would be set as follows:{  "config":{    "secondaryWorkerConfig":{      "numInstances":"5"    }  }}<strong>Note:</strong> currently only some fields can be updated: |Mask|Purpose| |labels|Updates labels| |config.worker_config.num_instances|Resize primary worker group| |config.secondary_worker_config.num_instances|Resize secondary worker group|
  'fields' => '*'
);
// Single Request.
$results = clustersPatchExample($service, $projectId, $region, $clusterName, $optParams);


/**
* Updates a cluster in a project.
* @service Authenticated Dataproc service.
* @optParams Optional paramaters are not required by a request.
* @projectId Required. The ID of the Google Cloud Platform project the cluster belongs to.
* @region Required. The Cloud Dataproc region in which to handle the request.
* @clusterName Required. The cluster name.
* @return Operation
*/
function clustersPatchExample($service, $projectId, $region, $clusterName, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (projectId == null)
			throw new Exception("projectId is required.");
		if (region == null)
			throw new Exception("region is required.");
		if (clusterName == null)
			throw new Exception("clusterName is required.");
		// Make the request and return the results.
		return $service->clusters->PatchClusters($projectId, $region, $clusterName, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>

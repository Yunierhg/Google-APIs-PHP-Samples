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
// Unofficial sample for the classroom v1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Manages classes, rosters, and invitations in Google Classroom.
// API Documentation Link https://developers.google.com/classroom/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/classroom/v1/rest
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
* $service = new Google_Service_Classroom($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'pageToken' => '[YourValue]',  //nextPageTokenvalue returned from a previouslist call,indicating that the subsequent page of results should be returned.The list requestmust be otherwise identical to the one that resulted in this token.
            
  //'pageSize' => '[YourValue]',  //Maximum number of items to return. Zero or unspecified indicates that theserver may assign a maximum.The server may return fewer than the specified number of results.
            
  //'states' => '[YourValue]',  //Requested submission states. If specified, returned student submissionsmatch one of the specified submission states.
            
  //'userId' => '[YourValue]',  //Optional argument to restrict returned student work to those owned by thestudent with the specified identifier. The identifier can be one of thefollowing:* the numeric identifier for the user* the email address of the user* the string literal `"me"`, indicating the requesting user
            
  //'late' => '[YourValue]',  //Requested lateness value. If specified, returned student submissions arerestricted by the requested value.If unspecified, submissions are returned regardless of `late` value.
  'fields' => '*'
);
// Single Request.
$results = studentSubmissionsListExample($service, $courseId, $courseWorkId, $optParams);

// Paginiation Example
do {
    if (!$results->getNextPageToken()) 
		break;

	$optParams['pageToken'] = $results->getNextPageToken();
	$results = filesListExample($service, $courseId, $courseWorkId, $optParams);	
} while($results->getNextPageToken());  

/**
* Returns a list of student submissions that the requester is permitted toview, factoring in the OAuth scopes of the request.`-` may be specified as the `course_work_id` to include studentsubmissions for multiple course work items.Course students may only view their own work. Course teachersand domain administrators may view all student submissions.This method returns the following error codes:* `PERMISSION_DENIED` if the requesting user is not permitted to access therequested course or course work, or for access errors.* `INVALID_ARGUMENT` if the request is malformed.* `NOT_FOUND` if the requested course does not exist.
* @service Authenticated Classroom service.
* @optParams Optional paramaters are not required by a request.
* @courseWorkId Identifier of the student work to request.
This may be set to the string literal `"-"` to request student work for
all course work in the specified course.
* @courseId Identifier of the course.
This identifier can be either the Classroom-assigned identifier or an
alias.
* @return ListStudentSubmissionsResponse
*/
function studentSubmissionsListExample($service, $courseId, $courseWorkId, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (courseWorkId == null)
			throw new Exception("courseWorkId is required.");
		if (courseId == null)
			throw new Exception("courseId is required.");
		// Make the request and return the results.
		return $service->studentSubmissions->ListStudentSubmissions($courseId, $courseWorkId, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>

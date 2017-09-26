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
// Unofficial sample for the calendar v3 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Manipulates events and other calendar data.
// API Documentation Link https://developers.google.com/google-apps/calendar/firstapp
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest
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
* $service = new Google_Service_Calendar($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'alwaysIncludeEmail' => '[YourValue]',  //Whether to always include a value in the email field for the organizer, creator and attendees, even if no real email is available (i.e. a generated, non-working value will be provided). The use of this option is discouraged and should only be used by clients which cannot handle the absence of an email address value in the mentioned places. Optional. The default is False.
            
  //'iCalUID' => '[YourValue]',  //Specifies event ID in the iCalendar format to be included in the response. Optional.
            
  //'maxAttendees' => '[YourValue]',  //The maximum number of attendees to include in the response. If there are more than the specified number of attendees, only the participant is returned. Optional.
            
  //'maxResults' => '[YourValue]',  //Maximum number of events returned on one result page. The number of events in the resulting page may be less than this value, or none at all, even if there are more events matching the query. Incomplete pages can be detected by a non-empty nextPageToken field in the response. By default the value is 250 events. The page size can never be larger than 2500 events. Optional.
            
  //'orderBy' => '[YourValue]',  //The order of the events returned in the result. Optional. The default is an unspecified, stable order.
            
  //'pageToken' => '[YourValue]',  //Token specifying which result page to return. Optional.
            
  //'privateExtendedProperty' => '[YourValue]',  //Extended properties constraint specified as propertyName=value. Matches only private properties. This parameter might be repeated multiple times to return events that match all given constraints.
            
  //'q' => '[YourValue]',  //Free text search terms to find events that match these terms in any field, except for extended properties. Optional.
            
  //'sharedExtendedProperty' => '[YourValue]',  //Extended properties constraint specified as propertyName=value. Matches only shared properties. This parameter might be repeated multiple times to return events that match all given constraints.
            
  //'showDeleted' => '[YourValue]',  //Whether to include deleted events (with status equals "cancelled") in the result. Cancelled instances of recurring events (but not the underlying recurring event) will still be included if showDeleted and singleEvents are both False. If showDeleted and singleEvents are both True, only single instances of deleted events (but not the underlying recurring events) are returned. Optional. The default is False.
            
  //'showHiddenInvitations' => '[YourValue]',  //Whether to include hidden invitations in the result. Optional. The default is False.
            
  //'singleEvents' => '[YourValue]',  //Whether to expand recurring events into instances and only return single one-off events and instances of recurring events, but not the underlying recurring events themselves. Optional. The default is False.
            
  //'syncToken' => '[YourValue]',  //Token obtained from the nextSyncToken field returned on the last page of results from the previous list request. It makes the result of this list request contain only entries that have changed since then. All events deleted since the previous list request will always be in the result set and it is not allowed to set showDeleted to False.There are several query parameters that cannot be specified together with nextSyncToken to ensure consistency of the client state.These are: - iCalUID - orderBy - privateExtendedProperty - q - sharedExtendedProperty - timeMin - timeMax - updatedMin If the syncToken expires, the server will respond with a 410 GONE response code and the client should clear its storage and perform a full synchronization without any syncToken.Learn more about incremental synchronization.Optional. The default is to return all entries.
            
  //'timeMax' => '[YourValue]',  //Upper bound (exclusive) for an event's start time to filter by. Optional. The default is not to filter by start time. Must be an RFC3339 timestamp with mandatory time zone offset, e.g., 2011-06-03T10:00:00-07:00, 2011-06-03T10:00:00Z. Milliseconds may be provided but will be ignored. If timeMin is set, timeMax must be greater than timeMin.
            
  //'timeMin' => '[YourValue]',  //Lower bound (inclusive) for an event's end time to filter by. Optional. The default is not to filter by end time. Must be an RFC3339 timestamp with mandatory time zone offset, e.g., 2011-06-03T10:00:00-07:00, 2011-06-03T10:00:00Z. Milliseconds may be provided but will be ignored. If timeMax is set, timeMin must be smaller than timeMax.
            
  //'timeZone' => '[YourValue]',  //Time zone used in the response. Optional. The default is the time zone of the calendar.
            
  //'updatedMin' => '[YourValue]',  //Lower bound for an event's last modification time (as a RFC3339 timestamp) to filter by. When specified, entries deleted since this time will always be included regardless of showDeleted. Optional. The default is not to filter by last modification time.
  'fields' => '*'
);
// Single Request.
$results = eventsListExample($service, $calendarId, $optParams);

// Paginiation Example
do {
    if (!$results->getNextPageToken()) 
		break;

	$optParams['pageToken'] = $results->getNextPageToken();
	$results = filesListExample($service, $calendarId, $optParams);	
} while($results->getNextPageToken());  

/**
* Returns events on the specified calendar.
* @service Authenticated Calendar service.
* @optParams Optional paramaters are not required by a request.
* @calendarId Calendar identifier. To retrieve calendar IDs call the calendarList.list method. If you want to access the primary calendar of the currently logged in user, use the "primary" keyword.
* @return Events
*/
function eventsListExample($service, $calendarId, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (calendarId == null)
			throw new Exception("calendarId is required.");
		// Make the request and return the results.
		return $service->events->ListEvents($calendarId, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>

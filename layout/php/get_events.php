<?php
 
/* Base code provided by Sarah Bailey.
Case Western Reserve University, Cleveland OH.
Please do not email me for support. Post a comment instead.
Current v 1.1
Props to commenter Matt for pointing out the maxResults parameter.
*/
 
//TO DEBUG UNCOMMENT THESE LINES
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
 
//INCLUDE THE GOOGLE API PHP CLIENT LIBRARY FOUND HERE
//https://github.com/google/google-api-php-client
//DOWNLOAD IT AND PUT IT ON YOUR WEBSERVER IN THE ROOT FOLDER.
include(__DIR__.'/google-api-php-client/src/Google/autoload.php'); 
 
function compare($a, $b) {
    $t1 = strtotime($a->start->dateTime);
    $t2 = strtotime($b->start->dateTime);
    return $t1 - $t2;
}

 
//TELL GOOGLE WHAT WE'RE DOING
$client = new Google_Client();
$client->setApplicationName("BaltimoreWIT Calendar"); //DON'T THINK THIS MATTERS
$client->setDeveloperKey('AIzaSyD3-3QJsB-NP1bB4kyKFeq0eBHQUFZNNCM'); //GET AT AT DEVELOPERS.GOOGLE.COM
$cal = new Google_Service_Calendar($client);
//THE CALENDAR ID, FOUND IN CALENDAR SETTINGS. IF YOUR CALENDAR IS THROUGH GOOGLE APPS
//YOU MAY NEED TO CHANGE THE CENTRAL SHARING SETTINGS. THE CALENDAR FOR THIS SCRIPT
//MUST HAVE ALL EVENTS VIEWABLE IN SHARING SETTINGS.
$calendarId = 'kq0q82l48tj0k8hlvi024edolbdru4l9@import.calendar.google.com';

$calendarIds = array('baltimorewit@gmail.com',
                     'kq0q82l48tj0k8hlvi024edolbdru4l9@import.calendar.google.com',
                     'd9v9gjtsen6uqtcgfnnaaek09070ov1o@import.calendar.google.com',
                     '7jblfrr6pbtgc0j2issg5p1i9atj099a@import.calendar.google.com',
                     'je5b4bothch2k08pf9a8jbdrmqheveo8@import.calendar.google.com');
//TELL GOOGLE HOW WE WANT THE EVENTS
$params = array(
//CAN'T USE TIME MIN WITHOUT SINGLEEVENTS TURNED ON,
//IT SAYS TO TREAT RECURRING EVENTS AS SINGLE EVENTS
    'singleEvents' => true,
    'orderBy' => 'startTime',
    //'timeMin' => date(DateTime::ATOM),//ONLY PULL EVENTS STARTING TODAY
    'maxResults' => 7 //ONLY USE THIS IF YOU WANT TO LIMIT THE NUMBER
                  //OF EVENTS DISPLAYED
 
);
$allEvents = array();

try {
    foreach ($calendarIds as $id) {
        $currentEvents = $cal->events->listEvents($id, $params); 
        $allEvents = array_merge($allEvents, $currentEvents->getItems());
    }
} catch (Google_Service_Exception $ex) {
    //print_r($ex->getErrors());
}
//THIS IS WHERE WE ACTUALLY PUT THE RESULTS INTO A VAR
$events = $cal->events->listEvents($calendarId, $params); 
$calTimeZone = $events->timeZone; //GET THE TZ OF THE CALENDAR

//SET THE DEFAULT TIMEZONE SO PHP DOESN'T COMPLAIN. SET TO YOUR LOCAL TIME ZONE.
 date_default_timezone_set($calTimeZone);
 usort($allEvents, 'compare');
 $parsedEvents = array();
 $count = 0;
 //print_r($allEvents);
 //START THE LOOP TO LIST EVENTS
    //foreach ($events->getItems() as $event) {
    foreach ($allEvents as $event) {
 
        //Convert date to month and day
 
         $eventDateStr = $event->start->dateTime;
         if(empty($eventDateStr))
         {
             // it's an all day event
             $eventDateStr = $event->start->date;
         }
 
         $temp_timezone = $event->start->timeZone;
 //THIS OVERRIDES THE CALENDAR TIMEZONE IF THE EVENT HAS A SPECIAL TZ
         if (!empty($temp_timezone)) {
         $timezone = new DateTimeZone($temp_timezone); //GET THE TIME ZONE
                 //Set your default timezone in case your events don't have one
     } else { $timezone = new DateTimeZone($calTimeZone);
         }
 
        $eventdate = new DateTime($eventDateStr,$timezone);
        $link = $event->htmlLink;
        $TZlink = $link . "&ctz=" . $calTimeZone; //ADD TZ TO EVENT LINK
                                            //PREVENTS GOOGLE FROM DISPLAYING EVERYTHING IN GMT
        $newmonth = $eventdate->format("M");//CONVERT REGULAR EVENT DATE TO LEGIBLE MONTH
        $newday = $eventdate->format("j");//CONVERT REGULAR EVENT DATE TO LEGIBLE DAY

        $parsedEvents[$count]['month'] = $newmonth;
        $parsedEvents[$count]['day'] = $eventdate;
        $parsedEvents[$count]['title'] = $event->summary;
        $count++;
        //var_dump($event);
  }
  echo json_encode($parsedEvents);
?>
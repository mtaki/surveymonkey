PHP class for SurveyMonkey API
==============================


Basic usage
----
```
$SM = new SurveyMonkey("myApiKey" , "myAccessToken");
$result = $SM->getSurveyList();
if ($result["success"]) print_r( $result["data"]["surveys"] );
else print_r($result["message"]);   // Print out the error message
```

All methods return an array containing a **success** boolean, and the **data** -or- an error **message**

Advanced
----
```
$SM = new SurveyMonkey("myApiKey" , "myAccessToken", 
    array(  // Override default API options (quite useless at the moment)
        'protocol' => 'http',                       // will not work.. they require SSL
        'hostname' => 'fake-api.surveymonkey.net'   // will also not work..
    ), 
    array(  // CURL override options
        CURLOPT_SSL_VERIFYPEER => false     // Better add cacert.pam, no?
        // ...<Any CURLOPT>...
    )
);
$result = $SM->getSurveyList(array(
    "fields" => array(
        "title",
        "analysis_url",
        "date_created",
        "date_modified",
        "question_count",
        "num_responses"
    ),
    'page_size' => 50,
    'page' => 2
));
```

All methods
----

**getSurveyList**
```
/**
 * Retrieves a paged list of surveys in a user's account.
 * @see https://developer.surveymonkey.com/mashery/get_survey_list
 * @param array $params optional request array
 * @return array Result
 */
public function getSurveyList($params = array()){}
```

**getSurveyDetails**
```
/**
 * Retrieve a given survey's metadata.
 * @see https://developer.surveymonkey.com/mashery/get_survey_details
 * @param string $surveyId Survey ID
 * @return array Results
 */
public function getSurveyDetails($surveyId){}
```

**getCollectorList**
```
/**
 * Retrieves a paged list of collectors for a survey in a user's account.
 * @see https://developer.surveymonkey.com/mashery/get_collector_list
 * @param string $surveyId Survey ID
 * @param array $params optional request array
 * @return array Results
 */
public function getCollectorList($surveyId, $params = array()){}
```

**getRespondentList**
```
/**
 * Retrieves a paged list of respondents for a given survey and optionally collector
 * @see https://developer.surveymonkey.com/mashery/get_respondent_list
 * @param string $surveyId Survey ID
 * @param array $params optional request array
 * @return array Results
 */
public function getRespondentList($surveyId, $params = array()){}
```

**getResponses**
```
/**
 * Takes a list of respondent ids and returns the responses that correlate to them.
 * @see https://developer.surveymonkey.com/mashery/get_responses
 * @param string $surveyId Survey ID
 * @param array $respondentIds Array of respondents IDs to retrieve
 * @param integer $chunkSize optional number of respondants to fetch in each chunk. We split it to multiple requests to conform with SurveyMonkey's API limits.  If successful, the returned array is a joined array of all chunks.
 * @return array Results
 */
public function getResponses($surveyId, $respondentIds, $chunkSize = 100){}
```

**getResponseCount**
```
/**
 * Returns how many respondents have started and/or completed the survey for the given collector
 * @see https://developer.surveymonkey.com/mashery/get_response_counts
 * @param string $collectorId Collector ID
 * @return array Results
 */
public function getResponseCount($collectorId){}
```

API version
-----------
v2


Tests
-----
*TODO*


License
----
**No** rights reserved.  
*Do whatever you want with it,  It's free*

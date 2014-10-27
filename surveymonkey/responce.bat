
@echo off
For /f "tokens=2-4 delims=/ " %%a in ('date /t') do (set today=%%b_%%a_%%c)

set filename= %~dp0\survey\survey_responce_%today%


curl -H "Authorization:bearer paTBz61kMlD0mPWrsaHR3921EuYbHlBvqU0GDZQ.5nahBvB1GbdZpbh2WnOzXY4SVpYnLumRCmREhFZltiwlnDA6qHIyCzumQSIkSUIheoQ=" -H "Content-Type: application/json" https://api.surveymonkey.net/v2/surveys/get_responses?api_key=u366xz3zv6s9jje5mm3495fk --data-binary "{\"survey_id\": \"26983212\",\"respondent_ids\": [\"1791887265\",\"1794111454\",\"1794214690\",\"1794314726\"]}" > %filename%.json


php %~dp0\json-to-csv.php %filename%.json > %filename%.csv


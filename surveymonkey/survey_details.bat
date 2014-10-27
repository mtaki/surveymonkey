@echo off
For /f "tokens=2-4 delims=/ " %%a in ('date /t') do (set today=%%b_%%a_%%c)

set filename= %~dp0\survey\survey_%today%


curl -H "Authorization:bearer paTBz61kMlD0mPWrsaHR3921EuYbHlBvqU0GDZQ.5nahBvB1GbdZpbh2WnOzXY4SVpYnLumRCmREhFZltiwlnDA6qHIyCzumQSIkSUIheoQ=" -H "Content-Type: application/json" https://api.surveymonkey.net/v2/surveys/get_survey_details?api_key=kbkujw7j2h7tudrnqtsr4xzt --data-binary "{\"survey_id\": \"57070359\"}" > %filename%.json



php %~dp0\json-to-csv.php %filename%.json > %filename%.csv




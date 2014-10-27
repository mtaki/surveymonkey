<?php




		$headers = array('http'=>array('method'=>'GET','header'=>'Content: type=application/json \r\n'.'$agent \r\n'.'$hash'));
		$context=stream_context_create($headers);
		$str = file_get_contents("survey_id_53981823.json",FILE_USE_INCLUDE_PATH,$context);
		$str=utf8_encode($str);
		$str=json_decode($str,true);
		//print_r($str);
		//require("connection.php");
		$cmd = 'curl -H "Authorization:bearer paTBz61kMlD0mPWrsaHR3921EuYbHlBvqU0GDZQ.5nahBvB1GbdZpbh2WnOzXY4SVpYnLumRCmREhFZltiwlnDA6qHIyCzumQSIkSUIheoQ=" -H "Content-Type: application/json" https://api.surveymonkey.net/v2/surveys/get_responses?api_key=u366xz3zv6s9jje5mm3495fk --data-binary "{\"survey_id\": \"53981823\",\"respondent_ids\":';


			$array=[];
			$parameter="[";
			foreach($str as $key=>$value){
			$no=0;
			$respondents=$value["respondents"];
			for($i=0;$i<count($respondents); $i++){
				$respondent_id=$respondents[$i]["respondent_id"];
				//mysqli_query($con,"INSERT INTO respondent(respondent_id) VALUES($respondent_id)") OR DIE(mysqli_error());
				$parameter .= '\"'.$respondent_id.'\",';
				//echo $parameter;
			}

			}
			$parameter = substr($parameter,0,-1);
			$cmdline = $cmd.$parameter.']}"'." ".">"." "."responses.json";
			system($cmdline);

?>

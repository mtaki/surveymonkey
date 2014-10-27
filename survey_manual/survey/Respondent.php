<?php


		
	
		$headers = array('http'=>array('method'=>'GET','header'=>'Content: type=application/json \r\n'.'$agent \r\n'.'$hash'));
		$context=stream_context_create($headers);
		$str = file_get_contents("respondent_11_07_2014",FILE_USE_INCLUDE_PATH,$context);
		$str=utf8_encode($str);
		$str=json_decode($str,true);
		//print_r($str);
		require("connection.php");
		$delete=mysqli_query("delete from respondent") or die(mysqli_error());
		if($delete)
		echo "deleted";
	
			/*foreach($str as $key=>$value){
			$no=0;
			$respondents=$value["respondents"];
			for($i=0;$i<count($respondents); $i++){
				$respondent_id=$respondents[$i]["respondent_id"];

				$command->insert('respondent', array(
					'respondent_id'=>$respondent_id,
					//'survey_id'=>$survey_id,
					));
				
			}
			
			}*/
		
?>

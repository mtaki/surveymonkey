<?php

//$date=date('');
$headers = array('http'=>array('method'=>'GET','header'=>'Content: type=application/json \r\n'.'$agent \r\n'.'$hash'));

$context=stream_context_create($headers);

$str = file_get_contents("C:\wamp\www\surveymonkey\surveymonkey\survey\survey_list_11_07_2014.json",FILE_USE_INCLUDE_PATH,$context);
$str=utf8_encode($str);
$str=json_decode($str,true);
//print_r($str);


?>


<?php

foreach($str as $key=>$value){
$no=0;
foreach($value as $p=>$y){
//print_r($value["surveys"]);
//print_r($y);
foreach($y as $key1=>$data){
print_r($no++.": ".$data["title"]."=>".$data["survey_id"]);
echo"<br>";
}

 }

 
}

?>


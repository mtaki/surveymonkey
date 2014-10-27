<?php

//$file=file_get_contents("test.json");
$headers = array('http'=>array('method'=>'GET','header'=>'Content: type=application/json \r\n'.'$agent \r\n'.'$hash'));

$context=stream_context_create($headers);

$str = file_get_contents("test.json",FILE_USE_INCLUDE_PATH,$context);
$str1 = file_get_contents("responce.json",FILE_USE_INCLUDE_PATH,$context);

$str=utf8_encode($str);
$str1=utf8_encode($str1);

$str=json_decode($str,true);
$str1=json_decode($str1,true);

?>


<?php
$x=0;
foreach($str1 as $key=>$value){
$r=1;
$data=$value[0]["questions"];
for($i=0;$i<count($data)-1;$i++){
echo $r;
echo"|";
 echo $str1["data"][0]["respondent_id"];
 echo"|";
 echo $data[$i]["question_id"];
 echo"|";
 echo $data[$i]["answers"][$x]["row"];
  echo"</br>";
  $r=$r+1;
 }

 
}

?>


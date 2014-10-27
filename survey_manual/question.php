<?php
$headers = array('http'=>array('method'=>'GET','header'=>'Content: type=application/json \r\n'.'$agent \r\n'.'$hash'));
$context=stream_context_create($headers);
$str = file_get_contents("question.json",FILE_USE_INCLUDE_PATH,$context);
$str=utf8_encode($str);
$str=json_decode($str,true);
//print_r($str["data"]["title"]["text"]);
//print_r($str["data"]["pages"][0]["questions"][0]["heading"]);
//print_r($str["data"]["pages"][0]["questions"][0]["question_id"]);

//print_r($str["data"]["pages"][0]["questions"][0]["answers"][0]["text"]);
 echo"</br>";
 echo"</br>";
//print_r($str["data"]["pages"][0]["questions"][0]["answers"][1]["text"]);
 echo"</br>";
 echo"</br>";
//print_r($str["data"]["pages"][0]["questions"][0]["answers"][2]["text"]);



?>


<?php
$x=0;
$r=0;
foreach($str as $key=>$value){

//print_r($value["pages"][0]["questions"]);
$question=$value["pages"][0]["questions"];

foreach($question as $x1=>$y1){
$answers=$y1["answers"];
//$value["pages"][0]["questions"][$r]["answers"];
//print_r($y1["answers"]);
$r++;
echo $r;
print_r($y1["heading"]);
echo"</br>";
foreach($answers as $key=>$value){
print_r($value["answer_id"]."=>".$value["text"]);
echo"</br>";
}
}
//print_r($value["pages"][0]["questions"]);
//$question=$value["pages"][0]["questions"][0];
//$answer=$value["pages"][0]["questions"][$r]["answers"];
//$x++;
//foreach($answer as $ak=>$av){
//print_r($av);
//print_r($question["heading"]."-".$question["question_id"]);
//print_r($av["text"]."-".$av["answer_id"] );
//echo"</br>";
//}


 //echo"</br>";
//print_r($value["data"]["pages"][0]["questions"]);
//foreach($str["data"]["pages"][0]["questions"][$x] as $p=>$y){
//echo $r;
//echo"|";

//print_r($y);
//$x++;
 
//}
}

?>


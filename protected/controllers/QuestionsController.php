<?php

class QuestionsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Questions;


$headers = array('http'=>array('method'=>'GET','header'=>'Content: type=application/json \r\n'.'$agent \r\n'.'$hash'));
$context=stream_context_create($headers);

		$id=$_GET['id'];
		$survey_id='\"'.$id.'\"';
		$cmd1 = 'curl -H "Authorization:bearer paTBz61kMlD0mPWrsaHR3921EuYbHlBvqU0GDZQ.5nahBvB1GbdZpbh2WnOzXY4SVpYnLumRCmREhFZltiwlnDA6qHIyCzumQSIkSUIheoQ=" -H "Content-Type: application/json" https://api.surveymonkey.net/v2/surveys/get_survey_details?api_key=kbkujw7j2h7tudrnqtsr4xzt --data-binary "{\"survey_id\":'.$survey_id;
		$cmdline = $cmd1.'}"'." ".">"."C:\wamp\www\surveymonkey\data\survey/questions_survey_id_".$id.".json";
		system($cmdline);

		//echo $cmdline;
	
$str = file_get_contents("C:\wamp\www\surveymonkey\data\survey/questions_survey_id_".$id.".json",FILE_USE_INCLUDE_PATH,$context);
$str=utf8_encode($str);
$str=json_decode($str,true);
print_r($str['data']);
$command = Yii::app()->db->createCommand();
		foreach($str as $key=>$value){
					$no=0;
					
					
					//print_r($value);
					//echo 'the value'.count($value);
					
		for($i=1;$i<count($value);$i++){
		//echo "Namba".$i."\n";
		
	
		
		
		//$value["pages"][0]["questions"][$r]["answers"];
		//echo $i;
		//print_r($value["pages"][0]["questions"][1]["heading"]."=".$value["pages"][0]["questions"][1]["question_id"]);
		/*$survey_id=$_GET["id"];
		$question=$value["pages"][0]["questions"][$i]["heading"];
		$question_id=$value["pages"][0]["questions"][$i]["question_id"];
		echo $_GET["id"];
		echo $question;
		echo $question_id;*/
		
		/*$data=array(
					'survery_id'=>$survey_id,
					'questions_id'=>$question_id,
					'question'=>$question,
					);
					//print_r($data);
		$command->insert('questions',$data );
		print_r($survey_id.$question_id.$question);
		echo"</br>";
		$answers=($value["pages"][0]["questions"][$i]["answers"]);
		for($y=0;$y<count($answers);$y++){
		//print_r($value["pages"][0]["questions"][$i]["question_id"]."=>".$answers[$y]["answer_id"]."".$answers[$y]["text"]);
		$answer_id=$answers[$y]["answer_id"];
		$answer=$answers[$y]["text"];
		$command->insert('answers', array(
					'answer_id'=>$answer_id,
					'question_id'=>$question_id,
					'answer'=>$answer,
					));
		
		}*/
		
		
		
		}
		}
			
		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Questions']))
		{
			$model->attributes=$_POST['Questions'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Questions');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Questions('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Questions']))
			$model->attributes=$_GET['Questions'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Questions the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Questions::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Questions $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='questions-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

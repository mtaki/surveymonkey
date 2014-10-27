<?php

class RespondentController extends Controller
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
		$headers = array('http'=>array('method'=>'GET','header'=>'Content: type=application/json \r\n'.'$agent \r\n'.'$hash'));
		$context=stream_context_create($headers);
		
		$model=new Respondent;
		$id=$_GET['id'];
		$survey_id='\"'.$id.'\"';
		$cmd1 = 'curl -H "Authorization:bearer paTBz61kMlD0mPWrsaHR3921EuYbHlBvqU0GDZQ.5nahBvB1GbdZpbh2WnOzXY4SVpYnLumRCmREhFZltiwlnDA6qHIyCzumQSIkSUIheoQ=" -H "Content-Type: application/json" https://api.surveymonkey.net/v2/surveys/get_respondent_list?api_key=u366xz3zv6s9jje5mm3495fk --data-binary "{\"survey_id\":'.$survey_id;
		$cmdline = $cmd1.'}"'." ".">"."C:\wamp\www\surveymonkey\data\survey/respondent_survey_id_".$id.".json";
		system($cmdline);
		//echo $cmdline;
		//$survey="responces_survey_id_53981823.json";
		$str = file_get_contents("C:\wamp\www\surveymonkey\data\survey/respondent_survey_id_".$id.".json",FILE_USE_INCLUDE_PATH,$context);
		$str=utf8_encode($str);
		$str=json_decode($str,true);
		print_r($str);
	
	/*$command = Yii::app()->db->createCommand();
		
			foreach($str as $key=>$value){
			$no=0;
			$respondents=$value["respondents"];
			
			for($i=0;$i<count($respondents); $i++){
				$respondent_id=$respondents[$i]["respondent_id"];
				$params='[\"'.$respondent_id.'\"';
				$cmd = 'curl -H "Authorization:bearer paTBz61kMlD0mPWrsaHR3921EuYbHlBvqU0GDZQ.5nahBvB1GbdZpbh2WnOzXY4SVpYnLumRCmREhFZltiwlnDA6qHIyCzumQSIkSUIheoQ=" -H "Content-Type: application/json" https://api.surveymonkey.net/v2/surveys/get_responses?api_key=u366xz3zv6s9jje5mm3495fk --data-binary "{\"survey_id\":'.$survey_id.',\"respondent_ids\":';
				$cmdline1 = $cmd.$params.']}"'." ".">"." "."C:\wamp\www\surveymonkey\data\survey/responces_survey_id_".$respondent_id.".json";
				//echo $cmdline1;
				system($cmdline1);
				echo"<br>";
				echo"<br>";*/

				/*$command->insert('respondent', array(
					'respondent_id'=>$respondent_id,
					'respondentcol'=>$id,
					));*/
					
		$get_responce = file_get_contents("C:\wamp\www\surveymonkey\data\survey/responces_survey_id_".$respondent_id.".json",FILE_USE_INCLUDE_PATH,$context);
		$get_responce=utf8_encode($get_responce);
		$get_responce=json_decode($get_responce,true);
		$x=0;
		foreach($get_responce as $key=>$value){
		$r=1;
		$data=$value[0]["questions"];
		for($i=0;$i<count($data);$i++){
		$respondent_id=$get_responce["data"][0]["respondent_id"];
		 $question_id=$data[$i]["question_id"];
		 $answer_id= $data[$i]["answers"][$x]["row"];

		  $r=$r+1;
		  $command->insert('q_n_a', array(
							'respondent_id'=>$respondent_id,
							'question_id'=>$question_id,
							'answer_id'=>$answer_id,
							));
							}
							}
				
			}
			
			}
			
			
			//$parameter = substr($parameter,0,-1);
			//$cmdline1 = $cmd.$parameter.']}"'." ".">"." "."C:\wamp\www\surveymonkey\data\survey/responces_survey_id_".$id.".json";
			//system($cmdline1);
			//echo $cmdline1;	

			
		//$get_responce = file_get_contents("C:\wamp\www\surveymonkey\data\survey/responces_survey_id_".$id.".json",FILE_USE_INCLUDE_PATH,$context);
		//$get_responce=utf8_encode($get_responce);
		//$get_responce=json_decode($get_responce,true);


/**/




			
		

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

		if(isset($_POST['Respondent']))
		{
			$model->attributes=$_POST['Respondent'];
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
		$dataProvider=new CActiveDataProvider('Respondent');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Respondent('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Respondent']))
			$model->attributes=$_GET['Respondent'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Respondent the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Respondent::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Respondent $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='respondent-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

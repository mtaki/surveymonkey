<?php

class QNAController extends Controller
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
		$model=new QNA;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		$headers = array('http'=>array('method'=>'GET','header'=>'Content: type=application/json \r\n'.'$agent \r\n'.'$hash'));
		$context=stream_context_create($headers);
		$str = file_get_contents("survey_responce_11_07_2014.json",FILE_USE_INCLUDE_PATH,$context);
		$str=utf8_encode($str);
		$str=json_decode($str,true);
		
		$command = Yii::app()->db->createCommand();
			foreach($str as $key=>$value){
				for($y=0;$y<count($value);$y++){
				//print_r($value[$0]["respondent_id"]);
				for($i=0;$i<count($value[$y]["questions"]); $i++){
				
				$respondent_id=
				//print_r($value[$y]["respondent_id"]);
				//print_r($value[$y]["questions"][$i]["question_id"]."------".$value[$y]["respondent_id"]);
				$question=$value[$y]["questions"][$i]["question_id"];
				$answer=$value[$y]["questions"][$i]["answers"][0]["row"];
				//print_r($i++."|".$respondent_id.":".$question.": ".$answer);
				echo"<br>";
				echo"<br>";
				}
				
				}
				//print_r($key);
				//for($i=0;$i<count($value); $i++){
				//$respondent_id=$value[$i]["respondent_id"];
				
				//print_r($value[$i]["questions"][$i]["question_id"]);
				//echo"=";
				//print_r($value[$i]["questions"][$i]["answers"][0]["row"]);
				//echo"<br>";

				//$command->insert('respondent', array(
					//'respondent_id'=>$respondent_id,
					//'survey_id'=>$survey_id,
					//));
				
			//}
			
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

		if(isset($_POST['QNA']))
		{
			$model->attributes=$_POST['QNA'];
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
		$dataProvider=new CActiveDataProvider('QNA');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new QNA('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['QNA']))
			$model->attributes=$_GET['QNA'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return QNA the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=QNA::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param QNA $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='qna-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

<?php
/* @var $this RespondentController */
/* @var $model Respondent */

$this->breadcrumbs=array(
	'Respondents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Respondent', 'url'=>array('index')),
	array('label'=>'Manage Respondent', 'url'=>array('admin')),
);
?>

<h1>Create Respondent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
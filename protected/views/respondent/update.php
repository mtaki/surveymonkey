<?php
/* @var $this RespondentController */
/* @var $model Respondent */

$this->breadcrumbs=array(
	'Respondents'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Respondent', 'url'=>array('index')),
	array('label'=>'Create Respondent', 'url'=>array('create')),
	array('label'=>'View Respondent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Respondent', 'url'=>array('admin')),
);
?>

<h1>Update Respondent <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
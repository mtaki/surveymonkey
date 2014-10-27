<?php
/* @var $this RespondentController */
/* @var $model Respondent */

$this->breadcrumbs=array(
	'Respondents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Respondent', 'url'=>array('index')),
	array('label'=>'Create Respondent', 'url'=>array('create')),
	array('label'=>'Update Respondent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Respondent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Respondent', 'url'=>array('admin')),
);
?>

<h1>View Respondent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'respondent_id',
		'fullname',
		'msisdn',
		'residence',
		'respondentcol',
		'respondentcol1',
		'respondentcol2',
	),
)); ?>

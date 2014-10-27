<?php
/* @var $this AnswersController */
/* @var $model Answers */

$this->breadcrumbs=array(
	'Answers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Answers', 'url'=>array('index')),
	array('label'=>'Create Answers', 'url'=>array('create')),
	array('label'=>'Update Answers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Answers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Answers', 'url'=>array('admin')),
);
?>

<h1>View Answers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'answer_id',
		'answer',
		'question_id',
		'answerscol1',
		'answerscol2',
		'answerscol3',
	),
)); ?>

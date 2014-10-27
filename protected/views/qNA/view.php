<?php
/* @var $this QNAController */
/* @var $model QNA */

$this->breadcrumbs=array(
	'Qnas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List QNA', 'url'=>array('index')),
	array('label'=>'Create QNA', 'url'=>array('create')),
	array('label'=>'Update QNA', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete QNA', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage QNA', 'url'=>array('admin')),
);
?>

<h1>View QNA #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'question_id',
		'answer_id',
		'respondent_id',
		'q_n_acol',
		'q_n_acol1',
		'q_n_acol2',
	),
)); ?>

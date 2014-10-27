<?php
/* @var $this QNAController */
/* @var $model QNA */

$this->breadcrumbs=array(
	'Qnas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List QNA', 'url'=>array('index')),
	array('label'=>'Create QNA', 'url'=>array('create')),
	array('label'=>'View QNA', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage QNA', 'url'=>array('admin')),
);
?>

<h1>Update QNA <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this QNAController */
/* @var $model QNA */

$this->breadcrumbs=array(
	'Qnas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List QNA', 'url'=>array('index')),
	array('label'=>'Manage QNA', 'url'=>array('admin')),
);
?>

<h1>Create QNA</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
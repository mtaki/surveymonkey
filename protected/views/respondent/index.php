<?php
/* @var $this RespondentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Respondents',
);

$this->menu=array(
	array('label'=>'Create Respondent', 'url'=>array('create')),
	array('label'=>'Manage Respondent', 'url'=>array('admin')),
);
?>

<h1>Respondents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

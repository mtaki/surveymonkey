<?php
/* @var $this RespondentController */
/* @var $model Respondent */

$this->breadcrumbs=array(
	'Respondents'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Respondent', 'url'=>array('index')),
	array('label'=>'Create Respondent', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#respondent-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Respondents</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'respondent-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'respondentcol',
		'respondent_id',
		'fullname',
		'msisdn',
		'residence',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

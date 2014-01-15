<?php
/* @var $this BrainnieController */
/* @var $model Brainnie */

$this->breadcrumbs=array(
	'Brainnies'=>array('index'),
	$model->brainnie_id,
);

$this->menu=array(
	array('label'=>'List Brainnie', 'url'=>array('index')),
	array('label'=>'Create Brainnie', 'url'=>array('create')),
	array('label'=>'Update Brainnie', 'url'=>array('update', 'id'=>$model->brainnie_id)),
	array('label'=>'Delete Brainnie', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->brainnie_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Brainnie', 'url'=>array('admin')),
);
?>

<h1>View Brainnie #<?php echo $model->brainnie_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'brainnie_id',
		'email',
		'name_first',
		'name_last',
		'salt',
		'password',
		'time_create',
		'time_last_login',
		'brainnie_group_id',
	),
)); ?>

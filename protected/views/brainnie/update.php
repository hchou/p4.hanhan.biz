<?php
/* @var $this BrainnieController */
/* @var $model Brainnie */

$this->breadcrumbs=array(
	'Brainnies'=>array('index'),
	$model->brainnie_id=>array('view','id'=>$model->brainnie_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Brainnie', 'url'=>array('index')),
	array('label'=>'Create Brainnie', 'url'=>array('create')),
	array('label'=>'View Brainnie', 'url'=>array('view', 'id'=>$model->brainnie_id)),
	array('label'=>'Manage Brainnie', 'url'=>array('admin')),
);
?>

<h1>Update Brainnie <?php echo $model->brainnie_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
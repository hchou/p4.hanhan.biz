<?php
/* @var $this BrainnieController */
/* @var $model Brainnie */

$this->breadcrumbs=array(
	'Brainnies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Brainnie', 'url'=>array('index')),
	array('label'=>'Manage Brainnie', 'url'=>array('admin')),
);
?>

<h1>Create Brainnie</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
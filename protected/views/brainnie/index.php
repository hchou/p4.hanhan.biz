<?php
/* @var $this BrainnieController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Brainnies',
);

$this->menu=array(
	array('label'=>'Create Brainnie', 'url'=>array('create')),
	array('label'=>'Manage Brainnie', 'url'=>array('admin')),
);
?>

<h1>Brainnies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

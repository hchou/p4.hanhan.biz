<?php
/* @var $this BrainnieController */
/* @var $data Brainnie */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('brainnie_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->brainnie_id), array('view', 'id'=>$data->brainnie_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_first')); ?>:</b>
	<?php echo CHtml::encode($data->name_first); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_last')); ?>:</b>
	<?php echo CHtml::encode($data->name_last); ?>
	<br />

<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('salt')); ?>:</b>
	<?php echo CHtml::encode($data->salt); ?>
	<br />
-->

<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />
-->
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('time_create')); ?>:</b>
	<?php echo CHtml::encode($data->time_create); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('time_last_login')); ?>:</b>
	<?php echo CHtml::encode($data->time_last_login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brainnie_group_id')); ?>:</b>
	<?php echo CHtml::encode($data->brainnie_group_id); ?>
	<br />

	*/ ?>

</div>
<?php
/* @var $this BrainnieController */
/* @var $model Brainnie */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'brainnie-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_first'); ?>
		<?php echo $form->textField($model,'name_first',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_first'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_last'); ?>
		<?php echo $form->textField($model,'name_last',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_last'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salt'); ?>
		<?php echo $form->textField($model,'salt',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'salt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_create'); ?>
		<?php echo $form->textField($model,'time_create'); ?>
		<?php echo $form->error($model,'time_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_last_login'); ?>
		<?php echo $form->textField($model,'time_last_login'); ?>
		<?php echo $form->error($model,'time_last_login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'brainnie_group_id'); ?>
		<?php echo $form->textField($model,'brainnie_group_id'); ?>
		<?php echo $form->error($model,'brainnie_group_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
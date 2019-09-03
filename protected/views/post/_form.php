<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="card form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title', array(
			'size'=>60,
			'maxlength'=>255,
			'required' => true
		)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body', array(
			'rows' => 6,
			'cols' => 50,
			'required' => true
		)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'author'); ?>
		<?php echo $form->textField($model,'author', array(
			'size'=> 50,
			'maxlength'=> 50,
			'required' => true
		)); ?>
		<?php echo $form->error($model,'author'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		
		<?php echo $form->dropDownList($model, 'category_id', 
			CHtml::listData($categories, 'id', 'name'), array(
				'empty' => 'Selecione um Categoria',
				'required' => true
			)); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar', array(
			'class' => 'btn btn-primary',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
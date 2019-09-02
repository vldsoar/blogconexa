<div class="card form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'comment-form',
        'enableAjaxValidation'=>false,
    )); ?>

        <div class="row">
            <?php echo $form->labelEx($model, 'content'); ?>
            <?php echo $form->textField($model, 'content', array('size' => 60, 'maxlength'=>255 )); ?>
            <?php echo $form->error($model, 'content'); ?>
        </div>

        <div class="row buttons">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array(
                'class' => 'btn btn-primary',
            )); ?>
        </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<div class="container-posts">
	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider' 	=> $posts,
		'itemView'		=> '_post',
		'template'		=> '{items}{pager}'
	)); ?>
</div>

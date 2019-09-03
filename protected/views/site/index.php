<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="title">
	<h1>
		<i><?php echo CHtml::encode(Yii::app()->name); ?></i>
	</h1>
	<p>
		<small>Nós <b>crescemos</b> juntos!</small>
	</p>
</div>


<div class="container-posts">
	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider' 	=> $posts,
		'itemView'		=> '_post',
		'template'		=> '{items}{pager}'
	)); ?>
</div>

<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->breadcrumbs=array(
	'Categories'=>array('index'),
	'Create',
);

?>

<div class="container">
	<h1>Create Category</h1>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

	<?php 
		$this->menu=array(
			array('label'=>'List Category', 'url'=>array('index')),
			array('label'=>'Manage Category', 'url'=>array('admin')),
		);
	?>
</div>


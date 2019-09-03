<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Posts', 'url'=>array('index')),
	array('label'=>'Gerenciar Posts', 'url'=>array('admin')),
);
?>

<div class="container">
	<h1>Novo Post</h1>

	<?php echo $this->renderPartial('_form', array(
			'model' => $model,
			'categories' => $categories,
		)); 
	?>
</div>


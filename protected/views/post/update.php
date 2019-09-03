<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Posts', 'url'=>array('index')),
	array('label'=>'Criar Posts', 'url'=>array('create')),
	array('label'=>'Ver Posts', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Posts', 'url'=>array('admin')),
);
?>

<h1>Atualizar Posts <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'categories' => $categories)); ?>
<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->breadcrumbs=array(
	'Categories'=>array('index'),
	'Create',
);

?>

<div class="container">
	<h1>Criar Categoria</h1>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

	<div class="abc">
		<?php 
			$this->menu=array(
				array('label'=>'Listar Categorias', 'url'=>array('index')),
				array('label'=>'Gerenciar Categorias', 'url'=>array('admin')),
			);
		?>
	</div>
	
</div>


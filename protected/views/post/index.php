<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Artigos',
);

$this->menu=array(
	array('label'=>'Criar Post', 'url'=>array('create')),
	array('label'=>'Gerenciar Post', 'url'=>array('admin')),
);
?>


<div class="container-view-post">
	<h1>Artigos</h1>
	<div class="two-column">
		<div class="posts">
			<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider' => $dataProvider,
				'itemView' => '_view',
				'emptyText' => 'Não há publicações',
				'summaryText' => 'Mostrando {start}-{end} de um total de {count}'
			)); ?>
		</div>
		<div class="categories-col">
			<h3>Categorias</h3>
			<ul>
				<li><?php echo CHtml::link('Exibir Todos', array('post/index')); ?></li>
				<?php foreach($categories as $cat) : ?>
					<li
					  class="<?php echo isset($_GET['category_id']) && ($_GET['category_id'] == $cat->id) ? 
					  		'active' : '' ?>"
					>
						<?php echo CHtml::link(CHtml::encode($cat->name), array('index', 'category_id'=>$cat->id)) ?>
					</li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
	

</div>

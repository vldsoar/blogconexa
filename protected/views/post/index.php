<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Posts',
);

$this->menu=array(
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>


<div class="container-view-post">
	<h1>Posts</h1>
	<div class="two-column">
		<div class="posts">
			<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_view',
			)); ?>
		</div>
		<div class="categories-column">
			<h3>Categorias</h3>
			<ul>
				<?php foreach($categories as $cat) : ?>
					<li><?php echo CHtml::link(CHtml::encode($cat->name), array('index', 'category_id'=>$cat->id)) ?></li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
	

</div>

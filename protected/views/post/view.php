<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Artigos'=>array('index'),
	$model->title,
);

// $this->menu=array(
// 	array('label'=>'List Post', 'url'=>array('index')),
// 	array('label'=>'Create Post', 'url'=>array('create')),
// 	array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage Post', 'url'=>array('admin')),
// );
// ?>
<div class="container">
	<article class="view-post">
		<header>
			<h1><?php echo $model->title; ?></h1>
			<h4>
				Por <?php echo CHtml::encode($model->author) ?>
				<p>
					Publicado em <?php echo date('d/m/Y H:i:s', strtotime(CHtml::encode($model->created_at))) ?>
				</p>                
			</h4>
		</header>
		<p>
			<?php echo $model->body; ?>
		</p>
	</article>
	<hr />
	<div class="comments">
		<h3>Comentários</h3>
		<?php foreach ($comments as $comm) : ?>

		<div class="comment">
			<p><?php echo $comm->content ?></p>
			<small><?php echo $comm->created_at ?></small>
		</div>
		<?php endforeach ?>

		<?php echo $this->renderPartial('_form-comment', array(
			'model' => $comment,
		)); ?>
		
	</div>
</div>



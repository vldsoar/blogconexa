<?php
/* @var $this PostController */
/* @var $data Post */
?>


<div class="card card__post">
	<div class="item">
		<div class="thumb"
			style="background-image: url(https://conexa.app/wp-content/uploads/2019/03/img.png)">
		</div>
		<article>
			<h1><?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id)); ?></h1>
			<small><?php echo CHtml::encode($data->category->name) ?></small>
			<p><?php echo truncate(CHtml::encode($data->body), 150, '...', false) ?></p>
			<?php echo CHtml::link('Ver Mais', array('view', 'id'=>$data->id), array('class' => 'btn btn-primary')); ?>
			
			<span>
				Por <b><?php echo CHtml::encode($data->author) ?> </b> |
				<?php echo date('d/m/Y', strtotime(CHtml::encode($data->created_at))) ?>
			</span>
			
		</article>
	</div>
</div>
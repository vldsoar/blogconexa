<div class="item-<?php echo $index + 1 ?>">
    <div class="card">
        <div class="thumb"
            style="background-image: url(https://conexa.app/wp-content/uploads/2019/07/photo-1523908511403-7fc7b25592f4-1080x675.jpeg)">
        </div>
        <article>
            <h1><?php echo CHtml::encode($data->title); ?></h1>
            <p><?php echo truncate(CHtml::encode($data->body), 150, '...', false) ?></p>
            <?php echo CHtml::link('Ver Mais', array('post/view', 'id'=>$data->id), array('class' => 'btn btn-primary')); ?>
            
            <span>
                Por <b><?php echo CHtml::encode($data->author) ?> </b> |
                <?php echo date('d/m/Y', strtotime(CHtml::encode($data->created_at))) ?>
            </span>
            
        </article>
    </div>
</div>

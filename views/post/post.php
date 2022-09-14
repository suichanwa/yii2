<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Post;

/** @var yii\web\View $this */
/** @var app\models\Post $model */
/** @var ActiveForm $form */
?>
<div class="post-post">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'post_id') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>
</div><!-- post-post -->

<div>
    <?php
        
    
    ?>
</div>

<?php
use yii\helpers\Url;
use yii\helpers\Html;

/** @var yii\web\View $this */
$this->title = 'My Yii Application';
$login = 'name';
?>


<div class="site-index">
    <div class="body-content">
        <h3>Something</h3> 

        <?= Html::a('linkname', ['site/about', 'alias' => 'site/about']); ?>
        <?= Html::tag('p', Html::encode($login), ['class' => 'btn btn-primary']);?>
        <?= Html::a('link', ['site/logout'], ['class' => 'btn btn-default']);?>

        <h3>currnet url</h3>
        <?= Url::previous()?>

        <?php
            if (Yii::$app->user->isGuest) {
                echo Html::a('login', ['site/login'], ['class' => 'btn btn-default']);
            } 
            else {
                echo Html::a('about', ['site/about'], ['class' => 'btn btn-default']);
            }
        ?>

    </div>
</div>

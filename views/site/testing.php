<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = "login";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1> <?= Html::encode($title) ?> </h1>

        <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'username') ?>
            <?= $form->field($model, 'password')->passwordInput() ?>
            <?= Html::submitButton('Login') ?>
        <?php ActiveForm::end(); ?>

    </div>
</body>
</html>
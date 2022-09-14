<?php
use yii\helpers\Html;
use kartik\icons\Icon;

$title = 'page';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= Html::a('Document', 'Document', ['class' => 'btn btn-primary']) ?>;

    <span>
        <?= Html::encode($this->title) ?>

        
    </span>

</body>
</html>
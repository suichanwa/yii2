<?php

use Codeception\Verify\Verifiers\VerifyJsonString;
use yii\helpers\Html;
use yii\web\JsonParser;
use kartik\icons\Icon;
use yii\helpers\Json;

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

    <?php
    
    $json_paring = file_get_contents('C:\Users\1111\basic\views\post\people.json');
    $json_decode = json_decode($json_paring, true);

    $json_dec = Json::decode($json_paring, true);

    if (empty($json_decode)) {
        return false;
    } else {
        return Json::decode($json_paring, true);
    }

    ?>

</body>
</html>
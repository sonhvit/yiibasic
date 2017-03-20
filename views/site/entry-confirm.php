<?php
use yii\helpers\Html;

?>
<p>Bạn đã nhập với những thông tin như sau:</p>
<ul>
    <li>
        <lable>Name</lable>
        : <?= Html::encode($model->name) ?></li>
    <li>
        <lable>Email</lable>
        : <?= Html::encode($model->email) ?></li>
</ul>

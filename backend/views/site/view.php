<?php
use yii\helpers\Url;
?>

<div class="container-fluid container-fixed-lg">
    <div class="row">
        <h2>Карточка объекта</h2>
        <div class="col-md-8">
            <table class="table table-responsive" id="basicTable">
                <tbody>
                <tr><td>ID.</td><td><?= $model->id ?></td></tr>
                <tr><td>Имя.</td><td><?= $model->name ?></td></tr>
                <tr><td>Контакты.</td><td><?= $model->contacts ?></td></tr>
                <tr><td>Тема.</td><td><?= $model->theme ?></td></tr>
                <tr><td>Текст.</td><td><?= $model->text ?></td></tr>
                <tr><td>Дата и время отправки.</td><td><?= $model->created_at ?></td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


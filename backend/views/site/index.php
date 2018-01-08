<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use yii\helpers\Url;
use yii\web\JsExpression;
?>
<div class="table">
    <?= GridView::widget(
        [
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'emptyText' =>  Html::tag('div', 'Ничего не найдено.',['class' => 'alert alert-danger row']).
                Html::tag('a', 'Очистить поиск', ['class' => 'btn btn-danger', 'href' => Yii::$app->urlManager->createUrl(['site/index'])]),
            'columns'=>[

                [
                    'label' => 'ID',
                    'attribute' => 'id',
                ],
                [
                    'label' => "Имя",
                    'attribute' => 'name',
                    'format' => 'raw'
                ],
                [
                    'label' => "Контакты",
                    'attribute' => 'contacts',
                    'format' => 'raw'
                ],
                [
                    'label' => "Тема",
                    'attribute' => 'theme',
                    'format' => 'raw'
                ],
                [
                    'label' => "Текст",
                    'contentOptions' => ['style' => 'text-overflow: ellipsis;white-space: nowrap;overflow: hidden;max-width: 100px;'],
                    'attribute' => 'text',
                    'format' => 'raw'
                ],
                [
                    'label' => "Дата и время отправки",
                    'attribute' => 'created_at',
                    'format' => 'raw'
                ],


                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{view} {delete}',
                    'buttons' => [
                        'view' => function ($url) {
                            return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, ['target' => '_blank']);
                        },
                        'delete' => function ($url) {
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url);
                        }

                    ],
                    'urlCreator' => function ($action, $model, $key, $index) {
                        if ($action === 'view') {
                            $url ='/admin/site/view?id='.$model->id;
                            return $url;
                        }
                        if ($action === 'delete') {
                            $url ='/admin/site/delete?id='.$model->id;
                            return $url;
                        }

                    }
                ],
            ],
        ]
    );?>

</div>
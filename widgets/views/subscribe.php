<?php

use yii\helpers\Html;
use yii\widgets\Pjax;

?>
<div class="col-md-6">
    <?php Pjax::begin(); ?>
    <?= Html::beginForm(['/default/subscribe'], 'post', ['data-pjax' => '', 'class' => 'form-inline']); ?>
    <?= Html::input('text', 'email', '', ['class' => 'form-control']) ?>
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    <?= Html::endForm() ?>
    <p><?= $message ?></p>
    <?php Pjax::end(); ?>
</div>
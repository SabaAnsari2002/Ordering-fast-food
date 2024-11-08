<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'ورود';
?>

<h1>ورود</h1>

<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger">
        <?= Yii::$app->session->getFlash('error') ?>
    </div>
<?php endif; ?>

<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'username') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <div class="form-group">
        <?= Html::submitButton('ورود', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>

<p>ثبت‌نام نکرده‌اید؟ <?= Html::a('ثبت‌نام کنید', ['site/signup']) ?></p>

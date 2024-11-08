<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'ثبت‌نام';
?>

<h1>ثبت‌نام</h1>

<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'username') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <div class="form-group">
        <?= Html::submitButton('ثبت‌نام', ['class' => 'btn btn-success']) ?>
    </div>
<?php ActiveForm::end(); ?>

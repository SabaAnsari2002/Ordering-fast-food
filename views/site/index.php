<?php
use yii\helpers\Html;

$this->title = 'صفحه هوم';
?>

<h1>Home</h1>

<?php if (Yii::$app->session->hasFlash('success')): ?>
    <!-- <div class="alert alert-success">
        <?= Yii::$app->session->getFlash('success') ?>
    </div> -->
<?php endif; ?>

<?php if (Yii::$app->user->isGuest): ?>
    <p>شما وارد نشده‌اید. لطفاً وارد شوید یا ثبت‌نام کنید.</p>
<?php else: ?>
    <p>خوش آمدید، <?= Html::encode(Yii::$app->user->identity->username) ?></p>
<?php endif; ?>

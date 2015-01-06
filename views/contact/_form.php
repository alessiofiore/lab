<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contact */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'company')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'phone_home')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'phone_work')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'mobile2')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'email_personal')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'email_work')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'address_home')->textInput(['maxlength' => 80]) ?>

    <?= $form->field($model, 'address_work')->textInput(['maxlength' => 80]) ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

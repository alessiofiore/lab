<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contact */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
<div class="col-lg-5">         

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

    <?= $form->field($model, 'email_personal')->input('email') ?>

    <?= $form->field($model, 'email_work')->input('email') ?>

    <?= $form->field($model, 'address_home')->textInput(['maxlength' => 80]) ?>

    <?= $form->field($model, 'address_work')->textInput(['maxlength' => 80]) ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

</div>

<div class="col-lg-4">
  	<label class="control-label">Tags:</label><br />
	<input type="tag" id="tagForm" size="10" class="form-control"><input type="button" id="tagButton" value="Add">
	<div id="taglist"></div>
</div>

<?php ActiveForm::end(); ?>

<script type="text/javascript">

	jQuery('#tagButton').click(function() {
		  alert( "Handler for .click() called." );
		});
</script>



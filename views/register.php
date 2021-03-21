
<?php
/** @var $model \thecodeholic\phpmvc\Model */

use app\core\Forms\Form;

$form = new Form();
?>

<h1>Register</h1>

<?php $form = Form::begin('', 'post')?>
    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'roles') ?>
    <?= $form->field($model, 'password')->passwordField() ?>
    <?= $form->field($model, 'passwordConfirm')->passwordField() ?>
    <button class="btn btn-success">Submit</button>
<?php Form::end()?>
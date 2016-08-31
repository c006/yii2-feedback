<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/** @var $model c006\feedback\models\Feedback */
?>

<style>

    #feedback {
        color  : #666666;
        cursor : pointer;
        }

    #feedback:hover {
        color : #00A0DF;
        }

    #container-feedback {
        display    : none;
        position   : absolute;
        top        : 0;
        left       : 0;
        width      : 100%;
        height     : 100vh;
        background : rgba(0, 0, 0, 0.84);
        }

    #container-feedback > .table {
        margin : 0 auto;
        }
</style>


<div id="container-feedback">
    <div class="width-50 table">
        <div class="table-cell">
            <div class="item-container">
                <?php $form = ActiveForm::begin(['id' => 'form-' . time()]); ?>

                <?= $form->field($model, 'name')->textInput(['placeholder' => 'optional']) ?>
                <?= $form->field($model, 'email')->textInput(['placeholder' => 'optional']) ?>
                <?= $form->field($model, 'comment')->textarea(['placeholder' => 'Enter comment']) ?>

                <div class="form-group">
                    <?= Html::SubmitButton('Send', ['class' => 'btn btn-primary', 'name' => 'button-feedback']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>


<script>
    jQuery(function () {
        jQuery('#feedback').click(function () {
            var _container = jQuery('#container-feedback');
            _container.find('> .table').css({marginTop: ((window.innerHeight * 0.4) )});
            _container.show();

            _container.find('.item-container').click(function (event) {
                event.stopPropagation();
            });

            _container.click(function () {
                jQuery(this).hide();
            });
        });
    });
</script>
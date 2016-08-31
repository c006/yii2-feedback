<?php
namespace c006\feedback;

use c006\alerts\Alerts;
use c006\core\assets\CoreHelper;
use c006\feedback\models\Feedback;
use Yii;
use yii\bootstrap\Widget;

/**
 * Class WidgetFeedback
 *
 * @package c006\WidgetFeedback
 */
class WidgetFeedback extends Widget
{
    function init()
    {

        if (isset($_POST['Feedback'])) {
            $post = $_POST['Feedback'];
            $model = new Feedback();
            $model->name = $post['name'];
            $model->email = $post['email'];
            $model->comment = $post['comment'];
            $model->timestamp = time();

            if (!$model->validate() || !$model->save()) {
                echo $model->tableName() . "<BR><BR>";
                echo print_r($model->attributes) . "<BR><BR>";
                die(print_r($model->errors));
            }

            if (class_exists('\\c006\\alerts\\Alerts')) {
                Alerts::setAlertType(Alerts::ALERT_SUCCESS);
                Alerts::setMessage("Thank you for your input!");
                Alerts::setCountdown(5);
            }
        }

    }

    function run()
    {
        $model = new Feedback();

        return $this->render('feedback', [
            'model' => $model,
        ]);
    }


}

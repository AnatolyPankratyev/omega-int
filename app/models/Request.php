<?php


namespace app\models;

use project\App;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;

class Request extends AppModel
{
    public $attributes = [
        'name' => '',
        'tel' => '',
        'email' => '',
        'type_product' => '',
        'type_cover' => '',
        'sqm' => '',
        'note' => '',
        'adv1' => '',
        'adv2' => '',
        'adv3' => '',
        'adv4' => '',
        'adv5' => '',
        'adv6' => '',
        'adv7' => '',
    ];


    public static function saveRequest($request) {
        $data = $_POST;
        $request->load($data);
        isset($_POST['adv1']) == true ? $request->attributes['adv1'] = 1 : $request->attributes['adv1'] = 0;
        isset($_POST['adv2']) == true ? $request->attributes['adv2'] = 1 : $request->attributes['adv2'] = 0;
        isset($_POST['adv3']) == true ? $request->attributes['adv3'] = 1 : $request->attributes['adv3'] = 0;
        isset($_POST['adv4']) == true ? $request->attributes['adv4'] = 1 : $request->attributes['adv4'] = 0;
        isset($_POST['adv5']) == true ? $request->attributes['adv5'] = 1 : $request->attributes['adv5'] = 0;
        isset($_POST['adv6']) == true ? $request->attributes['adv6'] = 1 : $request->attributes['adv6'] = 0;
        isset($_POST['adv7']) == true ? $request->attributes['adv7'] = 1 : $request->attributes['adv7'] = 0;
        if($request->save('some')){
            $_SESSION['success'] = 'Ваша заявка успешно зарегистрирована';
        }else{
            $_SESSION['error'] = 'Ошибка!';
        }
    }

    public static function mailRequest($user_email) {
        // Create the Transport
        $transport = (new Swift_SmtpTransport(App::$app->getProperty('smtp_host'), App::$app->getProperty('smtp_port'), App::$app->getProperty('smtp_protocol')))
            ->setUsername(App::$app->getProperty('smtp_login'))
            ->setPassword(App::$app->getProperty('smtp_password'));

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);

        // Create a message
        ob_start();
        require APP . '/views/mail/mail_client.php';
        $body_client = ob_get_clean();

        $message_client = (new Swift_Message("Вы оставили заявку на сайте " . App::$app->getProperty('project_name')))
            ->setFrom([App::$app->getProperty('smtp_login') => App::$app->getProperty('project_name')])
            ->setTo($user_email)
            ->setBody($body_client, 'text/html');
        $result = $mailer->send($message_client);

        ob_start();
        require APP . '/views/mail/mail_admin.php';
        $body_admin = ob_get_clean();
        $message_admin = (new Swift_Message("Заявка"))
            ->setFrom([App::$app->getProperty('smtp_login') => App::$app->getProperty('project_name')])
            ->setTo(App::$app->getProperty('admin_email'))
            ->setBody($body_admin, 'text/html');
        $result = $mailer->send($message_admin);
        redirect(PATH . '/main/thanks');
    }
}
<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use CURLFile;
use Illuminate\Http\Request;
use App\Add;
use App\Pupel;
use App\Work;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index()
    {

        return view('welcome');
    }

    public function addZ(Request $request)
    {
//        $token = "488563867:AAG9nVWor6z6sRa2eScsFZo3Dm52HsV9YRc";
//        $chat_id = "-230841099";
//
//        $arr = array("имя пользователя: " => $addZ->name,
//                     "Эмейл:"   => $addZ->email,
//                     "Телефон:"   =>  $addZ->phone
//                     );
//        $txt = '';
//        foreach ($arr as $key=>$value){
//        $txt =  $txt."<b>".$key."</b> ".$value."%0A";
//        };
//
//        $sendTelega = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text= {$txt} ", "r");

        $token = "488563867:AAG9nVWor6z6sRa2eScsFZo3Dm52HsV9YRc";
        $chat_id = "-230841099";
        $arr = array(
            'Имя пользователя: ' => $name = $request->input('name1'),
            'Телефон: ' => $phone = $request->input('phone1'),
            'Майл: ' => $email = $request->input('email1')
        );
        $txt='КОНТАКТЫ %0A';
        foreach($arr as $key => $value) {
            $txt .= "<b>".$key."</b>".$value."%0A";
        };

        $sendToTelegram = file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}");

        $addZ= new Add;
        $addZ->name = $request->input('name1');
        $addZ->email = $request->input('email1');
        $addZ->phone = $request->input('phone1');
        $addZ->save();

        return redirect('/');
    }

    public function puples(Request $request)
    {
        $puple= new Pupel;
        $puple->name = $request->input('reg_name');
        $puple->email = $request->input('reg_mail');
        $puple->phone = $request->input('reg_tel');
        $puple->save();

        $token = "488563867:AAG9nVWor6z6sRa2eScsFZo3Dm52HsV9YRc";
        $chat_id = "-230841099";
        $arr1 = array(
            'Имя пользователя: ' => $name = $request->input('reg_name'),
            'Телефон: ' => $phone = $request->input('reg_tel'),
            'Майл: ' => $email = $request->input('reg_mail'),
        );
        $txt="УЗНАТЬ ПОДРОБНОСТИ %0A";
        foreach($arr1 as $key => $value) {
            $txt .= "<b>".$key."</b>".$value."%0A";
        };

        $sendToTelegram = file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}");

        return redirect('/') ;
    }

    public function sendme(Request $request)
    {
        $token = "488563867:AAG9nVWor6z6sRa2eScsFZo3Dm52HsV9YRc";
        $chat_id = "-230841099";
        $arr1 = array(
            'Имя пользователя: ' => $name = $request->input('Sname'),
            'Телефон: ' => $phone = $request->input('Sphone'),
            'Майл: ' => $email = $request->input('Semail'),
        );
        $txt="СВЯЖИТЕСЬ СО МНОЙ %0A";
        foreach($arr1 as $key => $value) {
            $txt .= "<b>".$key."</b>".$value."%0A";
        };

        $sendToTelegram = file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}");

        return redirect('/') ;
    }
}



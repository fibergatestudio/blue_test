<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CaptchaController extends Controller
{
    public function create_captcha(){
         
        $captcha_string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
        $captcha_string = substr(str_shuffle($captcha_string), 0, 6);
        session(['captcha_code' => $captcha_string]);
        $image = imagecreatefrompng(asset('captcha-img/background.png'));
        $captcha_text_color = imagecolorallocate($image, 30, 60, 158);
        imagestring($image, 5, 40, 15, $captcha_string, $captcha_text_color);
        header("Content-Type: image/png"); 
        imagepng($image);
        
    }

    public function verify_captcha(Request $request){
        if (trim(session("captcha_code")) === trim($request->captcha)) {
            return 'true';
        } 
        else {
            return 'false';
        }
    }
}

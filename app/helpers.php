<?php

// function send_message($phone, $message)
// {
//     $curl = curl_init();
//     $phone = bntoen($phone);
//     $message = str_replace(" ", "%20", $message);
//     curl_setopt_array($curl, array(
//         CURLOPT_RETURNTRANSFER => 1,
//         CURLOPT_URL => "http://202.4.124.22:13013/cgi-bin/sendsms?username=tester&password=foobar&charset=utf-8&coding=2&to=$phone&text=$message"
//     ));
//     $result = curl_exec($curl);

//     curl_close($curl);

//     return $result;
// }

function entobn($string)
{
    $engDATE = [
        '1','2','3','4','5','6','7','8','9','0','January','February','March','April','May','June','July','August','September','October','November','December','Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec','Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Sat','Sun','Mon','Tue','Wed','Thu','Fri', 'hours', 'hour', 'minutes', 'minute', 'seconds', 'second', 'days', 'day', 'months', 'month',  'years', 'year', 'weeks', 'week', 'ago', "am", "AM", "pm", "PM"
    ];

    $bangDATE = [
        '১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
    বুধবার','বৃহস্পতিবার','শুক্রবার','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
    বুধবার','বৃহস্পতিবার','শুক্রবার', 'ঘণ্টা', 'ঘণ্টা', 'মিনিট', 'মিনিট', 'সেকেন্ড', 'সেকেন্ড', 'দিন', 'দিন', 'মাস', 'মাস', 'বছর', 'বছর', 'সপ্তাহ', 'সপ্তাহ', ' পূর্বে', 'সকাল', 'সকাল', 'বিকাল', 'বিকাল'
    ];

    return str_replace($bangDATE,$engDATE, $string);
}

function bntoen($string)
{
    $engDATE = [
        '1','2','3','4','5','6','7','8','9','0','January','February','March','April','May','June','July','August','September','October','November','December','Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec','Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Sat','Sun','Mon','Tue','Wed','Thu','Fri'
    ];

    $bangDATE = [
        '১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
    বুধবার','বৃহস্পতিবার','শুক্রবার','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
    বুধবার','বৃহস্পতিবার','শুক্রবার'
    ];

    return str_replace($engDATE,$bangDATE,$string);
}

function permission($status){

    return $status == 1 ? 'approved' : ($status == 0 ? 'Pending' : 'Cancelled');
}

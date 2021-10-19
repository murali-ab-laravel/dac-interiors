<?php

namespace App\Repositories;

use App\Interfaces\ContactInterface;
use App\Models\Contacts;

use Mail;

class ContactsRepository implements ContactInterface{

    public function all(){
        return Contacts::all();
    }

    public function store($customer){
        return Contacts::create($customer);
    }

    public function sendMail($data = ''){
        $mailData = [
            'name' =>  (isset( $data['first_name'] ) ? $data['first_name'] : ""). " ". (isset($data['last_name'])?$data['last_name']: ""),
            'to_email' =>  isset($data['email']) ? $data['email'] : "",
            'subject' =>  isset($data['subject']) ?$data['subject']: "",
            'address' =>  isset($data['address']) ?$data['address']: "",
            'mobile_number' =>  isset($data['mobile_number']) ?$data['mobile_number']: "",
            'message' =>  isset($data['message']) ?$data['message']: "",
        ];

        Mail::send('mail',['mailData' => $mailData] , function ($message) use ($mailData)
        {
            $message->to($mailData['to_email'], $mailData['name']);
            $message->subject($mailData['subject']);
            $message->from('nakkamurali2015@gmail.com',  $mailData['name']);
        });
    }
}
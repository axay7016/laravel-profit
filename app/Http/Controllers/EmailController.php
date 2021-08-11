<?php
use Illuminate\Support\Facades\Route;
namespace App\Http\Controllers;
use App\Mail\MailNotify;
use App\Models\ContactModel;
use Carbon\Carbon;
use App\Models\EmailTemplate;
use Validator;
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Illuminate\Support\Facades\Mail;
date_default_timezone_set('Canada/Eastern');
class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $posted_data = request()->all();
        $name = $posted_data['nm'];
        $email = $posted_data['em'];
        $cellno = $posted_data['cellno']; 
        $msg = $posted_data['comment']; 
 
     $data=[
         'name'=>$name,
         'email' => $email,
         'cellno' => $cellno,
         'msg' => $msg
     ];
      try {
        $contact_data = new ContactModel();
        $contact_data->name = $name;
        $contact_data->msg = $msg;
        $contact_data->email = $email;
        $contact_data->mob = $cellno;
        $contact_data->created_at = Carbon::now();

        $contact_data->save();
        // $emails = ['connectalltd@gmail.com','sachievement@gmail.com', 'support@profit180.com'];
        $emails = ['connectalltd@gmail.com', 'support@profit180.com'];

        Mail::to($emails)->send(new MailNotify($data));

        return response()->json([
            'status' => 'OK',
            'message' => 'Thank you for getting in touch with us. We will review and respond to your request/inquiry.',
            'redirect_url' => url('/contact_us')
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'ERROR',
            'message' => 'Failed!!',
            'data' => $e->getMessage()
        ]);
    }
    //   if (Mail::failures()) {
    //        return response()->Fail('Sorry! Please try again latter');
    //   }else{
    //     return response()->json(['success' => 'Great! Successfully send in your mail']);
    //      }
    }

    // public function adminSendEmail(Request $request,$id)
    // {
    //     $posted_data = request()->all();
    //     $validator = Validator::make($posted_data, array(
    //         'sender' => 'Email|required',
    //         'body' => 'required'
    //     ), array(
    //         'sender.required' => 'Enter valid Email Address.',
    //         'body.required' => 'Give some message.'
          
    //     ));

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => 'ERROR',
    //             'message' => 'Input Data Errors!!',
    //             'errors' => $validator->errors()
    //         ]);
            
    //     }
       
    //     $sender = $posted_data['sender'];
    //     $bcc = $posted_data['bcc'];
    //     $subject = $posted_data['subject']; 
    //     $body = $posted_data['body']; 
 
    //     $data=[
    //         'sender'=>$sender,
    //         'bcc' => $bcc,
    //         'subject' => $subject,
    //         'body' => $body
    //             ];
    //     try 
    //     {
    //         $contact_data = new EmailTemplate();
    //         $contact_data->sender = $sender;
    //         $contact_data->bcc = $bcc;
    //         $contact_data->subject = $subject;
    //         $contact_data->body = $body;
    //         $contact_data->created_at = Carbon::now();
    //         $contact_data->save();

    //         Mail::to($sender)->bcc($bcc)->send(new MailNotify($data));

    //         return response()->json([
    //             'status' => 'OK',
    //             'message' => 'Send Successfully',
    //             'redirect_url' => url('/admin')
    //         ]);
    //     } 
    //     catch (\Exception $e) {
    //         return response()->json([
    //             'status' => 'ERROR',
    //             'message' => 'Failed!!',
    //             'data' => $e->getMessage()
    //         ]);
    //     }
    // }
}
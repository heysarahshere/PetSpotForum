<?php

namespace App\Http\Controllers;

use App\Notifications\NewMessage;
use App\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
//use Illuminate\Notifications\Notification;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getHome(){
        return view('index');
    }

    public function getPetspot(){
        return view('projects/petspot');
    }

    public function getGeekstore(){
        return view('projects/geekstore');
    }

    public function getCatalyst(){
        return view('projects/catalyst');
    }

    public function getBidpro(){
        return view('projects/bidpro');
    }

    public function getRoshambill(){
        return view('projects/roshambill');
    }

    public function getBattleship(){
        return view('projects/battleship');
    }

    public function getCalculator(){
        return view('projects/calculator');
    }

    public function postSendMessage(Request $request){
        $this->validate($request, [
            'msg' =>  'required',
            'subject' =>  'required',
            'email' =>  'required',
        ]);

        $subject = $request->input('subject');
        $sender = $request->input('email');
        $message = $request->input('msg');

        Notification::route('mail', 'heysarahshere@gmail.com')->notify(new NewMessage($subject, $message, $sender));
        Notification::route('mail', 'sarah.jessica.covey@gmail.com')->notify(new NewMessage($subject, $message, $sender));

        return response()->json(['success' => 'Message sent!'], 200);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projet;
use App\Events\contact;
use App\Mail\ContactMail;
use App\Http\Requests\ContactRequest;

use Mail;



class PageController extends Controller
{
    public function index()
    {
        $projets = Projet::get()->sortByDesc('created_at')->take(3);
        return view('welcome',compact('projets'));
    }
    public function projets()
    {
        $projets = Projet::all();
        return view('projets',compact('projets'));
    }
    public function voir(Projet $projet)
    {
        return view('projet',compact('projet'));
    }
    public function contact(ContactRequest $request)
    {
        if($request->validated()){
            event(new contact($request));

                    return redirect()->route('index')->with([
                "status"=>"success",
                "message"=>trans('validation.mail-valid')
                ]);
        }
        else{
                    return redirect()->route('index')->with([
                "status"=>"danger",
                "message"=>trans('validation.mail-echec')
                ]);
        }
    }
}


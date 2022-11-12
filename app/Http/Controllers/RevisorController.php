<?php

namespace App\Http\Controllers;
use App\Mail\BecomeRevisor;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use App\Models\Ad;
use App\Models\User;




class RevisorController extends Controller
{

    public function __construct(){
        $this->middleware('isRevisor');

}

    public function index(){
        $ad = Ad::where('is_accepted',null)
        ->orderBy('created_at','desc')
        ->first();
        /* dd(compact('ad')); */
        return view('revisor.home',compact('ad'));
    }

    public function acceptAd(Ad $ad) {
        $ad->is_accepted = true;
        $ad->save();
        return redirect()->back()->withMessage(['type'=>'success','text'=>'Anuncio aceptado']);
    }

    public function rejectAd(Ad $ad){
        $ad->is_accepted = false;
        $ad->save();
        return redirect()->back()->withMessage(['type'=>'danger','text'=>'Anuncio rechazado']);
    }

    public function becomeRevisor()
    {
            Mail::to('patripmg4@gmail.com')->send(new BecomeRevisor(Auth::user()));
            return redirect()->route('index')->withMessage(['type'=>'success','text'=>'Solicitud enviada con éxito, pronto sabrás algo, gracias!']);
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('rapido:makeUserRevisor',['email'=>$user->email]);
        return redirect()->route('index')->withMessage(['type'=>'success','text'=>'Ya tenemos un compañero más']);
    }

}

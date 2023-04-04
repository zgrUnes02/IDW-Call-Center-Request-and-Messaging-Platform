<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use App\Models\Message;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NavigationController extends Controller
{
    //* recrutement :
    public function recrutement()
    {
        return view('recrutemenet') ;
    }

    //* services :
    public function services()
    {
        return view('service') ;
    }

    //* a propos :
    public function aPropos()
    {
        return view('apropos') ;
    }

    //* welcome :
    public function home()
    {
        return view('home') ;
    }

    //* contact :
    public function contact()
    {
        return view('contact') ;
    }

    //* get Data :
    public function getData(Request $request)
    {
        $validation = $request -> validate([
            'nom' => 'required' ,
            'family_name' => 'required' ,
            'email' => 'required|email' ,
            'tele' => 'required|regex:/(^0\d{9}$)/' ,
            'annee_experience' => 'required|numeric' ,
            'poste' => 'required' ,
            'etudes' => 'required' ,
            'cv' => 'required' ,
        ]) ;
        
        // DB::beginTransaction() ;

        try {
            $emailFromRequest = Visitor::where('email' , $request -> email) -> pluck('id') ;
            if ($emailFromRequest -> count() != 0)
            {
                return redirect() -> back() -> withErrors(['error' => 'this email already registred :(']) ;
            }

            //* model declare :
            $visitors = new Visitor() ;

            //* insert into VISITORS :
            $visitors -> email = $request -> email ;
            $visitors -> nom = $request -> nom ;
            $visitors -> family_name = $request -> family_name ;
            $visitors -> telephone = $request -> tele ;
            $visitors -> annee_experience = $request -> annee_experience ;
            $visitors -> titre = $request -> poste ;
            $visitors -> etudes = $request -> etudes ;
            $visitors -> jour = $request -> day ;
            $visitors -> heure = $request -> time ;
            $visitors -> save() ;

            //* model declare :
            $cvs = new Cv() ;

            //* insert into CV :
            $cvs -> visitor_id = $visitors -> id ;
            $cvs -> path = $request -> cv -> getClientOriginalName() ;
            $cvs -> save() ;

            //* store cv's in file :
            $leCv = $request -> cv ;
            $cvName = $leCv -> getClientOriginalName() ;
            $leCv -> storeAs('/visitors/' . $visitors -> nom , $cvName , 'upload_cv') ;

            //* message success :
            $message_sucess = 'Le cv est envoye !' ;

            DB::commit() ;
            return redirect() -> back() -> withErrors(['error' => $message_sucess]) ;
        }
        catch(\Exception $error)
        {
            DB::rollBack() ;
            return redirect() -> back() -> withErrors(['error' => $error -> getMessage()]) ;
        }

    }

    public function dashboard()
    {
        $countVisiteurs = Visitor::all() -> count() ;
        $countVisiteursSupprimer = Visitor::onlyTrashed() -> count() ;

        $countMessage = Message::all() -> count() ;
        $countMessageSupprimer = Message::onlyTrashed() -> count() ;

        return view('dashboard' , compact('countVisiteurs' , 'countVisiteursSupprimer' , 'countMessage' , 'countMessageSupprimer')) ;
    }

}

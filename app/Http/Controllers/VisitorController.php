<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use App\Models\Visitor;
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
    //* function :
    public function showVisitor()
    {
        $visitors = Visitor::all() ;
        return view('visitors actions.visitors' , compact('visitors')) ;
    }

    //* function :
    public function showMessages()
    {
        return view('visitors actions.messages') ;
    }

    //* function :
    public function showRejoindres()
    {
       return view('visitors actions.rejoindre') ;
    }

    //* function :
    public function showSoftdelete()
    {
        $visitors = Visitor::onlyTrashed() -> get() ;
        return view('visitors actions.softdelete' , compact('visitors')) ;
    }

    //* delete function :
    public function delete($id)
    {
        DB::beginTransaction() ;
        try {
            $Visitor = Visitor::findOrfail($id) ;
            $Visitor -> delete() ;

            $cv = Cv::where('visitor_id' , $id) ;
            $cv -> delete() ;
            
            DB::commit() ;
            return redirect() -> back() -> withErrors(['error' => 'Le visiteur a été supprimé avec succès !']) ;
        }
        catch(\Exception $error)
        {
            DB::rollBack() ;
            return redirect() -> back() -> withErrors(['error' => $error -> getMessage()]) ;
        }
    }

    //* show visitor info :
    public function showVisitorInfo($id)
    {
        $visitorInfo = Visitor::findOrFail($id) ;
        $cvs = Cv::where('visitor_id' , $id) -> first() ;

        return view('visitors actions.showvisitorinfo' , compact('visitorInfo' , 'cvs')) ;
    }

    //* download cv :
    public function downloadCv($visitorName , $cvName)
    {
        return response() -> download(public_path('visitors/' . $visitorName . '/' . $cvName)) ;
    }

    //* show cv :
    public function showCv($visitorName , $cvName) 
    {
        return response() -> file(public_path('visitors/' . $visitorName . '/' . $cvName));
    }

    //* restore function :
    public function restore($id)
    {
        DB::beginTransaction() ;
        try {
            //? restore a visitor and a cv from the tresh :
           $Visitor_in_trash = Visitor::onlyTrashed() -> where('id' , $id) ;
           $Visitor_in_trash -> restore() ;

           $cv_in_trashed = Cv::onlyTrashed() -> where('visitor_id' , $id) ;
           $cv_in_trashed -> restore() ;

            DB::commit() ;
            return redirect() -> back() -> withErrors(['error' => 'Le message a été récupéré avec succès !']) ;
        }
        catch(\Exception $error)
        {
            //? error and rollback :
            DB::rollBack() ;
            return redirect() -> back() -> withErrors(['error' => $error -> getMessage()]) ;
        }
    }

    //* force delete visitor :
    public function forceDeleteVisitor($id)
    {   
        try {
            //? force delete a visitor :
            Visitor::onlyTrashed() -> where('id' , $id) -> forceDelete() ;
            return redirect() -> back() -> withErrors(['error' => 'Le visiteur a été définitivement supprimé !'])  ;
        }
        catch(\Exception $error)
        {
            DB::rollBack() ;
            return redirect() -> back() -> withErrors(['error' => $error -> getMessage()]) ;
        }
    }
}

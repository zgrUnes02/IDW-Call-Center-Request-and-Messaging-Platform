<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Visitor;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //* function index for listing all messages in a tabel :
    public function index()
    {
        try {
            //? get all messages :
            $visitors = Visitor::all() ;
            $messages = Message::all() ;
            return view('message.index' , compact('messages' , 'visitors')) ;
        }
        catch(\Exception $error)
        {
            //? return error :
            return redirect() -> back() -> withErrors(['error' => $error -> getMessage()]) ;
        }
    }

    //* function showMessage for showing you the message :
    public function showMessage($id)
    {
        try {
            //? looking for the message :
            $message = Message::findOrFail($id) ;
            return view('message.show' , compact('message')) ;
        }
        catch(\Exception $error)
        {
            //? return error :
            return redirect() -> back() -> withErrors(['error' => $error -> getMessage()]) ;
        }
    }

    //* function deleteMEssage for removing a message :
    public function deleteMessage($id)
    {
        try {
            // //? delete message :
            Message::findOrFail($id) -> delete() ;
            return redirect() -> back() -> withErrors(['error' => 'Le message a été supprimé avec succès !']) ;
        }
        catch(\Exception $error)
        {
            //? return error :
            return redirect() -> back() -> withErrors(['error' => $error -> getMessage()]) ;
        }
    }

    //* function restore message for restoring the message from trash :
    public function restore($id)
    {
        try {
            //? restore message :
            Message::onlyTrashed() -> where('id' , $id) -> restore() ;
            return redirect() -> back() -> withErrors(['error' => 'Le message récupéré avec succès !']) ; ;
        }
        catch(\Exception $error)
        {
            //? return error :
            return redirect() -> back() -> withErrors(['error' => $error -> getMessage()]) ;
        }       
    } 

    //* function for forcing delete the message that already deleted :
    public function forceDelete($id)
    {
        try {
            //? force delete a message :
            Message::onlyTrashed() -> where('id' , $id) -> forceDelete() ;
            return redirect() -> back() -> withErrors(['error' => 'Le message a été définitivement supprimé !']) ; ; ;
        }
        catch(\Exception $error)
        {
            //? return error
            return redirect() -> back() -> withErrors(['error' => $error -> getMessage()]) ;
        }
    }

    //* function for listing the messages that already deleted :
        public function showForceDeleteMessages()
        {
            try {
                $messages = Message::onlyTrashed() -> get() ;
                return view('message.softdeleteMessage' , compact('messages')) ;
            }
            catch(\Exception $error)
            {
                //? return error
                return redirect() -> back() -> withErrors(['error' => $error -> getMessage()]) ;
            }
        }
    
    //* function store for storing a new message :
    public function store(Request $request)
    {
        //? check all input :
        $validation = $request -> validate([
            'name' => 'required' ,
            'email' => 'email|required' ,
            'subject' => 'required' ,
            'message' => 'required' ,
        ]) ;

        try {
            //? isert into MESSAGES table :
            $message = new Message() ;
            $message -> nom = $request -> name ;
            $message -> email = $request -> email ;
            $message -> sujet = $request -> subject ;
            $message -> message = $request -> message ;
            $message -> save() ;

            return redirect() -> back() -> withErrors(['error' => 'le message est envoye , merci !']) ;
        }
        catch(\Exception $error)
        {
            //? return error :
            return redirect() -> back() -> withErrors(['error' => $error -> getMessage()]) ;
        }
    }
}

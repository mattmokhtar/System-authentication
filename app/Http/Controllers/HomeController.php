<?php
   /**
    BCS3453 [PROJECT]-SEMESTER 2324/1
    Student ID: CB21032
    Student Name: MUHAMMAD BIN MOKHTAR 
    */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {

            $usertype = Auth::user()->usertype;

            if ($usertype == 'participant') {

                return view('participant.index');
            } else if ($usertype == 'admin') {
                return view('admin.index');
                
            } else if ($usertype == 'organizer') {

                return view('organizer.index');
            }
        } else {
            return view('auth.login');
        }
    }

    public function post()
    {
        return view('post');
    }
}

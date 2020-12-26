<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class aboutController extends Controller
{
    public function about()
        {
            return view('about');
        }
        public function countries()
        {
            return view('countries');
        }
        public function usa()
        {
            return view('countries.usa');
        }

        public function getResults(Request $request)
        {
           $query=$request->input('query');
           if(!$query)
           {
               return redirect()->route('home');
           }
           $users=User::where(DB::raw("CONCAT(name, ' ',name)"),'LIKE',"%{$query}%")->orWhere('name','LIKE',"%{$query}%")->get();
            return view('search.results')->with('users',$users);
        }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function about()
    {
        //No Variable and show Text
        //return 'About Page';

        //NO Variable and call view about
        //return view('pages.about');

        //One Variable
        //$name = 'Saitarn <span style="color:#2b54ff;">Dokchan</span>';
        //return view('pages.about')->with('name',$first);


        //Multiple Variable1
//        return view('pages.about')->with([
//            'first' => 'Saitarn1',
//            'last' => 'Dokchan1'
//        ]);

        //Multiple Variable2
        $data=[];
        $data['first']='Saitarn2';
        $data['last']='Dokchan2';
        return view('pages.about',$data);

        //compact
//        $first = 'Saitarn Compact';
//        $last = 'Dokchan Commpact';
//        return view('pages.about' , compact('first','last'));


    }
}

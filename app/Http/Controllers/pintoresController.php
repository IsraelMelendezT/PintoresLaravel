<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class pintoresController extends Controller
{
   
    public function diego() {
        return view('diegoRivera', ['title'=> $title='Diego Rivera']);
    }
    public function munch() {
        return view('edvardMunch',  ['title'=> $title='Edvard Munch']);
    }
    public function vanGogh() {
        return view('vanGogh', ['title'=> $title='Vincent van Gogh']);
    }
    public function daVinci() {
        return view('daVinci', ['title'=> $title='Leonardo da Vinci']);
    }
    public function toru(){
        return view('toruKamei', ['title'=> $title='Toru Kamei']);
    }
    public function menu(){
        return view('menu', ['title'=> $title='INICIO']);
    }

    public function inicio(Request $request) {
        $user = $request->input('user');
        $pass = $request->input('pass');
        $llave =hash::make($request->input('llave'));
        $title = '';
      
            if($user === 'israel.Melendez' || $user === 'raul.toledo'){
                $url='welcome';
                $title = 'INICIO';
            }else{
                $url = 'admon.login';
                $title = 'Iniciar sesión';
            }
        
        return view($url,['title'=>$title, 'user' =>  $user = $request->input('user'), 'llave' => $llave]);
    
    }
    public function login(){
        return view('admon.login', ['title'=> $title='Iniciar sesión']);
    }
}

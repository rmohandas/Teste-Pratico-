<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Veiculo;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('home');

        //$veiculos = Veiculo::all(); // recebe todos os dados do produto
        $veiculos = Veiculo::paginate(3); //exibe apenas 3
        
        $client = Auth::user()->id;

        echo $client;

        return view('home', array('veiculos' => $veiculos,'busca'=> null));
        
        

    }

    public function client(Request $request)
    {
       $client = Veiculo::where('proprietario','=','. Auth::user->name.')->get();

       var_dump($client);
       //return view('home', compact('client'));
    }


}
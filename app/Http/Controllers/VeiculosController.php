<?php

namespace App\Http\Controllers;

use App\Http\Models\Veiculo;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;


class VeiculosController extends Controller
{

    public function index()
    {
         

       $clients = Veiculo::where('proprietario','=',''.auth()->user()->name.'')->get();
        
       //var_dump($clients);

       $veiculos = Veiculo::paginate(3); //exibe apenas 3

        return view('home', array('veiculos' => $veiculos, 'clients' => $clients, 'busca'=> null));
    }

    public function create()
    {


        $proprietarios = User::get();
        return view('veiculos.create', compact('proprietarios'));
       
    }

    public function store(Request $request)
    {
       //dd($request->all());
       
       $this->validate($request,[
        'placa' => 'required|alpha_num|max:7',
        'ano' => 'required|numeric|digits:4'
        ]
    );
    
       Veiculo::create([

           'proprietario' => $request->proprietario,
           'modelo' => $request->modelo,
           'marca' => $request->marca,
           'ano' => $request->ano,
           'renavam' => $request->renavam,
           'placa' => $request->placa,
       ]);

       return redirect('veiculos/novo')->with('success','Veiculo cadastrado com sucesso');

    }

    public function edit($id)
    {
        
        $veiculos = Veiculo::findOrFail($id);
        return view('veiculos.edit', ['veiculos' => $veiculos]);
   
    }

    public function update(Request $request, $id)
    {
       //dd($request->all());

       $this->validate($request,[
        'placa' => 'required|alpha_num|max:7',
        'ano' => 'required|numeric|digits:4'
        ]
    );
       
       $veiculo = Veiculo::findOrFail($id);

       $veiculo->update([

           'proprietario' => $request->proprietario,
           'modelo' => $request->modelo,
           'placa' => $request->placa,
           'marca' => $request->marca,
           'ano' => $request->ano,
           'renavam' => $request->renavam,
       ]);

       //return "Veiculo atualizado com sucesso!";
       return redirect('/veiculos/editar/'.$id)->with('success','Veiculo Atualizado com sucesso');

    }

    public function delete($id)
    {
        
        $veiculos = Veiculo::findOrFail($id);
        return view('veiculos.edit', ['veiculos' => $veiculos]);
   
    }

    public function destroy($id)
    {
        
        $veiculos = Veiculo::findOrFail($id);
        $veiculos->delete();

        return redirect('/home')->with('success','Veiculo excluido com sucesso!');
    }

    

}
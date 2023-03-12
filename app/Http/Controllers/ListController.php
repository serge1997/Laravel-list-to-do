<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Lista;
use App\Models\User;

class ListController extends Controller
{
    

    public function index()
    {
        $user = auth()->user();

        $listas = DB::table('lists')->SELECT('*')
        ->WHERE('user_id', '=', $user->id)
        ->orderBy('data_inicio')
        ->get();

        $usuario = User::WHERE('id', $user->id)->first()->toArray();

        return view('dashboard', ['listas'=>$listas, 'usuario'=>$usuario]);
    }

    public function create()
    {
        return view('lists.create');
    }

    public function store(Request $request)
    {
        $lista = new Lista;

        $validate = $request->validate([
            'titulo'=> 'required|unique:lists|min:5',
            'descricao'=> 'required|unique:lists|min:5',
            'data_inicio'=> 'required',
            'duracao'=> 'required',
            'prioridade'=>'required'
        ],
        [
            
            'descricao.required'=>'O campo descriçao é obrigatório.',
            'data_inicio.required'=>'O campo data é obrigatório.',
            'duracao.required'=>'O campo duraçao é obrigatório.'
        ]
        );

        $lista->titulo = $request->titulo;
        $lista->descricao = $request->descricao;
        $lista->data_inicio = $request->data_inicio;
        $lista->duracao = $request->duracao;
        $lista->prioridade = $request->prioridade;
        $lista->conluido = $request->conluido;

        $user = auth()->user();
        $lista->user_id = $user->id;

        $lista->save();

        return redirect('/')->with('msg', 'Lista Cadastrada com sucesso');
    }

   public function show($id)
   {
        $lista = Lista::findOrfail($id);

        return view('lists.show', ['lista'=>$lista]);
   }

   public function delete($id)
   {
        $delete = new Lista;
        $delete->WHERE('id', $id)->delete();

        return redirect('/dashboard')->with('delete', 'Lista apagada com sucesso');
   }

   public function concluido($id)
   {
        $concluido = Lista::find($id);
        $concluido->conluido = True;
    
        $concluido->save();
        return redirect('/dashboard')->with('notif', 'Concluido com sucesso');
   }
}

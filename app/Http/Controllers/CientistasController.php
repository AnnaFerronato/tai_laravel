<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CientistaModel;


class CientistasController extends Controller
{

    public function listar(){
        $cientistas = CientistaModel::orderBy('cicm')->get();
        return view('cientistas')->with('cientistas', $cientistas);
    }

    public function cadastrar(){
        return view('cientistaCadastrar');
    }

    public function editar($id){

        $cientista = CientistaModel::find($id);

        return view('cientistaEditar')->with('cientista', $cientista);
    }


    public function salvar($id, Request $request){


        if($id==0){
            $objCientistaModel = new CientistaModel();
            $objCientistaModel->cicm = $request->input('cicm');
            $objCientistaModel->nome = $request->input('nome');
            $objCientistaModel->formacao = $request->input('formacao');
            $objCientistaModel->save();
        }else{
            $objCientistaModel = CientistaModel::find($id);
            $objCientistaModel->cicm = $request->input('cicm');
            $objCientistaModel->nome = $request->input('nome');
            $objCientistaModel->formacao = $request->input('formacao');
            $objCientistaModel->save();

        }

        return redirect()->action('CientistasController@listar');
    }

    public function deletar($id){

        $cientista = CientistaModel::find($id);
        $cientista->delete();
         return redirect()->action('CientistasController@listar');

    }

    public function buscar(Request $request)
    {
        $nome =  $request->input('nome');

        $query = DB::table('cientista_models');

        if (!empty($nome)) {
            $query->where('nome', 'like', '%' . $nome . '%');
        }

        $cientistas = $query->orderBy('nome')->paginate(20);

        return view('cientistas')->with('cientistas', $cientistas);
    }

}

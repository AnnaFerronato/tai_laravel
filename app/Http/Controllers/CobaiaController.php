<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CobaiaModel;

class CobaiaController extends Controller
{
    public function listar()
    {
        $cobaias = CobaiaModel::orderBy('numero_serie')->get();
        return view('cobaias')->with('cobaias', $cobaias);
    }

    public function cadastrar()
    {
        return view('cobaiaCadastrar');
    }

    public function editar($id)
    {
        $cobaia = CobaiaModel::find($id);

        return view('cobaiaEditar')->with('cobaia', $cobaia);
    }


    public function salvar(Request $request,$id)
    {


        if ($id == 0) {
            $objCobaiaModel = new CobaiaModel();
            $objCobaiaModel->numero_serie = $request->input('numero_serie');
            $objCobaiaModel->genero = $request->input('genero');
            $objCobaiaModel->idade = $request->input('idade');
            $objCobaiaModel->save();
        } else {
            $objCobaiaModel = CobaiaModel::find($id);
            $objCobaiaModel->numero_serie = $request->input('numero_serie');
            $objCobaiaModel->genero = $request->input('genero');
            $objCobaiaModel->idade = $request->input('idade');
            $objCobaiaModel->save();
        }

        return redirect()->action('CobaiaController@listar');
    }

    public function deletar($id)
    {

        $cobaia = CobaiaModel::find($id);
        $cobaia->delete();
        return redirect()->action('CobaiaController@listar');
    }

    public function buscar(Request $request)
    {
        $numero_serie =  $request->input('numero_serie');

        $query = DB::table('cobaia_models');

        if (!empty($numero_serie)) {
            $query->where('numero_serie', 'like', '%' . $numero_serie . '%');
        }

        $cobaias = $query->orderBy('numero_serie')->paginate(20);

        return view('cobaias')->with('cobaias', $cobaias);
    }
}

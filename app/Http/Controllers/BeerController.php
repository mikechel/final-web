<?php
/*
* UNIME
* SISTEMAS DE INFORMAÇÃO
* PROGRAMAÇÃO WEB 2
* Prof:PABLO ROXO
* Aluno: MICHEL VINICIUS MOREIRA FERREIRA
*/
namespace App\Http\Controllers;

use App\Http\Requests\StoreBeerRequest;
use App\Models\Beer;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BeerController extends Controller
{
    public function index()
    {
        $beers = Beer::all();

        return response()->json($beers, Response::HTTP_OK);

    }
    public function show($id)
    {
        $beer = Beer::findOrFail($id);
        return response()->json($beer, Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $dados = $request->all();


        $beer = Beer::create($dados);
        return response()->json($beer, Response::HTTP_CREATED);
    }

    public function update(Request $request, $id)
    {
        $dados = $request->all();
        Beer::find($id)->update($dados);
        return $this->show($id);

    }

    public function destroy($id)
    {
        Beer::find($id)->delete();
        return response()->json('', Response::HTTP_NO_CONTENT);
    }


}

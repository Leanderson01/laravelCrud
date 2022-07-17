<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lanche;

class LanchesController extends Controller
{
    public function create(){
        return view('lanches.create');
    }

    public function store(Request $request){
        Lanche::create($request->all());
        return 'Lanche criado com sucesso!';
    }

    public function show(){
        $lanches = Lanche::all();
        return view('lanches.show', ['lanches' => $lanches]);
    }

    public function edit($id){
        $lanche = Lanche::findOrFail($id);
        return view('lanches.edit', ['lanche' => $lanche]);
    }

    public function update(Request $request, $id){
        $lanche = Lanche::findOrFail($id);
        $lanche->update($request->all());
        return 'Lanche atualizado com sucesso!';
    }

    public function destroy($id){
        $lanches = Lanche::findOrFail($id);
        $lanches->delete();
        return 'Lanche excluído com sucesso!';
    }
}

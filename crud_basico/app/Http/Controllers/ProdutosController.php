<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function create()
    {
     return view('produtos.create');
    }

    public function store(Request $request)
   {
    Produto::create($request->all());

   return redirect('/produtos/novo');
    }

    public function show($id)
    {
    $produto = Produto::findOrFail($id);

    return view('produtos.show', ['produto' => $produto]);
    }

    public function edit($id)
    {
    $produto = Produto::findOrFail($id);

    return view('produtos.edit', ['produto' => $produto]);
    }

    public function update(Request $request, $id)
    {
    $produto = Produto::findOrFail($id);
    $produto->update($request->all());

    return redirect('/produtos/ver/' . $id);
    }

    public function delete($id)
    {
    $produto = Produto::findOrFail($id);

    return view('produtos.delete', ['produto' => $produto]);
    }

    public function destroy($id)
    {
    $produto = Produto::findOrFail($id);
    $produto->delete();

    return redirect('/produtos/novo');
    }
}

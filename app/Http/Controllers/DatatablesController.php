<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
class DatatablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = DB::table('despesas')->get();
        $categorias = DB::table('categories')->get();
        $banco = DB::table('banco')->get();
        return view('index')->with('query',$query)->with('categorias',$categorias)->with('banco',$banco);
    }
    public function insert(Request $request)
    {
       //  dd($request->all());
       $banco = $request->input('banco');
       $detalhe = $request->input('detalhe');
       $despesa = $request->input('despesa');
       $categoria = $request->input('categoria');
       $date = $request->input('data');
       
       $data=array('banco'=>$banco,"detalhe"=>$detalhe,"despesa"=>$despesa,"categoria"=>$categoria,"data"=>$date);
       DB::table('despesas')->insert($data);
        

       return redirect()->back()->withSuccess('IT WORKS!');
    }
    public function get_dividas(Request $request)
    {
       //  dd($request->all());
   
       $query = DB::table('dividas')->get();
        $categorias = DB::table('categories')->get();
        $banco = DB::table('banco')->get();
        return view('divida')->with('query',$query);
        

    }
    public function post_dividas(Request $request)
    {
        // dd($request->all());
   
       $detalhe = $request->input('detalhe');
       $valor = $request->input('divida');
       $nome = $request->input('nome');
       $date = $request->input('data');
       
       $data=array("detalhe"=>$detalhe,"valor"=>$valor,"nome"=>$nome,"data"=>$date);
       DB::table('wishlist')->insert($data);
        

       return redirect()->back()->withSuccess('IT WORKS!');
    }
    public function get_wishlist(Request $request)
    {
       //  dd($request->all());
   
        $query = DB::table('wishlist')->get();
        $categorias = DB::table('categories')->get();
        $banco = DB::table('banco')->get();
        return view('wishlist')->with('query',$query);
        

    }
    public function post_wishlist(Request $request)
    {
         //dd($request->all());
         //dd($_FILES);
       $detalhe = $request->input('detalhe');
       $valor = $request->input('divida');
       $nome = $request->input('nome');
       $date = $request->input('data');
       $path = $request->file('image')->store('public/images');
       
       $data=array("detalhe"=>$detalhe,"valor"=>$valor,"nome"=>$nome,"data"=>$date,"image"=>$path);
       DB::table('wishlist')->insert($data);
        

       return redirect()->back()->withSuccess('IT WORKS!');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
 
}

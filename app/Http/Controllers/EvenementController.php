<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;
class EvenementController extends Controller
{
    public function index(){
        $events=Evenement::all();
       // dd($produit);
        return view("event.index",["events"=>$events]);
    }
    public function create(){
        return view("event.create");
    }
    public function store(Request $request){
       // dd($request->all(),$request->input("prod"));
       $produit=new Evenement();
       $produit->nom=$request->input("nom");
       $produit->date_demarrage=$request->input("dated");
       $produit->date_fin=$request->input("datef");
       $produit->description=$request->input("desc");
       $produit->save();
       return redirect()->route("event.index");
    }
   
}

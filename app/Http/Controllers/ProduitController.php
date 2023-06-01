<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        //
    }

    public function acheter(){

        return view('acheter');

    }
    public function encherir1(){

        return view('encherir1');

    }
    public function encherir2(){

        return view('encherir2');

    }
    public function encherir3(){

        return view('encherir3');

    }
    public function encherir4(){

        return view('encherir4');

    }
    public function encherir5(){

        return view('encherir5');

    }
    public function encherir6(){

        return view('encherir6');

    }
    public function encherir7(){

        return view('encherir7');

    }
    public function encherir8(){

        return view('encherir8');

    }
    public function encherir9(){

        return view('encherir9');

    }
    public function encherir10(){

        return view('encherir10');

    }
    public function encherir11(){

        return view('encherir11');

    }
    public function encherir12(){

        return view('encherir12');

    }
}

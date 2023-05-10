<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client=Client::all();
        return response()->json($client,200);//
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //

        $this->validate($request,
        [
            'nom' => 'required|max:100',
            'ville' => 'required|max:100',
            'telephone'=> 'required|max:12',
        ]);

        try {
            DB::beginTransaction();
            $client = Client::create([
            'nom'=>$request->nom,
            'ville'=>$request->ville,
            'telephone'=>$request->telephone,


        ]);
        DB::commit();
        return response()->json($client,201);//

        } catch (\Throwable $th) {
        dd($th);
        return response()->json("{'error: impossible de sauvegarder'}",404);
        }//
    }


    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        try {
            //DB::beginTransaction();
            $client = Client::find($id);
            $client->update($request->all());
            //DB::commit();

         response()->json("{'la modification a été effectuée avec succès",200);
            return $client;
        } catch (\Throwable $error) {
            dd($error);
            //throw $th;
            return response()->json("{'erreur de modification'}",404);
        }////////
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            DB::beginTransaction();
            Client::find($id)->delete();
            DB::commit();
            return response()->json("{'suppression effectuée'}",200);
        } catch (\Throwable $error) {
            dd($error);
            return response()->json("{'erreur détectée'}",404);
            //throw $th;
        }//////
    }
}

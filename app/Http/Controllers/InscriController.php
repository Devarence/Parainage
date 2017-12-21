<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Session;

class InscriController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view ('inscription');
    }

  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function save(Request $request)
    {
    
        $file = $request->file('photo');
    
        // Get the contents of the file
        $contents = $file->openFile()->fread($file->getSize());
    
        DB::table('Users')->insert(
            ['Nom' => $request->input('nom'),
            'Prenom' => $request->input('prenom'),
            'Sexe' => $request->input('sexe'),
            'Email' => $request->input('email'),
            'DateNaissance' => $request->input('datenaissance'),
            'Fonction' => $request->input('fonction'),
            'Pays' => $request->input('pays'),
            'Ville' => $request->input('ville'),
            'NumeroPiece' => $request->input('numeropiece'),
            'Contact' => $request->input('contact'),
            'Photo' => $contents,
            'NumeroMobile' => $request->input('numeromobile'),
            'NumeroPerfectMoney' => $request->input('numeroperfectmoney'),
            'Username' => $request->input('username'),
            'Password' => $request->input('password'),
            'DateInscription' => date("Y-m-d"),
            'Bonus' => 0,
            'PseudoParrain' => $request->input('pseudo'),
            'StatusPaiement' => 0
            ]
        );

        return view ('resultform');
    }
}

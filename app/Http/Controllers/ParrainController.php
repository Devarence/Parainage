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
use App\Http\Controllers\View;

class ParrainController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view ('parrain.index');
    }

  
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {         
        /*$res = DB::table('Users')
        ->select('*')
        ->where('ID', $id)
        ->get();

        session(['id' => $id]);

        return view('parrainmodif', ['info' => $res]);  */   

        $res = DB::table('Users')
        ->find($id);
        
        session(['id' => $id]);
        // show the edit form and pass the nerd
        return View::make('parrain.edit')
         ->with('info', $res);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        DB::table('Users')
        ->where('ID', session('id'))
        ->update(['Nom' => $request->input('nom')], ['Prenom' => $request->input('prenom')], ['Sexe' => $request->input('sexe')], ['Email' => $request->input('email')], ['DateNaissance' => $request->input('datenaissance')], 
        ['Fonction' => $request->input('fonction')], ['Pays' => $request->input('pays')], ['Ville' => $request->input('ville')], ['NumeroPiece' => $request->input('numeropiece')], ['Contact' => $request->input('contact')], ['NumeroMobile' => $request->input('numeromobile')], 
        ['NumeroPerfectMoney' => $request->input('numeroperfectmoney')], ['Username' => $request->input('username')], ['Password' => $request->input('password')]
        );

        $user = DB::table('Users')
        ->select('*')
        ->where('ID', session('id'))
        ->get();

        foreach($user as $tota)
        {
            $pseudo = $tota->Pseudo;

            $bonus = $tota->Bonus;

            $id = $tota->ID;
        }

        $res = DB::table('Parrainage')
        ->select('*')
        ->join('Users', 'Parrainage.FilleuleID', 'Users.ID')
        ->where('ParrainID', $id)
        ->get();

        $res2 = DB::table('Users')
        ->select('*')
        ->where([
            ['PseudoParrain', $pseudo],
            ['StatusPaiement', 1],
            ])
        ->get();

        $nbrepseudo = count($res2);

        $info2 = array($bonus, $nbrepseudo, $pseudo, $id);

        return view('parrain.show', ['info' => $res], ['info2' => $info2]);
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

    //fonction de connection du parrain
    public function loginParrain(Request $request)
    {
        $username = $request->input('username');
        
        $password = $request->input('password');
        
        $user = DB::table('Users')
            ->select('*')
            ->where([
                    ['Username', $username],
                    ['Password', $password],
                    ['StatusPaiement', 1],
                    ])
            ->get();
                                        
        $nombre = count($user);
        
        if ($nombre == 0)
        {
            $message_display = "Username et / ou Password erroné(s)";
            
            return view('parrain', ['message_display' => $message_display]);
        }
        else
        {
            foreach($user as $tota)
            {
                $pseudo = $tota->Pseudo;

                $bonus = $tota->Bonus;

                $id = $tota->ID;
            }

            $res = DB::table('Parrainage')
            ->select('*')
            ->join('Users', 'Parrainage.FilleuleID', 'Users.ID')
            ->where('ParrainID', $id)
            ->get();

            $res2 = DB::table('Users')
            ->select('*')
            ->where([
                ['PseudoParrain', $pseudo],
                ['StatusPaiement', 1],
                ])
            ->get();

            $nbrepseudo = count($res2);

            $info2 = array($bonus, $nbrepseudo, $pseudo, $id);

            return view('parrain.show', ['info' => $res], ['info2' => $info2]);
        }
    }

    public function show($id)
    {

        $res = DB::table('Users')
        ->select('*')
        ->where('ID', $id)
        ->get();

        session(['id' => $id]);

        return view('parrain.edit', ['info' => $res]);
       
    }

    //fonction demander paiement
    public function demanderpaiement($id)
    {   
        $user = DB::table('Users')
        ->select('*')
        ->where('ID', $id)
       ->get();

       foreach($user as $users)
       {
           $userbonus = $users->Bonus;
       }

       if($userbonus >= 20)
       {
            DB::table('Paiement')->insert(
            ['ParrainID' => $id,
            'Montant' => $userbonus,
            'Status' => 0,
            ]);
       }

       else{
            //message a afficher si le montant est < 20
       }

       
    }
}

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

class AdminController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view ('admin.index');
    }

    public function loginAdmin(Request $request)
    {
         // checking if the user exist
         $username = $request->input('username');         
         $password = $request->input('password');

         $user = DB::table('Admin')
         ->select('*')
         ->where([
                 ['Username', $username],
                 ['Password', $password],
                ])
         ->get();

         $nombre = count($user);

         if ($nombre == 0)
         {
             //flush session variables
             // $request->session()->flush();
 
             // error message when authentication has failed
             $message_display = "Nom d'utilisateur et / ou mot de passe erroné(s)";
             
             return view('admin.index', ['message_display' => $message_display]);
 
         }
         else
         {
             return view ('admin.tableaudebord');
         }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
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
    public function edit($id)
    {
        //
    }

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

    //fonction pour effectuer un paiement demander
    public function effectuerpaiement($id)
    {
       //modification dans la table paiement
        DB::table('Paiement')
        ->where('ParrainID', $id)
        ->update(['Status' => 1, 'DatePaiement' => date('Y-m-d')]);

        //modification dans la table users
        DB::table('Users')
        ->where('ID', $id)
        ->update(['Bonus' => 0]);
        
        //ne pas oublié de mettre use Illuminate\Http\RedirectResponse
        //mettre l'url de la vue paiement de l'admin
        return redirect('');
    }
}

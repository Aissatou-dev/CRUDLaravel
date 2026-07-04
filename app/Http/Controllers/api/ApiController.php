<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $utilisateur = user::all();
        return response()->json($utilisateur);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
            'age' => 'required',
        ]);
        $user=user::create([
            'nom' => $request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'age'=>$request->age,
            'role'=>'user'

        ]);
        return response()->json([
            "message"=>'utilisateur ajouté avec succès',
            "data"=>$user, 
            ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $users =user::findOrFail($id);
        return response()->json($users);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $users=user::findOrFail($id);
        $users->update([
            'nom' => $request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'age'=>$request->age,
            'role'=>'user'
        ]);
        return response()->json([
            "message"=>'success','utilisateur modifié avec succès',
            "data"=>$users
            ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users= user::FindOrFail($id);
        $users->delete();
        return response()->json([
            "message"=>'success',
            "info"=> "l'utilisateur suprimer avec succes"
            ]);//->back() pour dire sur la meme page
   
        //
    }
}

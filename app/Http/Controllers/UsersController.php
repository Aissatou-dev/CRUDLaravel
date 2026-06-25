<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\user;
use Illuminate\Http\Request;

class UsersController extends Controller
{
  
    public function index()
    {
        $utilisateur = user::all();
        return view('liste', compact('utilisateur'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('index');
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
        user::create([
            'nom' => $request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'age'=>$request->age,
            'role'=>'user'

        ]);
        return redirect()->route('index')->with('success','utilisateur ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $users =user::findOrFail($id);
        return $users;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users =$this-> show($id);
        return view('edit', compact('users'));//user doit etre la variable que tu a mis dans edit.blade.php
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $users=$this->show($id);
        $users->update([
            'nom' => $request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'age'=>$request->age,
            'role'=>'user'
        ]);
        return redirect()->route('index')->with('success','utilisateur modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      $users= $this->show($id);
      $users->delete();
      return redirect('/')->with('success', "l'utilisateur suprimer avec succes");//->back() pour dire sur la meme page
    }
}

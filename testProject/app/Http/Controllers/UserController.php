<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {


        return view('users.index', [
            'users' => User::all(),
            'roles' => Role::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
//        $roles = Role::all();
        return view('users.create');
//        return redirect()->back()->with(['message' => 'Utilisateur supprime avec success']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:user',
            'phone' => 'required|string|max:16|unique:user',
            'password' => 'required|string|min:8|confirmed'
        ]);
        $request->merge([
            'role_id' => Role::where('code', 'ADM')->first()->id
        ]);
        $user = User::create($request->all());
        if ($user){

            return redirect()->to(route('users.index'))->with(['message' => 'Nouveau utilisateur enregistre avec success']);
            Flashy::message('Welcome Aboard!');
        }
        else
            return redirect()->back()->with(['error' => 'Erreur lors de l\'enregistrement de l\'utilisateur']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $user = User::with(['awards', 'jobs', 'localisations', 'offers', 'orders', 'skills'])->find($id);
        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();

        return view('users.edit', ['user' => $user, 'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:user,email,' . $id,
            'phone' => 'required|string|max:16|unique:user,phone,' . $id
        ]);
        $user = User::find($id)->update($request->all());
        if ($user)
            return redirect()->to(route('users.index'))->with(['message' => 'Nouveau utilisateur enregistre avec success']);
        else
            return redirect()->back()->with(['error' => 'Erreur lors de l\'enregistrement de l\'utilisateur']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->back()->with(['message' => 'Utilisateur supprime avec success']);
    }

}

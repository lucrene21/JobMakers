<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

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
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('users.create');
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
        if ($user)
            return redirect()->to(route('users.index'))->with(['message' => 'Nouveau utilisateur enregistre avec success']);
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
        return view('users.edit', ['user' => $user]);
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
        User::find($id)->delete();
        return redirect()->back()->with(['message' => 'Utilisateur supprime avec success']);
    }
}

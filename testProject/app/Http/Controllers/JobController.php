<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use MercurySeries\Flashy\Flashy;
use Symfony\Component\Console\Input\Input;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('jobs.index', [
            'jobs' => Job::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('jobs.create');
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
            'label' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'type' => 'required|string|max:16',
            'price_max' => 'required|string|max:16',
            'price_min' => 'required|string|max:16',
        ]);
        $job = Job::create($request->all());
        if ($job){

            return redirect()->to(route('jobs.index'))->with(['message' => 'Nouveau utilisateur enregistre avec success']);
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
//        $job = Job::with(['description', 'type', 'localisations_id', 'category_id', 'price_max', 'price_min', 'delivery_time'])->find($id);
        return view('jobs.show', [
            'jobs' => Job::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $job = Job::find($id);

        return view('jobs.edit', ['job' => $job]);
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
            'label' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'type' => 'required|string',
            'price_min' => 'required|string|max:16',
            'price_max' => 'required|string|max:16',

        ]);
        $job = Job::find($id)->update($request->all());
        if ($job)
            return redirect()->to(route('jobs.index'))->with(['message' => 'job updated successfully']);
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
        Job::destroy($id);
        return redirect()->back()->with(['message' => 'job sucessfully deleted']);
    }
}

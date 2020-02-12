<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use App\Models\PaymentMethod;
use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('payments.index', [
            'payments' => Payment::all()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('payments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'identifiant' => 'required|string|max:255',
            'amount' => 'required|string|max:255',
            'fee' => 'required|string|email',
            'reference' => 'required|string|max:16|unique:payment',
            'status' => 'required|string',
             'order_id' => 'required|string|max:16|unique:payment'
        ]);
        dd('determine');
        $payment = Payment::create($request->all());
        if ($payment)
            return redirect()->to(route('payments.index'))->with(['message' => 'Payment saved']);
        else
            return redirect()->back()->with(['error' => 'Error during payments']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
//         $payment = Payment::with(['order', 'payment_method'])->find($id);
        return view('payments.show', [
            'payments' => Payment::all(),
            'payment_methods'=>PaymentMethod::all()
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
        $payment = Payment::find($id);

        return view('payments.edit', ['user' => $payment]);
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
            'payment_method_id' => 'required|string|max:255',
            'amount' => 'required|string|max:255',
            'fee' => 'required|string|email|unique:user',
            'reference' => 'required|string|max:16|unique:user',
            'status' => 'required|string|min:8|confirmed',
            'order_id' => 'required|string|max:16|unique:user'
        ]);
        $payment = Payment::update($request->all());
        if ($payment)
            return redirect()->to(route('payments.index'))->with(['message' => 'Payment saved']);
        else
            return redirect()->back()->with(['error' => 'Error during payments']);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Payment::find($id)->delete();
        return redirect()->back()->with(['message' => 'Payment deleted']);
    }
}

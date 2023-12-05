<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with('currency')->get();

        return view('payments.index', compact('payments'));
    }

    public function create()
    {
        $currencies = Currency::all();

        return view('payments.create', compact('currencies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'payee' => 'required|string',
            'payment_method' => 'required|string',
            'currency_id' => 'required|exists:currencies,id',
        ]);

        Payment::create($request->all());

        return redirect()->route('payments.index')->with('success', 'Payment created successfully');
    }

    public function edit($id)
    {
        $payment = Payment::findOrFail($id);
        $currencies = Currency::all();

        return view('payments.edit', compact('payment', 'currencies'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'payee' => 'required|string',
            'payment_method' => 'required|string',
            'currency_id' => 'required|exists:currencies,id',
        ]);

        $payment = Payment::findOrFail($id);
        $payment->update($request->all());

        return redirect()->route('payments.index')->with('success', 'Payment updated successfully');
    }

    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();

        return redirect()->route('payments.index')->with('success', 'Payment deleted successfully');
    }
}

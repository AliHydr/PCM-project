<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function index()
    {
        $receipts = Receipt::with('currency')->get();

        return view('receipts.index', compact('receipts'));
    }

    public function create()
    {
        $currencies = Currency::all();

        return view('receipts.create', compact('currencies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'payer' => 'required|string',
            'payment_method' => 'required|string',
            'currency_id' => 'required|exists:currencies,id',
        ]);

        Receipt::create($request->all());

        return redirect()->route('receipts.index')->with('success', 'Receipt created successfully');
    }

    public function edit($id)
    {
        $receipt = Receipt::findOrFail($id);
        $currencies = Currency::all();

        return view('receipts.edit', compact('receipt', 'currencies'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'payer' => 'required|string',
            'payment_method' => 'required|string',
            'currency_id' => 'required|exists:currencies,id',
        ]);

        $receipt = Receipt::findOrFail($id);
        $receipt->update($request->all());

        return redirect()->route('receipts.index')->with('success', 'Receipt updated successfully');
    }

    public function destroy($id)
    {
        $receipt = Receipt::findOrFail($id);
        $receipt->delete();

        return redirect()->route('receipts.index')->with('success', 'Receipt deleted successfully');
    }
}

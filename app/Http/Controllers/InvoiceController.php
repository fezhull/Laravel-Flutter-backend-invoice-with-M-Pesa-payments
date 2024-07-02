<?php
// app/Http/Controllers/InvoiceController.php

namespace App\Http\Controllers;

use App\Models\Invoice; // Correctly import the Invoice model
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        return Invoice::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'invoice_number' => 'required|string',
            'client_name' => 'required|string',
            'total_amount' => 'required|numeric',
        ]);

        $invoice = Invoice::create($validatedData);

        return response()->json($invoice, 201);
    }

    public function show($id)
    {
        return Invoice::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $invoice = Invoice::findOrFail($id);

        $validatedData = $request->validate([
            'invoice_number' => 'required|string',
            'client_name' => 'required|string',
            'total_amount' => 'required|numeric',
        ]);

        $invoice->update($validatedData);

        return response()->json($invoice, 200);
    }

    public function destroy($id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->delete();

        return response()->json(null, 204);
    }
}

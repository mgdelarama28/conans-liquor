<?php

namespace App\Http\Controllers\Admin;

use App\Models\Invoice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();

        return view('admin.pages.invoices.index', [
            'invoices' => $invoices,
        ]);
    }

    public function show($id)
    {
        $invoice = Invoice::find($id);

        return view('admin.pages.invoices.show', [
            'invoice' => $invoice,
        ]);
    }
}

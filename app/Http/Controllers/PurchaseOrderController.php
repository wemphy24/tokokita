<?php

namespace App\Http\Controllers;

use App\Models\PurchaseOrder;
use App\Models\Status;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PurchaseOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchase_orders = PurchaseOrder::all();
        return view('admin.views.po.index', compact('purchase_orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $statuses = Status::all();
        return view('admin.views.po.create', compact('statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        PurchaseOrder::create([
            'po_code' => $request->po_code,
            'description' => $request->description,
            'date' => Carbon::now()->toDateString(),
            'status_id' => $request->status_id,
        ]);

        return to_route('po.index')->with('success', 'PO created');
    }

    /**
     * Display the specified resource.
     */
    public function show(PurchaseOrder $po)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PurchaseOrder $po)
    {
        $statuses = Status::all();
        return view('admin.views.po.edit', compact('po', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PurchaseOrder $po)
    {
        $po = PurchaseOrder::find($po->id);
        $po->update([
            'po_code' => $request->po_code,
            'description' => $request->description,
            'date' => Carbon::now()->toDateString(),
            'status_id' => $request->status_id,
        ]);

        return to_route('po.index')->with('success', 'PO updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PurchaseOrder $purchaseOrder)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\DeliveryNote;
use App\Models\Status;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DeliveryNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $delivery_notes = DeliveryNote::all();
        return view('admin.views.sj.index', compact('delivery_notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $statuses = Status::all();
        return view('admin.views.sj.create', compact('statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DeliveryNote::create([
            'dn_code' => $request->dn_code,
            'description' => $request->description,
            'date' => Carbon::now()->toDateString(),
            'status_id' => $request->status_id,
        ]);

        return to_route('sj.index')->with('success', 'SJ created');
    }

    /**
     * Display the specified resource.
     */
    public function show(DeliveryNote $deliveryNote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DeliveryNote $sj)
    {
        $statuses = Status::all();
        return view('admin.views.sj.edit', compact('sj', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DeliveryNote $sj)
    {
        $sj = DeliveryNote::find($sj->id);
        $sj->update([
            'po_code' => $request->dn_code,
            'description' => $request->description,
            'date' => Carbon::now()->toDateString(),
            'status_id' => $request->status_id,
        ]);

        return to_route('sj.index')->with('success', 'SJ updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeliveryNote $deliveryNote)
    {
        //
    }
}

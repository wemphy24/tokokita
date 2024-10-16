<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('admin.views.item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.views.item.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Item::create([
            'item_code' => $request->item_code,
            'category_id' => $request->category_id,
            'name' => $request->name,
            'stock' => $request->stock,
            'price' => $request->price,
            'min_stock' => $request->min_stock,
            'max_stock' => $request->max_stock,
        ]);

        return to_route('item.index')->with('success', 'Item created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        $categories = Category::all();
        return view('admin.views.item.edit', compact('item', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $item = Item::find($item->id);
        $item->update([
            'item_code' => $request->item_code,
            'category_id' => $request->category_id,
            'name' => $request->name,
            'stock' => $request->stock,
            'price' => $request->price,
            'min_stock' => $request->min_stock,
            'max_stock' => $request->max_stock,
        ]);

        return to_route('item.index')->with('success', 'Item updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}

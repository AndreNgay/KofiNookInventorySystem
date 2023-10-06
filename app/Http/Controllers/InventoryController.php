<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Unit;
use App\Models\Category;
use App\Http\Requests\StoreInventoryRequest;
use App\Http\Requests\UpdateInventoryRequest;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role = Auth::user()->role;
        if (Auth::check()) {
            $items = Inventory::all();
            $units = Unit::all();
            $categories = Category::all();
            if ($role === 'owner') {
                return view('owner.inventory', compact('items', 'units', 'categories'));
            }
            elseif ($role === 'employee') {
                return view('employee.inventory', compact('items', 'units', 'categories'));
            }
        }
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventoryRequest $request)
    {
        $request->validate([
            'item_name' => 'required|string|max:255',
            'image' => 'image|max:2048',
            'description' => 'required|string|max:255',
            'stock' => 'required|integer',
            'required_stock' => 'required|integer',
            'cost' => 'required|numeric',
            'type' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'unit_id' => 'required|exists:units,id'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('inventory_images', 'public'); // Store image in storage/app/public/inventory_images
        } else {
            $imagePath = null;
        }

        $inventory = new Inventory;
        $inventory->item_name = $request->input('item_name');
        $inventory->image = $imagePath; // Save image path to the database
        $inventory->description = $request->input('description');
        $inventory->stock = $request->input('stock');
        $inventory->required_stock = $request->input('required_stock');
        $inventory->unit_id = $request->input('unit_id');
        $inventory->category_id = $request->input('category_id');
        $inventory->cost = $request->input('cost');
        $inventory->type = $request->input('type');
        $inventory->save();

        $item_name = $request->item_name;
        return redirect()->route('inventory.index')->with('success', 'Item: '. $item_name .' added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventory $inventory)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryRequest $request, Inventory $inventory)
    {
        $request->validate([
            'item_name' => 'required|string|max:255',
            'image' => 'image|max:2048',
            'description' => 'required|string|max:255',
            'stock' => 'required|integer',
            'required_stock' => 'required|integer',
            'cost' => 'required|numeric',
            'type' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'unit_id' => 'required|exists:units,id'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('inventory_images', 'public'); // storage/app/public/inventory_images
        } else {
            $imagePath = $inventory->image;
        }

        $item_prev_name = $request->item_name;
        $inventory->item_name = $request->input('item_name');
        $inventory->image = $imagePath; // Save image path to the database
        $inventory->description = $request->input('description');
        $inventory->stock = $request->input('stock');
        $inventory->required_stock = $request->input('required_stock');
        $inventory->unit_id = $request->input('unit_id');
        $inventory->category_id = $request->input('category_id');
        $inventory->cost = $request->input('cost');
        $inventory->type = $request->input('type');
        $inventory->save();

        
        return redirect()->route('inventory.index')->with('success', 'Item: '. $item_prev_name .' edited successfully');
    }

    public function updateStock(UpdateInventoryRequest $request, Inventory $inventory)
    {
        $request->validate([
            'amount' => 'required|integer'
        ]);
        $add_or_reduce_stock = $request->add_or_reduce_stock;
        $amount = $request->amount;
        if($add_or_reduce_stock == 'add'){
            $stock = $inventory->stock + $amount;
        }
        elseif($add_or_reduce_stock == 'reduce'){
            $stock = $inventory->stock - $amount;
        }
        else{
            return redirect()->route('inventory.index')->with('error', 'Invalid action');
        }

        $inventory->stock = $stock;
        $inventory->save();
        return redirect()->route('inventory.index')->with('success', 'Stock updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect()->route('inventory.index')->with('success', 'Item deleted successfully');
    }
}

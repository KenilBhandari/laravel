<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
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
  public function store(Request $request)
  {
    $validate = $request->validate([
      "name" => "required|string|max:255",
      "price" => "required|numeric|min:1",
      "mkt_cap" => "required|integer|min:1",
      "dividend" => "required|numeric|min:1",
    ]);

    Stock::create($request->all());

    return redirect()->route('welcome.stock')->with('success', 'Stock added successfully!');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  public function index()
  {
    $stocks = Stock::all();
    return view('welcome', compact('stocks'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $stock = Stock::find($id);
    $validate = $request->validate([
      "name" => "required|string|max:255",
      "price" => "required|numeric|min:1",
      "mkt_cap" => "required|integer|min:1",
      "dividend" => "required|numeric|min:1",
    ]);

    $stock->update($request->all());
    return redirect()->route("welcome.stock")->with("success", 'Stock updated Successfully');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $stock = Stock::findOrFail($id);
    $stock->delete();
    return redirect()->route('welcome.stock')->with('sucess', 'Stock Deleted Succesfully');
  }
}

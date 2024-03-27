<?php

namespace App\Http\Controllers;

use App\Models\MedicationInventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

use Symfony\Component\Console\Input\Input;

class InventoryController extends Controller
{
    //
    public function index()
    {
        $inventories = MedicationInventory::all();

        return view('inventories.index', compact('inventories'));

    }

    public function create()
    {
        return view('inventories.create');
    }

    public function store(Request $request, MedicationInventory $inventory)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required',
        ]);
        $input = $request->all();

        $inventory->create($input);

        return redirect('/inventories')->with('success', 'Inventory is successfully saved');
    }

    public function show($id)
    {
        $inventory = MedicationInventory::find($id);

        return view('inventories.show', compact('inventory'));

    }

    public function edit($id)
    {
        $inventory = MedicationInventory::find($id);

        return view('inventories.edit', compact('inventory'));

    }

    public function update(Request $request, $id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name' => 'required',
            'description' => 'description',
            'quantity' => 'description'
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('inventories/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput($request->except('password'));
        } else {
            // store
            $inventory = MedicationInventory::find($id);
            $inventory->name = $request->get('name');
            $inventory->description = $request->get('description');
            $inventory->quantity = $request->get('quantity');
            $inventory->save();

            // redirect
            Session::flash('message', 'Successfully updated inventory!');
            return Redirect::to('inventories');
        }
    }

    public function destroy($id)
    {
        // delete
        $inventory = MedicationInventory::find($id);
        $inventory->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the inventory!');
        return Redirect::to('inventories');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class CustomerController extends Controller
{
    public function index()
    {
       // $roles = Role::select(['id', 'name'])->get()->pluck('id', 'name')->toArray();

        $customers = User::all();

        return view('customers.index', compact('customers'));

    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request, User $customer)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $input = $request->all();

        $customer->create($input);

        return redirect('/customers')->with('success', 'Customer is successfully saved');
    }

    public function show($id)
    {
        $customer = User::find($id);

        return view('customers.show', compact('customer'));

    }

    public function edit($id)
    {
        $customer = User::find($id);

        return view('customers.edit', compact('customer'));

    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user->update($request->all());

        return redirect()->route('customers.index')
            ->with('success','Customer updated successfully');

    }

    public function destroy($id)
    {
        // delete
        $customer = User::find($id);

        if(Auth::user()->where('user_type','=','owner')){
            $customer->delete();
            Session::flash('message', 'Successfully deleted the customer!');

        }

        // redirect
        return Redirect::to('customers');
    }
}

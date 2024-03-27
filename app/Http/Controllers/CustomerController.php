<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function index()
    {
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

    public function update(Request $request, $id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name' => 'required',
            'email' => 'description',
            'password' => 'description'
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('customers/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput($request->except('password'));
        } else {
            // store
            $customer = User::find($id);
            $customer->name = $request->get('name');
            $customer->email = $request->get('email');
            $customer->password = $request->get('password');
            $customer->save();

            // redirect
            Session::flash('message', 'Successfully updated customer!');
            return Redirect::to('customers');
        }
    }

    public function destroy($id)
    {
        // delete
        $customer = User::find($id);
        $customer->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the customer!');
        return Redirect::to('customers');
    }
}

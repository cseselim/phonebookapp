<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\phonebook;

class PhoneBookController extends Controller
{
    public function PhoneBookTemplteView()
    {
    	$users = phonebook::all();
    	return view('phonebook', compact('users'));
    }


    public function StorePhoneBook(Request $request)
    {
    	$request->validate([
		    'name' => 'required|min:4',
		    'email' => 'unique:phonebooks,email',
		    'address' => 'required|min:5',
		    'phone' => 'required|min:11|numeric|unique:phonebooks,phone',
		]);

		$user = new phonebook();
        $user->name=  $request->Input(['name']);
        $user->email=  $request->Input(['email']);
        $user->address=  $request->Input(['address']);
        $user->phone=  $request->Input(['phone']);
        $user->save();
        $request->session()->flash('success', 'New User successful!');
       return redirect('/');
    	
    }

    public function PhoneBookEditForm($id)
    {
        $user = phonebook::find($id);

        return view('phonebookedit',compact('user'));
    }

    public function PhoneBookUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required||min:4',
            'email' => 'required',
            'address' => 'required|min:5',
            'phone' => 'required|min:11|numeric',
        ]);

        $user = phonebook::find($id);
        $user->name=  $request->get('name');
        $user->email=  $request->get('email');
        $user->address=  $request->get('address');
        $user->phone=  $request->get('phone');

        $user->save();

        return redirect('/')->with('success', 'User has been updated');
   
    }

    public function delete($id)
    {
        $delete = phonebook::find($id);
        $delete->delete();
        return redirect('/')->with('success', 'User has been deleted Successfully');
    }


    public function show($id)
    {
        $user = phonebook::find($id);
        return view('PhoneBookSingleView',compact('user'));
    }







}

<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ContactController extends Controller
{
    public function index(){

        $contacts=Contacts::get();
        return view('navbar.home2',compact('contacts'));
}

public function create()
{
    $contacts = new Contacts(); 
    return view('navbar.create1', compact('contacts'));
}

public function store(Request $request){


    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:contacts,email',
        'phone' => 'required',
        'address' => 'required',

    ]);

    $contacts = Contacts::create($validatedData);
    session()->flash('success', 'Booking successful!');
     return redirect()->route('contact.index')->with('success', 'Contact Added Successfully');

}
public function edit(Request $request,$id){

    $contacts=Contacts::find($id);

    return view('navbar.create1',compact('contacts'));

}

public function update(Request $request,$id){

    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:contacts,email,' . $id,
        'phone' => 'required',
        'address' => 'required',
    ]);

    $contact = Contacts::find($id);
    $contact->update($validatedData);
    return redirect()->route('contact.index')->with('success', 'Contact Updated Successfully');
    
}
public function delete($id){

    $contacts=Contacts::find($id);
    $contacts->delete();
    return redirect()->route('contact.index')->with('success', 'Contact Deleted Successfully');
}

public function show($id)
{
    $contact = Contacts::findOrFail($id);
    return response()->json($contact);
}


public function getAllContacts()
{
    $contacts = Contacts::all();
    return response()->json($contacts);
}

public function getContact($id)
{
    $contact = Contacts::find($id);
    return response()->json(['contact' => $contact]);
}

public function createContact(Request $request)
{

}

public function updateContact(Request $request, $id)
{
    $contact = Contacts::find($id);

    return response()->json($contact, 200);

}


public function deleteContact($id)
{
    $contacts=Contacts::find($id);
    $contacts->delete();
    return response()->json(['message' => 'Contact deleted successfully']);

}

}

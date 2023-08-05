<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $address = Contact::find(1);
        // dd($address);
        return view('backend.address.contact-address',[
            'contact' => $address
        ]);
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
    public function store(StoreContactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id='1')
    {
        // $validator= $request->validate([
        //     'name' => ['required','string','min:3','max:50','unique:categories'],
        // ]);
        // $genre= Genre::find($id);
        // $genre->name=$request->name;
        // $genre->save();
        $address=$request->address;
        $email=$request->email;
        $phone=$request->phone;
        $data=[
            'address' => $address,
            'email' => $email,
            'phone' => $phone,
        ];
        Contact::where('id',$id)->update($data);
        return redirect('/address')->with('success', 'Successfully updated contact address.' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}

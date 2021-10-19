<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Repositories\ContactsRepository;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    private $contact;
    public function __construct(ContactsRepository $contact)
    {
        $this->contact = $contact;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return $this->contact->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try{

            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'mobile_number' => 'required',
                'address' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
            ]);

            
            $this->contact->store($request->all());
            $result = $this->contact->sendMail($request->all());
            return redirect('')->with('message', 'Contact details sent succesfully.'.$result);


        }catch(\Exception $e){

            $response = $e->getMessage();

            return response()->json($response);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function show(Contacts $contacts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacts $contacts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacts $contacts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacts $contacts)
    {
        //
    }
}

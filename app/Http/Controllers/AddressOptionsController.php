<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\Address;
use App\Http\Requests\AddressOptionsStoreRequest;

class AddressOptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): Response
    {
        return Inertia::render('Address/Add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddressOptionsStoreRequest $request)
    {
        try {
            $address = new Address;

            $address->user_id = auth()->user()->id;
            $address->addr1 = $request->get('addr1');
            $address->addr2 = $request->get('addr2');
            $address->city = $request->get('city');
            $address->postcode = $request->get('postcode');
            $address->country = $request->get('country');

            $address->save();

            return redirect()->route('address.index');
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $address = Address::find($id);
            $address->delete();
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}

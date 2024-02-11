<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function index(){
        $flights = Flight::all();

        return view('flights.index',['flights' => $flights]);
    }

    public function create(){
        return view('flights.create');
    }

    public function store(Request $req){
        $data = $req->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',
        ]);

        $newFlight = Flight::create($data);

        return redirect(route('flights.index'));
    }

    public function edit(Flight $flight){
        return view('flights.edit', ['flight' => $flight]);
    }

    public function update(Flight $flight, Request $req){
        $data = $req->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',
        ]);

        $flight->update($data);

        return redirect(route('flights.index'))->with('success','Produyct updated success');

    }

    public function destroy(Flight $flight){
        $flight->delete();
        return redirect(route('flights.index'))->with('success','Produyct deleted success');
    }
}

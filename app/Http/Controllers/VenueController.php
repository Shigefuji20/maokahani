<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\venue;

class venueController extends Controller
{
    public function index() {
        $venue = venue::latest()->paginate(10);
        return view('venue.index', ['venue'=>$venue]);
    }

    public function create() {
        return view('venue.create');
    }

    public function store(Request $request) {
        // dd($request->all());
        $this->validate($request, [
            'lname' => 'required',
            'fname' => 'required',
            'address' => 'required',
            'capacity' => 'required',
            'price' => 'required'
        ]);

        venue::create([
            'lname' => $request['lname'],
            'fname' => $request['fname'],
            'address' => $request['address'],
            'capacity' => $request['capacity'],
            'price' => $request['price']

        ]);

        return redirect('/venue')->with('info', 'A new reservation has been created.');

    }
    public function edit($id) {
        $venue = venue::find($id);

        return view('venue.edit', ['venue'=>$venue]);
    }

    public function update(Request $request, $id) {
        $venue = venue::find($id);

        $venue->update($request->all());

        return redirect('/venue')->with('info', "The record of $venue->fname $venue->lname has been updated. ");
    }

    public function delete(Request $request) {
        $venueId = $request['venue_id'];
        $venue = venue::find($venueId);
        $name = $venue->lname . ", " .  $venue->fname;

        $venue->delete();

        return redirect('/venue')->with('info', "The reservation $name has ben delated");
    }
}

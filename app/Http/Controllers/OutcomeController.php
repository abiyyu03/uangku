<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Outcome, User};

class OutcomeController extends Controller
{
    function index()
    {
        $outcomeData = Outcome::get();
        return view('pages.outcome.index',compact('outcomeData'));
    }

    function create()
    {
        return view('pages.outcome.create');
    }

    function store(Request $request)
    {
        $outcomeData = new Outcome();
        $outcomeData->date = $request->date;
        $outcomeData->user_id = 123;
        $outcomeData->outcome = $request->outcome;
        $outcomeData->usage = $request->usage;
        $outcomeData->description = $request->description;
        $outcomeData->save();

        return redirect()->to('/outcome')->with('success','Data berhasil disimpan');
    }

}

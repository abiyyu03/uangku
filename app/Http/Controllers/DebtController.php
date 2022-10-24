<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Debt, User};

class debtController extends Controller
{
    function index()
    {
        $debtData = Debt::get();
        return view('pages.debt.index',compact('debtData'));
    }

    function create()
    {
        return view('pages.debt.create');
    }

    function store(Request $request)
    {
        $debtData = new Debt();
        $debtData->date = $request->date;
        $debtData->user_id = 123;
        $debtData->debt = $request->debt;
        $debtData->debtor = $request->debtor;
        $debtData->description = $request->description;
        $debtData->save();

        return redirect()->to('/debt')->with('success','Data berhasil disimpan');
    }

}

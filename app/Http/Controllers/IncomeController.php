<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Income, User};

class IncomeController extends Controller
{
	public function __construct()
	{
		return $this->middleware('isAuth');
	}

    function index()
    {
        $incomeData = Income::get();
        return view('pages.income.index',compact('incomeData'));
    }

    function create()
    {
        return view('pages.income.create');
    }

    function store(Request $request)
    {
        $incomeData = new Income();
        $incomeData->date = $request->date;
        $incomeData->user_id = 123;
        $incomeData->income = $request->income;
        $incomeData->fund_source = $request->fund_source;
        $incomeData->description = $request->description;
        $incomeData->save();

        return redirect()->to('/income')->with('success','Data berhasil disimpan');
    }

}

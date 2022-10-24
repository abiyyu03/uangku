<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Debt,Income,Outcome};

class DashboardController extends Controller
{
    function index()
    {
        $debtData = $this->debtTotal();
        $incomeData = $this->incomeTotal();
        $outcomeData = $this->outcomeTotal();
        return view('dashboard',compact('debtData','incomeData','outcomeData'));
    }

    function debtTotal()
    {
        $debtTotal = 0;
        $debtData = Debt::get();
        foreach($debtData as $i){
            $debtTotal += $i->debt;
        }
        return $debtTotal;
    }

    function incomeTotal()
    {
        $incomeTotal = 0;
        $incomeData = Income::get();
        foreach($incomeData as $i){
            $incomeTotal += $i->income;
        }
        return $incomeTotal;
    }

    function outcomeTotal()
    {
        $outcomeTotal = 0;
        $outcomeData = Outcome::get();
        foreach($outcomeData as $i){
            $outcomeTotal += $i->outcome;
        }
        return $outcomeTotal;
    }
}

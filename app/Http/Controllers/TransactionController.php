<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //
    function index(){
        $transaction = Transaction::get();
        return view("transaksi", compact("transaction"));
    }

    public function show(Transaction $transaction)
    {
        return view("transaction_detail", array("transaction" => $transaction));
    }
}

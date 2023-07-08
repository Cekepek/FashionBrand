<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    //
    function index(){

        $transaction = Transaction::where("user_id", Auth::user()->id)->get();
        return view("transaksi", compact("transaction"));
    }

    public function show(Transaction $transaction)
    {
        // return dd($transaction);
        return view("transaksi_detail", array("transaction" => $transaction));
    }

    function checkout()
    {
        $this->middleware("auth");
        if (session('cart')) {
            $t = new Transaction();
            $t->user_id = Auth::user()->id;
            $t->transaction_date = Carbon::now()->toDateTimeString();
            $t->subtotal = 0;
            $t->total = 0;
            $t->save();
            foreach (session('cart') as $key => $value) {
                $subtotal = $value["quantity"] * $value["price"];
                $t->products()->attach($key, [
                    "quantity" => $value['quantity'],
                    "subtotal" => $subtotal
                ]);
                $t->subtotal += $subtotal;
                $t->total += $subtotal + ($subtotal*11/100);
                $t->save();
            }
            $poin = $t->total / 100000;
            $user = User::where("id", Auth::user()->id)->first();
            $user->poin += $poin;
            $user->member = "true";
            $user->save();
            return redirect("/product");
        } else {
            return redirect("/product");
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Investments;
use Illuminate\Http\Request;

use App\Models\Payments;
use App\Models\Withdrawals;

class UserAccountPage extends Controller
{
    public function index(){
        return view("user.accounthistory", [
            'payments' => $this -> allPayments(),
            'investments' => $this -> allInvestments(),
            'withdrawals' => $this -> allWithdrawals(),
        ]);
    }

    public function myplans (){
        return view('user.myplans', [
            'investments' => $this -> activeInvestments(),
        ]);
    }

    private function allPayments(){
        $payments = Payments::orderBy('created_at','desc') -> limit(20) -> get();
        return $payments;
    }

    private function allWithdrawals(){
        $withdrawals = Withdrawals::orderBy('created_at','desc') -> limit(20) -> get();
        return $withdrawals;
    }

    private function allInvestments(){
        $investments = Investments::orderBy('created_at','desc') -> limit(20) -> get();
        return $investments;
    }

    private function activeInvestments() {
        $investments = Investments::where('status', 'active') -> orderBy('created_at','desc') -> limit(20) -> get();
        return $investments;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Models\Investments as Invest;
use App\Models\Plans;

class Investments extends Controller
{
    public function subscribe(Request $request){
        $amount = $request->amount;
        $plan = $request -> plan;
        $user = auth() -> user();
        $profit = 0;

        try{
            $jsonBalances = $user -> balances;
            $balances = json_decode($jsonBalances, true);

            if($amount < 10){
                return response()->json([
                    'status' => 'error',
                    'message'=> 'You can\'t invest below $10',
                ], 200);
            }
            
            if($balances == null | !isset($balances['usd'])){
                return response()->json([
                    'status' => 'error',
                    'message'=> 'Invalid or missing balances data'
                ], 200);
            }

            $myBalance = $balances['usd'];

            if($amount > $myBalance){
                return response()->json([
                    'status'=> 'error',
                    'message'=> 'Insufficient balance, please fund your account first'
                ], 200);
            }   

            // get plan details
            $plan = Plans::where('id', $plan) -> first();
            
            $dueDate = Carbon::now() -> addHours($plan -> duration);
            
            $invest = new Invest();
    
            $invest -> user = $user -> username;
            $invest -> plan = $plan -> name;
            $invest -> capital = $amount;
            $invest -> profit = $profit;
            $invest -> status = 'active';
    
            if($invest -> save()){

                //debit user's balance
                $newBalance = $myBalance - $amount;
                // Update the user's balances using the fill method
                $changed = DB::table('users')
                    ->where('id', $user->id)
                    ->update(['balances->usd' => $newBalance]);
                
                if($changed){

                    // echo $user -> balances. "----------------------------------";
                    // echo $amount. "----------------------------------";
                    // echo $newBalance. "----------------------------------";
                    // return response() -> json($user);
                    
                    return response()->json([
                        "status"=> "success",
                        "message"=> "Subscription successful"
                    ], 201);
                }
                else{
                    return response()->json([
                        "status"=> "error",
                        "message"=> "Subscription failed halfway"
                    ], 200);
                }
            }
            else{
                return response()->json([
                    "status"=> "error",
                    "message"=> "Could not create subscription"
                ], 200);
            }
        }

        catch(\Exception $e){
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred ::: '.$e,
            ], 500);
        }
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Investments;
use App\Models\Plans;

class AutoMinter extends Controller
{
    public function mine(){
        try{
            // Get all active investments
            $activeInvestments = Investments::where('status', 'active')->get();

            foreach ($activeInvestments as $investment) {
                $this -> reward($investment);
                $this -> terminateIfDue($investment);
            }

            return 'Investments updated successfully';
        }
        catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    private function terminateIfDue($investment){
        
        $now = Carbon::now();
        $dueAt = Carbon::parse($investment->due_at);
        
        // Check if the investment has crossed the due date
        if ($now >= $dueAt) {
            // Investment has expired, so we need to terminate it
            $investment->status = 'terminated';
            
            // Save the updated investment
            $investment->save();
        }
    }
    
    private function reward ($investment){

        // Investment has expired, so we need to terminate it
        $investment->status = 'terminated';
        
        // Calculate profit with a random value between min_return and max_return from the plan
        $plan = Plans::where('name', $investment->plan)->first();
        $randomProfit = mt_rand($plan->min_return, $plan->max_return);
        $investment->profit = $randomProfit;

        // Save the updated investment
        $investment->save();
        
    }
}

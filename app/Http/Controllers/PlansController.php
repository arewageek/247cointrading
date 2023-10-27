<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Plans;

class PlansController extends Controller
{
    public function list(){
        try{
            $plans = Plans::all();
            return response()->json($plans, 200);
        }
        catch(\Exception $e){
            return response()->json([
                "error"=> $e->getMessage()
            ],500);
        }
    }

    public function index(){
        try{
            $plans = Plans::all();
            return view('admin.plans', [
                'plans'=> $plans
            ]);
        }
        catch(\Exception $e){
            return response()->json([
                'error'=> $e->getMessage()
            ],500);
        }
    }

    public function show($id){
        try{
            $plan = Plans::find($id);

            return response()->json($plan, 200);
        }

        catch(\Exception $e){
            return response()->json([
                'error'=> $e->getMessage()
            ],500);
        }
    }

    public function update(Request $request, $id){
        try{
            $update = Plans::where('id', $id)->update($request->all());
            return response()->json([
                'status'=> 'success',
                'message'=> 'Plan has been updated successfully'
            ], 200);
        }

        catch(\Exception $e){
            return response()->json([
                'error'=> $e->getMessage()
            ],500);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Associate;
use Illuminate\Http\Request;

class AssociateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $associates = Associate::all();
        return response()->json([
            'code'=> 200,
            'status' => 'success',
            'associates' => $associates
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $json = $request->input('json', null);
        $params_array = json_decode($json, true);
        $data =[
            'code' => 400,
            'status' => 'error',
            'param1' => $json,
            //'param2' => $params_array['salary'],
            //'param3' => $params_array['department_id'],
            'mesage' => 'Associate not saved'
        ];
        if(!empty($params_array)){
            $validate = \Validator::make($params_array,[
                'name' => 'required',
                'salary' =>'required',
                'department_id' => 'required'
            ]);
            if(!$validate->fails()){
                $associate = new Associate();
                $associate->name = $params_array['name'];
                $associate->salary = $params_array['salary'];
                $associate->department_id = $params_array['department_id'];
                $associate->save();
                $data = [
                    'code' => 200,
                    'status' => 'success',

                    'associate' => $associate
                ];
            }

        }
        return response()->json($data,$data['code']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Associate $associate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Associate $associate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Associate $associate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Associate $associate)
    {
        //
    }
}

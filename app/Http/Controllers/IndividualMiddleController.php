<?php

namespace App\Http\Controllers;

use App\Models\Corporate\IndividualMiddle;
use Illuminate\Http\Request;

class IndividualMiddleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $middle = IndividualMiddle::get();
        return view('services.individualmiddle.index',compact('middle'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.individualmiddle.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
             // Validate the incoming request data
            $request->validate([
                'title' => 'required|unique:individual_middles,title', // Required and must be unique in the corporate_middles table
                'description' => 'required', // Required
            ]);
            $data=new IndividualMiddle;
            $data->title=$request->title;
            $data->icon=$request->icon;
            $data->description=$request->description;
            if($data->save()){
                $this->notice::success('Successfully saved');
                return redirect()->route('individualmiddle.index');
            }
        }catch(Exception $e){
            //dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(IndividualMiddle $individualMiddle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $middle=IndividualMiddle::findOrFail(encryptor('decrypt',$id));
        return view('services.individualmiddle.edit',compact('middle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            // Validate the incoming request data
            $request->validate([
                'title' => 'required|unique:individual_middles,title,' . encryptor('decrypt',$id), // Unique title, excluding the current record
                'description' => 'required', // Required
            ]);
            $data=IndividualMiddle::findOrFail(encryptor('decrypt',$id));
            $data->title=$request->title;
            $data->icon=$request->icon;
            $data->description=$request->description;
            if($data->save()){
                $this->notice::success('Successfully Updated');
                return redirect()->route('individualmiddle.index');
            }
        }catch(Exception $e){
            //dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=IndividualMiddle::findOrFail(encryptor('decrypt',$id));
        if($data->delete()){
            $this->notice::success('Successfully Deleted');
            return redirect()->route('individualmiddle.index');
        }
    }
}
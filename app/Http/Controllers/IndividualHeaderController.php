<?php

namespace App\Http\Controllers;

use App\Models\Corporate\IndividualHeader;
use Illuminate\Http\Request;

class IndividualHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $header = IndividualHeader::get();
        return view('services.individualheader.index',compact('header'));



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('services.individualheader.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $data=new IndividualHeader;
            $data->title=$request->title;
            $data->description=$request->description;
            $data->status = $request->status;
            if($data->save()){
                $this->notice::success('Successfully saved');
                return redirect()->route('individualheader.index');
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
    public function show(IndividualHeader $individualHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $header=IndividualHeader::findOrFail(encryptor('decrypt',$id));
        return view('services.individualheader.edit',compact('header'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $data=IndividualHeader::findOrFail(encryptor('decrypt',$id));
            $data->title=$request->title;
            $data->description=$request->description;
            $data->status = $request->status;
            if($data->save()){
                $this->notice::success('Successfully saved');
                return redirect()->route('individualheader.index');
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
        $data=IndividualHeader::findOrFail(encryptor('decrypt',$id));
        if($data->delete()){
            $this->notice::success('Successfully saved');
            return redirect()->route('individualheader.index');
        }
    }
}
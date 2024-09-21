<?php

namespace App\Http\Controllers;

use App\Models\Corporate\CorporateHeader;
use Illuminate\Http\Request;

class CorporateHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $header = CorporateHeader::get();
        return view('services.corporateheader.index',compact('header'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.corporateheader.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $data=new CorporateHeader;
            $data->title=$request->title;
            $data->description=$request->description;
            $data->status = $request->status;
            if($data->save()){
                $this->notice::success('Successfully saved');
                return redirect()->route('corporateheader.index');
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
    public function show(CorporateHeader $corporateHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $header=CorporateHeader::findOrFail(encryptor('decrypt',$id));
        return view('services.corporateheader.edit',compact('header'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       try{
            $data=CorporateHeader::findOrFail(encryptor('decrypt',$id));
            $data->title=$request->title;
            $data->description=$request->description;
            $data->status = $request->status;
            if($data->save()){
                $this->notice::success('Successfully Updated');
                return redirect()->route('corporateheader.index');
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
        $data=CorporateHeader::findOrFail(encryptor('decrypt',$id));
        if($data->delete()){
            $this->notice::success('Successfully Deleted');
            return redirect()->route('corporateheader.index');
        }
    }
}
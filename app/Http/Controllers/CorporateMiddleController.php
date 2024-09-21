<?php

namespace App\Http\Controllers;

use App\Models\Corporate\CorporateMiddle;
use Illuminate\Http\Request;

class CorporateMiddleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $middle = CorporateMiddle::get();
        return view('services.corporatemiddle.index',compact('middle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.corporatemiddle.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
             // Validate the incoming request data
            $request->validate([
                'title' => 'required|unique:corporate_middles,title', // Required and must be unique in the corporate_middles table
                'description' => 'required', // Required
            ]);
            $data=new CorporateMiddle;
            $data->title=$request->title;
            $data->icon=$request->icon;
            $data->description=$request->description;
            if($data->save()){
                $this->notice::success('Successfully saved');
                return redirect()->route('corporatemiddle.index');
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
    public function show(CorporateMiddle $corporateMiddle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $middle=CorporateMiddle::findOrFail(encryptor('decrypt',$id));
        return view('services.corporatemiddle.edit',compact('middle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        try{
            // $id = encryptor('decrypt', $encryptedId);
            // $request->validate([
            // 'title' => [
            //         'required',
            //         Rule::unique('corporate_middles', 'title')->ignore($id),
            //     ],
            //     'description' => 'required',
            // ]);
            
            
            $request->validate([
                'title' => 'required|unique:corporate_middles,title,' .encryptor('decrypt',$id).',id',
                'description' => 'required', // Required
            ]);
            $data=CorporateMiddle::findOrFail(encryptor('decrypt',$id));
            $data->title=$request->title;
            $data->icon=$request->icon;
            $data->description=$request->description;
            if($data->save()){
                $this->notice::success('Successfully saved');
                return redirect()->route('corporatemiddle.index');
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
        $data=CorporateMiddle::findOrFail(encryptor('decrypt',$id));
        if($data->delete()){
            $this->notice::success('Successfully saved');
            return redirect()->route('corporatemiddle.index');
        }
    }
}
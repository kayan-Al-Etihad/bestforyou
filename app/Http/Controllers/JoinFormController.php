<?php

namespace App\Http\Controllers;

use App\Models\JoinForm;
use Illuminate\Http\Request;

class JoinFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.pages.join');
    }

    public function AdminHomePage()
    {
        $messages = JoinForm::paginate(10);
        return view('backend.join.index' ,compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|string',
            'email'=>'required',
            'city'=>'required',
            'phone'=>'required|min:10',
            'cv'=>'required',
        ]);
        $data = $request->all();
        if($request->hasFile('cv')){
            $cv = $request->file('cv');
            $cv_name = $cv->getClientOriginalName();
            $filepath = public_path('images/');
            move_uploaded_file($_FILES['cv']['tmp_name'], $filepath.$cv_name);
            $path = $cv_name;
            $data['cv'] = $path;
        }
        $join=JoinForm::create($data);
        // dd($join);
        return redirect()->back()->with('success','Your Application have been submitted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $messages=JoinForm::findOrFail($id);
        $messages->delete();
        return redirect()->back()->with('success','Application successfully deleted');
    }
}

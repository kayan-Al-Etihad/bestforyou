<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackRequest;
use App\Models\Product_Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Front.product.show');
    }

    // public function showinAdminSide()
    // {
    //     $feedbacks = Feedback::all()->where('status' , '==' , '0');
    //     return view('admin.feedback.index' ,['feedbacks' => $feedbacks]);
    // }

    // public function aproved()
    // {
    //     $feedbacks = Feedback::all()->where('status' , '==' , '1');
    //     return view('admin.feedback.aproved' ,['feedbacks' => $feedbacks]);
    // }

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
    public function store(FeedbackRequest $request)
    {
        dd("kugiug");
        $valdated = $request->all();
        $feedback = Product_Feedback::create($valdated);
        $product = $feedback->product_id;
        $feedback->save();
        return redirect()->route('front.show', compact(['product']))->with('success' ,'The feedback has been sent successfully');
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
        //
    }
}

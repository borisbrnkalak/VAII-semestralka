<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::with('user')->get();
        return view('pages.testimonials', compact('feedbacks'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            "subject" => "required|string|max:100", "message" => "required|min:3|max:2000",
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput(request()->all());
        }

        $feedback_data = $validator->validated();
        $feedback_data["user_id"] = auth()->user()->id;

        Feedback::create($feedback_data);
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        return view('pages.edit', compact('feedback'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedback $feedback)
    {
        $validator = Validator::make($request->all(), [
            "subject" => "required|string|max:100", "message" => "required|min:3|max:2000",
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput(request()->all());
        }
        $feedback->subject = $validator->validated()["subject"];
        $feedback->message = $validator->validated()["message"];
        $feedback->save();
        return redirect()->route('testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        return redirect()->back();
    }
}

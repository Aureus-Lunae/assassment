<?php

namespace App\Http\Controllers;

use App\reviews;
use Illuminate\Http\Request;

class reviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reviews = reviews::with('user')
            ->orderBy('created_at','desc')
            ->simplePaginate(20);
        return view('reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reviews = new reviews();

        $reviews->rating = 5;
        $reviews->review = request('review');
        $reviews->user_id = auth()->user()->id;
        $reviews->save();
        return redirect('/reviews');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function show(reviews $reviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function edit(reviews $reviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reviews $reviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(reviews $reviews)
    {
        //
    }
}

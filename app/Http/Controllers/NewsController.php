<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;
use App\Http\Resources\NewsResources;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return News::all();
        return NewsResources::collection(News::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        //
        $news = News::create($request->validated());

        // return News::make($news);
        // return NewsResources::make($news);
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
        


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        // 
        $oldEmail = $request->oldEmail();
        $newEmail = request->newEmail();
        $findUser = News::where(['email' => $oldEmail])->first();
        $findUser -> update(['email' => $newEmail ]);
        return "Email successfully updated";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
        $email = $request->email();
        $findUser = News::where(['email' => $email])->first();
        $findUser -> delete();
        return "account successfully deleted";
    }
}

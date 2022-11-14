<?php

namespace App\Http\Controllers;

use App\Models\RssSource;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRSSResourceRequest;

class UrlController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rssSources = RssSource::orderBy('id','desc')->paginate(5);
        return view('urls.index', compact('rssSources'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('urls/create');
    }

    /**
     * @param StoreRSSResourceRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreRSSResourceRequest $request)
    {
        $validated = $request->validated();
        RssSource::create($validated);

        return redirect()->route('urls.index')->with('success','RSS source has been created successfully.');
    }

    /**
     * @param RssSource $rssSource
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(RssSource $rssSource)
    {
        return view('urls.show',compact('rssSource'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        //
        return view('urls/create');
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
     * @param  RssSource  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(RssSource $rssSource)
    {
        $rssSource->delete();
        return redirect()->route('urls.index')->with('success','RSS Source has been deleted successfully');
    }
}

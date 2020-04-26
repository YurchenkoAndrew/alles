<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PortfolioTitle;
use Illuminate\Http\Request;

class PortfolioTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\PortfolioTitle  $portfolioTitle
     * @return \Illuminate\Http\Response
     */
    public function show(PortfolioTitle $portfolioTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\PortfolioTitle  $portfolioTitle
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(PortfolioTitle $portfolioTitle)
    {
        return view('admin.portfolio.titles.edit', compact('portfolioTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\PortfolioTitle  $portfolioTitle
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, PortfolioTitle $portfolioTitle)
    {
        $portfolioTitle->update($request->toArray());
        return redirect(route('admin.portfolio.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\PortfolioTitle  $portfolioTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(PortfolioTitle $portfolioTitle)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Portfolio;
use App\Models\Admin\PortfolioTitle;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $portfolios = Portfolio::with(['items' => function($query){$query->orderBy('sort', 'ASC');}])->orderBy('sort', 'ASC')->get();
        $portfolioTitle = PortfolioTitle::all()->where('id', 1)->first();
        return view('admin.portfolio.index', compact('portfolios', 'portfolioTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $items = Portfolio::all()->count() + 1;
        $portfolio = [];
        return view('admin.portfolio.create', compact('portfolio', 'items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        Portfolio::create($request->all());
        return redirect(route('admin.portfolio.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Portfolio  $portfolio
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Portfolio $portfolio)
    {
        return view('admin.portfolio.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Portfolio  $portfolio
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Portfolio  $portfolio
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $portfolio->update($request->toArray());
        return redirect(route('admin.portfolio.show', compact('portfolio')));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Portfolio  $portfolio
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect(route('admin.portfolio.index'));
    }
}

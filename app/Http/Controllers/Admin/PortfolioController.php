<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Block;
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
        $block = Block::find(3);
        $portfolios = Portfolio::with(['items' => function($query){$query->orderBy('sort', 'ASC');}])->orderBy('sort', 'ASC')->get();
        $portfolioTitle = PortfolioTitle::all()->where('id', 1)->first();
        return view('admin.portfolio.index', compact('portfolios', 'portfolioTitle', 'block'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $block = Block::find(3);
        $items = Portfolio::all()->count() + 1;
        $portfolio = [];
        return view('admin.portfolio.create', compact('portfolio', 'items', 'block'));
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
        $block = Block::find(3);
        return view('admin.portfolio.show', compact('portfolio', 'block'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Portfolio  $portfolio
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Portfolio $portfolio)
    {
        $block = Block::find(3);
        return view('admin.portfolio.edit', compact('portfolio', 'block'));
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

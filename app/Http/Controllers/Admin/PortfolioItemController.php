<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Block;
use App\Models\Admin\Portfolio;
use App\Models\Admin\PortfolioItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioItemController extends Controller
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $block = Block::find(3);
        $portfolioItem = [];
        $filters = Portfolio::get()->sortBy('sort');
        $count = PortfolioItem::all()->count() + 1;
        return view('admin.portfolio.items.create', compact('portfolioItem', 'filters', 'count', 'block'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $path = $request->file('image')->store('image', 'public-images');
        $params = $request->all();
        $params['image'] = $path;
        PortfolioItem::create($params);
        return redirect()->route('admin.portfolio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\PortfolioItem  $portfolioItem
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(PortfolioItem $portfolioItem)
    {
        $block = Block::find(3);
        $item = PortfolioItem::with('filter')->where('id', $portfolioItem->id)->first();
        return view('admin.portfolio.items.show', compact('item', 'block'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\PortfolioItem  $portfolioItem
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(PortfolioItem $portfolioItem)
    {
        $block = Block::find(3);
        $portfolioItem = PortfolioItem::with('filter')->where('id', $portfolioItem->id)->first();
        $filters = Portfolio::get()->sortBy('sort');
        return view('admin.portfolio.items.edit', compact('portfolioItem', 'filters', 'block'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\PortfolioItem  $portfolioItem
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, PortfolioItem $portfolioItem)
    {
        if ($request->file('image') != null){
            Storage::disk('public-images')->delete($portfolioItem->image);
            $path = $request->file('image')->store('image', 'public-images');
            $params = $request->all();
            $params['image'] = $path;
            $portfolioItem->update($params);
        }
        else{
            $portfolioItem->update($request->toArray());
        }
        return redirect()->route('admin.portfolio-item.show', $portfolioItem);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Admin\PortfolioItem $portfolioItem
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(PortfolioItem $portfolioItem)
    {
        Storage::disk('public-images')->delete($portfolioItem->image);
        $portfolioItem->delete();
        return redirect()->route('admin.portfolio.index');
    }
}

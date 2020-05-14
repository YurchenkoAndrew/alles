<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WhoWeAreRequest;
use App\Models\Admin\Block;
use App\Models\Admin\WhoWeAre;
use App\Models\Admin\WhoWeAreItem;
use Illuminate\Http\Request;

class WhoWeAreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $whoWeAre = WhoWeAre::find(1);
        $block = Block::find(4);
        $whoWeAreItems = WhoWeAreItem::all();
        return view('admin.who-we-are.index', compact('whoWeAre', 'whoWeAreItems', 'block'));
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
     * @param  \App\Models\Admin\WhoWeAre  $whoWeAre
     * @return \Illuminate\Http\Response
     */
    public function show(WhoWeAre $whoWeAre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\WhoWeAre  $whoWeAre
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(WhoWeAre $whoWeAre)
    {
        $block = Block::find(4);
        return view('admin.who-we-are.edit', compact('whoWeAre', 'block'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\WhoWeAre  $whoWeAre
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(WhoWeAreRequest $request, WhoWeAre $whoWeAre)
    {
        $validated = $request->validated();
        $whoWeAre->update($request->toArray());
        return redirect(route('admin.who-we-are.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\WhoWeAre  $whoWeAre
     * @return \Illuminate\Http\Response
     */
    public function destroy(WhoWeAre $whoWeAre)
    {
        //
    }
}

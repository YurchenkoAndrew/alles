<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WhoWeAreItemRequest;
use App\Models\Admin\Block;
use App\Models\Admin\WhoWeAreItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WhoWeAreItemController extends Controller
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Admin\WhoWeAreItem $whoWeAreItem
     * @return \Illuminate\Http\Response
     */
    public function show(WhoWeAreItem $whoWeAreItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Admin\WhoWeAreItem $whoWeAreItem
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(WhoWeAreItem $whoWeAreItem)
    {
        $block = Block::find(4);
        return view('admin.who-we-are.item.edit', compact('whoWeAreItem', 'block'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Admin\WhoWeAreItem $whoWeAreItem
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(WhoWeAreItemRequest $request, WhoWeAreItem $whoWeAreItem)
    {
        $validated = $request->validated();
        if ($request->file('image') != null) {
            Storage::disk('public-images')->delete($whoWeAreItem->image);
            $path = $request->file('image')->store('image', 'public-images');
            $params = $request->all();
            $params['image'] = $path;
            $whoWeAreItem->update($params);
        } else {
            $whoWeAreItem->update($request->toArray());
        }
        return redirect()->route('admin.who-we-are.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Admin\WhoWeAreItem $whoWeAreItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(WhoWeAreItem $whoWeAreItem)
    {
        //
    }
}

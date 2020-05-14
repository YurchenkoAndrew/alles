<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientItemRequest;
use App\Models\Admin\Block;
use App\Models\Admin\ClientItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientItemController extends Controller
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
        $block = Block::find(7);
        $clientItemCount = ClientItem::all()->count() + 1;
        $clientItem = [];
        return view('admin.clients.items.create', compact('clientItem', 'block', 'clientItemCount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ClientItemRequest $request)
    {
        $validated = $request->validated();
        $path = $request->file('image')->store('image', 'public-images');
        $params = $request->all();
        $params['image'] = $path;
        ClientItem::create($params);
        return redirect()->route('admin.client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\ClientItem  $clientItem
     * @return \Illuminate\Http\Response
     */
    public function show(ClientItem $clientItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\ClientItem  $clientItem
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(ClientItem $clientItem)
    {
        $block = Block::find(7);
        return view('admin.clients.items.edit', compact('clientItem', 'block'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\ClientItem  $clientItem
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ClientItemRequest $request, ClientItem $clientItem)
    {
        $validated = $request->validated();
        if ($request->file('image') != null){
            Storage::disk('public-images')->delete($clientItem->image);
            $path = $request->file('image')->store('image', 'public-images');
            $params = $request->all();
            $params['image'] = $path;
            $clientItem->update($params);
        }
        else{
            $clientItem->update($request->toArray());
        }
        return redirect()->route('admin.client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\ClientItem  $clientItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientItem $clientItem)
    {
        Storage::disk('public-images')->delete($clientItem->image);
        $clientItem->delete();
        $slides = ClientItem::all();
        return redirect()->route('admin.client.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Block;
use App\Models\Admin\CommentItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommentItemController extends Controller
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
     * @param  \App\Models\Admin\CommentItem  $commentItem
     * @return \Illuminate\Http\Response
     */
    public function show(CommentItem $commentItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\CommentItem  $commentItem
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(CommentItem $commentItem)
    {
        $block = Block::find(6);
        return view('admin.comments.item.edit', compact('commentItem', 'block'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\CommentItem  $commentItem
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, CommentItem $commentItem)
    {
        if ($request->file('image') != null){
            Storage::disk('public-images')->delete($commentItem->image);
            $path = $request->file('image')->store('image', 'public-images');
            $params = $request->all();
            $params['image'] = $path;
            $commentItem->update($params);
        }
        else{
            $commentItem->update($request->toArray());
        }
        return redirect()->route('admin.comment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\CommentItem  $commentItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommentItem $commentItem)
    {
        //
    }
}

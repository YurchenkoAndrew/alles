<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SlideRequest;
use App\Models\Admin\Block;
use App\Models\Admin\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $block = Block::find(1);
        $slides = Slide::all();
        return view('admin.slides.index', compact('slides', 'block'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $items = Slide::all()->count() + 1;
        return view('admin.slides.create', ['slide' => [], 'items' => $items]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SlideRequest $request)
    {
        $validated = $request->validated();
        $path = $request->file('image')->store('image', 'public-images');
        $params = $request->all();
        $params['image'] = $path;
        Slide::create($params);
        return redirect()->route('admin.slides.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Slide  $slide
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Slide $slide)
    {
        $block = Block::find(1);
        return view('admin.slides.show', compact('slide', 'block'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Slide  $slide
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Slide $slide)
    {
        $block = Block::find(1);
        return view('admin.slides.edit', compact('slide', 'block'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Slide  $slide
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SlideRequest $request, Slide $slide)
    {
        $validated = $request->validated();
        if ($request->file('image') != null){
            Storage::disk('public-images')->delete($slide->image);
            $path = $request->file('image')->store('image', 'public-images');
            $params = $request->all();
            $params['image'] = $path;
            $slide->update($params);
        }
        else{
            $slide->update($request->toArray());
        }
        return redirect()->route('admin.slides.show', $slide);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Slide  $slide
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Slide $slide)
    {
        Storage::disk('public-images')->delete($slide->image);
        $slide->delete();
        $slides = Slide::all();
        return redirect()->route('admin.slides.index', compact('slides'));
    }
}

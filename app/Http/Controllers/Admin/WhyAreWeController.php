<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\WhyAreWe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WhyAreWeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $content = WhyAreWe::all();
        return view('admin.why-are-we.index', compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $content = WhyAreWe::all();
        return view('admin.why-are-we.index', compact('content'));
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
     * @param  \App\Models\Admin\WhyAreWe  $whyAreWe
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(WhyAreWe $whyAreWe)
    {
        return view('admin.why-are-we.index', compact('whyAreWe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\WhyAreWe  $whyAreWe
     * @return \Illuminate\Contracts\Foundation\Application
     */
    public function edit(WhyAreWe $whyAreWe)
    {
        return view('admin.why-are-we.edit', compact('whyAreWe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\WhyAreWe  $whyAreWe
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, WhyAreWe $whyAreWe)
    {
        if ($request->file('image_service_1') != null || $request->file('image_service_2') != null || $request->file('image_service_3') != null){
        $params = $request->all();
        if ($request->file('image_service_1') != null){
            Storage::disk('public-images')->delete($whyAreWe->image_service_1);
            $pathImage1 = $request->file('image_service_1')->store('image', 'public-images');
            $params['image_service_1'] = $pathImage1;
        }
        if ($request->file('image_service_2') != null){
            Storage::disk('public-images')->delete($whyAreWe->image_service_2);
            $pathImage2 = $request->file('image_service_2')->store('image', 'public-images');
            $params['image_service_2'] = $pathImage2;
        }
        if ($request->file('image_service_3') != null){
            Storage::disk('public-images')->delete($whyAreWe->image_service_3);
            $pathImage3 = $request->file('image_service_3')->store('image', 'public-images');
            $params['image_service_3'] = $pathImage3;
        }
            $whyAreWe->update($params);
        }

        else{
//            dd($request->toArray());
            $whyAreWe->update($request->toArray());
        }
        return redirect()->route('admin.why-are-we.index', $whyAreWe);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\WhyAreWe  $whyAreWe
     * @return \Illuminate\Http\Response
     */
    public function destroy(WhyAreWe $whyAreWe)
    {
        //
    }
}

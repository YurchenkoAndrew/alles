<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $setting = Setting::find(1);
        return view('admin.settings.index', compact('setting'));
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
     * @param \App\Models\Admin\Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Admin\Setting $setting
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Setting $setting)
    {
        return view('admin.settings.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Admin\Setting $setting
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Setting $setting)
    {
        $params = $request->all();
        if ($request->file('logo') != null || $request->file('og_image') != null) {
            if ($request->file('logo') != null) {
                Storage::disk('public-images')->delete($setting->logo);
                $path1 = $request->file('logo')->store('image/settings', 'public-images');
                $params['logo'] = $path1;
            }
            if ($request->file('og_image') != null) {
                Storage::disk('public-images')->delete($setting->og_image);
                $path2 = $request->file('og_image')->store('image/settings', 'public-images');
                $params['og_image'] = $path2;
            }
            $setting->update($params);
        } else {
            $setting->update($request->toArray());
        }
        return redirect()->route('admin.settings.index', $setting);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Admin\Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}

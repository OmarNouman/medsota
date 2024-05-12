<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    private $dir = 'backend.';

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        return view($this->dir . 'settings', compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSettingRequest  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        foreach ($request->settings as $key => $value) {
            if(!$value){
                return redirect()->back()->withErrors('Value cannot be empty');
            }
            $setting = Setting::where('key', $key);
            $setting->update(['value' => $value]);
        }
        return redirect()->back()->with('success', 'Settings updated!');
    }
}

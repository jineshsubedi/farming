<?php

namespace App\Http\Controllers;

use File;
use SweetAlert;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/dashboard');
    }
    public function setting()
    {
        $setting = \App\Models\Setting::find(1);
        return view('admin.setting', compact('setting'));
    }
    public function updateSetting(Request $request)
    {
        $this->validate($request, [
            'app_name' =>'required',
            'sub_name' =>'sometimes',
            'url' =>'required',
            'email' =>'required',
            'address' =>'required',
            'phone_number1' =>'required',
            'phone_number2' =>'sometimes',
        ]);

        $setting = \App\Models\Setting::find(1);

        $logo = $setting->logo;
        $favicon = $setting->favicon;

        if($request->hasfile('logo'))
        {
            $this->validate($request, [
                'logo' =>'required|mimes:jpg,png,jpeg,gif|max:2048',
            ]);
            $file = $request->file('logo');
            $ext = strtolower($file->getClientOriginalExtension()); 
            $logo = 'main/'.'logo-'.strtolower($file->GetClientOriginalName());
            $file->move(DIR_IMAGE.'/main/',$logo);
            if(isset($setting->logo)){
                if(File::exists(DIR_IMAGE.$setting->logo)) {
                    File::delete(DIR_IMAGE.$setting->logo);
                }
            }
        }
        if($request->hasfile('favicon'))
        {
            $this->validate($request, [
                'favicon' =>'required|mimes:jpg,png,jpeg,gif|max:2048',
            ]);
            
            $file = $request->file('favicon');
            $ext = strtolower($file->getClientOriginalExtension()); 
            $favicon = 'main/'.'favicon-'.strtolower($file->GetClientOriginalName());
            $file->move(DIR_IMAGE.'/main/',$favicon);
            if(isset($setting->favicon)){
                if(File::exists(DIR_IMAGE.$setting->favicon)) {
                    File::delete(DIR_IMAGE.$setting->favicon);
                }
            }

        }
        $data = [
            'app_name' => $request->app_name,
            'sub_name' => $request->sub_name,
            'url' => $request->url,
            'email' => $request->email,
            'address' => $request->address,
            'phone_number1' => $request->phone_number1,
            'phone_number2' => $request->phone_number2,
            'logo' => $logo,
            'favicon' => $favicon,
        ];

        \App\Models\Setting::find(1)->update($data);
        alert()->success('Success', 'Settings updated!');
        return redirect()->back();
    }
}

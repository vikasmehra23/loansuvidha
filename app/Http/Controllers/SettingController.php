<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

use App\Models\Setting;
use App\Models\Upload;


class SettingController extends Controller
{
    public function settingview(){

        $description = Setting::where('type', 'like', 'description_%')->orderBy('created_at', 'DESC')->get();
        $title = Setting::where('type', 'like', 'title_%')->orderBy('created_at', 'DESC')->get();
        $keyword = Setting::where('type', 'like', 'keyword_%')->orderBy('created_at', 'DESC')->get();
        // dd($keyword);

        return view('admin.pages.setting', compact('description', 'title', 'keyword'));
    }


    public function about(Request $request)
    {
    
        $request->validate([
            'metaselect' => 'string|in:description_,title_,keyword_',
            'type' => 'string',
            'value' => 'string',
        ]);
       
        $prefix = $request->input('metaselect');

        $name = str_replace(' ', '_', $request->type);

        $prefixedName = $prefix . $name;

        $file_value = $request->value;

        $settings = new Setting;
        $settings->type = $prefixedName;
        $settings->value = $file_value;
        $settings->save();
       
        return redirect()->back()->with('success', 'Setting added successfully.');

    }


    public function updateabout($id){

        $setting = Setting:: find($id);
         return view('admin.pages.settingsupdate', compact('setting'));
     }


     public function updateaboutpost(Request $request, $id){
        $request->validate([
            'value' => 'string',
        ]);

        $setting_value = $request->value;

        $settings = Setting::findOrFail($id);
        $settings->value = $setting_value;
        $settings->save();

        return redirect()->route('view_about')->with('success', 'Setting updated successfully');
        
    }

    public function updateaboutdelete($id){
        
        $setting = Setting::findOrFail($id);
        $setting->delete();
        return redirect()->back()->with('success', 'Setting has been deleted');
    }

    

}
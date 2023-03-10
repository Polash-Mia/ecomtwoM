<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    private static $setting,$image,$imageName,$directory,$imageUrl,$extension;
    public static function getImageUrl($request)
    {
        self::$image =$request->file('logo');
        self::$extension =self::$image->getClientOriginalExtension();
        self::$imageName = 'logo'.time().'.'.self::$extension;
        self::$directory ='website/logo/';
        self::$image->move(self::$directory,self::$imageName);

        return self::$directory.self::$imageName;
    }
    public static function newSetting($request)
    {
        self::$setting = new  Setting();
        self::$setting->logo                     = self::getImageUrl($request);
        self::$setting->mobile                    = $request->mobile;
        self::$setting->bkas                      = $request->bkas;
        self::$setting->pixel                     = $request->pixel;
        self::$setting->title                     = $request->title;
        self::$setting->facebook                  = $request->facebook;
        self::$setting->instragram                = $request->instragram;
        self::$setting->youtube                   = $request->youtube;
        self::$setting->fbpage                    = $request->fbpage;
        self::$setting->footer_description        = $request->footer_description;
        self::$setting->contact                   = $request->contact;
        self::$setting->privacy                   = $request->privacy;
        self::$setting->return                    = $request->return;
        self::$setting->term                      = $request->term;
        self::$setting->save();
    }
    public static function updateSetting($request, $id)
    {
        self::$setting = Setting::find($id);


        self::$setting->logo                      = self::getImageUrl($request);
        self::$setting->mobile                    = $request->mobile;
        self::$setting->bkas                      = $request->bkas;
        self::$setting->pixel                     = $request->pixel;
        self::$setting->title                     = $request->title;
        self::$setting->facebook                  = $request->facebook;
        self::$setting->instragram                = $request->instragram;
        self::$setting->youtube                   = $request->youtube;
        self::$setting->fbpage                    = $request->fbpage;
        self::$setting->footer_description        = $request->footer_description;
        self::$setting->contact                   = $request->contact;
        self::$setting->privacy                   = $request->privacy;
        self::$setting->return                    = $request->return;
        self::$setting->term                      = $request->term;
        self::$setting->save();
    }

    public static function deleteSetting($id)
    {
        self::$setting = Setting::find($id);
       
        self::$setting->delete();
    }
}

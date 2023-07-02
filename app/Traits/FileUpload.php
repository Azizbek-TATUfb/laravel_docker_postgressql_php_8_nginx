<?php

namespace App\Traits;
use App\Models\Attachment;
use Illuminate\Support\Facades\File;

trait FileUpload
{

    public function fileUpload($params, $request, $path)
    {
//        if ($request->hasFile('photo')) {
//            $folder = public_path() . $path;
//            if (!File::exists($folder)) {
//                File::makeDirectory($folder, 0775, true, true);
//            }
//            $file_name = 'photo_'.time() .'.'. $request->photo->extension();
//            $request->photo->move($path, $file_name);
//            $params['photo'] =$path.'/'.$file_name;
//        }
        if ($request->hasFile('attachment_id')) {
            $folder = public_path() . '/' . $path;

            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0775, true, true);
            }
            $file_name = 'photo_'.time() .'.'. $request->attachment_id->extension();
            $request->attachment_id->move($path, $file_name);
            $pathAttachment = '/'.$path.'/'.$file_name;
            Attachment::create([
                "path" => $pathAttachment,
            ]);
            $params['attachment_id'] =Attachment::where('path', $pathAttachment)->pluck('id')->first();
        }
        return $params;
    }
}

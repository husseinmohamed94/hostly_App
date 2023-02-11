<?php


namespace App\Http\Traits;


use Illuminate\Support\Facades\Storage;

trait AttachFilesTrait
{
    public function uploadFile($request,$name,$folder){
        $file_name = $request->file($name)->getClientOriginalName();

        $request->file($name)->storeAs('upload/',$folder.'/'.$file_name,'uplode_attachments');
    }



    public function deletefile($name,$folder)
    {
        $exists = Storage::disk('uplode_attachments')->exists($folder . $name);
        if ($exists) {
            Storage::disk('uplode_attachments')->delete($folder . $name);

        }
    }



}

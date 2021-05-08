<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait UploadAble
{
    /**
     * Undocumented function
     *
     * @param UploadedFile $file
     * @param [type] $folder
     * @param string $disk
     * @param [type] $filename
     * @return void
     */
    public function UploadOne(UploadedFile $file, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : Str::random(25);
        return $file->storeAs(
            $folder,
            $name . "." . $file->getClientOriginalExtension(),
            $disk
        );
    }


    public function DeleteOne($path = null, $disk = 'public')
    {
        Storage::disk($disk)->delete($path);
    }
}

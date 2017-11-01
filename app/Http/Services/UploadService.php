<?php 

namespace App\Http\Services;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class UploadService
{
	public function upload(UploadedFile $file, $dir = 'profile')
	{
		$fileExtention = $file->getClientOriginalExtension();
        $fileName = rand(100000000, 2000000000) . '.' . $fileExtention;
        $file->move(
            public_path('/uploads/' . $dir . '/'), $fileName
        );

        return $fileName;
	}

	public function remove($file = null)
	{
		$path = public_path('/uploads/' . $file);

		if(file_exists($path)){
			unlink($path);
			return true;
		}
		return false;
	}
}
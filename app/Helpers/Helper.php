<?php
   // TODO : Digunakan untuk helpers global

   use Illuminate\Support\Str;
   use Intervention\Image\File;
   use Intervention\Image\Facades\Image;

   if (!function_exists('uploadOriginalImage')) {
      /**
       * Upload gambar dengan ukuran original/sesuai file yang diupload
      *
      * @param [string] $file
      * @param [string] $name
      * @param [string] $location
      * @return void
      */
      function uploadOriginalImage($file, $name, $location)
      {
         $images = Str::slug($name) . time() . '.' . $file->getClientOriginalExtension();
         $path = storage_path('app/public/' . $location); // otomatis masuk ke folder storage

         if (!File::isDirectory($path))
         {
            File::makeDirectory($path, 0777, true, true);
         }
         Image::make($file)->save($path . '/' . $images);
         return $location . '/' . $images;
      }
   }
?>
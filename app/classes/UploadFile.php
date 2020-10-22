<?php
namespace App\Classes;

class UploadFile
{
    protected $filename;
    protected $max_filesize = 2097192;
    protected $extension;
    protected $path;

    /**
     * Get the file name
     * @return mixed
     */
    public function getName()
    {
        return $this->filename;
    }

    /**
     * Set the name of the file
     * @param $file
     * @param string $name
     */
    protected function setName($file, $name = "")
    {
        if ($name === "") 
        {
            $name = \pathinfo($file, PATHINFO_FILENAME);
        }
        $name = \strtolower(\str_replace(['-', ' '], '-', $name));
        $hash = md5(\microtime());
        $ext = $this->fileExtension($file);
        $this->filename = "{$name}-{$hash}.{$ext}";
    }

    /**
     * Set file extension
     * @param $file
     * @return mixed
     */
    protected function fileExtension($file)
    {
        return $this->extension = \pathinfo($file, PATHINFO_EXTENSION);
    }

    /**
     * Validate file size
     * @param $file
     * @return bool
     */
    public static function fileSize($file)
    {
        $fileobj = new static;
        return ($file > $fileobj->max_filesize);
    }

    /**
     * Validate file upload
     * @param $file
     * @return bool
     */
    public static function isImage($file)
    {
        $fileobj = new static;
        $ext = $fileobj->fileExtension();
        $validExt = array('jpg', 'jpeg', 'png', 'bmp', 'gif');

        return in_array(\strtolower($ext), $validExt);
    }

    /**
     * Get the path where file was uploaded
     * @return mixed
     */
    public function path()
    {
        return $this->path;
    }

    /**
     * Move the file to intended Location
     * 
     * @param $temp_path
     * @param $folder
     * @param $file
     * @param $new_filename
     * @return null|static
     */
    public static function move($temp_path, $folder, $file, $new_filename)
    {
        $fileObj = new static;
        $ds = DIRECTORY_SEPARATOR;

        $fileObj->setName($file, $new_filename);
        $file_name = $fileObj->getName();

        if (! is_dir($folder)) {
            mkdir($folder, 0777, true);
        }

        $fileObj->path = "{$folder}{$ds}{$file_name}";
        $absolute_path = BASE_PATH."{$ds}public{$ds}{$fileObj->path}";

        if (\move_uploaded_file($temp_path, $absolute_path)) {
            return $fileObj;
        }

        return null;
    }
}
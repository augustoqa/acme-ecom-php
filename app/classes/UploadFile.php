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
        $ext = $this->fileExtension();
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
}
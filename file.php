<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * For handling files, reading directories and related
 *
 * @author Mathijs
 */
class File {
    //put your code here

    public static function readDir($directory = false)
    {
        if (!$directory)
            throw new Exception('No directory given for reading');

        $files = array();

        if ($handle = opendir($directory)) {
            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != "..") {
                  $files[$file] = $file;
                }
            }
            closedir($handle);
        }

        return $files;
    }



    public static function write($path = false,$content = NULL)
    {
        if (file_exists($path))
            @unlink($path);

       $handlefile = fopen($path,'w');
       if (!$handlefile)
           throw new Exception('could not open file: '.$path);

       if (fwrite($handlefile,$content) === false)
            throw new Exception('could not write to file: '.$path);
       if(!fclose($handlefile))
            throw new Exception('could not close file: '.$path);

       return $path;
    }

    public static function read($path,$asphp = false)
    {
        if (!$asphp)
        {
            $content = @file_get_contents($path);

            if ($content === false)
                throw new Exception('File could not be read: '.$path);

       // die ($content);
        }
        else
        {
            ob_start();

            require($path);
            $content = ob_get_contents();
            ob_end_clean();
        }
        return $content;
    }

    public static function extension($filename)
    {
        $ext = preg_replace('/^.*\.([^.]+)$/D', '$1', $filename);
        return strtolower($exts[(count($exts)-1)]);
    }

    public static function LoadFileStructure()
    {
        if (!file_exists($GLOBALS['app'] -> config -> root.'.filestructure'))
            File::buildFileStructure();

        $GLOBALS['FILESTRUCTURE'] = unserialize(File::read($GLOBALS['app'] -> config -> root.'.filestructure'));
    }

    public static function buildFileStructure()
    {
        $structure = self::fileStructureArray();
        File::write($GLOBALS['app'] -> config -> root.'.filestructure',serialize($structure));
    }

    public static function fileStructureArray($path = false)
    {
        if (!$path)
            $path = $GLOBALS['app'] -> config -> root;

        $file_array = array();

        $files = self::readDir($path);

        foreach ($files as $file)
        {
            if (is_dir($path.$file))
            {
                $file_array = $file_array + self::fileStructureArray($path.$file.sls);
            }
            else
            {
                $file_array[$path.$file] = $path.$file;
            }
        }

        return $file_array;
    }

    public function upload($from,$to)
    {
        if (file_exists($to))
        {
            unlink($to);
        }
        return move_uploaded_file($from, $to);
    }

    public static function getExtension($filename,$keepwierdextensions = false)
    {
        $ext = @strtolower(@end(@explode(".", $filename)));
        if ($ext == 'jpeg' && !$keepwierdextensions)
            $ext = 'jpg';
        return $ext;
    }
    
    public static function getFilename($path)
    {
        $name = end(explode('\\',$path));//windows
        $name = end(explode('/',$path));//not windows
        return $name;
    }

    /*
     * Recursive make folder, if depth is 20 dirs then it should create those if they do not exists
     */
    public static function createDir($path)
    {
        $path_exclude_root = str_replace($GLOBALS['app'] -> config -> root,'',$path);

        $split = explode(sls,$path_exclude_root);

        $path = $GLOBALS['app'] -> config -> root;

        foreach($split as $dir)
        {

            if ($dir == '')
                continue;

            $path.= $dir.sls;
            if (!is_dir($path))
                mkdir($path);
        }
    }

}
?>

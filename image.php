<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of image
 *
 * @author Mathijs
 */
class Image {
   public static function resize($imgSrc,$width,$height) {

        list($orig_width, $orig_height) = getimagesize($imgSrc);

        $ex = File::getExtension($imgSrc);

        if ($ex == 'png')
            $myImage = imagecreatefrompng($imgSrc);
        elseif ($ex == 'jpeg' || $ex == 'jpg')
            $myImage = imagecreatefromjpeg ($imgSrc);
        else
            throw new exception('Alleen PNG en JPG word ondersteund');

       // $ratio_orig = $width_orig/$height_orig;

       // if ($width/$height > $ratio_orig) {
//           $new_height = $width/$ratio_orig;
//           $new_width = $width;
//        } else {
//           $new_width = $height*$ratio_orig;
//           $new_height = $height;
//        }

        $new_width = $orig_width;//predefine in case it's smaller
        $new_height = $orig_height;//predefine in case it's smaller

        if ($orig_width > $width)
        {
            $new_width = $width;
            $new_height = $orig_height * ($width / $orig_width);
        }
        
        if ($new_height > $height)
        {
            $new_height = $height;
            $new_width = $orig_width * ($height / $orig_height);
        }

        $x_mid = $new_width/2;  //horizontal middle
        $y_mid = $new_height/2; //vertical middle

        //$process = imagecreatetruecolor(round($new_width), round($new_height));

        $new_image = imagecreatetruecolor($new_width, $new_height);


        if ($ex == 'jpeg' || $ex == 'jpg')
            $source = imagecreatefromjpeg($imgSrc);
        else
            $source = imagecreatefrompng($imgSrc);

        imagecopyresampled($new_image, $source, 0, 0, 0, 0, $new_width, $new_height, $orig_width, $orig_height);

        return $new_image;
   }
   public static function cropImage($imgSrc,$thumbnail_width,$thumbnail_height) { 
    //getting the image dimensions
    list($width_orig, $height_orig) = getimagesize($imgSrc);

    $ex = File::getExtension($imgSrc);

    if ($ex == 'png')
        $myImage = imagecreatefrompng($imgSrc);
    elseif ($ex == 'jpeg' || $ex == 'jpg')
        $myImage = imagecreatefromjpeg ($imgSrc);

    $ratio_orig = $width_orig/$height_orig;

    if ($thumbnail_width/$thumbnail_height > $ratio_orig) {
       $new_height = $thumbnail_width/$ratio_orig;
       $new_width = $thumbnail_width;
    } else {
       $new_width = $thumbnail_height*$ratio_orig;
       $new_height = $thumbnail_height;
    }

    $x_mid = $new_width/2;  //horizontal middle
    $y_mid = $new_height/2; //vertical middle

    $process = imagecreatetruecolor(round($new_width), round($new_height));

    imagecopyresampled($process, $myImage, 0, 0, 0, 0, $new_width, $new_height, $width_orig, $height_orig);
    $thumb = imagecreatetruecolor($thumbnail_width, $thumbnail_height);
    imagecopyresampled($thumb, $process, 0, 0, ($x_mid-($thumbnail_width/2)), ($y_mid-($thumbnail_height/2)), $thumbnail_width, $thumbnail_height, $thumbnail_width, $thumbnail_height);

    imagedestroy($process);
    imagedestroy($myImage);

    return $thumb;
   }

    public static function write($path = false,$content = NULL)
    {
        if (file_exists($path))
            @unlink($path);

          switch (File::getExtension($path)){

          case('png'):
              imagepng($content,$path,9);
          break;
          case ('jpg'):
              imagejpeg($content,$path,100);
          break;
          case ('gif'):
              imagegif($content,$path);
          break;
          default:
              throw new Exception('No proper image type given to upload.'.$path);
      }

      return $path;
      
    }
    public static function greyScale($source = false)
    {
        if (!$source)
            return false;
        if (!file_exists($source))
            return false;

       $pathinfo = (pathinfo($source));
       $ex = $pathinfo['extension'];

        if ($ex == 'png')
            $im = imagecreatefrompng($source);
        elseif ($ex == 'jpeg' || $ex == 'jpg')
            $im = imagecreatefromjpeg ($source);
        else
            return false;

        list($width_orig, $height_orig) = getimagesize($source);

        $new_width = $width_orig;
        $new_height = $height_orig;

        imagecopyresampled($im, $im, 0, 0, 0, 0, $new_width, $new_height, $width_orig, $height_orig);

        if ($ex == 'png')
            imagepng($im,$source);
        elseif ($ex == 'jpeg' || $ex == 'jpg')
            imagejpeg($im,$source,100);

        imagefilter($im, IMG_FILTER_GRAYSCALE);//make grey first

        return $im;
    }
    
    public static function colorScale($source = false,$r = 0,$g = 0,$b = 0)
    {
        if (!$source)
            return false;
        if (!file_exists($source))
            return false;

       $pathinfo = (pathinfo($source));
       $ex = $pathinfo['extension'];

        if ($ex == 'png')
            $im = imagecreatefrompng($source);
        elseif ($ex == 'jpeg' || $ex == 'jpg')
            $im = imagecreatefromjpeg ($source);
        else
            return false;

        list($width_orig, $height_orig) = getimagesize($source);

        $new_width = $width_orig;
        $new_height = $height_orig;

        imagecopyresampled($im, $im, 0, 0, 0, 0, $new_width, $new_height, $width_orig, $height_orig);

        if ($ex == 'png')
            imagepng($im,$source);
        elseif ($ex == 'jpeg' || $ex == 'jpg')
            imagejpeg($im,$source,100);

        imagefilter($im, IMG_FILTER_GRAYSCALE);//make grey first
        imagefilter($im, IMG_FILTER_COLORIZE, 63, 16, 111);
        
        return $im;
    }
    
    public static function setQuality($source,$thumb,$quality = 1){
               
        if (!$source)
            return false;
//        echo "'".$source."'";
        if (!file_exists($source))
            return false;
//        echo "'".$source."'";die;
       $pathinfo = (pathinfo($source));
       $ex = $pathinfo['extension'];
       
        if ($ex == 'png')
            $im = imagecreatefrompng($source);
        elseif ($ex == 'jpeg' || $ex == 'jpg')
            $im = imagecreatefromjpeg ($source);
        else
            return false;
        
        list($width_orig, $height_orig) = getimagesize($source);

        $new_width = $width_orig;
        $new_height = $height_orig;
        imagealphablending( $im, false );
        imagesavealpha( $im, true );
        imagecopyresampled($im, $im, 0, 0, 0, 0, $new_width, $new_height, $width_orig, $height_orig);

        str_replace("png","jpg",$source);
        
        $e = explode('/',$source);
        $e[count($e)-1] = "low.".$e[count($e)-1];
        
        if ($ex == 'jpg'){
            imagejpeg($im,$thumb,10*$quality);   
        } else {
            imagepng($im,$thumb,$quality);
        }
        
        imagedestroy($im);
        
        return $newsource;       
    }
}
?>

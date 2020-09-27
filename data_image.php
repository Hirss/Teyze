<?php
if(isset($_POST["titre"], $_POST["texte"], $_POST["image"])){
    $titre = htmlspecialchars(addslashes($_POST["titre"]));
    $texte = htmlspecialchars(addslashes($_POST["texte"]));
    $image = htmlspecialchars(addslashes($_POST["image"]));
    
    /*
    $jpg = htmlspecialchars(addslashes($_FILES["image"]));

    //JPG -> PNG
   if(exif_imagetype($_FILES['image']['tmp_name']) ==  IMAGETYPE_JPEG) {
        $newpng = 'image.png';
        $png = imagepng(imagecreatefromjpeg($_FILES['image']['tmp_name']), $newpng);
    }
    else{
        $newpng = 'image.png';
    }
    */
    
    header("Content-type: image/png");
    $image = imagecreatefrompng($image);
    $orange = imagecolorallocate($image, 10, 210, 60);

    /* Flouter une image
    $image = imagescale($image, $YOU_IMG_WIDTH/40, $YOU_IMG_WIDTH/40);
    imagefilter($image, IMG_FILTER_GAUSSIAN_BLUR);
    $image = imagescale($image, $YOU_IMG_WIDTH, $YOU_IMG_HEIGHT);
    */
    
    $px_titre = (imagesx($image) - 7.5 * strlen($titre)) / 2;
    $px_texte = (imagesx($image) - 7.5 * strlen($texte)) / 2;
    $font = imageloadfont("./arial.gdf");
    imagestring($image, $font, 200, 200, $titre, $orange);
    imagestring($image, $font, 320, 300, $texte, $orange);
    imagepng($image);
    imagedestroy($image);

}

?>


<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 05/12/16
 * Time: 21:40
 */
namespace ilanvac\services;

use FileUpload\FileUpload;
use FileUpload\Validator\MimeTypeValidator;
use FileUpload\Validator\SizeValidator;

require "vendor/autoload.php";

class FileUploadExtend extends FileUpload{


    public function validateFiles(){



        /*check size*/
        $mimeTypeValidator = new MimeTypeValidator(["image/png", "image/jpeg",'image/jpeg']);
        $sizeValidator = new SizeValidator("2M");
    }

}
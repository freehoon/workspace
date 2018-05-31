<?php
/**
 * Created by PhpStorm.
 * User: dhkang
 * Date: 2018. 5. 31.
 * Time: AM 11:06
 */


$filedir = date("Ymd");

$filename = $_POST["filename"];

$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/upload/';

$deletefile = $uploaddir.$filedir.'/'.$filename;

if(file_exists($deletefile)){
    if(!unlink($deletefile)) {
        echo "파일을 삭제 하지 못했습니다.";
    }else{
        echo "deleted";
    }
}else{
    echo "파일이 존재하지 않습니다.";
}
<?php
/**
 * Created by PhpStorm.
 * User: dhkang
 * Date: 2018. 6. 1.
 * Time: PM 3:31
 */

if($_FILES["upload"]["size"]>0){
    $saveDir = $_SERVER['DOCUMENT_ROOT'].'/upload/';

    $uploadDate = date("Ymd");
    $uploadTime = date("YmdHis");

    $fileUploadDir = $saveDir.'/'.$uploadDate;

    if(!is_dir($fileUploadDir)){
        mkdir($fileUploadDir);
    }

    //오리지널 파일 이름.확장자
    $ext = substr(strrchr($_FILES["upload"]["name"], "."), 1);
    $ext = strtolower($ext);

    if($ext == "jpg" || $ext == "gif" || $ext == "png"){
        $saveFileName = $uploadTime.'.'.$ext;
    }else{
        exit();
    }

    if(move_uploaded_file($_FILES["upload"]["tmp_name"], $fileUploadDir.'/'.$saveFileName)){
        $fileUrl = '/upload/'.$uploadDate.'/'.$saveFileName;
        echo '{"filename" : "'.$saveFileName.'", "uploaded" : 1, "url":"'.$fileUrl.'"}';
    }else{
        echo "저장실패".$_FILES["error"];
        exit();
    }
}else{
    echo "파일이 HTTP POST 방식으로 업로드 되지 않았습니다.";
}
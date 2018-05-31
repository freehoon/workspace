<?php
/**
 * Created by PhpStorm.
 * User: dhkang
 * Date: 2018. 5. 30.
 * Time: PM 3:10
 */

if(is_uploaded_file($_FILES["file"]["tmp_name"])){
    echo "파일이 HTTP POST 방식으로 정상적으로 업로드 되었습니다.";
    $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/upload/';

    $current_time = time();
    $time_info = getdate($current_time);
    $date_filedir = date("YmdHis");

    $uploaddir = $uploaddir.date("Ymd");

    //echo '업로드 경로 : '. $uploaddir;
    if(!is_dir($uploaddir)){
        mkdir($uploaddir);
    }


    //오리지널 파일 이름.확장자
    $ext = substr(strrchr($_FILES["file"]["name"], "."), 1);
    $ext = strtolower($ext);

    if($ext == "jpg" || $ext == "gif" || $ext == "png"){
        $savefilename = $date_filedir.'.'.$ext;
    }else{
        echo "허용된 확장자가 아닙니다. (" . $ext . ")";
        exit();
    }

    $uploaddirfile = $uploaddir.'/'.$savefilename;

    echo "\n".$uploaddirfile;
    //exit();
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $uploaddirfile)){
        echo "저장 성공";
    }else{
        echo "저장실패".$_FILES["error"];
        exit();
    }
}else{
    echo "파일이 HTTP POST 방식으로 업로드 되지 않았습니다.";
}
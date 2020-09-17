<?php
// 임시 디렉토리 생성
$tmpPath = $_SERVER['DOCUMENT_ROOT'].'/images';
$path = $tmpPath.'/ukhyun2402';
if(!file_exists($path)){
    mkdir($path,0777,true);
}
// // if (file_exists($path. '/' . $_FILES["upload"]["name"]))
// // {
// //     $result = array(
// //         'filename'=>$_FILES["upload"]["name"],
// //         'uploaded'=>0,
// //         'url'=> $path . "/" . $_FILES["upload"]["name"],
// //         'error'=>array(
// //             "message"=>"파일이 중복되었습니다!",
// //         )
// //     );
// //     echo json_encode($result);
// // }
// else
list($fileName, $fileExtension) = explode('.',$_FILES["upload"]["name"]);
$file = uniqid($fileName."_") . "." . $fileExtension;
move_uploaded_file($_FILES["upload"]["tmp_name"],  $path . "/". $file) ;
$result = array(
    'filename'=>$file,
    'uploaded'=>1,
    'url'=> "/images/ukhyun2402/" . $file);
echo json_encode($result);
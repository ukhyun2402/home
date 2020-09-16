<?php
if (file_exists("images/" . $_FILES["upload"]["name"]))
{
 echo $_FILES["upload"]["name"] . " already exists. ";
}
else
{
 move_uploaded_file($_FILES["upload"]["tmp_name"],
 "images/" . $_FILES["upload"]["name"]);
    $result = array('filename'=>$_FILES["upload"]["name"],'uploaded'=>1,'url'=>"images/" . $_FILES["upload"]["name"]);
    echo json_encode($result);
}
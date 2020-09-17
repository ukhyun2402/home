<?php
    function htmlchecker(string $html){
        return htmlspecialchars($html);
    }
    include $_SERVER['DOCUMENT_ROOT'].'/class/db.php';

    $tmpArray = array_map('htmlchecker',$_POST);
    extract($tmpArray);
    
    /*
    * @param $title
    * @param $editor
    */
    $id = 1;

    $db = new db();
    $sql = "INSERT INTO TMP_BOARD (USER_ID,TITLE,CONTENT) VALUES(?,?,?)";

    $stmt = $db->conn->prepare($sql);
    $stmt->bind_param('dss',$id,$title,$editor);

    $stmt->execute();
    echo $stmt->sqlstate;
    printf("%d Row inserted", $stmt->affected_rows);

    header('Location: /board.php');

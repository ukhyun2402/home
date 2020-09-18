<?php
class Load_Board
{
    private $table_name;
    private $mysql;
    private $limit;
    private $db_name;

    public function __construct(String $table_name, int $list = 10)
    {
        $this->table_name = strtoupper($table_name);
        $this->limit = $list;
        $this->db_name = "ukhyun2402";

        $this->mysql = new mysqli('localhost', 'ukhyun2402', 'dnr68425', 'ukhyun2402');
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
    }

    public function __destruct()
    {
        $this->mysql->close();
    }

    public function check_database()
    {
        $sql = "SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = ? AND TABLE_NAME = ? LIMIT 1";
        if ($stmt = $this->mysql->prepare($sql)) {

            $stmt->bind_param("ss", $this->db_name, $this->table_name);
            $stmt->execute();

            $stmt->bind_result($table_exists);
            $stmt->fetch();
            $stmt->close();
            return $table_exists ? 1 : 0;
        } else {
            printf(mysqli_error($this->mysql));
        }
    }

    public function load_list(string $table_name)
    {
        $sql = "SELECT B.ID, B.TITLE, B.WRITE_DATE, U.EMAIL FROM $table_name B LEFT JOIN USER U ON U.ID = B.USER_ID ORDER BY B.WRITE_DATE DESC";

        if ($stmt = $this->mysql->prepare($sql)) {
            $stmt->execute();
            $stmt->bind_result($id, $title, $writeDate, $userEmail);

            while ($stmt->fetch()) {
                printf("<tr onclick=\"location.href='/view.php?id=%d'\">
                            <td>%s</td>
                            <td>%s</td>
                            <td class='board-column-date' >%s</td>
                        </tr>", $id, $title, $userEmail, explode(' ', $writeDate)[0]);
            }
        } else {
            printf(mysqli_error($this->mysql));
        }
    }

    public function load_data(int $board_id){
        $sql = "SELECT B.TITLE, B.CONTENT, B.WRITE_DATE, U.EMAIL FROM $this->table_name B LEFT JOIN USER U ON U.ID = B.USER_ID WHERE B.ID = ?";
        
        if($stmt = $this->mysql->prepare($sql)){
            $stmt->bind_param("d", $board_id);
            $stmt->execute();
            $stmt->bind_result($title, $content, $writeDate,$writer);

            while($stmt->fetch()) {
                printf(
                    "
                    <div id='view-container'>
                        <div id='view-header'>
                            <div id='title'>
                                %s
                            </div>
                            <div>
                                %s
                            </div>
                        </div>
                        <div id='content-container'>
                            <div id='content'>
                                %s
                            </div>
                        </div>
                    </div>
                    "
                ,$title, $writer, htmlspecialchars_decode($content));
            }
        }
        else {
            printf(mysqli_error($this->mysql));
        }
    }
}

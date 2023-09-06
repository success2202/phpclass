<?php

class Test extends DbConnect {

    public function getUsers(){
        $sql = "SELECT * FROM teacher";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){
            echo $row['sname'] . '<br>';
        }
    }
}
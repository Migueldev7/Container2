<?php

class DataBase
{

    private function connect()
    {
        $this->conn = new mysqli("localhost:8889", "teste", "admin", "container");
    }

    private function close()
    {
        $this->conn->close();
    }

    public function execute($sql)
    {
        $this->connect();
        $resultObject = $this->conn->query($sql);

        if (!($resultObject instanceof mysqli_result)) return;

        $resultArr = [];

        while ($r = mysqli_fetch_assoc($resultObject)) {
            $resultArr[] = $r;
        }
        $this->close();
        return $resultArr;
    }
}

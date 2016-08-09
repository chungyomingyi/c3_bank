<?php
require_once("models/Config.php");

class Trade {
    var $DBH;

    function __construct()
    {
        $db_con = new DB_con();
        $db = $db_con->db;
        $this-> DBH = $db;
    }

    //確認帳號及金額是否存在，再做後續交易的動作
    function checkAccount($name, $trade, $money)
    {
        $dbh = $this->DBH;

        if ($name != null && $total != null)
        {
            $slet = $dbh->prepare("SELECT * FROM `bank` WHERE `name` = :name");
            $slet->bindParam(':name', $name);
            $slet->execute();

            foreach($slet->fetchAll() as $data);
            if($trade == "saveMoney")
            {
                $data['money'] = $data['money'] + $money ;

                $stmt = $dbh->prepare("UPDATE `bank` SET `money` = :money WHERE `name` = :name");
                $stmt->bindParam(':money', $data['money']);
                $stmt->bindParam(':name', $name);
                $stmt->excute();
                $dbh = null;

            } elseif ($trade = "getMoney") {
                if ($data["money"] > $money)
                {
                    $data["money"] = $data["money"] - $money;

                    $stmt = $dbh->prepare("UPDATE `bank` SET `money` = :money WHERE `name`= :name");
                    $stmt->bindParam(':money', $data['money'] );
                    $stmt->bindParam(':name', $name );
                    $stmt->execute();
                    $dbh = null;

                } else {
                    throw new Exception("餘額不足夠");
                }
            }

        } else {
            throw new Exception("請輸入正確資料");
        }


    }
}





?>
<?php

class HomeController extends Controller
{
    //首頁
    function bank()
    {
        $this->view("bank");
    }

    function transMoney()
    {
        $Bank = $this->model("trade");
        // 帳戶  存取動作  交易金額
        $GuestsMoney = $Bank->Trans($_POST['name'], $_POST['money']);  //查詢到帳號的餘額

        $this->view("bank",$GuestsMoney);
    }

}


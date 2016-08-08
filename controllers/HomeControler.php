<?php 
    
    class HomeController extends Controller {
        
        //呼叫首頁
        function index(){
            $this -> view("bank");
        }
        
        function changeMoney(){
            $this->models();
        }
        
    }




?>
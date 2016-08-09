<?php

class Controller {
    public function model($model) {
        require_once "../c3_bank/models/$model.php";
        return new $model ();
    }
    public function view($view, $data = Array()) {
        require_once "../c3_bank/views/$view.php";
    }
}

?>
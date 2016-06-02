<?php
abstract class Data {
     
    protected $data = array();
    
    public function showData() {
        if(!empty($this->data)) {
            echo '<pre>';
            print_r($this->data);
            echo '</pre>';
        }
    }
}

<?php

include("DataDriver.php");
include("Data.php");

class DataDB extends Data implements DataDriver {
    public function getData() {
        $this->data = array('db' => array(
           'Wiersz 1',
           'Wiersz 2',
           'Wiersz 3',
		   'Wiersz 4',
		   'Wiersz 5',
        ));
    }
}


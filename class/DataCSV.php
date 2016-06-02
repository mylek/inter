<?php
class DataCSV extends Data implements DataDriver {
    public function getData() {
        $this->data = array('CSV' => array(
           'Wiersz 1',
           'Wiersz 2',
           'Wiersz 3',
        ));
    }
}

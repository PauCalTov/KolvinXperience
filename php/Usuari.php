<?php

require_once('DBAbstractModel.php');

class Usuari extends DBAbstractModel {

    function __construct() {
        $this->db_name = "a18paucaltov_g1";
    }

    public function selectTotsUsuaris() {
        $this->query = "SELECT id, nom FROM usuari";
        $this->get_results_from_query();

        if (count($this->rows)==1) {
            foreach ($this->rows[0] as $property => $value)
            $this->$property = $value;
        }

        return $this->rows;
    }

}

?>
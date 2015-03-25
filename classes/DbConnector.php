<?php

/**
 * Created by PhpStorm.
 * User: Josh Bowers
 * Date: 3/23/2015
 * Time: 9:20 PM
 */
class DbConnector {

    private $conn = null;
    private $e = null;

    /**
     *
     */
    public function __construct() {
        $this->conn = oci_connect('GREENTEAM', 'teamgreen', 'pythia.etsu.edu:1521/CSDB');
        if (!$this->conn) {
            $this->e = oci_error();
            trigger_error(htmlentities($this->e['could not connect'], ENT_QUOTES), E_USER_ERROR);
        }
    }

    /**
     * @return null|resource
     */
    public function getConn(){
        return $this->conn;
    }

    /**
     * @return array|null
     */
    public function getError(){
        return $this->e;
    }

}
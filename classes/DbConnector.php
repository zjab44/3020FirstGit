<?php

/**
 * Created by PhpStorm.
 * User: Josh Bowers
 * Date: 3/23/2015
 * Time: 9:20 PM
 */
class DbConnector {

    private $conn;

    /**
     * @param $conn
     */
    function __construct($conn) {
        $this->conn = $conn || null;
    }

    /**
     * @param $conn
     */
    public function setDb($conn) {
        $this->$conn = $conn;
    }

    /**
     *
     */
    public function useDefaultDb() {
        $conn = oci_connect('GREENTEAM', 'teamgreen', 'pythia.etsu.edu:1521/CSDB');
        if (!$conn) {
            $e = oci_error();
            trigger_error(htmlentities($e['could not connect'], ENT_QUOTES), E_USER_ERROR);
        }
    }

}
<?php

/**
 * Created by PhpStorm.
 * User: Josh Bowers
 * Date: 3/23/2015
 * Time: 8:55 PM
 */
class Cemetery {

    private $cemetery_id,
        $cemetery_name,
        $street1,
        $street2,
        $gps_coordinates,
        $date_established,
        $cemetery_notes,
        $location_id;

    /**
     * @param $cemetery_id
     * @param $cemetery_name
     * @param $street1
     * @param $street2
     * @param $gps_coordinates
     * @param $date_established
     * @param $cemetery_notes
     * @param $location_id
     */
    function __construct($cemetery_id, $cemetery_name, $street1, $street2, $gps_coordinates, $date_established, $cemetery_notes, $location_id) {
        $this->cemetery_id = $cemetery_id;
        $this->cemetery_name = $cemetery_name;
        $this->street1 = $street1;
        $this->street2 = $street2;
        $this->gps_coordinates = $gps_coordinates;
        $this->date_established = $date_established;
        $this->cemetery_notes = $cemetery_notes;
        $this->location_id = $location_id;
    }

    /**
     * @return mixed
     */
    public function getCemeteryId() {
        return $this->cemetery_id;
    }

    /**
     * @param mixed $cemetery_id
     */
    public function setCemeteryId($cemetery_id) {
        $this->cemetery_id = $cemetery_id;
    }

    /**
     * @return mixed
     */
    public function getCemeteryName() {
        return $this->cemetery_name;
    }

    /**
     * @param mixed $cemetery_name
     */
    public function setCemeteryName($cemetery_name) {
        $this->cemetery_name = $cemetery_name;
    }

    /**
     * @return mixed
     */
    public function getStreet1() {
        return $this->street1;
    }

    /**
     * @param mixed $street1
     */
    public function setStreet1($street1) {
        $this->street1 = $street1;
    }

    /**
     * @return mixed
     */
    public function getStreet2() {
        return $this->street2;
    }

    /**
     * @param mixed $street2
     */
    public function setStreet2($street2) {
        $this->street2 = $street2;
    }

    /**
     * @return mixed
     */
    public function getGpsCoordinates() {
        return $this->gps_coordinates;
    }

    /**
     * @param mixed $gps_coordinates
     */
    public function setGpsCoordinates($gps_coordinates) {
        $this->gps_coordinates = $gps_coordinates;
    }

    /**
     * @return mixed
     */
    public function getDateEstablished() {
        return $this->date_established;
    }

    /**
     * @param mixed $date_established
     */
    public function setDateEstablished($date_established) {
        $this->date_established = $date_established;
    }

    /**
     * @return mixed
     */
    public function getCemeteryNotes() {
        return $this->cemetery_notes;
    }

    /**
     * @param mixed $cemetery_notes
     */
    public function setCemeteryNotes($cemetery_notes) {
        $this->cemetery_notes = $cemetery_notes;
    }

    /**
     * @return mixed
     */
    public function getLocationId() {
        return $this->location_id;
    }

    /**
     * @param mixed $location_id
     */
    public function setLocationId($location_id) {
        $this->location_id = $location_id;
    }

}
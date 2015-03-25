<?php

/**
 * Created by PhpStorm.
 * User: Josh Bowers
 * Date: 3/23/2015
 * Time: 8:55 PM
 */
class Cemetery {

    private $cemeteryId,
        $cemeteryName,
        $street1,
        $street2,
        $gpsCoordinates,
        $dateEstablished,
        $cemeteryNotes,
        $locationId;

    /**
     * @param $cemeteryId
     * @param $cemeteryName
     * @param $street1
     * @param $street2
     * @param $gpsCoordinates
     * @param $dateEstablished
     * @param $cemeteryNotes
     * @param $locationId
     */
    function __construct($cemeteryId, $cemeteryName, $street1, $street2, $gpsCoordinates, $dateEstablished, $cemeteryNotes, $locationId) {
        $this->cemeteryId = $cemeteryId;
        $this->cemeteryName = $cemeteryName;
        $this->street1 = $street1;
        $this->street2 = $street2;
        $this->gpsCoordinates = $gpsCoordinates;
        $this->dateEstablished = $dateEstablished;
        $this->cemeteryNotes = $cemeteryNotes;
        $this->locationId = $locationId;
    }

    /**
     * @return mixed
     */
    public function getCemeteryId() {
        return $this->cemeteryId;
    }

    /**
     * @param mixed $cemeteryId
     */
    public function setCemeteryId($cemeteryId) {
        $this->cemeteryId = $cemeteryId;
    }

    /**
     * @return mixed
     */
    public function getCemeteryName() {
        return $this->cemeteryName;
    }

    /**
     * @param mixed $cemeteryName
     */
    public function setCemeteryName($cemeteryName) {
        $this->cemeteryName = $cemeteryName;
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
        return $this->gpsCoordinates;
    }

    /**
     * @param mixed $gpsCoordinates
     */
    public function setGpsCoordinates($gpsCoordinates) {
        $this->gpsCoordinates = $gpsCoordinates;
    }

    /**
     * @return mixed
     */
    public function getDateEstablished() {
        return $this->dateEstablished;
    }

    /**
     * @param mixed $dateEstablished
     */
    public function setDateEstablished($dateEstablished) {
        $this->dateEstablished = $dateEstablished;
    }

    /**
     * @return mixed
     */
    public function getCemeteryNotes() {
        return $this->cemeteryNotes;
    }

    /**
     * @param mixed $cemeteryNotes
     */
    public function setCemeteryNotes($cemeteryNotes) {
        $this->cemeteryNotes = $cemeteryNotes;
    }

    /**
     * @return mixed
     */
    public function getLocationId() {
        return $this->locationId;
    }

    /**
     * @param mixed $locationId
     */
    public function setLocationId($locationId) {
        $this->locationId = $locationId;
    }

}
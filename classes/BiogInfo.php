<?php

/**
 * Created by PhpStorm.
 * User: Josh Bowers
 * Date: 3/23/2015
 * Time: 9:04 PM
 */
class BiogInfo {

    private $bioInfoId,
        $bioInfoType,
        $bioInfo,
        $dateEntered,
        $enteredBy,
        $personId;

    /**
     * @param $bioInfoId
     * @param $bioInfoType
     * @param $bioInfo
     * @param $dateEntered
     * @param $enteredBy
     * @param $personId
     */
    function __construct($bioInfoId, $bioInfoType, $bioInfo, $dateEntered, $enteredBy, $personId) {
        $this->bioInfoId = $bioInfoId;
        $this->bioInfoType = $bioInfoType;
        $this->bioInfo = $bioInfo;
        $this->dateEntered = $dateEntered;
        $this->enteredBy = $enteredBy;
        $this->personId = $personId;
    }

    /**
     * @return mixed
     */
    public function getBioInfoId() {
        return $this->bioInfoId;
    }

    /**
     * @param mixed $bioInfoId
     */
    public function setBioInfoId($bioInfoId) {
        $this->bioInfoId = $bioInfoId;
    }

    /**
     * @return mixed
     */
    public function getBioInfoType() {
        return $this->bioInfoType;
    }

    /**
     * @param mixed $bioInfoType
     */
    public function setBioInfoType($bioInfoType) {
        $this->bioInfoType = $bioInfoType;
    }

    /**
     * @return mixed
     */
    public function getBioInfo() {
        return $this->bioInfo;
    }

    /**
     * @param mixed $bioInfo
     */
    public function setBioInfo($bioInfo) {
        $this->bioInfo = $bioInfo;
    }

    /**
     * @return mixed
     */
    public function getDateEntered() {
        return $this->dateEntered;
    }

    /**
     * @param mixed $dateEntered
     */
    public function setDateEntered($dateEntered) {
        $this->dateEntered = $dateEntered;
    }

    /**
     * @return mixed
     */
    public function getEnteredBy() {
        return $this->enteredBy;
    }

    /**
     * @param mixed $enteredBy
     */
    public function setEnteredBy($enteredBy) {
        $this->enteredBy = $enteredBy;
    }

    /**
     * @return mixed
     */
    public function getPersonId() {
        return $this->personId;
    }

    /**
     * @param mixed $personId
     */
    public function setPersonId($personId) {
        $this->personId = $personId;
    }

}
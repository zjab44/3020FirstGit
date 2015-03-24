<?php

/**
 * Created by PhpStorm.
 * User: Josh Bowers
 * Date: 3/23/2015
 * Time: 9:04 PM
 */
class BiogInfo {

    private $bio_info_id,
        $bio_info_type,
        $bio_info,
        $date_entered,
        $entered_by,
        $person_id;

    /**
     * @param $bio_info_id
     * @param $bio_info_type
     * @param $bio_info
     * @param $date_entered
     * @param $entered_by
     * @param $person_id
     */
    function __construct($bio_info_id, $bio_info_type, $bio_info, $date_entered, $entered_by, $person_id) {
        $this->bio_info_id = $bio_info_id;
        $this->bio_info_type = $bio_info_type;
        $this->bio_info = $bio_info;
        $this->date_entered = $date_entered;
        $this->entered_by = $entered_by;
        $this->person_id = $person_id;
    }

    /**
     * @return mixed
     */
    public function getBioInfoId() {
        return $this->bio_info_id;
    }

    /**
     * @param mixed $bio_info_id
     */
    public function setBioInfoId($bio_info_id) {
        $this->bio_info_id = $bio_info_id;
    }

    /**
     * @return mixed
     */
    public function getBioInfoType() {
        return $this->bio_info_type;
    }

    /**
     * @param mixed $bio_info_type
     */
    public function setBioInfoType($bio_info_type) {
        $this->bio_info_type = $bio_info_type;
    }

    /**
     * @return mixed
     */
    public function getBioInfo() {
        return $this->bio_info;
    }

    /**
     * @param mixed $bio_info
     */
    public function setBioInfo($bio_info) {
        $this->bio_info = $bio_info;
    }

    /**
     * @return mixed
     */
    public function getDateEntered() {
        return $this->date_entered;
    }

    /**
     * @param mixed $date_entered
     */
    public function setDateEntered($date_entered) {
        $this->date_entered = $date_entered;
    }

    /**
     * @return mixed
     */
    public function getEnteredBy() {
        return $this->entered_by;
    }

    /**
     * @param mixed $entered_by
     */
    public function setEnteredBy($entered_by) {
        $this->entered_by = $entered_by;
    }

    /**
     * @return mixed
     */
    public function getPersonId() {
        return $this->person_id;
    }

    /**
     * @param mixed $person_id
     */
    public function setPersonId($person_id) {
        $this->person_id = $person_id;
    }

}
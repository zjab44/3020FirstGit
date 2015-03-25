<?php

/**
 * Created by PhpStorm.
 * User: Josh Bowers
 * Date: 3/23/2015
 * Time: 8:42 PM
 */
class Location {

    private $locationId,
        $state,
        $county,
        $city,
        $zip;

    /**
     * @param $locationId
     * @param $state
     * @param $county
     * @param $city
     * @param $zip
     */
    function __construct($locationId, $state, $county, $city, $zip) {
        $this->locationId = $locationId;
        $this->state = $state;
        $this->county = $county;
        $this->city = $city;
        $this->zip = $zip;
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

    /**
     * @return mixed
     */
    public function getState() {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state) {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getCounty() {
        return $this->county;
    }

    /**
     * @param mixed $county
     */
    public function setCounty($county) {
        $this->county = $county;
    }

    /**
     * @return mixed
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city) {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getZip() {
        return $this->zip;
    }

    /**
     * @param mixed $zip
     */
    public function setZip($zip) {
        $this->zip = $zip;
    }

}
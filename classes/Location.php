<?php

/**
 * Created by PhpStorm.
 * User: Josh Bowers
 * Date: 3/23/2015
 * Time: 8:42 PM
 */
class Location {

    private $location_id,
        $state,
        $county,
        $city,
        $zip;

    /**
     * @param $location_id
     * @param $state
     * @param $county
     * @param $city
     * @param $zip
     */
    function __construct($location_id, $state, $county, $city, $zip) {
        $this->location_id = $location_id;
        $this->state = $state;
        $this->county = $county;
        $this->city = $city;
        $this->zip = $zip;
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
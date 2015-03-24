<?php

/**
 * Created by PhpStorm.
 * User: Josh Bowers
 * Date: 3/23/2015
 * Time: 9:00 PM
 */
class Deceased {

    private $deceased_id,
        $first_name,
        $middle_name,
        $last_name,
        $date_of_birth,
        $date_of_death,
        $row_number,
        $location_within_row,
        $stone_description,
        $type_of_burial,
        $marker_text,
        $marker_symbols,
        $cemetery_id;

    /**
     * @param $deceased_id
     * @param $first_name
     * @param $middle_name
     * @param $last_name
     * @param $date_of_birth
     * @param $date_of_death
     * @param $row_number
     * @param $location_within_row
     * @param $stone_description
     * @param $type_of_burial
     * @param $marker_text
     * @param $marker_symbols
     * @param $cemetery_id
     */
    function __construct($deceased_id, $first_name, $middle_name, $last_name, $date_of_birth, $date_of_death, $row_number, $location_within_row, $stone_description, $type_of_burial, $marker_text, $marker_symbols, $cemetery_id) {
        $this->deceased_id = $deceased_id;
        $this->first_name = $first_name;
        $this->middle_name = $middle_name;
        $this->last_name = $last_name;
        $this->date_of_birth = $date_of_birth;
        $this->date_of_death = $date_of_death;
        $this->row_number = $row_number;
        $this->location_within_row = $location_within_row;
        $this->stone_description = $stone_description;
        $this->type_of_burial = $type_of_burial;
        $this->marker_text = $marker_text;
        $this->marker_symbols = $marker_symbols;
        $this->cemetery_id = $cemetery_id;
    }

    /**
     * @return mixed
     */
    public function getDeceasedId() {
        return $this->deceased_id;
    }

    /**
     * @param mixed $deceased_id
     */
    public function setDeceasedId($deceased_id) {
        $this->deceased_id = $deceased_id;
    }

    /**
     * @return mixed
     */
    public function getFirstName() {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name) {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getMiddleName() {
        return $this->middle_name;
    }

    /**
     * @param mixed $middle_name
     */
    public function setMiddleName($middle_name) {
        $this->middle_name = $middle_name;
    }

    /**
     * @return mixed
     */
    public function getLastName() {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth() {
        return $this->date_of_birth;
    }

    /**
     * @param mixed $date_of_birth
     */
    public function setDateOfBirth($date_of_birth) {
        $this->date_of_birth = $date_of_birth;
    }

    /**
     * @return mixed
     */
    public function getDateOfDeath() {
        return $this->date_of_death;
    }

    /**
     * @param mixed $date_of_death
     */
    public function setDateOfDeath($date_of_death) {
        $this->date_of_death = $date_of_death;
    }

    /**
     * @return mixed
     */
    public function getRowNumber() {
        return $this->row_number;
    }

    /**
     * @param mixed $row_number
     */
    public function setRowNumber($row_number) {
        $this->row_number = $row_number;
    }

    /**
     * @return mixed
     */
    public function getLocationWithinRow() {
        return $this->location_within_row;
    }

    /**
     * @param mixed $location_within_row
     */
    public function setLocationWithinRow($location_within_row) {
        $this->location_within_row = $location_within_row;
    }

    /**
     * @return mixed
     */
    public function getStoneDescription() {
        return $this->stone_description;
    }

    /**
     * @param mixed $stone_description
     */
    public function setStoneDescription($stone_description) {
        $this->stone_description = $stone_description;
    }

    /**
     * @return mixed
     */
    public function getTypeOfBurial() {
        return $this->type_of_burial;
    }

    /**
     * @param mixed $type_of_burial
     */
    public function setTypeOfBurial($type_of_burial) {
        $this->type_of_burial = $type_of_burial;
    }

    /**
     * @return mixed
     */
    public function getMarkerText() {
        return $this->marker_text;
    }

    /**
     * @param mixed $marker_text
     */
    public function setMarkerText($marker_text) {
        $this->marker_text = $marker_text;
    }

    /**
     * @return mixed
     */
    public function getMarkerSymbols() {
        return $this->marker_symbols;
    }

    /**
     * @param mixed $marker_symbols
     */
    public function setMarkerSymbols($marker_symbols) {
        $this->marker_symbols = $marker_symbols;
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

}
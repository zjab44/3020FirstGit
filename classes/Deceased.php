<?php

/**
 * Created by PhpStorm.
 * User: Josh Bowers
 * Date: 3/23/2015
 * Time: 9:00 PM
 */
class Deceased {

    private $deceasedId,
        $firstName,
        $middleName,
        $lastName,
        $dateOfBirth,
        $dateOfDeath,
        $rowNumber,
        $locationWithinRow,
        $stoneDescription,
        $typeOfBurial,
        $markerText,
        $markerSymbols,
        $cemeteryId;

    /**
     * @param $deceasedId
     * @param $firstName
     * @param $middleName
     * @param $lastName
     * @param $dateOfBirth
     * @param $dateOfDeath
     * @param $rowNumber
     * @param $locationWithinRow
     * @param $stoneDescription
     * @param $typeOfBurial
     * @param $markerText
     * @param $markerSymbols
     * @param $cemeteryId
     */
    function __construct($deceasedId, $firstName, $middleName, $lastName, $dateOfBirth, $dateOfDeath, $rowNumber, $locationWithinRow, $stoneDescription, $typeOfBurial, $markerText, $markerSymbols, $cemeteryId) {
        $this->deceasedId = $deceasedId;
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
        $this->dateOfDeath = $dateOfDeath;
        $this->rowNumber = $rowNumber;
        $this->locationWithinRow = $locationWithinRow;
        $this->stoneDescription = $stoneDescription;
        $this->typeOfBurial = $typeOfBurial;
        $this->markerText = $markerText;
        $this->markerSymbols = $markerSymbols;
        $this->cemeteryId = $cemeteryId;
    }

    /**
     * @return mixed
     */
    public function getDeceasedId() {
        return $this->deceasedId;
    }

    /**
     * @param mixed $deceasedId
     */
    public function setDeceasedId($deceasedId) {
        $this->deceasedId = $deceasedId;
    }

    /**
     * @return mixed
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getMiddleName() {
        return $this->middleName;
    }

    /**
     * @param mixed $middleName
     */
    public function setMiddleName($middleName) {
        $this->middleName = $middleName;
    }

    /**
     * @return mixed
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth() {
        return $this->dateOfBirth;
    }

    /**
     * @param mixed $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth) {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return mixed
     */
    public function getDateOfDeath() {
        return $this->dateOfDeath;
    }

    /**
     * @param mixed $dateOfDeath
     */
    public function setDateOfDeath($dateOfDeath) {
        $this->dateOfDeath = $dateOfDeath;
    }

    /**
     * @return mixed
     */
    public function getRowNumber() {
        return $this->rowNumber;
    }

    /**
     * @param mixed $rowNumber
     */
    public function setRowNumber($rowNumber) {
        $this->rowNumber = $rowNumber;
    }

    /**
     * @return mixed
     */
    public function getLocationWithinRow() {
        return $this->locationWithinRow;
    }

    /**
     * @param mixed $locationWithinRow
     */
    public function setLocationWithinRow($locationWithinRow) {
        $this->locationWithinRow = $locationWithinRow;
    }

    /**
     * @return mixed
     */
    public function getStoneDescription() {
        return $this->stoneDescription;
    }

    /**
     * @param mixed $stoneDescription
     */
    public function setStoneDescription($stoneDescription) {
        $this->stoneDescription = $stoneDescription;
    }

    /**
     * @return mixed
     */
    public function getTypeOfBurial() {
        return $this->typeOfBurial;
    }

    /**
     * @param mixed $typeOfBurial
     */
    public function setTypeOfBurial($typeOfBurial) {
        $this->typeOfBurial = $typeOfBurial;
    }

    /**
     * @return mixed
     */
    public function getMarkerText() {
        return $this->markerText;
    }

    /**
     * @param mixed $markerText
     */
    public function setMarkerText($markerText) {
        $this->markerText = $markerText;
    }

    /**
     * @return mixed
     */
    public function getMarkerSymbols() {
        return $this->markerSymbols;
    }

    /**
     * @param mixed $markerSymbols
     */
    public function setMarkerSymbols($markerSymbols) {
        $this->markerSymbols = $markerSymbols;
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

}
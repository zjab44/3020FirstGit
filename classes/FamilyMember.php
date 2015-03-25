<?php

/**
 * Created by PhpStorm.
 * User: Josh Bowers
 * Date: 3/23/2015
 * Time: 9:04 PM
 */
class FamilyMember {

    private $memberId,
        $relationship,
        $firstName,
        $middleName,
        $lastName,
        $dateOfBirth,
        $dateOfDeath,
        $deceasedId;

    /**
     * @param $memberId
     * @param $relationship
     * @param $firstName
     * @param $middleName
     * @param $lastName
     * @param $dateOfBirth
     * @param $dateOfDeath
     * @param $deceasedId
     */
    function __construct($memberId, $relationship, $firstName, $middleName, $lastName, $dateOfBirth, $dateOfDeath, $deceasedId) {
        $this->memberId = $memberId;
        $this->relationship = $relationship;
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
        $this->dateOfDeath = $dateOfDeath;
        $this->deceasedId = $deceasedId;
    }

    /**
     * @return mixed
     */
    public function getMemberId() {
        return $this->memberId;
    }

    /**
     * @param mixed $memberId
     */
    public function setMemberId($memberId) {
        $this->memberId = $memberId;
    }

    /**
     * @return mixed
     */
    public function getRelationship() {
        return $this->relationship;
    }

    /**
     * @param mixed $relationship
     */
    public function setRelationship($relationship) {
        $this->relationship = $relationship;
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
    public function getDeceasedId() {
        return $this->deceasedId;
    }

    /**
     * @param mixed $deceasedId
     */
    public function setDeceasedId($deceasedId) {
        $this->deceasedId = $deceasedId;
    }

}
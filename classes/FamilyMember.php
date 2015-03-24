<?php

/**
 * Created by PhpStorm.
 * User: Josh Bowers
 * Date: 3/23/2015
 * Time: 9:04 PM
 */
class FamilyMember {

    private $member_id,
        $relationship,
        $first_name,
        $middle_name,
        $last_name,
        $date_of_birth,
        $date_of_death,
        $deceased_id;

    /**
     * @param $member_id
     * @param $relationship
     * @param $first_name
     * @param $middle_name
     * @param $last_name
     * @param $date_of_birth
     * @param $date_of_death
     * @param $deceased_id
     */
    function __construct($member_id, $relationship, $first_name, $middle_name, $last_name, $date_of_birth, $date_of_death, $deceased_id) {
        $this->member_id = $member_id;
        $this->relationship = $relationship;
        $this->first_name = $first_name;
        $this->middle_name = $middle_name;
        $this->last_name = $last_name;
        $this->date_of_birth = $date_of_birth;
        $this->date_of_death = $date_of_death;
        $this->deceased_id = $deceased_id;
    }

    /**
     * @return mixed
     */
    public function getMemberId() {
        return $this->member_id;
    }

    /**
     * @param mixed $member_id
     */
    public function setMemberId($member_id) {
        $this->member_id = $member_id;
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
    public function getDeceasedId() {
        return $this->deceased_id;
    }

    /**
     * @param mixed $deceased_id
     */
    public function setDeceasedId($deceased_id) {
        $this->deceased_id = $deceased_id;
    }

}
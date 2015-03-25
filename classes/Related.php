<?php

/**
 * Created by PhpStorm.
 * User: Josh Bowers
 * Date: 3/23/2015
 * Time: 9:04 PM
 */
class Related {

    private $deceasedId,
        $deceasedRelativeId,
        $relationship;

    /**
     * @param $deceasedId
     * @param $deceasedRelativeId
     * @param $relationship
     */
    function __construct($deceasedId, $deceasedRelativeId, $relationship) {
        $this->deceasedId = $deceasedId;
        $this->deceasedRelativeId = $deceasedRelativeId;
        $this->relationship = $relationship;
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
    public function getDeceasedRelativeId() {
        return $this->deceasedRelativeId;
    }

    /**
     * @param mixed $deceasedRelativeId
     */
    public function setDeceasedRelativeId($deceasedRelativeId) {
        $this->deceasedRelativeId = $deceasedRelativeId;
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

}
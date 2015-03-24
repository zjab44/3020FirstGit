<?php

/**
 * Created by PhpStorm.
 * User: Josh Bowers
 * Date: 3/23/2015
 * Time: 9:04 PM
 */
class Related {

    private $deceased_id,
        $deceased_relative_id,
        $relationship;

    /**
     * @param $deceased_id
     * @param $deceased_relative_id
     * @param $relationship
     */
    function __construct($deceased_id, $deceased_relative_id, $relationship) {
        $this->deceased_id = $deceased_id;
        $this->deceased_relative_id = $deceased_relative_id;
        $this->relationship = $relationship;
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
    public function getDeceasedRelativeId() {
        return $this->deceased_relative_id;
    }

    /**
     * @param mixed $deceased_relative_id
     */
    public function setDeceasedRelativeId($deceased_relative_id) {
        $this->deceased_relative_id = $deceased_relative_id;
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
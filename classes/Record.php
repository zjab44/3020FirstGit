<?php

/**
 * Created by PhpStorm.
 * User: Josh Bowers
 * Date: 3/23/2015
 * Time: 9:05 PM
 */
class Record {

    private $recordId,
        $recordType,
        $record,
        $dateEntered,
        $enteredBy,
        $deceasedId;

    /**
     * @param $recordId
     * @param $recordType
     * @param $record
     * @param $dateEntered
     * @param $enteredBy
     * @param $deceasedId
     */
    function __construct($recordId, $recordType, $record, $dateEntered, $enteredBy, $deceasedId) {
        $this->recordId = $recordId;
        $this->recordType = $recordType;
        $this->record = $record;
        $this->dateEntered = $dateEntered;
        $this->enteredBy = $enteredBy;
        $this->deceasedId = $deceasedId;
    }

    /**
     * @return mixed
     */
    public function getRecordId() {
        return $this->recordId;
    }

    /**
     * @param mixed $recordId
     */
    public function setRecordId($recordId) {
        $this->recordId = $recordId;
    }

    /**
     * @return mixed
     */
    public function getRecordType() {
        return $this->recordType;
    }

    /**
     * @param mixed $recordType
     */
    public function setRecordType($recordType) {
        $this->recordType = $recordType;
    }

    /**
     * @return mixed
     */
    public function getRecord() {
        return $this->record;
    }

    /**
     * @param mixed $record
     */
    public function setRecord($record) {
        $this->record = $record;
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
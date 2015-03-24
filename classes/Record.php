<?php

/**
 * Created by PhpStorm.
 * User: Josh Bowers
 * Date: 3/23/2015
 * Time: 9:05 PM
 */
class Record {

    private $record_id,
        $record_type,
        $record,
        $date_entered,
        $entered_by,
        $deceased_id;

    /**
     * @param $record_id
     * @param $record_type
     * @param $record
     * @param $date_entered
     * @param $entered_by
     * @param $deceased_id
     */
    function __construct($record_id, $record_type, $record, $date_entered, $entered_by, $deceased_id) {
        $this->record_id = $record_id;
        $this->record_type = $record_type;
        $this->record = $record;
        $this->date_entered = $date_entered;
        $this->entered_by = $entered_by;
        $this->deceased_id = $deceased_id;
    }

    /**
     * @return mixed
     */
    public function getRecordId() {
        return $this->record_id;
    }

    /**
     * @param mixed $record_id
     */
    public function setRecordId($record_id) {
        $this->record_id = $record_id;
    }

    /**
     * @return mixed
     */
    public function getRecordType() {
        return $this->record_type;
    }

    /**
     * @param mixed $record_type
     */
    public function setRecordType($record_type) {
        $this->record_type = $record_type;
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
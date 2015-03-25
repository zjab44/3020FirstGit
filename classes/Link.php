<?php

/**
 * Created by PhpStorm.
 * User: Josh Bowers
 * Date: 3/23/2015
 * Time: 9:05 PM
 */
class Link {

    private $linkId,
        $url,
        $linkTo,
        $informationId;

    /**
     * @param $linkId
     * @param $url
     * @param $linkTo
     * @param $informationId
     */
    function __construct($linkId, $url, $linkTo, $informationId) {
        $this->linkId = $linkId;
        $this->url = $url;
        $this->linkTo = $linkTo;
        $this->informationId = $informationId;
    }

    /**
     * @return mixed
     */
    public function getLinkId() {
        return $this->linkId;
    }

    /**
     * @param mixed $linkId
     */
    public function setLinkId($linkId) {
        $this->linkId = $linkId;
    }

    /**
     * @return mixed
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url) {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getLinkTo() {
        return $this->linkTo;
    }

    /**
     * @param mixed $linkTo
     */
    public function setLinkTo($linkTo) {
        $this->linkTo = $linkTo;
    }

    /**
     * @return mixed
     */
    public function getInformationId() {
        return $this->informationId;
    }

    /**
     * @param mixed $informationId
     */
    public function setInformationId($informationId) {
        $this->informationId = $informationId;
    }

}
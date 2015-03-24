<?php

/**
 * Created by PhpStorm.
 * User: Josh Bowers
 * Date: 3/23/2015
 * Time: 9:05 PM
 */
class Link {

    private $link_id,
        $url,
        $link_to,
        $information_id;

    /**
     * @param $link_id
     * @param $url
     * @param $link_to
     * @param $information_id
     */
    function __construct($link_id, $url, $link_to, $information_id) {
        $this->link_id = $link_id;
        $this->url = $url;
        $this->link_to = $link_to;
        $this->information_id = $information_id;
    }

    /**
     * @return mixed
     */
    public function getLinkId() {
        return $this->link_id;
    }

    /**
     * @param mixed $link_id
     */
    public function setLinkId($link_id) {
        $this->link_id = $link_id;
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
        return $this->link_to;
    }

    /**
     * @param mixed $link_to
     */
    public function setLinkTo($link_to) {
        $this->link_to = $link_to;
    }

    /**
     * @return mixed
     */
    public function getInformationId() {
        return $this->information_id;
    }

    /**
     * @param mixed $information_id
     */
    public function setInformationId($information_id) {
        $this->information_id = $information_id;
    }

}
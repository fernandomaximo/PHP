<?php

class Pweet extends CI_Model{
    
    private $id;
    private $userId;
    private $content;
    private $insertDate;
    
     public function __construct() {
        parent::__construct();
    }
    function getId() {
        return $this->id;
    }

    function getUserId() {
        return $this->userId;
    }

    function getContent() {
        return $this->content;
    }

    function getInsertDate() {
        return $this->insertDate;
    }

    function setUserId($userId) {
        $this->userId = $userId;
    }

    function setContent($content) {
        $this->content = $content;
    }

    function setInsertDate($insertDate) {
        $this->insertDate = $insertDate;
    }
    
}
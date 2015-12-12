<?php


class Follows extends CI_Model{
    
    private $id;
    private $sourceUser;
    private $targetUser;
    
    public function __construct() {
        parent::__construct();
        
    }
    function getId() {
        return $this->id;
    }

    function getSourceUser() {
        return $this->sourceUser;
    }

    function getTargetUser() {
        return $this->targetUser;
    }

    function setSourceUser($sourceUser) {
        $this->sourceUser = $sourceUser;
    }

    function setTargetUser($targetUser) {
        $this->targetUser = $targetUser;
    }


}


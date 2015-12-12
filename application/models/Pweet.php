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
    
    public function save(){
        $data = array(
            'user_id' => $this->getUserId(),
            'content'=>  $this->getContent()
        );
        
        $this->db->insert('pweet',$date);
    }
    
    public function getFromUser ($userId){
        
        $this->db->where('user_id',$userId);
        $result = $this->db->get('pweet');
        return $result->result_object();
    }
}
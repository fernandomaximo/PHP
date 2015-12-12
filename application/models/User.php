<?php

class User extends CI_Model {

    public $id;
    public $username;
    public $password;
    public $email;
    public $about;

    public function __construct() {
        parent::__construct();
    }

    function getId() {
        return $this->id;
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getEmail() {
        return $this->email;
    }

    function getAbout() {
        return $this->about;
    }
    
     function setId($id) {
        $this->id = $id;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setAbout($about) {
        $this->about = $about;
    }

    public function findByUsername($username) {

        $this->db->where('username', $username);
        $result = $this->db->get('user');
        $result = $result->row();

        $this->id=$result->id;
        $this->setUsername($result->username);
        $this->setPassword($result->password);
        $this->setEmail($result->email);
        $this->setAbout($result->about);

        //$query = $this->db->get_where('user',array('username' => $username),1);
        //return $query->row();
    }

    public function save() {

        $data = array(
            'username' => $this->getUsername(),
            'password' => $this->getPassword() . md5($str),
            'email' => $this->getEmail(),
            'about' => $this->getAbout()
        );
        $this->db->insert('user', $data);
    }

    public function canLogin($username, $password) {

        $this->db->where('username', $username);
        $this->db->where('password', md5($password));

        $result = $this->db->count_all_results('user');

        if ($result > 0)
            return true;
        return false;
    }
    
    public function update(){
        $data = array(
            'username' => $this->getUsername(),
            'password'=> $this->getPassword(),
            'email'=>  $this->getEmail(),
            'about'=> $this->getAbout()      
        );
        
        $this->db->where('id',  $this->getId());
        $this->db->update('user',$data);
            
    
    }

}

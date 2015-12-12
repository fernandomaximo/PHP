<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function index() {
        $data['paragrafo'] = 'index do profile';

        $this->load->view('template/_header');
        $this->load->view('profile/index', $data);
        $this->load->view('template/_footer');
    }

    public function view($username) {
        $this->load->database();
        $this->load->model('user');

        $data['user'] = $this->user->findByUsername($username);

        $this->load->view('template/_header');
        $this->load->view('profile/view', $data);
        $this->load->view('template/_footer');
    }

    public function create() {
        $this->load->view('template/_header');
        $this->load->view('profile/create');
        $this->load->view('template/_footer');
    }

    public function createNow() {
        $this->user->setusername($this->input->post('username'));
        $this->user->setpassword($this->input->post('password'));
        $this->user->setemail($this->input->post('email'));
        $this->user->setabout($this->input->post('about'));

        $this->user->save();
        redirect('profile/show/' . $this->user->getusername());
    }

    public function show($username) {

        session_start();
        if (!isset($_SESSION['username']))
            redirect('main/index');

        $this->user->findByUsername($username);

        $this->load->view('template/_header');
        $this->load->view('profile/show');
        $this->load->view('template/_footer');
    }
    
    public function update(){
        session_start();
        if (!isset($_SESSION['userbame']))
            redirect ('main/index');
            
        $this->user->findByUsername($_SESSION['username']);
        
        $this->user->setUsername($this->input->post('username'));
        $this->user->setPassword($this->input->post('password'));
        $this->user->setEmail($this->input->post('email'));
        $this->user->setAbout($this->input->post('about'));
        
    }

    public function updateNow() {

        session_start();

        if (!isset($_SESSION['username']))
            redirect('main/index');

        $this->user->findByUsername($_SESSION['username']);

        $this->user->setUsername($this->input->post('username'));
        $this->user->setPassword($this->input->post('password'));
        $this->user->setEmail($this->input->post('email'));
        $this->user->setAbout($this->input->post('about'));

        $this->user->update();

        $_SESSION['username'] = $this->input->post('username');

        redirect('profile/show' . $this->user->getUserName());

        $this->load->view('template/_header');
        $this->load->view('profile/update');
        $this->load->view('template/_footer');
    }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of Rastreo
 *
 * @author desarrollo04
 */
class Rastreo extends My_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
    }
    
    public function track($destinatario, $envio) {
        $this->load->model('rastreo_model');
        $this->rastreo_model->track($destinatario, $envio,0);
        header('Content-Type: image/jpg');
        readfile('blank.jpg');
    }
    function url($destinatario, $envio) {
        $this->load->model('rastreo_model');
        $this->rastreo_model->track($destinatario, $envio, 1);
        $url = $this->rastreo_model->url($envio);
        if ($url == TRUE) {
            redirect($url);
        }
    }

}

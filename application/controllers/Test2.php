<?php
header('Access-Control-Allow-Origin: *');
class Test2 extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }
    public function index() {
        $this->load->view('test2');
    }


}
?>

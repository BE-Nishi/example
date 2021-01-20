<?php
class Demo extends CI_Controller{
    // public function index(){
    //     $this->load->view('front/include/_header');
    //     $this->load->view('main.php');
    // $this->load->view('front/include/_footer');
    // }
    public function index(){
        $this->load->view('front/include/_header');
        $this->load->view('main/hero.php');
        $this->load->view('main/service.php');
        $this->load->view('main/subscribe.php');
        $this->load->view('main/about.php');
        $this->load->view('main/carousal.php');
        $this->load->view('main/prombox.php');
        $this->load->view('main/testimonial.php');
        $this->load->view('main/video.php');
        $this->load->view('main/blog.php');
        $this->load->view('main/contact.php');
        $this->load->view('front/include/_footer');
    }
}

?>
<?php
class pageController extends controller {
    
    public function index() {
        $data = ['title' => 'Welcome to Our Donation Platform'];
        // Loads views/pages/index.php
        $this->view('pages/index', $data);
    }

    public function about() {
        $data = ['title' => 'About Our Mission'];
        $this->view('pages/about', $data);
    }
}
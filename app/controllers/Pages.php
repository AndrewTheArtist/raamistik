<?php


class Pages extends Controller
{

    /**
     * Pages constructor.
     */
    public function __construct()
    {
        echo 'Pages Class is loaded<br>';
    }

    public function index(){
        echo 'index mehthod is loaded<br>';
        $this->view('index');
    }

    public function about(){
        echo 'about method is loaded<br>';
        $this->view('about');
    }
}
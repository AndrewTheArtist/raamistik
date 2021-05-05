<?php


class Partners extends Controller
{

    /**
     * Partners constructor.
     */
    public function __construct()
    {
        $this->pagesModel = $this->model('Partner');
    }

    public function index(){
        $data = array(
            'title' => 'Koostöö partnerid'
        );
        $this->view('partners/index', $data);
    }


}
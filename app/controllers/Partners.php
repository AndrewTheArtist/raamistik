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
        $partners = $this->pagesModel->getPartners();
        $data = array(
            'title' => 'Koostöö partnerid',
            'partners' => $partners
        );
        $this->view('partners/index', $data);
    }


}
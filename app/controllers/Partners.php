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

    public function index() {
        if (!isset($_SESSION['user_id'])) {
            redirect('users/login');
        }
        $partners = $this->pagesModel->getPartners();
        $data = array(
            'title' => 'Koostöö partnerid',
            'partners' => $partners
        );
        $this->view('partners/index', $data);
    }

    public function delete() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = array(
                'name' => trim($_POST['firm-name']),
                'id' => $_POST['firm-id']
            );
            $data['name'] = '\''.$data['name'].'\'';
            $this->pagesModel->deletePartner($data);
        }
        redirect('partners/index');
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = array(
                'name' => trim($_POST['firm-name']),
                'location' => trim($_POST['firm-location']),
                'grouping' => trim($_POST['firm-grouping']),
                'specialty' => trim($_POST['firm-specialty']),
                'phone' => trim($_POST['firm-phone']),
                'email' => trim($_POST['firm-mail']),
                'vat' => trim($_POST['firm-vat'])
            );
            foreach($data as &$i) {
                $i = '\''.$i.'\'';
            }
            $this->pagesModel->addPartner($data);
        }
        redirect('partners/index');
    }
}
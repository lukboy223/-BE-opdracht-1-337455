<?php

class Magazijns extends BaseController
{
    private $magaijnModel;

    public function __construct()
    {
        $this->magaijnModel = $this->model('Magazijn');
    }

    public function index()
    {

        $data = [
            'Magazijn'             => null,
            'message'               => '',
            'messageColor'          => '',
            'messageVisibility'     => 'none'
        ];

        $data['Magazijn'] = $this->magaijnModel->GetMagaijnProduct();

        $this->view('magazijns/index', $data);
    }
}

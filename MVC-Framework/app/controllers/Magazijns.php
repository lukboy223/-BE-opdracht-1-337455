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
        if (is_null($data['Magazijn'])) {
            $this->indexError();
        }

        $this->view('magazijns/index', $data);
    }

    public function indexError($errorMessage = "Er is een probleem opgetreden met de database probeer het opnieuw op een later moment.")
    {
        $data = [
            'Magazijn'             => null,
            'message'               => $errorMessage,
            'messageColor'          => 'alert-danger',
            'messageVisibility'     => 'flex'
        ];

        $data['Magazijn'] = $this->magaijnModel->GetMagaijnProduct();

        $this->view('magazijns/index', $data);
    }

}

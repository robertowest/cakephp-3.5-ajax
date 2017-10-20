<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;

class SimpleController extends AppController 
{
    public function index() 
    {
    }

    public function simpleAction() 
    {
        if ($this->request->is(array('ajax'))) 
        {
            $now = new Time();

            // the order of these three lines is very important !!!
            $resultJ = json_encode(array('result' => array('now' => $now)));
            $this->response->type('json');
            $this->response->body($resultJ);

            return $this->response;
        }        
    }
}
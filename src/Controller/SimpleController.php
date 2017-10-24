<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;

class SimpleController extends AppController 
{
    public function index() 
    {
    }

    public function ajaxAction() 
    {
        if ($this->request->is(['ajax', 'post'])) 
        {
            $now = new Time();
            $data = ['data' => ['now' => $now]];
            return $this->json($data);
        }        
    }
}
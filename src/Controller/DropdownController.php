<?php
namespace App\Controller;

use App\Controller\AppController;


class DropdownController extends AppController 
{
    public function index()
    {
        $countries = $this->getCountry();
        $states = $this->getState(1);

        $this->set(compact(['countries', 'states']));
        $this->set('_serialize', ['countries', 'states']);
    }

    private function getCountry()
    {
        //$this->loadModel('Country');
        //return $this->Countries->find('list');
        return [1=>'Argentina', 2=>'Brasil', 3=>'Chile'];
    }

    private function getState($country_id = null)
    {
        switch ($country_id) 
        {
            case 1:
                $states = [1=>'Buenos Aires', 2=>'Córdoba', 3=>'Tucumán'];
                break;

            case 2:
                $states = [4=>'Curitiva', 5=>'Florianópolis', 6=>'San Pablo'];
                break;

            case 3:
                $states = [7=>'Iquique', 8=>'Santiago de Chile', 9=>'Valparaiso'];
                break;
            
            default:
                $states = [];
        }
        return $states;
    }

    public function ajaxStateByCountry()
    {
        if ($this->request->is(['ajax', 'post'])) 
        {
            $id = $this->request->query('id');
            $states = $this->getState($id);

            $combo = [];
            foreach ($states as $key => $value) 
            {
                $combo[] = "<option value='".$key."'>".$value."</option>";
            }            

            $data = ['data' => ['states' => $combo]];
            //$this->log($this->json($data), 'debug');
            return $this->json($data);
        }
    }
}

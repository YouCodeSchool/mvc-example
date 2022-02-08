<?php
class Personnes extends Controller{
    public function index(){
        $this->loadModel('Personne');
        $personnes = $this->Personne->get_all();
        // echo '<pre>';
        $this->render('index',['personnes' => $personnes]);
        // print_r($personnes);
        // echo 'Personnes index method!!';
    }
    
    public function single($id){
        $this->loadModel('Personne');
        $this->Personne->id = $id;
        $personnes = $this->Personne->get_one();
        echo '<pre>';
        // print_r($personnes);
        // echo 'Personnes index method!!';
    }
};
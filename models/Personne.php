<?php
class Personne extends Model{
    public function __construct(){
        $this->table = 'personnes';
        $this->get_connection();
    }
}
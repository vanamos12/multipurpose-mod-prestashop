<?php

class Multipurpose extends Module {
    public function __construct(){
        $this->name = 'multipurpose';
        $this->author = 'POKA TCHONENG Hermann';
        $this->version = '1.0.0';
        parent::__construct();
        $this->displayName = $this->l('Multipurpose');
        $this->description = $this->l('This is part of prestashop module developement tutorial');
        $this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' => '1.7.99.0');
    }

    
    
}
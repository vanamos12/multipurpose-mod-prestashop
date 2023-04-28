<?php

class Multipurpose extends Module {
    public function __construct(){
        $this->name = 'multipurpose';
        $this->author = 'POKA TCHONENG Hermann';
        $this->version = '1.0.0';
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->l('Multipurpose');
        $this->description = $this->l('This is part of prestashop module developement tutorial');
        $this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' => '1.7.99.0');
    }

    public function install(){
       return parent::install() && $this->registerHook('displayHome'); 
    }

    public function uninstall(){
        return parent::uninstall();
    }
    
    public function hookDisplayHome(){
        ///eturn 'This is the no random text from the module multipurpose.';
        $this->context->smarty->assign(array(
            'MULTIPURPOSE_STR' => Configuration::get('MULTIPURPOSE_STR')
        ));
        return $this->display(__FILE__, 'views/templates/hook/home.tpl');
    }

    public function hookHeader(){
        $this->context->controller->addCSS(array(
            $this->_path.'views/css/multipurpose.css'
        ));

        $this->context->controller->addJS(array(
            $this->_path.'views/js/multipurpose.js'
        ));
    }

    public function getContent(){
        if (Tools::isSubmit('savemultipurposetesting')){
            $name = Tools::getValue('print');
            Configuration::updateValue('MULTIPURPOSE_STR', $name);
        }
        $this->context->smarty->assign(array(
            'MULTIPURPOSE_STR' => Configuration::get('MULTIPURPOSE_STR')
        ));
        return $this->display(__FILE__, 'views/templates/admin/configure.tpl');
    }
}
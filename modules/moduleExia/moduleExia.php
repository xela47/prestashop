<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

if (!defined('_PS_VERSION_'))
  exit;

class ModuleExia extends Module
  {
  public function __construct()
    {
    $this->name = 'moduleExia';
    $this->tab = 'front_office_features';
    $this->version = 1.0;
    $this->author = 'Alexandre Delbos';
    $this->need_instance = 0;
 
    parent::__construct();
 
    $this->displayName = $this->l('Module Exia');
    $this->description = $this->l('Module affichant un label contenant le nombre de vente du site en temps réel');
    }
 
  public function install()
    {
    if (parent::install() == false)
      return false;
    return true;
    }
  }
?>

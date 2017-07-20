<?php
/**
 * The controller for the main page of the module.
 */
namespace Drupal\d8_angular_toh\Controller;

use Drupal\Core\Controller\ControllerBase;

class AngularTohController extends ControllerBase{
    public function content(){
        return array(
            '#theme'=>'d8_angular_toh',
            '#base_href'=>'/angular-toh',
            '#content'=>$this->t('Loading AppComponent content here ...')
        );
    }
}
<?php

class AuthorizationController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function loginAction()
    {
        // action body
    }

    public function logoutAction()
    {
        // action body
    }

    public function registrationAction()
    {
        $form = new Application_Form_Registration();
        
        if( $this -> getRequest() -> isPost() )
        {
        	if( $form -> isValid( $this -> getRequest() -> getPost() ) )
        	{
        		echo 'ok';
        	}
        }
        
        //- Init view -//
        $this -> view -> form = $form;
    }

    public function registrationsuccessAction()
    {
        // action body
    }


}










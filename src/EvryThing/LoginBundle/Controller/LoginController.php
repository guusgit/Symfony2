<?php
// src/EvryThing/LoginBundle/Controller/LoginController.php

namespace EvryThing\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use EvryThing\UtilisateurBundle\Entity\User;
use EvryThing\UtilisateurBundle\Form\LoginType;

class LoginController extends Controller
{
  public function loginAction()
  {
		//$request = $this->getRequest();
	        
	//$form = $this->createFormBuilder($request)

	$user = new User();
	$form = $this->createForm(new LoginType(), $user);

        return $this->render('EvryThingLoginBundle:Login:login.html.twig', array(
            'form' => $form->createView()
        ));
 
 } 


/*	public function loginAction()
	{
			$form=$this->get('form.factory')->createNamed('','LoginType');

		if($error=$this->getErrorMessage()) 
		{
			$form->addError(new FormError($error));
		}

		return $this->render('...', array('form'=>$form->createView()));
	}
*/
}

<?php
/**
 * Created by PhpStorm.
 * User: ThinkCenter
 * Date: 25/03/2019
 * Time: 12:42
 */

namespace Yoda\UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegisterController extends Controller
{
    /**
     * @Route("/register", name="user_register")
     * @Template()
     */
    public function registerAction()
    {
        $form = $this->createFormBuilder()
            ->add('username', 'text')
            ->add('email', 'email')
            ->add('password', 'repeated', array(
                'type' => 'password'
            ))
            ->getForm();

        return array('form' => $form->createView());
    }
}
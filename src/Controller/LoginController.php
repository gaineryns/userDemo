<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="security_login")
     */
    public function login(AuthenticationUtils $helper): Response
    {
      return $this->render(
          'security/login.html.twig',[
              'last_username' => $helper->getLastUsername(),
              'error' => $helper->getLastAuthenticationError(),
          ]
      );
    }

    /**
     * @Route("/", name="index")
     */
    public function index(){
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function admin(){
        return $this->render('Admin/index.html.twig');
    }
}

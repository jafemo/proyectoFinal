<?php

namespace usuariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use usuariosBundle\Entity\user;
use usuariosBundle\Form\userType;

class DefaultController extends Controller
{
    public function usuariosAction()
    {
        return $this->render('usuariosBundle:Carpeta_User:login.html.twig');
    }

    /**
     * @Route("/login", name="login_user")
     */
    public function loginAction(Request $request)
    {
      $authenticationUtils = $this->get('security.authentication_utils');

      // obtener mensaje de error en el Login
      $error = $authenticationUtils->getLastAuthenticationError();

      // Coger el ultimo usuario que hemos insertado
      $lastUsername = $authenticationUtils->getLastUsername();

      return $this->render('usuariosBundle:Carpeta_User:login.html.twig', array(
          'last_username' => $lastUsername,
          'error'         => $error,
      ));
    }


    /**
      * @Route("/register", name="user_registration")
      */
      public function registerAction(Request $request)
        {
            // 1) build the form
            $usuario = new user();
            $form = $this->createForm(userType::class, $usuario);

            // 2) handle the submit (will only happen on POST)
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {

                // 3) Encode the password (you could also do this via Doctrine listener)
                $password = $this->get('security.password_encoder')->encodePassword($usuario, $usuario->getPlainPassword());
                $usuario->setPassword($password);

                // 4) save the User!
                $roles = ["ROLE_USER"];
                $usuario->setRoles($roles);
                $DB = $this->getDoctrine()->getManager();
                $DB->persist($usuario);
                $DB->flush();

                // ... do any other work - like sending them an email, etc
                // maybe set a "flash" success message for the user

                return $this->redirectToRoute('login_user');
            }

         return $this->render('usuariosBundle:Carpeta_User:register.html.twig',array('form' => $form->createView()));
     }



}

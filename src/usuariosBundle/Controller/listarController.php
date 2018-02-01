<?php

namespace usuariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use usuariosBundle\Entity\user;
use usuariosBundle\Form\userNuevoType;

class listarController extends Controller
{
    public function usuariosAction()
    {
        return $this->render('usuariosBundle:Carpeta_User:login.html.twig');
    }

    /**
     * @Route("/mostrar", name="mostrar_usuarios")
     */
    public function mostrarUsuariosAction()
    {

      $repository = $this->getDoctrine()->getRepository('usuariosBundle:user');
      $mostrar = $repository->findAll();
      return $this->render('usuariosBundle:Carpeta_User:mostrarUsers.html.twig',array('TablaUser' => $mostrar ));
    }


    /**
     * @Route("/CUD/actualizar/{id}", name="actualizar_usuarios")
     */
    public function actualizarUsuariosAction(Request $request,$id)
    {
        $entity = $this->getDoctrine()->getRepository('usuariosBundle:user')->find($id);

        if(!$entity){return $this->redirectToRoute('mostrar_usuarios');}
        $form = $this->createForm(\usuariosBundle\Form\userNuevoType::class, $entity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $DB = $this->getDoctrine()->getManager();
            $DB->persist($entity);
            $DB->flush();
            return $this->redirectToRoute('actualizar_usuarios', ["id" => $id]);
        }
        return $this->render("usuariosBundle:Carpeta_User:actualizarUser.html.twig", array('form'=>$form->createView() ));
    }

    /**
   * @Route("/CUD/eliminar/{id}", name="eliminar_usuario")
   */
  public function eliminarUsuarioAction($id)
  {
          $DB = $this->getDoctrine()->getManager();
          $eliminar = $DB->getRepository('usuariosBundle:user')->find($id);

          if (!$eliminar) {
              throw $this->createNotFoundException(
                  'No se ha encontrado el id: '.$id
              );
          }

          $DB->remove($eliminar);
          $DB->flush();

      return $this->render("usuariosBundle:Carpeta_User:eliminarUser.html.twig", array('TablaEntity'=>$eliminar));
  }


}

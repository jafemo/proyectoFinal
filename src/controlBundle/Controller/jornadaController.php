<?php

namespace controlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use controlBundle\Entity\jornada;
use controlBundle\Form\jornadaType;
use Symfony\Component\HttpFoundation\Request;

class jornadaController extends Controller
{
    /**
     * @Route("/jornada", name="mostrar_jornada")
     */
    public function mostrarPlantillaAction()
    {

      $repository = $this->getDoctrine()->getRepository('controlBundle:jornada');
      $mostrar = $repository->findAll();
      return $this->render('controlBundle:Carpeta_Jornada:mostrarJornada.html.twig',array('TablaJornada' => $mostrar ));
    }

    /**
     * @Route("/CUD/crearJornada", name="crearJornada")
     */
    public function crearJornadaAction(Request $request)
    {
    //dentro de la función añadimos un objeto de nuestra Entity:
    $entity = new jornada();
    $form= $this->createForm(jornadaType::class,$entity);/*Aquí le añadimos la variable del objeto*/
    $form->handleRequest($request);
    //A continuación viene una comprobación si se aprieta el botón de enviar:
    if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $entity = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
             $DB = $this->getDoctrine()->getManager();
             $DB->persist($entity);
             $DB->flush();

              return $this->render('controlBundle:Carpeta_Jornada:ultimoInsertado.html.twig', array('TablaJornada' => $entity));
      }
        //en el caso de que no haya validacion se mostrara el formulario
        return $this->render('controlBundle:Carpeta_Jornada:formulario.html.twig',array('form' => $form->createView() ));
    }
    /**
     * @Route("/CUD/actualizarJornada/{id}", name="actualizar_jornada")
     */
    public function actualizarJornadaAction(Request $request,$id)
    {
        $entity = $this->getDoctrine()->getRepository('controlBundle:jornada')->find($id);

        if(!$entity){return $this->redirectToRoute('mostrar_jornada');}
        $form = $this->createForm(\controlBundle\Form\jornadaType::class, $entity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $DB = $this->getDoctrine()->getManager();
            $DB->persist($entity);
            $DB->flush();
            return $this->redirectToRoute('actualizar_jornada', ["id" => $id]);
        }
        return $this->render("controlBundle:Carpeta_Jornada:actualizar.html.twig", array('form'=>$form->createView() ));
    }
    /**
   * @Route("/CUD/eliminarJornada/{id}", name="eliminar_campo_jornada")
   */
  public function eliminarJornadaAction($id)
  {
          $DB = $this->getDoctrine()->getManager();
          $eliminar = $DB->getRepository('controlBundle:jornada')->find($id);

          if (!$eliminar) {
              throw $this->createNotFoundException(
                  'No se ha encontrado el id: '.$id
              );
          }

          $DB->remove($eliminar);
          $DB->flush();

      return $this->render("controlBundle:Carpeta_Jornada:eliminar.html.twig", array('TablaEntity'=>$eliminar));
  }



}

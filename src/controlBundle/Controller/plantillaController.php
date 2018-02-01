<?php

namespace controlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use controlBundle\Entity\plantilla;
use controlBundle\Form\plantillaType;
use Symfony\Component\HttpFoundation\Request;

class plantillaController extends Controller
{
    /**
     * @Route("/plantilla", name="mostrar_plantilla")
     */
    public function mostrarPlantillaAction()
    {

      $repository = $this->getDoctrine()->getRepository('controlBundle:plantilla');
      $mostrar = $repository->findAll();
      return $this->render('controlBundle:Carpeta_Plantilla:mostrarPlantilla.html.twig',array('TablaPlantilla' => $mostrar ));
    }

    /**
     * @Route("/CUD/crearPlantilla", name="crearPlantilla")
     */
    public function crearPlantillaAction(Request $request)
    {
    //dentro de la función añadimos un objeto de nuestra Entity:
    $entity = new plantilla();
    $form= $this->createForm(plantillaType::class,$entity);/*Aquí le añadimos la variable del objeto*/
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

              return $this->render('controlBundle:Carpeta_Plantilla:ultimoInsertado.html.twig', array('TablaPlantilla' => $entity));
      }
        //en el caso de que no haya validacion se mostrara el formulario
        return $this->render('controlBundle:Carpeta_Plantilla:formulario.html.twig',array('form' => $form->createView() ));
    }
    /**
     * @Route("/CUD/actualizarPlantilla/{id}", name="actualizar_plantilla")
     */
    public function actualizarPlantillaAction(Request $request,$id)
    {
        $entity = $this->getDoctrine()->getRepository('controlBundle:plantilla')->find($id);

        if(!$entity){return $this->redirectToRoute('mostrar_plantilla');}
        $form = $this->createForm(\controlBundle\Form\plantillaType::class, $entity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $DB = $this->getDoctrine()->getManager();
            $DB->persist($entity);
            $DB->flush();
            return $this->redirectToRoute('actualizar_plantilla', ["id" => $id]);
        }
        return $this->render("controlBundle:Carpeta_Plantilla:actualizar.html.twig", array('form'=>$form->createView() ));
    }
    /**
   * @Route("/CUD/eliminarplantilla/{id}", name="eliminar_campo")
   */
  public function eliminarPlantillaAction($id)
  {
          $DB = $this->getDoctrine()->getManager();
          $eliminar = $DB->getRepository('controlBundle:plantilla')->find($id);

          if (!$eliminar) {
              throw $this->createNotFoundException(
                  'No se ha encontrado el id: '.$id
              );
          }

          $DB->remove($eliminar);
          $DB->flush();

      return $this->render("controlBundle:Carpeta_Plantilla:eliminar.html.twig", array('TablaEntity'=>$eliminar));
  }



}

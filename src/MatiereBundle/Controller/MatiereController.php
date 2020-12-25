<?php

namespace MatiereBundle\Controller;

use MatiereBundle\Form\MatiereForm;
use MatiereBundle\Entity\Matiere;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MatiereController extends Controller
{
    public function afficheAction()
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        $matieres = $em->getRepository('MatiereBundle:Matiere')->findAll();
        return $this->render('Matiere/affiche.html.twig',
            array(
                'Matieres' => $matieres
            ));
    }

    public function ajouterAction(Request $request)
    {
        $Mdele = new Matiere();

        $form = $this->createForm(MatiereForm::class, $Mdele);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($Mdele);
            $em->flush();
        }
        return $this->render('Matiere/ajouter.html.twig',
            array(
                'Form' => $form->createView()
            ));


    }

    public function supprimerAction(Request $request, $numMat)
    {
        $em = $this->getDoctrine()->getManager();
        $pers = $em->getRepository('MatiereBundle:Matiere')->find($numMat);
        if ($pers != null) {
            $em->remove($pers);
            $em->flush();
            return $this->redirect($this->generateUrl('mat_homepage'));
        } else {
            throw new NotFoundHttpException("Matiere n'existe pas");
        }
    }

}

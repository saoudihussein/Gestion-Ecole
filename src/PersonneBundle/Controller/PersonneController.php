<?php

namespace PersonneBundle\Controller;


use PersonneBundle\Entity\Personne;

use PersonneBundle\Form\ModeleForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class PersonneController extends Controller
{

    public function afficheAction()
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        $personnes = $em->getRepository('PersonneBundle:Personne')->findAll();
        return $this->render('Personne/affiche.html.twig',
            array(
                'personnes' => $personnes
            ));
    }

    public function ajouterAction(Request $request)
    {
        $Mdele = new Personne();

        $form = $this->createForm(ModeleForm::class, $Mdele);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($Mdele);
            $em->flush();
            return $this->redirect($this->generateUrl('affichePers'));
        }
        return $this->render('Personne/ajouter.html.twig',
            array(
                'Form' => $form->createView()
            ));


    }

    public function supprimerAction(Request $request, $cin)
    {
        $em = $this->getDoctrine()->getManager();
        $pers = $em->getRepository('PersonneBundle:Personne')->find($cin);
        if ($pers != null) {
            $em->remove($pers);
            $em->flush();
            return $this->redirect($this->generateUrl('affichePers'));
        } else {
            throw new NotFoundHttpException("Personne n'existe pas");
        }
    }
}

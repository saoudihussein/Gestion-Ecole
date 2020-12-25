<?php

namespace EleveBundle\Controller;

use EleveBundle\Entity\Eleve;
use EleveBundle\Form\EleveForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EleveController extends Controller
{

    public function afficheAction()
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        $eleves = $em->getRepository('EleveBundle:Eleve')->findAll();
        return $this->render('Eleve/affiche.html.twig',
            array(
                'eleves' => $eleves
            ));
    }

    public function ajouterAction(Request $request)
    {
        $Mdele = new Eleve();

        $form = $this->createForm(EleveForm::class, $Mdele);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($Mdele);
            $em->flush();
            //return $this->redirect($this->generateUrl('affichePers'));
        }
        return $this->render('Eleve/ajouter.html.twig',
            array(
                'Form' => $form->createView()
            ));


    }

    public function supprimerAction(Request $request, $num)
    {
        $em = $this->getDoctrine()->getManager();
        $pers = $em->getRepository('EleveBundle:Eleve')->find($num);
        if ($pers != null) {
            $em->remove($pers);
            $em->flush();
            return $this->redirect($this->generateUrl('eleve_homepage'));
        } else {
            throw new NotFoundHttpException("Eleve n'existe pas");
        }
    }
}

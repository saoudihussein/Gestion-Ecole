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
            return $this->redirect($this->generateUrl('affiche_eleve'));
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
            return $this->redirect($this->generateUrl('affiche_eleve'));
        } else {
            throw new NotFoundHttpException("Eleve n'existe pas");
        }
    }

    //* update method ye chikh
    public function editAction(Request $request, $num)
    {
        $post=$this->getDoctrine()->getRepository('EleveBundle:Eleve')->find($num);

        $post->setNom($post->getNom());
        $post->setPrenom($post->getPrenom());
        $post->setAdresse($post->getAdresse());
        $post->setCinParent($post->getCinParent());
        $post->setNum($post->getNum());
        $form = $this->createForm(EleveForm::class, $post);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nom=$form['nom']->getData();
            $prenom=$form['prenom']->getData();
            $adresse=$form['adresse']->getData();
            $cinParent=$form['cinParent']->getData();
            $num_classe=$form['num']->getData();

            $em = $this->getDoctrine()->getManager();
            $post=$em->getRepository('EleveBundle:Eleve')->find($num);

            $post->setNom($nom);
            $post->setPrenom($prenom);
            $post->setAdresse($adresse);
            $post->setCinParent($cinParent);
            $post->setNum($num_classe);

            $em->flush();

            return $this->redirectToRoute('affiche_eleve');
        }
        return $this->render('Eleve/edit.html.twig',[
            'Form' => $form->createView()
        ]);


    }

}


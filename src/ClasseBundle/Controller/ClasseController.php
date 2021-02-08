<?php

namespace ClasseBundle\Controller;

use ClasseBundle\Form\EditForm;
use ClasseBundle\ClasseBundle;
use ClasseBundle\Entity\Classes;
use ClasseBundle\Form\ClasseForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ClasseController extends Controller
{
    public function afficheAction()
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        $classs = $em->getRepository('ClasseBundle:Classes')->findAll();
        return $this->render('Classe/affiche.html.twig',
            array(
                'classs' => $classs
            ));
    }

    public function ajouterAction(Request $request)
    {
        $Mdele = new Classes();

        $form = $this->createForm(ClasseForm::class, $Mdele);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($Mdele);
            $em->flush();
            return $this->redirect($this->generateUrl('classe_affichage'));
        }
        return $this->render('Classe/ajouter.html.twig',
            array(
                'Form' => $form->createView()
            ));


    }

    public function supprimerAction(Request $request, $num)
    {
        $em = $this->getDoctrine()->getManager();
        $abs = $em->getRepository('ClasseBundle:Classes')->find($num);
        if ($abs != null) {
            $em->remove($abs);
            $em->flush();
            return $this->redirect($this->generateUrl('classe_affichage'));
        } else {
            throw new NotFoundHttpException(" n'existe pas");
        }
    }


    //* update method ye chikh
    public function editAction(Request $request, $num)
    {
        $post=$this->getDoctrine()->getRepository('ClasseBundle:Classes')->find($num);

        $post->setNum($post->getNum());
        $post->setLibelle($post->getLibelle());
        $post->setCapacite($post->getCapacite());

        $form = $this->createForm(EditForm::class, $post);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $num=$form['num']->getData();
            $libelle=$form['libelle']->getData();
            $capacite=$form['capacite']->getData();

            $em = $this->getDoctrine()->getManager();
            $post=$em->getRepository('ClasseBundle:Classes')->find($num);

            $post->setNum($num);
            $post->setLibelle($libelle);
            $post->setCapacite($capacite);

            $em->flush();

            return $this->redirectToRoute('classe_affichage');
        }
        return $this->render('Classe/edit.html.twig',[
            'Form' => $form->createView()
            ]);


    }

}

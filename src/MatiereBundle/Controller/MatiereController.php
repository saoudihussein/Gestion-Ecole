<?php

namespace MatiereBundle\Controller;
use MatiereBundle\Form\MatiereForm;
use MatiereBundle\Entity\Matiere;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


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
            return $this->redirect($this->generateUrl('affiche_mat'));

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
            return $this->redirect($this->generateUrl('affiche_mat'));
        } else {
            throw new NotFoundHttpException("Matiere n'existe pas");
        }
    }



    //* update method ye chikh
    public function editAction(Request $request, $numMat)
    {
        $post=$this->getDoctrine()->getRepository('MatiereBundle:Matiere')->find($numMat);
        $post->setLibelle($post->getLibelle());
        $post->setCoef($post->getCoef());
        $post->setCinMaitre($post->getCinMaitre());

        $form = $this->createForm(MatiereForm::class, $post);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $libelle=$form['libelle']->getData();
            $coef=$form['coef']->getData();
            $cinMaitre=$form['cinMaitre']->getData();

            $em = $this->getDoctrine()->getManager();
            $post=$em->getRepository('MatiereBundle:Matiere')->find($numMat);

            $post->setLibelle($libelle);
            $post->setCoef($coef);
            $post->setCinMaitre($cinMaitre);

            $em->flush();

            return $this->redirectToRoute('affiche_mat');
        }
        return $this->render('Matiere/edit.html.twig',[
            'Form' => $form->createView()
        ]);


    }
}

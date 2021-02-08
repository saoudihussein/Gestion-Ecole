<?php


namespace AbsenceBundle\Controller;

use AbsenceBundle\Entity\Absence;
use AbsenceBundle\Form\AbsenceForm;
use Doctrine\ORM\Query\Expr\Select;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Tests\Model;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class AbsenceController extends Controller
{

    public function afficheAction()
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        $absences = $em->getRepository('AbsenceBundle:Absence')->findAll();
        return $this->render('Absence/affiche.html.twig',
            array(
                'absences' => $absences
            ));
    }

    public function ajouterAction(Request $request)
    {
        $Mdele = new Absence();

        $form = $this->createForm(AbsenceForm::class, $Mdele);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($Mdele);
            $em->flush();
            return $this->redirect($this->generateUrl('absence_affichage'));
        }
        return $this->render('Absence/ajouter.html.twig',
            array(
                'Form' => $form->createView()
            ));


    }

    public function supprimerAction(Request $request, $numAbs)
    {
        $em = $this->getDoctrine()->getManager();
        $abs = $em->getRepository('AbsenceBundle:Absence')->find($numAbs);
        if ($abs != null) {
            $em->remove($abs);
            $em->flush();
            return $this->redirect($this->generateUrl('absence_affichage'));
        } else {
            throw new NotFoundHttpException(" n'existe pas");
        }
    }

    //* update method ye chikh
    public function editAction(Request $request, $numAbs)
    {
        $post=$this->getDoctrine()->getRepository('AbsenceBundle:Absence')->find($numAbs);

        $post->setNumAbs($post->getNumAbs());
        $post->setDateAbs($post->getDateAbs());
        $post->setNum($post->getNum());
        $post->setNumEleve($post->getNumEleve());
        $post->setNumMat($post->getNumMat());

        $form = $this->createForm(AbsenceForm::class, $post);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dateAbs=$form['dateAbs']->getData();
            $num_=$form['num']->getData();
            $numEleve=$form['numEleve']->getData();
            $numMat=$form['numMat']->getData();


            $em = $this->getDoctrine()->getManager();
            $post=$em->getRepository('AbsenceBundle:Absence')->find($numAbs);

            $post->setDateAbs($dateAbs);
            $post->setNum($num_);
            $post->setNumEleve($numEleve);
            $post->setNumMat($numMat);

            $em->flush();

            return $this->redirectToRoute('absence_affichage');
        }
        return $this->render('Absence/edit.html.twig',[
            'Form' => $form->createView()
        ]);


    }
}
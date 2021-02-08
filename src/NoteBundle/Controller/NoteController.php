<?php


namespace NoteBundle\Controller;
use EleveBundle\Form\EleveForm;
use NoteBundle\Entity\Note;
use NoteBundle\Form\NoteForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Tests\Model;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
class NoteController extends Controller
{
    public function NbParentAction()
    {

        $em = $this->container->get('doctrine')->getEntityManager();

        $query = $em->createQueryBuilder();
        $query->select('count(pers.cinPersonne)');
        $query->from('PersonneBundle:Personne', 'pers');
        $query->where('pers.role=:role');
        $query->setParameter('role', 'parent');
        $parent = $query->getQuery()->getSingleScalarResult();



        return $this->render('Dashboard/Dashboard.html.twig', array('parent' => $parent));

    }
    public function afficheAction()
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        $notes = $em->getRepository('NoteBundle:Note')->findAll();
        return $this->render('Note/affiche.html.twig',
            array(
                'notes' => $notes
            ));
    }

    public function ajouterAction(Request $request)
    {
        $Mdele = new Note();

        $form = $this->createForm(NoteForm::class, $Mdele);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($Mdele);
            $em->flush();
            return $this->redirect($this->generateUrl('Note_affichage'));
        }
        return $this->render('Note/ajouter.html.twig',
            array(
                'Form' => $form->createView()
            ));


    }

    public function supprimerAction(Request $request, $numnote)
    {
        $em = $this->getDoctrine()->getManager();
        $abs = $em->getRepository('NoteBundle:Note')->find($numnote);
        if ($abs != null) {
            $em->remove($abs);
            $em->flush();
            return $this->redirect($this->generateUrl('Note_affichage'));
        } else {
            throw new NotFoundHttpException(" n'existe pas");
        }
    }


    //* update method ye chikh
    public function editAction(Request $request, $numnote)
    {
        $post=$this->getDoctrine()->getRepository('NoteBundle:Note')->find($numnote);

        $post->setNote($post->getNote());
        $post->setNumMat($post->getNumMat());
        $post->setNumEleve($post->getNumEleve());
        $post->setNum($post->getNum());

        $form = $this->createForm(NoteForm::class, $post);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $note=$form['Note']->getData();
            $num_classe=$form['num']->getData();
            $numMat=$form['numMat']->getData();
            $numEleve=$form['numEleve']->getData();

            $em = $this->getDoctrine()->getManager();
            $post=$em->getRepository('NoteBundle:Note')->find($numnote);

            $post->setNum($num_classe);
            $post->setNote($note);
            $post->setNumMat($numMat);
            $post->setNumEleve($numEleve);

            $em->flush();

            return $this->redirectToRoute('Note_affichage');
        }
        return $this->render('Note/edit.html.twig',[
            'Form' => $form->createView()
        ]);


    }

}
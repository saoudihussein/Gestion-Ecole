<?php

namespace PersonneBundle\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
use PersonneBundle\Entity\Personne;

use PersonneBundle\Form\EditForm;
use PersonneBundle\Form\ModeleForm;
use PersonneBundle\Form\NbMaitreForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;




class PersonneController extends Controller
{
 public function DashboardAction()
{

    return $this->render('Dashboard/dashboard.html.twig');

}


    public function NbMaitreAction()
    {

        $em = $this->container->get('doctrine')->getEntityManager();

        $query = $em->createQueryBuilder();
        $query->select('count(pers.cinPersonne)');
        $query->from('PersonneBundle:Personne', 'pers');
        $query->where('pers.role=:role');
        $query->setParameter('role', 'Parent');
        $res = $query->getQuery()->getSingleScalarResult();

        $query = $em->createQueryBuilder();
        $query->select('count(pers.cinPersonne)');
        $query->from('PersonneBundle:Personne', 'pers');
        $query->where('pers.role=:role');
        $query->setParameter('role', 'Maitre');
        $res1 = $query->getQuery()->getSingleScalarResult();

        $query = $em->createQueryBuilder();
        $query->select('count(elv.numEleve)');
        $query->from('EleveBundle:Eleve', 'elv');
        $res2 = $query->getQuery()->getSingleScalarResult();

        $query = $em->createQueryBuilder();
        $query->select('count(mat.numMat)');
        $query->from('MatiereBundle:Matiere', 'mat');
        $res3 = $query->getQuery()->getSingleScalarResult();



        return $this->render('Dashboard/Dashboard.html.twig', array(
            'res1' => $res1,
            'res'=> $res,
            'res2'=>$res2,
            'res3'=> $res3));
    }



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

    //* update method ye chikh
    public function editAction(Request $request, $cinPersonne)
    {
        $post=$this->getDoctrine()->getRepository('PersonneBundle:Personne')->find($cinPersonne);

       // $post->setCinPersonne($post->getCinPersonne());
        $post->setNom($post->getNom());
        $post->setPrenom($post->getPrenom());
        $post->setAdresse($post->getAdresse());
        $post->setNumTel($post->getNumTel());
        $post->setEmail($post->getEmail());
        $post->setRole($post->getRole());


        $form = $this->createForm(EditForm::class, $post);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //$cin_personne=$form['cinPersonne']->getData();
            $nom=$form['nom']->getData();
            $prenom=$form['prenom']->getData();
            $adresse=$form['adresse']->getData();
            $num_tel=$form['numTel']->getData();
            $email=$form['email']->getData();
            $role=$form['role']->getData();

            $em = $this->getDoctrine()->getManager();
            $post=$em->getRepository('PersonneBundle:Personne')->find($cinPersonne);

          //  $post->setCinPersonne($cin_personne);
            $post->setNom($nom);
            $post->setPrenom($prenom);
            $post->setAdresse($adresse);
            $post->setNumTel($num_tel);
            $post->setEmail($email);
            $post->setRole($role);
            $em->flush();

            return $this->redirectToRoute('affichePers');
        }
        return $this->render('Personne/edit.html.twig',[
            'form' => $form->createView()
        ]);


    }

public function loginAction(Request $request)
    {

        $Mdele = new Personne();

        $form = $this->createForm(ModeleForm::class, $Mdele);

        $form->handleRequest($request);

        if ($form->isSubmitted()){
        $em = $this->container->get('doctrine')->getEntityManager();
        $email = $request->get('email');
        $password = $request->get('password');

        $query = $em->createQueryBuilder();
        $query->select('count(pers.role),pers.role');
        $query->from('PersonneBundle:Personne', 'pers');
        $query->where('pers.email=:email and pers.motDePasse =:password');
        $query->setParameter('email', $email);
        $query->setParameter('password', $password);



        $res = $query->getQuery()->getScalarResult();
        $numRows = $res[0][1];
        $role = $res[0]["role"];

        if ($numRows == 1){
            return $this->redirect($this->generateUrl('dashboard_homepage'));

            $sessionStorage = new NativeSessionStorage([], new NativeFileSessionHandler());
            $session = new Session($sessionStorage);


        }else{
            echo "<script>alert('Email ou mot de passe incorrect ')</script>";
        }
        }
        return $this->render('Personne/login.html.twig',
            array(
                'Form' => $form->createView()
            ));
    }

}


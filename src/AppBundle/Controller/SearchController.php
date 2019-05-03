<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\Vote;
use AppBundle\Form\VoteType;
use Doctrine\ORM\Mapping\MappingException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class SearchController extends Controller
{
    /**
     * @Route("/search" , name="search")
     */
    public function indexAction(Request $req)
    {
        $loc = $req->get("location", null);
        $model = $this->getDoctrine()->getRepository(User::class);
        $resultat = $model->search_by_location($loc);
        $session = new Session();
        $session->set('name', 'Drak');


        return $this->render('AppBundle:Search:index.html.twig', array(
            "results" => $resultat
        ));
    }

    /**
     * @Route("/profil/{id}" , name="view_profil")
     */
    public function profilAction(Request $request, $id)
    {
        $model = $this->getDoctrine()->getRepository(User::class);
        $docteur = $model->findOneById($id);
        $model = $this->getDoctrine()->getRepository(Vote::class);

        $check = null;
        if ($this->getUser() != null) {
            $check = $model->findOneBy(array(
                "docteur" => $id,
                "user" => $this->getUser()->getId()
            ));
        }
        $vote_avg = $model->get_votes_moyen($id);
//        dump($vote);
//        die;
        //// select avg(vote) from vote group by  docteur_id


        $vote = new Vote();
        $vote_form = $this->createForm(VoteType::class, $vote);
        $session = new Session();

        return $this->render('AppBundle:Search:profil.html.twig', array(
            "medecin" => $docteur,
            "name" => $session->get("name"),
            "vote_form" => $vote_form->createView(),
            "vote" => $check,
            "avg_vote" => $vote_avg
        ));
    }

    /**
     * @param Request $request
     * @Route("/vote/{user}/{docteur}" , name="vote")
     */
    public function voteAction(Request $request, $user, $docteur)
    {
        if ($request->isXmlHttpRequest()) {
            try {
                $medecin = $request->request->get("appbundle_vote");
                $vote = new Vote();
                $vote->setVote($medecin["vote"])
                    ->setUser($this->getUser());
                $em = $this->getDoctrine()->getManager();
                $model = $this->getDoctrine()->getRepository(User::class);
                $x = $model->findOneBy(array("id" => $docteur));
                $vote->setDocteur($x);
                $em->persist($vote);
                $em->flush();
            } catch (MappingException $e) {
                die("Operation not allowed");
            }
        }
    }
}

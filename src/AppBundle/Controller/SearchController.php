<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class SearchController extends Controller
{
    /**
     * @Route("/search" , name="search")
     */
    public function indexAction(Request $req)
    {
        $loc = $req->get("location" , null);
        $model = $this->getDoctrine()->getRepository(User::class);
        $resultat =  $model->search_by_location($loc);
        $session = new Session();
        $session->set('name', 'Drak');


        return $this->render('AppBundle:Search:index.html.twig', array(
            "results" => $resultat
        ));
    }


    /**
     * @Route("/profil/{id}" , name="view_profil")
     */
    public  function profilAction(Request $request,$id){
        $model = $this->getDoctrine()->getRepository(User::class);
        $user = $model->findOneById($id);

        $session = new Session();
        return $this->render('AppBundle:Search:profil.html.twig', array(
            "medecin" => $user ,
            "name" => $session->get("name")

        ));
    }

}

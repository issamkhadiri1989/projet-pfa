<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

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

        return $this->render('AppBundle:Search:index.html.twig', array(
            "results" => $resultat
        ));
    }

}

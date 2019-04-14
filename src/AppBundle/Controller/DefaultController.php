<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Specialite;
use AppBundle\Entity\Ville;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()
                ->getRepository(Ville::class);
        $villes = $em->findAll() ;

        $em = $this->getDoctrine()
                    ->getRepository(Specialite::class);
        $specialites = $em->findAll();
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            "villes" => $villes,
            "specialites" => $specialites
        ]);
    }


    /**
     * @Route("/about-us" , name="aboutus")
     */
    public function aboutusAction()
    {
        return $this->render("AppBundle:Default:aboutus.html.twig", array());
    }

    /**
     * @Route("/choisir-profil" , name="choose")
     */
    public function registerAction(){
        return $this->render("AppBundle:Default:choose.html.twig", array());

    }


    /**
     * @Route("/medecin" , name="medecin")
     */
    public function registermedecinAction(Request $request){


        return $this->render("AppBundle:Default:medecin.html.twig", array(
        ));

    }
}

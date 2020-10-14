<?php


namespace App\Controller;

use App\Services\ComplexObject;
use App\Services\MailLogger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * page d'accueil
     *
     * @Route("/", name="accueil")
     * @param ComplexObject $complexObject
     * @param MailLogger $mailLogger
     * @return Response
     */
    public function home(ComplexObject $complexObject, MailLogger $mailLogger)
    {
        $doManger = $complexObject->doSomething("manger");
        $envoiMail = $mailLogger->sendMail();


        return $this->render("home.html.twig", ['doManger' => $doManger, 'envoiMail' => $envoiMail]);
    }
}

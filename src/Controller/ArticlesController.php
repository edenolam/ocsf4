<?php


namespace App\Controller;


use DateTime;
use http\Cookie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{

    /**
     * @Route("/articles", name="hello")
     * @param Request $request
     * @return Response
     */
    public function articles(Request $request): Response
    {

        $articles = $this->articlesList();
        readfile("notes.txt");
        //echo $this->json($articles, []);
        $myfile = fopen("notes.txt", "r");

        while(!feof($myfile)) {
            echo fgetc($myfile);
        }
    }

    private function articlesList()
    {
        return [
            [
                'id' => 1,
                'titre' => 'Un superbe titre',
                'sommaire' => 'Un Sommaire',
                'date' => new DateTime(),
                'comments' => [
                    'Super génial !',
                    'Quel bon article !',
                    'Ne fonctionne pas, très déçu...'
                ]
            ],
            [
                'id' => 2,
                'titre' => 'Harry Peau de beurre',
                'sommaire' => 'Une sombre histoire de cuisinier',
                'date' => new DateTime(),
                'comments' => [
                    'Je préfère le film !',
                    'Attention, on le trouve à moins cher sur Abazone !',
                    'Vous avez le tome 2?'
                ]
            ],
            [
                'id' => 3,
                'titre' => 'Zozor le terrible',
                'sommaire' => 'Une BD pour enfants en bas âge',
                'date' => new DateTime(),
                'comments' => [
                    'Zozor fait un peu peur à ma fille malheureusement',
                ]
            ],
        ];
    }

}

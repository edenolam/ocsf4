<?php

namespace App\EventListener;

use App\EventListener\FooEvent;
class ExceptionListener
{
    /*
     * cette classe est un écouteur d'événement valide :
     *  Un écouteur d'événements est une simple classe PHP disposant de fonctions publiques qui prennent en argument l'événement écouté.
     */
    public function doSomething(FooEvent $event)
    {

    }

}

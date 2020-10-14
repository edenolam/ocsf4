<?php


namespace App\EventSubscriber;


use App\EventListener\BarEvent;
use App\EventListener\FooEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ExceptionSubscriber implements EventSubscriberInterface
{

    /**
     * @inheritDoc
     */
    public static function getSubscribedEvents()
    {
        return [
            'foo' => [
                ['doSomething', 10],
                ['doOtherThing', 10],
            ],
            'bar' => [
                ['doBarThing', -10]
            ],
        ];
    }
    public function doSomething(FooEvent $event){}
    public function doOtherThing(FooEvent $event){}
    public function doBarThing(BarEvent $event){}

}

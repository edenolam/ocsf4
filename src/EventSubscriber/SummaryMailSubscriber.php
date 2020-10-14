<?php


namespace App\EventSubscriber;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\PostResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class SummaryMailSubscriber implements EventSubscriberInterface
{

    /**
     * @inheritDoc
     * Un envoi d'e-mail, qui peut être long et bloquer
     * l'envoi de la réponse, a donc été "repoussé"
     * après que l'application a retourné une réponse à l'utilisateur.
     */
    public static function getSubscribedEvents()
    {
        return [
            // 'kernel.terminate'
            KernelEvents::TERMINATE => [
                ['sendProductPaidMail', 0],
            ]
        ];
    }

    public function sendProductPaidMail(PostResponseEvent $event)
    {
        // envoi e l'email
    }
}

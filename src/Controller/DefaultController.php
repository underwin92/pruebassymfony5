<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index(\Swift_Mailer $mailer)
    {
        $message = (new \Swift_Message())
            ->setSubject('Asunto')
            ->setFrom(['Undertakerwin92@gmail.com' => 'Tu Usuario'])
            ->setTo(['undertakerwin92@gmail.com' => 'Jaime Niñoles'])
            ->setBody(
                'Esto es texto en HTML.',
                'text/html'
            )
             ->addPart(
                 'Esto es texto pelado.',
                 'text/plain'
             );
        $mailer->send($message);

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }


}
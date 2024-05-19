<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class BlackJackController extends AbstractController
{
    #[Route("/game/", name: "blackjack")]
    public function blackJack(
        SessionInterface $session
    ): Response {

        return $this->render('game.html.twig');
    }


    #[Route("/game/doc", name: "doc")]
    public function doc(
        SessionInterface $session
    ): Response {


        return $this->render('blackjack/doc.html.twig');
    }

}
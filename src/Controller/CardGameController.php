<?php

namespace App\Controller;

use App\Card\Card;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;


class CardGameController extends AbstractController
{
    #[Route('/card', name: "card")]
    public function home(): Response
    {
        return $this->render('card.html.twig');
    }

        // #[Route('/session/')]
    // public function session(
    //     SessionInterface $session
    // ): Response
    // {
    //     $data = [
    //         "session" => $session
    //     ];

    //     return $this->render('card/session.html.twig', $data);
    // }
}
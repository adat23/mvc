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

    #[Route("/card/deck", name: "deck")]
    public function presentCard(): Response
    {
        $card = new Card();

        $data = [
            "card" => $card->card(),
            "cardString" => $card->getAsString(),
        ];

        return $this->render('card/deck.html.twig', $data);
    }


    // #[Route("/card/deck", name: "deck")]
    // public function PresentDeck(): Response
    // {
    //     // $deck = new Card();
    //     // $data = [
    //     //     "deck" => $deck->deck(),
    //     //     "deckString" => $deck->getAsString(),
    //     // ];

    //     $deckString = [];
    //     for ($i = 1; $i <= 52; $i++) {
    //         $deck = new Card();
    //         $deck->deck();
    //         $deckString[] = $deck->getAsString();
    //     }
    //     $data = [
    //         "deck" => count($deckString),
    //         "deckString" => $deckString,
    //     ];

    //     return $this->render('card/deck.html.twig', $data);
    // }

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
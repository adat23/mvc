<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    #[Route('/lucky/number')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

    #[Route("/lucky/hi")]
    public function hi(): Response
    {
        return new Response(
            '<html><body>Hi to you!</body></html>'
        );
    }

    // #[Route("/api/lucky/number")]
    // public function jsonNumber(): Response
    // {
    //     $number = random_int(0, 100);

    //     $data = [
    //         'lucky-number' => $number,
    //         'lucky-message' => 'Hi there!',
    //     ];

    //     $response = new Response();
    //     $response->setContent(json_encode($data));
    //     $response->headers->set('Content-Type', 'application/json');

    //     return $response;
    // }

    #[Route("/api/lucky/number")]
    public function jsonNumber(): Response
    {
        $number = random_int(0, 100);

        $data = [
            'lucky-number' => $number,
            'lucky-message' => 'Hi there!',
        ];
        
        // return new JsonResponse($data);

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    // #[Route('/api/quote')]
    // public function quote(): Response
    // {
    //     $number = random_int(1, 3);

    //     return new Response(
    //         ''.$number.''
    //     );
    // }

}
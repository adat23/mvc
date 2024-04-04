<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyControllerJson
{
    // #[Route("/api", name: "api")]
    // public function jsonApi(): Response
    // {
    //     return $this->render('api.html.twig');
        // $number = random_int(1, 11);

        // $data = [
        //     'number' => $number
        // ];

        // // return new JsonResponse($data);

        // $response = new JsonResponse($data);
        // $response->setEncodingOptions(
        //     $response->getEncodingOptions() | JSON_PRETTY_PRINT
        // );
        // return $response;
    // }

    #[Route("/api/quote", name: "quote")]
    public function jsonQuote(): Response 
    {
        $date = date("Y.m.d");
        $timestamp = date("Y-m-d H:i:s");
        $number = random_int(1, 4);
        if ($number == 1):
            $quote = "Det är helt okey att ha en annan åsikt än mig. Jag kan inte tvinga dig att ha rätt";
        elseif ($number == 2):
            $quote = 'Det finns tre slags människor: De som kan räkna, och de som inte kan det.';
        elseif ($number == 3):
            $quote = '640 kB borde vara tillräckligt för vem som helst.- Bill Gates';
        else:
            $quote = 'Varför heter det surfa? Borde det inte heta sajt-seeing…';
        endif;

        $data = [
            'Quote' => $quote,
            'Dagens datum' => $date,
            'Timestamp' => $timestamp
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );
        return $response;
    }
}
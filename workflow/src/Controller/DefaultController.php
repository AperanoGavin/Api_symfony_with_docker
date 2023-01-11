<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     * @return JsonResponse
     */
    public function home(): JsonResponse
    {
        $videoJson = file_get_contents('./Vid.json');
        $videos = json_decode($videoJson, true);

        return new JsonResponse($videos);

    }
}
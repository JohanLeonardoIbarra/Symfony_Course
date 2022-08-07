<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class LibraryController extends AbstractController
{

    /**
     * @Route("/library/list", name="library-list")
     */
    public function list()
    {
        $response = new JsonResponse();
        $response->setData([
            "success" => true,
            "data" => [
                [
                    "id" => 1,
                    "title" => "vida y obra de diego norrea"
                ],
                [
                    "id" => 2,
                    "title" => "Turiqui taka ti"
                ]
            ]
        ]);
        return $response;
    }
}

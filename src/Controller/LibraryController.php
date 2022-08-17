<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LibraryController extends AbstractController
{

    public function __construct(private LoggerInterface $logger)
    {

    }

    /**
     * @Route("/library/list", name="library-list")
     */
    public function list(Request $request)
    {
        $title=$request->get("title");
        $this->logger->info("List action called");
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
                ],
                [
                    "id" => 3,
                    "title" => $title
                ]
            ]
        ]);
        return $response;
    }
}

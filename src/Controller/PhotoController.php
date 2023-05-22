<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class PhotoController extends AbstractController
{
    #[Route('/photo', name: 'app_photo')]
    public function index(): Response
    {
        return $this->render('photo/index.html.twig', [
            'controller_name' => 'PhotoController',
        ]);
    }

    #[Route("/public/photos/{filename}", name: "photo_serve")]
    public function servePhoto($filename)
    {
        $photosDirectory = $this->getParameter('kernel.project_dir') . '/public/upload/images/plats/';
        $filePath = $photosDirectory . $filename;

        // Vérifiez que le fichier existe
        if (!file_exists($filePath)) {
            throw $this->createNotFoundException('Le fichier n\'existe pas.');
        }

        // Créez la réponse pour le fichier
        $response = new BinaryFileResponse($filePath);
        $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_INLINE, $filename);

        return $response;
    }
}

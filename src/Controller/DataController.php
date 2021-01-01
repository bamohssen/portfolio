<?php

namespace App\Controller;

use App\Entity\Informations;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class  DataController
 * @Route("/data", name="data_")
 */
class DataController extends AbstractController
{
    /**
     * @Route("/", name="data")
     */
    public function index()
    {
        $dataInformations = $this->getDoctrine()->getRepository(Informations::class)->findAll();
//        dd($dataInformations);
        return $this->render('home.html.twig', [
            'informations' => $dataInformations
        ]);
    }
}

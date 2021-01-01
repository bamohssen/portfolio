<?php

namespace App\Controller;

use App\Entity\Education;
use App\Entity\ContactForm;
use App\Entity\Informations;
use App\Entity\Projects;
use App\Entity\Services;
use App\Entity\Skills;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $request )
    {
        $dataInformations = $this->getDoctrine()->getRepository(Informations::class)->findAll();
        $dataEducation = $this->getDoctrine()->getRepository(Education::class)->findAll();
        $dataServices = $this->getDoctrine()->getRepository(Services::class)->findAll();
        $dataSkills = $this->getDoctrine()->getRepository(Skills::class)->findAll();
        $dataProjects = $this->getDoctrine()->getRepository(Projects::class)->findAll();
//        dd($dataInformations);


        dump($request);
if($request->request->count() >0){
echo "aaaa";
}else {
    echo "bbbb";
}
        return $this->render('home.html.twig', [
            'informations' => $dataInformations,'educations' => $dataEducation,'services' => $dataServices,
            'skills' => $dataSkills,'projects' => $dataProjects
        ]);
    }

    /**
     * @Route("/aa", name="indeax")
     */
//    public function index(Request $request,EntityManagerInterface  $manager)
//    {
//        $dataInformations = $this->getDoctrine()->getRepository(Informations::class)->findAll();
//        $dataEducation = $this->getDoctrine()->getRepository(Education::class)->findAll();
//        $dataServices = $this->getDoctrine()->getRepository(Services::class)->findAll();
//        $dataSkills = $this->getDoctrine()->getRepository(Skills::class)->findAll();
//        $dataProjects = $this->getDoctrine()->getRepository(Projects::class)->findAll();
////        dd($dataInformations);
//
//
//        dump($request);
//
//        return $this->render('home.html.twig', [
//            'informations' => $dataInformations,'educations' => $dataEducation,'services' => $dataServices,
//            'skills' => $dataSkills,'projects' => $dataProjects
//        ]);
//    }

}

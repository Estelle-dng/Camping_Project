<?php


namespace App\Controller\Admin;


use App\Entity\Slider;
use App\Form\SliderType;
use Doctrine\Common\Persistence\ObjectManager;
use App\Repository\SliderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
class AdminSliderController extends AbstractController
{
    /**
     * @var SliderRepository
     */
    private $repository;

    public function __construct( SliderRepository $repository, ObjectManager $em) /*Pour récupérer les biens j'ai besoin du repository*/
    {
        $this->repository = $repository;
        $this->em=$em;
    }

    /**
     * @Route ("/admin/listeslider", name="listeSlider")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listeslider(){ /* Méthode qui récupère l'ensemble des biens */
        $sliders = $this->repository->findAll();
        return $this->render('admin/listeslider/listeslider.html.twig', compact('sliders')); /*Compact renvoie un tableau*/
    }

    /**
     * @Route ("/admin/listeslider/create", name="admin.listeslider.create")
     */
    public function create(Request $request){
        $slider = new Slider(); // Utilisation du fichier SliderType pour créer le formulaire
        $form = $this->createForm(SliderType::class, $slider); // (ne contient pas encore de html)
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $this->em->persist($slider);// On enregistre l'entité créée avec persist
            $this->em->flush();
            return $this->redirectToRoute('listeSlider');
        }
        return $this->render('admin/listeslider/createslider.html.twig', [
            'slider' => $slider,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route ("/admin/listeslider/{id}", name="admin.slider.edit", methods={"GET|POST"})
     */
    public function edit(Slider $slider, Request $request)
    {
        $form = $this->createForm(SliderType::class, $slider);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $this->em->flush();
            return $this->redirectToRoute('listeSlider');
        }

        return $this->render('admin/listeslider/editslider.html.twig', [
            'slider' => $slider,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route ("/admin/listeslider/{id}", name="admin.slider.delete", methods={"DELETE"})
     */
    public function delete(Slider $slider, Request $request)
    {
        if ($this->isCsrfTokenValid('delete' . $slider->getId(), $request->get('_token'))){
            $this->em->remove($slider);
            $this->em->flush();
        }
        return $this->redirectToRoute('listeSlider');
    }
}
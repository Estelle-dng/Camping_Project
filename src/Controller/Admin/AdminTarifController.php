<?php


namespace App\Controller\Admin;
use App\Entity\CategoryHasSeason;
use App\Form\CategoryHasSeasonType;
use App\Repository\CategoryHasSeasonRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminTarifController extends AbstractController
{

    /**
     * @var CategoryHasSeasonRepository
     */
    private $repository;

    public function __construct(CategoryHasSeasonRepository $repository, ObjectManager $em)
    {
        $this->repository = $repository;
        $this->em=$em;
    }

    /**
     * @Route ("/admin/listetarif", name="listeTarif")
     */
    public function listetarif(){
        $tarifs = $this->repository->findAll();
        return $this->render('admin/listeTarif/listetarif.html.twig',[
            "tarifs" => $tarifs
        ]);
    }

    /**
     * @Route ("/admin/listetarif/create", name="admin.listetarif.create")
     */
    public function create(Request $request){
        $tarif = new CategoryHasSeason(); // Utilisation du fichier tarifType pour créer le formulaire
        $form = $this->createForm(CategoryHasSeasonType::class, $tarif); // (ne contient pas encore de html)
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $this->em->persist($tarif);// On enregistre l'entité créée avec persist
            $this->em->flush();
            return $this->redirectToRoute('listeTarif');
        }
        return $this->render('admin/listeTarif/createtarif.html.twig', [
            'tarif' => $tarif,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route ("/admin/listetarif/{id}", name="admin.tarif.edit", methods={"GET|POST"})
     */
    public function edit(CategoryHasSeason $tarif, Request $request)
    {
        $form = $this->createForm(CategoryHasSeasonType::class, $tarif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $this->em->flush();
            return $this->redirectToRoute('listeTarif');
        }

        return $this->render('admin/listeTarif/edittarif.html.twig', [
            'tarif' => $tarif,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route ("/admin/listetarif/{id}", name="admin.tarif.delete", methods={"DELETE"})
     */
    public function delete(CategoryHasSeason $tarif, Request $request)
    {
        if ($this->isCsrfTokenValid('delete' . $tarif->getId(), $request->get('_token'))){
            $this->em->remove($tarif);
            $this->em->flush();
        }
        return $this->redirectToRoute('listeTarif');
    }
}
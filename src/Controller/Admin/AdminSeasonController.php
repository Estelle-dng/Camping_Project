<?php


namespace App\Controller\Admin;

use App\Entity\Season;
use App\Form\SeasonType;
use App\Repository\SeasonRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
class AdminSeasonController extends AbstractController
{
    /**
     * @var SeasonRepository
     */
    private $repository;

    public function __construct(SeasonRepository $repository, ObjectManager $em) /*Pour récupérer les biens j'ai besoin du repository*/
    {
        $this->repository = $repository;
        $this->em = $em;
    }


    /**
     * @Route ("/admin/listeseason", name="listeSeason")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listeseason()
    { /* Méthode qui récupère l'ensemble des biens */
        $seasons = $this->repository->findAll();
        return $this->render('admin/listeSeason/listeseason.html.twig', compact('seasons')); /*Compact renvoie un tableau*/
    }


    /**
     * @Route ("/admin/listeseason/create", name="admin.listeseason.create")
     */
    public function create(Request $request)
    {
        $season = new Season(); // Utilisation du fichier SeasonType pour créer le formulaire
        $form = $this->createForm(SeasonType::class, $season); // (ne contient pas encore de html)
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($season);// On enregistre l'entité créée avec persist
            $this->em->flush();
            return $this->redirectToRoute('listeSeason');
        }

        return $this->render('admin/listeSeason/createseason.html.twig', [
            'season' => $season,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route ("/admin/listeseason/{id}", name="admin.season.edit", methods={"GET|POST"})
     */
    public function edit(Season $season, Request $request)
    {
        $form = $this->createForm(SeasonType::class, $season);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->flush();
            return $this->redirectToRoute('listeSeason');
        }

        return $this->render('admin/listeSeason/editseason.html.twig', [
            'season' => $season,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route ("/admin/listeseason/{id}", name="admin.season.delete", methods={"DELETE"})
     */
    public function delete(Season $season, Request $request)
    {
        if ($this->isCsrfTokenValid('delete' . $season->getId(), $request->get('_token'))) {
            $this->em->remove($season);
            $this->em->flush();
        }
        return $this->redirectToRoute('listeSeason');
    }


}
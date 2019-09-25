<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;


class AdminCategoryController extends AbstractController
{

    public function __construct(CategoryRepository $repository, ObjectManager $em)
    { /*Pour récupérer les biens j'ai besoin du repository*/
        $this->repository = $repository;
        $this->em=$em;
    }


    /**
     * @Route ("listeCategory/Article/{id}", name="Article")
     */
    public function Article($id)
    {
        $spot = $this->repository->find($id);
        return $this->render('reservation/article.html.twig',[
            'spot' => $spot
        ]);
    }

    /**
     * @Route("admin/listeCategory", name="listeCategory", methods={"GET"})
     */
    public function index(CategoryRepository $categoryRepository): Response
    {

        return $this->render('admin/listeCategory/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }

    /**
     * @Route("admin/listeCategory/create", name="admin.category.create", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $category = new Category(); /* Crée une nouvelle entité Category */
        $form = $this->createForm(CategoryType::class, $category); /* Crée le formulaire correspondant à l'entité */
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { /* Si le formulaire est soumis et valide */

            $this->em->persist($category);// On enregistre l'entité créée avec persist
            $this->em->flush();

            return $this->redirectToRoute('listeCategory'); /* on retourne à la liste des Category*/
        }

        return $this->render('admin/listeCategory/new.html.twig', [
            'listeCategory' => $category,
            'form' => $form->createView(), /* On crée la vue du formulaire que l'on nomme from*/
        ]);
    }


    /**
     * @Route("admin/listeCategory/{id}/edit", name="admin.category.edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Category $category): Response
    {
        $form = $this->createForm(CategoryType::class, $category); /* Crée le form correspondant à l'entité */
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { /* Si le form est envoyé et valide */

            $this->em->flush();
            $this->addFlash('success','Information modifiée avec succès');
            /* Si l'update est un succes on affiche ce message */

            return $this->redirectToRoute('listeCategory'); /* retour à la liste des Category*/
        }
        return $this->render('admin/listeCategory/edit.html.twig', [
            'listeCategory' => $category,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin/listeCategory/{id}", name="admin.category.delete", methods={"DELETE"})
     */
    public function delete(Request $request, Category $category): Response
    {
        if ($this->isCsrfTokenValid('delete'.$category->getId(), $request->request->get('_token'))) {
            /* Ce système de token permet d'éviter la suppression d'une donnée par une personne mal intentionnée */

            $this->em->remove($category);
            $this->em->flush();
        }
        return $this->redirectToRoute('listeCategory');
    }
}

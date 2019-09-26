<?php


namespace App\Controller\Admin;


use App\Entity\Faq;
use App\Form\FaqType;
use Doctrine\Common\Persistence\ObjectManager;
use App\Repository\FaqRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
class AdminFaqController extends AbstractController
{
    /**
     * @var FaqRepository
     */
    private $repository;

    public function __construct(FaqRepository $repository, ObjectManager $em)
    { /*Pour récupérer les biens j'ai besoin du repository*/
        $this->repository = $repository;
        $this->em=$em;
    }

    /**
     * @Route ("/admin/listefaq", name="listeFAQ")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listefaq(){ /* Méthode qui récupère l'ensemble des biens */
        $faqs = $this->repository->findAll();
        return $this->render('admin/listeFAQ/listefaq.html.twig', compact('faqs')); /*Compact renvoie un tableau*/
    }

    /**
     * @Route ("/admin/listefaq/create", name="admin.listefaq.create")
     */
    public function create(Request $request){
        $faq = new Faq(); // Utilisation du fichier FaqType pour créer le formulaire
        $form = $this->createForm(FaqType::class, $faq); // (ne contient pas encore de html)
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $user = $this->getUser();
            $faq->setUser($user);
            $this->em->persist($faq);// On enregistre l'entité créée avec persist
            $this->em->flush();
            return $this->redirectToRoute('listeFAQ');
        }
        return $this->render('admin/listeFAQ/createfaq.html.twig', [
            'faq' => $faq,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route ("/admin/listefaq/{id}", name="admin.faq.edit", methods={"GET|POST"})
     */
    public function edit(Faq $faq, Request $request)
    {
        $form = $this->createForm(FaqType::class, $faq);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $this->em->flush();
            $this->addFlash('success','Information modifiée avec succès');
            return $this->redirectToRoute('listeFAQ');
        }

        return $this->render('admin/listeFAQ/editfaq.html.twig', [
            'faq' => $faq,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route ("/admin/listefaq/{id}", name="admin.faq.delete", methods={"DELETE"})
     */
    public function delete(Faq $faq, Request $request)
    {
        if ($this->isCsrfTokenValid('delete' . $faq->getId(), $request->get('_token'))){
        $this->em->remove($faq);
        $this->em->flush();
        }
        return $this->redirectToRoute('listeFAQ');
    }

}
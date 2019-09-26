<?php


namespace App\Controller\Admin;

use App\Entity\Media;
use App\Form\MediaType;
use Doctrine\Common\Persistence\ObjectManager;
use App\Repository\MediaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
class AdminMediaController extends AbstractController
{

    /**
     * @var MediaRepository
     */
    private $repository;

    public function __construct(MediaRepository $repository, ObjectManager $em) /*Pour récupérer les biens j'ai besoin du repository*/
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route ("/admin/listemedia", name="listeMedia")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listemedia()
    { /* Méthode qui récupère l'ensemble des biens */
        $medias = $this->repository->findAll();
        return $this->render('admin/listeMedia/listemedia.html.twig', compact('medias')); /*Compact renvoie un tableau*/
    }

    /**
     * @Route ("/admin/listemedia/create", name="admin.listemedia.create")
     */
    public function create(Request $request)
    {
        $media = new Media(); // Utilisation du fichier MediaType pour créer le formulaire
        $form = $this->createForm(MediaType::class, $media); // (ne contient pas encore de html)
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            $media->setUser($user);
            $this->em->persist($media);// On enregistre l'entité créée avec persist
            $this->em->flush();
            return $this->redirectToRoute('listeMedia');
        }

        return $this->render('admin/listeMedia/createmedia.html.twig', [
            'media' => $media,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route ("/admin/listemedia/{id}", name="admin.media.delete", methods={"DELETE"})
     */
    public function delete(Media $media, Request $request)
    {
        if ($this->isCsrfTokenValid('delete' . $media->getId(), $request->get('_token'))) {
            $this->em->remove($media);
            $this->em->flush();
        }
        return $this->redirectToRoute('listeMedia');
    }


    /**
     * @Route ("/admin/listemedia/{id}", name="admin.media.edit", methods={"GET|POST"})
     */
    public function edit(Media $media, Request $request)
    {
        $form = $this->createForm(MediaType::class, $media);
        $form->handleRequest($request);

        /*//Tu récupères les données du formulaire
                $lastFile = $media->getImageFile();
        //là si le champ file est a nul tu lui remets l'ancienne valeur que tu as mis dans une variable avant la récupération des données du formulaire
                if($form['imageFile']->getData() == null) {
                    $media->setImageFile($lastFile);
                }*/

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->flush();
            return $this->redirectToRoute('listeMedia');
        }

        return $this->render('admin/listemedia/editmedia.html.twig', [
            'media' => $media,
            'form' => $form->createView()
        ]);
    }

}


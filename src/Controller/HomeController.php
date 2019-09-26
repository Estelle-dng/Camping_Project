<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\CategoryHasSeason;
use App\Entity\CommandDetails;
use App\Entity\Contact;
use App\Entity\Faq;
use App\Entity\Reservation;
use App\Entity\Season;
use App\Entity\Slider;
use App\Form\CommandDetailsType;
use App\Form\ContactType;
use App\Form\ReservationAnnulationType;
use App\Notification\ContactNotification;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{


    /**
     * @Route ("/Proximité", name="Proximité")
     */
    public function Proximite()
    {
        return $this->render('vitrine/proximite.html.twig');
    }


    /**
     * @Route ("/Contact", name="Contact")
     */
    public function Contact(Request $request, ContactNotification $notification) /* ContactNotification correspond à la classe créée contenant ma méthode "notify"*/
    {
        $contact = new Contact(); /* J'instancie l'objet Contact qui est une entité vide*/
        $form = $this->createForm(ContactType::class, $contact); /* Je lui passe le Form à utiliser et l'entité vide */
        $form->handleRequest($request);  /* Je récupère la variable $request, qui contient les données du form de contact *//* Gère la requête */

        if ($form->isSubmitted() && $form->isValid()) {
            $notification->notify($contact); /* Avec $notification pour class contenant la méthode notify à qui on passe le contenu du form */
            $this->addFlash('success', 'Mail envoyé avec succès');
            return $this->redirectToRoute('Contact');
        }

        return $this->render('vitrine/contact.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route ("/TarifsTente", name="TarifsTente")
     */
    public function Tariftente()
    {
        return $this->render('vitrine/tarifstentes.html.twig');
    }

    /**
     * @Route ("/Inscription", name="Inscription")
     */
    public function Inscription(Request $request)
    {
        $panier = new CommandDetails();
        $form = $this->createForm(CommandDetailsType::class, $panier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($panier);// On enregistre l'entité créée avec persist
            $this->em->flush();

            return $this->redirectToRoute('profile');
        }
        return $this->render('reservation/inscription.html.twig', [
            'panier' => $panier,
            'form' => $form->createView(), /* On crée la vue du formulaire que l'on nomme form*/
        ]);
    }



    /**
     * @Route ("listeCategory/Article/{id}", name="Article")
     */
    public function Article(ObjectManager $manager, $id)
    {
        $repository = $manager->getRepository(Category::class);
        $spot = $repository->find($id);

        return $this->render('reservation/article.html.twig',[
            'spot' => $spot
        ]);
    }

    /**
     * @Route ("/FAQ", name="FAQ")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function Faq(ObjectManager $manager)
    {
        $repository = $manager->getRepository(Faq::class);
        $faqs = $repository->findAll();

        return $this->render('vitrine/faq.html.twig', compact('faqs'));
    }

    /**
     * @Route ("/", name="Accueil")
     */

    public function Accueil(ObjectManager $manager)
    {
        $repository = $manager->getRepository(Season::class);
        $season = $repository->findById(1);


        return $this->render('vitrine/accueil.html.twig', [
            'seasons' => $season
        ]);
    }

    /**
     * @Route ("/Photos", name="Photos")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function Photos(ObjectManager $manager)
    {
        $repository = $manager->getRepository(Slider::class);
        $sliders = $repository->findAll();

        return $this->render('vitrine/photos.html.twig', compact('sliders'));
    }

    /**
     * @Route ("TarifsMobilHome", name="TarifsMobilHome")
     */
    public function Tarifsmobilhome(ObjectManager $manager)
    {
        $repository = $manager->getRepository(CategoryHasSeason::class);
        $tarifs = $repository->findAll();

        return $this->render('vitrine/tarifsmobilhome.html.twig',[
            "tarifs" => $tarifs
        ]);
    }

    /**
     * @Route ("/annulerReservation/{id}", name="resa.annulation", methods={"GET|POST"})
     * @param Reservation $reservation
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function Annulation(Reservation $reservation, Request $request, ObjectManager $manager)
    {
        $form = $this->createForm(ReservationAnnulationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $manager->flush();
            return $this->redirectToRoute('fos_user_profile_show');
        }

        return $this->render('reservation/annulationreservation.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView()
        ]);
    }
}
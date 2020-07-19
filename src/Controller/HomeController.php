<?php

namespace App\Controller;

use App\Entity\CommandDetails;
use App\Entity\Contact;
use App\Entity\User;
use App\Form\CategoryType;
use App\Form\CommandDetailsType;
use App\Form\ContactType;
use App\Notification\ContactNotification;
use App\Repository\UserRepository;
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
    public function Contact(Request $request, ContactNotification $notification)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() && isset($_POST['g-recaptcha-response'])) {
            if ($this->grecaptcha()->success == true)
            $notification->notify($contact);
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
        /*$panier = new CommandDetails();
        $form = $this->createForm(CommandDetailsType::class, $panier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($panier);// On enregistre l'entité créée avec persist
            $this->em->flush();

            return $this->redirectToRoute('profile');
        }*/
        return $this->render('reservation/inscription.html.twig', [
            /*'panier' => $panier,
            'form' => $form->createView(),*/ /* On crée la vue du formulaire que l'on nomme form*/
        ]);
    }

    /**
     * @Route ("/admin/Newsletter", name="Newsletter")
     */
    public function newsletter(UserRepository $userRepository)
    {
    return $this->render('admin/newsletter.html.twig',[
        "inscrits" => $userRepository->findByNewsletter(1)
    ]);
    }

    private function grecaptcha()
    {
        //  Je construis le POST request pour le recaptcha:
        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptcha_secret = '6LeGp7IZAAAAABc25pah6RacbKP4eaKvM9dltOhM';
        $recaptcha_response = $_POST['g-recaptcha-response'];

        // Je decode le POST request:
        $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
        $recaptcha = json_decode($recaptcha);
        return $recaptcha;
    }

    /**
     * @Route ("/mentions-legales", name="mentions-legales")
     */
    public function Mentionslegales()
    {
        return $this->render('vitrine/mentionslegales.html.twig');
    }
}

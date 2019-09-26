<?php


namespace App\Controller\Admin;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminReservationController extends AbstractController
{
    public function __construct(ObjectManager $em)
    {
        $this->em=$em;
    }

    /**
     * @Route ("/admin/ListeReservation", name="ListeResa")
     * @param ReservationRepository $reservationRepository
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function ListResa(ReservationRepository $reservationRepository)
    {
        return $this->render('admin/listeReservation/listereservation.html.twig', [
            'reservations' => $reservationRepository->findAll()
        ]);
    }

    /**
     * @Route ("/admin/listetReservation/{id}", name="admin.resa.edit", methods={"GET|POST"})
     * @param Reservation $reservation
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function edit(Reservation $reservation, Request $request)
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $this->em->flush();
            return $this->redirectToRoute('ListeResa');
        }

        return $this->render('admin/listeReservation/editreservation.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route ("/admin/listeReservation/{id}", name="admin.resa.delete", methods={"DELETE"})
     * @param Reservation $reservation
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function delete(Reservation $reservation, Request $request)
    {
        if ($this->isCsrfTokenValid('delete' . $reservation->getId(), $request->get('_token'))){
            $this->em->remove($reservation);
            $this->em->flush();
        }
        return $this->redirectToRoute('ListeResa');
    }

}
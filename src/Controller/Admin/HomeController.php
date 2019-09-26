<?php


namespace App\Controller\Admin;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route ("/admin/Dashboard", name="Dashboard")
     */

    public function Dashboard()
    {
        return $this->render('admin/dashboard.html.twig');
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
}
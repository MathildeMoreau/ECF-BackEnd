<?php

namespace App\Controller\Admin;

use App\Entity\Categorie;
use App\Entity\Client;
use App\Entity\Ingredients;
use App\Entity\Menu;
use App\Entity\Personnel;
use App\Entity\Plats;
use App\Entity\Reservation;
use App\Entity\Restaurant;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{

    public function __construct(private AdminUrlGenerator $adminUrlGenerator)
    {
    }
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $url = $this->adminUrlGenerator
            ->setController(PlatsCrudController::class)
            ->generateUrl();

        return $this->redirect($url);

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('ECF Quai Antique');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::section('Gestion de la carte');
        yield MenuItem::linkToCrud('Les plats', 'fa-solid fa-utensils', Plats::class);
        yield MenuItem::linkToCrud('Menus', 'fa-solid fa-book-open', Menu::class);
        yield MenuItem::linkToCrud('Categories', 'fa-solid fa-ellipsis-vertical', Categorie::class);
        yield MenuItem::linkToCrud('Ingredients et allergènes', 'fa-solid fa-kitchen-set', Ingredients::class);

        yield MenuItem::section('Gestion du restaurant');
        yield MenuItem::subMenu('Personnel', 'fa-solid fa-user')->setSubItems(
            [
                MenuItem::linkToCrud('Ajouter un membre du personnel', 'fa-solid fa-circle-plus', Personnel::class)->setAction(Crud::PAGE_NEW),
                MenuItem::linkToCrud('Voir les membres du personnel', 'fa-solid fa-list', Personnel::class)->setAction(Crud::PAGE_INDEX)
            ]
        );
        yield MenuItem::linkToCrud('Gestion des restaurants', 'fa-solid fa-house-chimney-window', Restaurant::class);

        yield MenuItem::section('Gestion de la clientèle');
        yield MenuItem::linkToCrud('Les clients', 'fa-regular fa-face-laugh', Client::class);
        yield MenuItem::linkToCrud('Les réservations', 'fa-regular fa-pen-to-square', Reservation::class);

        yield MenuItem::linkToCrud('User', 'fa-regular fa-user', User::class);
    }
}

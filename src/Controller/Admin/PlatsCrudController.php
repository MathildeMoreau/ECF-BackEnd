<?php

namespace App\Controller\Admin;

use App\Entity\Plats;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class PlatsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Plats::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('nom'),
            TextField::new('description'),
            ImageField::new('photo')
                ->setBasePath('upload/images/plats')
                ->setUploadDir('public/upload/images/plats')
                ->setSortable(false),
            TextField::new('titre_photo'),
            MoneyField::new('prix')->setCurrency('EUR'),
            DateTimeField::new('add_date')->hideOnForm(),
            AssociationField::new('categorie', 'Catégorie'),
            BooleanField::new('is_specialite', 'Spécialité du chef ? '),
            BooleanField::new('is_vegan', 'Plat Vegan ? '),
            BooleanField::new('is_menu1', 'Fait parti du menu 1 ? '),
            BooleanField::new('is_menu2', 'Fait parti du menu 2 ? '),
            BooleanField::new('is_menu3', 'Fait parti du menu 3 ? ')
        ];
    }

    public function persistEntity(EntityManagerInterface $em, $entityInstance): void
    {
        if (!$entityInstance instanceof Plats) {
            return;
        }

        $entityInstance->setAddDate(new DateTime('now'));

        parent::persistEntity($em, $entityInstance);
    }
}

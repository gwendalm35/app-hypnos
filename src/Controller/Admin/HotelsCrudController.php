<?php

namespace App\Controller\Admin;

use App\Entity\Hotels;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class HotelsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Hotels::class;
    }
    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL);
    }

    public function configureCrud(Crud $crud): Crud
    {

        return $crud
            ->setSearchFields(['name', 'city'])
            ->setPageTitle('detail', fn (Hotels $hotels) => (string) $hotels->getName())
            ->setEntityLabelInSingular('Hôtel')
            ->setEntityLabelInPlural('Hôtels');

    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', "Nom de l'établissement"),
            TextField::new('address', 'Adresse'),
            TextField::new('city', 'Ville'),
            TextField::new('description', 'Description'),
            AssociationField::new('users', 'Gérant')
                ->setRequired(true)
                ->setCustomOptions(['maxLi'=>10,'toDisplay'=>"fullname"])
                ->setHelp("Personne qui gère l'hôtel")
                ->renderAsNativeWidget(false)
                ->setQueryBuilder(function ($queryBuilder){
                    return $queryBuilder
                        ->andWhere('entity.roles LIKE :role')
                        ->setParameter('role', '%ROLE_GERANT%');
                }),
            TextField::new('imageFiles' , '')->setFormType(VichImageType::class),
            ImageField::new('fileHotel','image hotel')
                ->setBasePath('/img/Hotel')
                ->setUploadedFileNamePattern('[contenthash].[extension]')
                ->onlyOnIndex(),


        ];
    }
}

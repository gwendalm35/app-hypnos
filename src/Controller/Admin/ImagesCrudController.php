<?php

namespace App\Controller\Admin;

use App\Entity\Images;
use App\Form\AttachmentType;
use App\Form\ImageFormType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ImagesCrudController extends AbstractCrudController
{
    public function configureCrud(Crud $crud): Crud
    {

        return $crud
            ->setSearchFields(['name'])
            ->setEntityLabelInSingular('Image')
            ->setEntityLabelInPlural('Images');

    }
    public static function getEntityFqcn(): string
    {
        return Images::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', "Nom de l'image"),
            ImageField::new('bin', 'Image')
                ->setHelp('Choisissez votre image')
                ->setBasePath('img/HotelRoom')
                ->setUploadDir('public/img/HotelRoom')
                ->setUploadedFileNamePattern('[contenthash].[extension]')

        ];

    }

}

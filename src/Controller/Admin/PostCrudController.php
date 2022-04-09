<?php

namespace App\Controller\Admin;

use App\Entity\Post;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class PostCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Post::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
            //content le reste a payer i.e project tpa
        return [
            "title",
            TextEditorField::new('content','avance espece')->setNumOfRows(30),
        //  DateTimeField::new('publishedDate'),
            AssociationField::new('montant','montant convenu'),
            AssociationField::new('bl','bon de Livraison'),
            AssociationField::new('user','utilisateur'),
            AssociationField::new('categories','immatriculation')
        ];
    }
    
}

<?php

namespace App\Controller\Admin;

use App\Entity\Post;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

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
            TextField::new('title','destination'),
            //TextEditorField::new('content','avance espece')->setNumOfRows(30),
            MoneyField::new('content','avance espece')->setCurrency('GNF'),
            //DateTimeField::new('publishedDate'),
            MoneyField::new('montant','montant convenu')->setCurrency('GNF'),
            TextField::new('bl','bon de Livraison'),
            AssociationField::new('user','utilisateur'),
            AssociationField::new('categories','immatriculation')
        ];
    }
    
}

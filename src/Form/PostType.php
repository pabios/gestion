<?php

namespace App\Form;
use App\Entity\Post;
use App\Entity\User;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, array(
                'label' => 'Destination ',
                'attr' => array(
                    'placeholder' => 'saisir la destination '
                )
           ))
           ->add('montant', TextType::class, array(
            'label' => 'Montant Convenu ',
            'attr' => array(
                'placeholder' => 'saisir le montant convenu '
            )
            ))
           ->add('content', TextType::class, array(
                'label' => 'Avance Espece ',
                'attr' => array(
                'placeholder' => 'saisir le montant d\'avance '
                )
             ))
             ->add('lieu', TextType::class, array(
                'label' => 'Lieu de chargement ',
                'attr' => array(
                'placeholder' => 'saisir le lieu de chargement '
                )
             ))
             ->add('bl', TextType::class, array(
                'label' => 'N° Bon Livraison',
                'attr' => array(
                'placeholder' => 'saisir le n° BL'
                )
             ))
           // ->add('content', CKEditorType::class)
            ->add('categories',  EntityType::class, [
                'class' => Category::class,
                'label' => 'Immat. Camion ',
                'choice_label' => 'name',
                'multiple'=>true
            ])
            ->add('user',  EntityType::class, [
                'class' => User::class,
                'label' => 'Nom du Chauffeur ',
                'choice_label' => 'firstname',
            ])
            ->add('image', FileType::class, [
                'label' => 'Tu peux envoyer une photo',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '2048k',
                        'mimeTypes' => [
                            'image/*',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid Image',
                    ])
                ],
            ])
            ->add("submit",SubmitType::class,['label' => 'Je creer ce trajet'])
          
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}

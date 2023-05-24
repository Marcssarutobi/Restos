<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class,[
                'attr'=>[
                    'Placeholder'=>'Veuillez entrer votre nom...'
                ],
                'label'=>'nom'
            ])
            ->add('prenom', TextType::class,[
                'attr'=>[
                    'Placeholder'=>'Veuillez entrer votre prénom...'
                ],
                'label'=>'prénom'
            ])
            ->add('email', EmailType::class,[
                'attr'=>[
                    'Placeholder'=>'Veuillez entrez votre adresse email...'
                ],
                'label'=>'Adresse email'
            ])
            ->add('sexe', ChoiceType::class,[
                'multiple'=>false,
                'choices'=>[
                    'Selectionnez votre sexe'=>null,
                    'M'=>'Masculin',
                    'F'=>'Féminin'
                ]
            ])
            ->add('contact',IntegerType::class,[
                'attr'=>[
                    'Placeholder'=>'Veuillez entrer votre contact...'
                ],
                'label'=>'contact'
            ])
            ->add('adresse',TextType::class,[
                'attr'=>[
                    'Placeholder'=>'Veuillez entrer votre adresse Ex: Ville,Quartier ...'
                ],
                'label'=>'Adresse résidence'
            ])
            ->add('password',PasswordType::class,[
                'attr'=>[
                    'Placeholder'=>'Veuillez entrer un mots de passe ...'
                ],
                'label'=>'Mots de passe'
            ])
            ->add('confirm_password',PasswordType::class,[
                'attr'=>[
                    'Placeholder'=>'Veuillez confirmez votre mots de passe ...'
                ],
                'label'=>'Confirmez Mots de passe'
            ]);
          
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

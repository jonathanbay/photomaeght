<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => false,
                'constraints' => new Length([
                    'min' => 2,
                    'max' => 30
                ]),
                'attr' => [
                    'placeholder' => 'Votre nom',
                    'class' => 'inputContact'
                ]
            ])
            ->add('prenom', TextType::class, [
                'label' => false,
                'constraints' => new Length([
                    'min' => 2,
                    'max' => 30
                ]),
                'attr' => [
                    'placeholder' => 'Votre Prénom',
                    'class' => 'inputContact'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => false,
                'constraints' => new Length([
                    'min' => 2,
                    'max' => 60
                ]),
                'attr' => [
                    'placeholder' => 'Votre email',
                    'class' => 'inputContact'
                ]
            ])
            ->add('telephone', TextType::class, [
                'label' => false,
                'constraints' => new Length([
                    'min' => 2,
                    'max' => 20
                ]),
                'attr' => [
                    'placeholder' => 'Votre téléphone',
                    'class' => 'inputContact'
                ]
            ])
            ->add('contenu', TextareaType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Une question? une demande de renseignements? c\'est par ici...',
                    'class' => 'inputContact'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Envoyer',
                'attr' => [
                    'class' => 'btnForm'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
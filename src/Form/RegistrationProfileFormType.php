<?php

namespace App\Form;

use App\Entity\UserProfile;
// use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('gender', RadioType::class, ['label' => 'Sexe'])
            ->add('date_of_birth', DateType::class, ['label' => 'Date de naissance'])
            ->add('height', NumberType::class, ['label' => 'Taille (en mètre, exemple: 1.75)'])
            ->add('weight', NumberType::class, ['label' => 'Poids'])
            ->add('morphology', TextType::class, ['label' => 'Carrure'])
            ->add('daily_habit', TextType::class, ['label' => 'Habitude quotidienne'])
            ->add('disponibility_hours', TextType::class, ['label' => 'Plage horaire de disponibilité'])
            ->add('submit', SubmitType::class, ['label' => 'Valider']);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => UserProfile::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\UserAccount;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserAccountLoginType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $input_styles_class = 'input-group';

        $builder
            ->add('email', TextType::class, array('attr' => ['class' => $input_styles_class]))
            ->add('password', TextType::class, array('attr' => ['class' => $input_styles_class]))
            ->add("submit", SubmitType::class, array('attr' => ['class' => $input_styles_class . ' ' . 'button-b', 'value' => 'submit']));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => UserAccount::class,
        ]);
    }
}
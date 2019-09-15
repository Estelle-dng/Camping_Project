<?php


namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseRegistrationFormType;
use function Sodium\add;


class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('address')
            ->add('city')
            ->add('country')
            ->add('postal_code')
            ->add('phone')
            ->add('birthdate', DateType::class, [
                'widget' => 'single_text'
            ])
            ->add('newsletter')
            ->remove('username');
    }

    public function getParent()
    {
        return BaseRegistrationFormType::class;
    }

}
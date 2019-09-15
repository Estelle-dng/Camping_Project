<?php


namespace App\Form;


use FOS\UserBundle\Form\Type\ProfileFormType as BaseProfileFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, [
                'label' => "Email"
            ])
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
            ->add('newsletter');
    }

    public function getParent()
    {
        return BaseProfileFormType::class;
    }
}
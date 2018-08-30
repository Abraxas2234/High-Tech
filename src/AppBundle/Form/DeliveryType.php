<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DeliveryType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
<<<<<<< HEAD
        $builder->add('deliveryAdress')->add('deliveryZipCode')->add('deliveryCity')->add('deliveryCountry');
    }/**
=======
        $builder
            ->add('address')
            ->add('zipCode')
            ->add('city')
            ->add('country')
        ;
    }

    /**
>>>>>>> searchbar
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Delivery'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_delivery';
    }


}

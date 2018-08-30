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
=======
<<<<<<< HEAD
        $builder->add('deliveryAdress')->add('deliveryZipCode')->add('deliveryCity')->add('deliveryCountry');
    }/**
=======
>>>>>>> a4af2e58fcca173f5054357ad75e57dd4cd83316
        $builder
            ->add('address')
            ->add('zipCode')
            ->add('city')
            ->add('country')
        ;
    }

    /**
<<<<<<< HEAD
=======
>>>>>>> searchbar
>>>>>>> a4af2e58fcca173f5054357ad75e57dd4cd83316
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

<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BillingType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
        $builder->add('billingAdress')->add('billingZipCode')->add('billingCity')->add('billingCountry');
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
            'data_class' => 'AppBundle\Entity\Billing'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_billing';
    }


}

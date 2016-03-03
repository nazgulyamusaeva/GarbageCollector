<?php

namespace Application\FOS\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', null, array(
                'label' => 'entity.housecommittee.username'
            ))
            ->add('password', 'password', array(
                'label' => 'entity.housecommittee.password'
            ))
            ->add('firstName', null, array(
                'label' => 'entity.housecommittee.firstname'
            ))
            ->add('lastName', null, array(
                'label' => 'entity.housecommittee.lastname'
            ))
            ->add('address', null, array(
                'label' => 'entity.housecommittee.address'
            ))
            ->add('phone', null, array(
                'label' => 'entity.housecommittee.phone'
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Application\FOS\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'application_fos_userbundle_user';
    }
}

<?php

namespace GarbageCollector\EntityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GarbageCanType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('street', null, array(
                'label' => 'entity.garbagecan.street'
            ))
            ->add('latitude', null, array(
                'attr' => array('readonly' => true), 'label' => 'entity.garbagecan.latitude'
            ))
            ->add('longitude', null, array(
                'attr' => array('readonly' => true), 'label' => 'entity.garbagecan.longitude'
            ))
            ->add('isFull', null, array(
                'label' => 'entity.garbagecan.is_full'
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GarbageCollector\EntityBundle\Entity\GarbageCan'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'garbagecollector_entitybundle_garbagecan';
    }
}

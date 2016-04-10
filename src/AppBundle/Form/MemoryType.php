<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MemoryType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nodeid')
            ->add('ctime')
            ->add('load')
            ->add('memUsed')
            ->add('memShare')
            ->add('memCached')
            ->add('memBuffer')
            ->add('memFree')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Memory'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_memory';
    }
}

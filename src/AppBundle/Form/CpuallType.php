<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CpuallType extends AbstractType
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
            ->add('coreid')
            ->add('user')
            ->add('sys')
            ->add('idle')
            ->add('iowait')
            ->add('soft')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Cpuall'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_cpuall';
    }
}

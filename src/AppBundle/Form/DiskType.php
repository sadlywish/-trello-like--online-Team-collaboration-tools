<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DiskType extends AbstractType
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
            ->add('mountPoint')
            ->add('used')
            ->add('iused')
            ->add('dev')
            ->add('avail')
            ->add('total')
            ->add('ifree')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Disk'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_disk';
    }
}

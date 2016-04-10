<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DiskIoType extends AbstractType
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
            ->add('dev')
            ->add('read')
            ->add('write')
            ->add('readByte')
            ->add('writeByte')
            ->add('util')
            ->add('await')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\DiskIo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_diskio';
    }
}

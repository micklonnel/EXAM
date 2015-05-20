<?php

namespace Main\ToDoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TacheType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle', 'text', array(
    'label'  => 'Nom de la tâche :',))
            ->add('description', 'text', array(
    'label'  => 'Description de la tâche :',))
 
  ->add('date', 'datetime', array(
    'label'  => 'Faire au plus tard :',
    'data' => new \DateTime('now')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Main\ToDoBundle\Entity\Tache'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'main_todobundle_tache';
    }
}

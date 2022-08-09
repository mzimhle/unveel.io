<?php

namespace App\Form;

/* DEFAULT */
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
/* FORM */
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
/* VALIDATION */
use Symfony\Component\Validator\Constraints as Constraints;

/**
 * Form for the actions.
 *	
 */
class ActionForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('label' => 'Name'))
            ->add('date', TextType::class, array('label' => 'Date of actions'))            
            ->add('delivery_quantity', IntegerType::class, array('label' => 'Deliveries made'))
            ->add('delivery_time', IntegerType::class, array('label' => 'Delivery hours it took'))
            ->add('rideshare_quantity', IntegerType::class, array('label' => 'Rideshares made'))
            ->add('rideshare_time', IntegerType::class, array( 'label' => 'Rideshare made in hours' ))   
            ->add('rent_quantity', IntegerType::class, array( 'label' => 'Number of rented books' ))
            ->add('rent_time', IntegerType::class, array( 'label' => 'Days Books were rented' ))
            ->add('Submit', SubmitType::class, [ 'label' => 'Save'  ]);
    }

    public function configureOptions(OptionsResolver $resolver) {
        // Nothing to add
    }

}

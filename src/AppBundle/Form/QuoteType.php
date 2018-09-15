<?php
/**
 * Created by PhpStorm.
 * User: ceci
 * Date: 8/3/2018
 * Time: 4:26 PM
 */

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuoteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('bgAuthorName', TextType::class)
            ->add('enAuthorName', TextType::class)
            ->add('bgQuote', TextType::class)
            ->add('enQuote', TextType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(//'data_class' => 'AppBundle\Entity\Comment'
        ));
    }

}
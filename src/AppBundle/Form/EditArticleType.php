<?php
/**
 * Created by PhpStorm.
 * User: cyecize
 * Date: 9/3/2018
 * Time: 9:46 PM
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;

class EditArticleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array('constraints' => [
                new NotBlank()
            ]))
            ->add('summary', TextType::class)
            ->add('mainContent', TextType::class)
            ->add("isVisible", CheckboxType::class)
            ->add('categoryId', IntegerType::class)
            ->add('stringOfTags', TextType::class)
            ->add('file', FileType::class)
            ->add('dailyViews', IntegerType::class)
            ->add('notify', CheckboxType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(//  'data_class' => 'AppBundle\Entity\User',

        ));
    }
}
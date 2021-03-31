<?php

namespace App\Form;

use App\Entity\Cv;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\CallbackTransformer;

class CvType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class,array('label'=>'Nom','attr'=>array('class'=>'form-control ')))
            ->add('prenom',TextType::class,array('label'=>'Prenom','attr'=>array('class'=>'form-control')))
            ->add('age',NumberType::class,array('label'=>'Age','attr'=>array('class'=>'form-control')))
            ->add('adresse',TextType::class,array('label'=>'Adresse','attr'=>array('class'=>'form-control')))
            ->add('email',TextType::class,array('label'=>'Email','attr'=>array('class'=>'form-control')))
            ->add('tel',TextType::class,array('label'=>'Telephone','attr'=>array('class'=>'form-control')))
            ->add('specialite',TextType::class,array('label'=>'Specialite','attr'=>array('class'=>'form-control')))
            ->add('niveau',TextType::class,array('label'=>'Niveau','attr'=>array('class'=>'form-control')))
            ->add('experiencePro',TextType::class,array('label'=>'Experience Pro','attr'=>array('class'=>'form-control')))
        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cv::class,
        ]);
    }
}

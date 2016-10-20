<?php

namespace FrontBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;



class OperaFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', TextType::class)
            //->add('idArtista', EntityType::class, [
            //    'class' => 'FrontBundle:Artista',
            //    'choice_label' => 'Nome',
            //])
            ->add('imageFile', VichImageType::class)
            ->add('descrizione', TextType::class)
            ->add('dataOpera', DateType::class)
            ->add('save', SubmitType::class)
        ;
    }
}

<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;
use FrontBundle\Entity\Opera;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use FrontBundle\Form\Type\OperaFormType;

class OpereController extends Controller
{

    public function elencoAction(Request $request)
    {

        $parola = $request->get('parola');

        if ($parola) {
            $opere=$this->getDoctrine()->getRepository('FrontBundle:Opera')->findByParola($parola);
        } else {
            $opere =$this->getDoctrine()->getRepository('FrontBundle:Opera')->findAll();
        }

        return $this->render('FrontBundle:Opere:elenco.html.twig', array(
            'opere' => $opere,
            'termine_cercato' => $parola,
        ));
    }


    public function operaAction(Request $request)
    {

        $opera = $this->getDoctrine()->getRepository('FrontBundle:Opera')->find($request->get('id'));


        return $this->render('FrontBundle:Opere:opera.html.twig', array(
            'opera' => $opera
        ));
    }


    public function creaoperaAction(Request $request)
    {
        $opera = new Opera();

        if (!$opera) {
            throw new NotFoundHttpException();
        }

        $form = $this->createForm(OperaFormType::class, $opera);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Salvo cose.
            $opera = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($opera);
            $em->flush();

            $this->addFlash(
                'notice',
                'Opera creata con successo'
            );

            return $this->redirectToRoute('home');
        }

        return $this->render('FrontBundle:Opere:creaopera.html.twig', array(
            'form' => $form->createView()
        ));
    }


/*        return $this->render('FrontBundle:Opere:creaopera.html.twig', array(
            // ...
        ));
    }*/ 


    public function editoperaAction(Request $request)
    {

        $opera = $this->getDoctrine()->getRepository('FrontBundle:Opera')->find($request->get('id'));

        if (!$opera) {
            throw new NotFoundHttpException();
        }

        $form = $this->createForm(OperaFormType::class, $opera);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Salvo cose.
            $opera = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($opera);
            $em->flush();

            $this->addFlash(
                'notice',
                'Opera modificata con successo'
            );

            return $this->redirectToRoute('home',array(
        ));
        }

        return $this->render('FrontBundle:Opere:editopera.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    public function deleteoperaAction(Request $request)
    {
        $opera = $this->getDoctrine()->getRepository('FrontBundle:Opera')->find($request->get('id'));

        $em = $this->getDoctrine()->getManager();
        $em->remove($opera);
        $em->flush();

        $this->addFlash(
            'notice',
            'Opera eliminata con successo'
        );

        return $this->redirectToRoute('home',array(
            'opera' => $opera,
        ));

    }

}

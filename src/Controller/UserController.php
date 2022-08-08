<?php

namespace App\Controller;
use App\Entity\Car;
use App\Form\CarType;
use App\Form\EditProfileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig');
    }

    #[Route('/user/mycars', name: 'app_mycars')]
    public function mycar(): Response
    {
        return $this->render('/mycars.html.twig');
    }

    #[Route('/user/mechanics', name: 'app_search_mechanics')]
    public function mechanics(): Response
    {
        return $this->render('/mechanics.html.twig');
    }





    #[Route('/user/car/add', name: 'user_add_car')]
    public function addcar(Request $request ): Response
    {
        $Car = new Car; 
        $form = $this->createForm(CarType::class, $Car);

        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $Car->setOwner($this->getUser());
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($Car);
            $em->flush();
            
            return $this->redirectToRoute('app_user');
        }


        return $this->render('user/car/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/user/profile/edit', name: 'app_editprofile')]
    public function editprofile(Request $request ): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(EditProfileType::class, $user);

        $form->handleRequest($request);
        
        if($form->isSubmitted()&& $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            $this->addFlash('message','Profile update');
            return $this->redirectToRoute('app_user');
        }


        return $this->render('user/editprofile.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    #[Route('/user/premium', name: 'premium')]
    public function premium(): Response
    {
        return $this->render('/premium.html.twig');
    }
}

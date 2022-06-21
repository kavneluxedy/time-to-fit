<?php

namespace App\Controller;

use App\Entity\UserAccount;
use App\Form\UserAccountLoginType;
use App\Form\UserAccountRegisterType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        return $this->render('user/index.html.twig', []); // ! user.firstname
    }

    public function profile(ManagerRegistry $doctrine, $id): Response
    {
        $user_profile = $doctrine->getRepository(UserAccount::class)->find($id);

        if (!$user_profile) {
            throw $this->createNotFoundException(
                'No user_account found for id ' . $id
            );
        }

        return $this->render('user/index.html.twig', ['user' => $user_profile]);
    }

    // public function register(EntityManagerInterface $entityManager, HttpFoundationRequest $request): Response
    // {
    //     // creates an user_account object and initializes some data for this example
    //     $user_account = new UserAccount();
    //     $user_account->setFirstname('');
    //     $user_account->setLastname('');
    //     $user_account->setEmail('');
    //     $user_account->setPassword('');
    //     $user_account->setUserStatus('');

    //     $form = $this->createForm(UserAccountRegisterType::class, $user_account, [
    //         'action' => $this->generateUrl('register')
    //     ]);

    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         // $form->getData() holds the submitted values
    //         // but, the original `$user_account` variable has also been updated
    //         $user_account = $form->getData();

    //         var_dump($user_account);

    //         // tell Doctrine you want to (eventually) save the Product (no queries yet)
    //         $entityManager->persist($user_account);

    //         // actually executes the queries (i.e. the INSERT query)
    //         $entityManager->flush();

    //         return $this->redirectToRoute('register_success');
    //     }

    //     return $this->renderForm('form/register.html.twig', ['form' => $form]);
    // }

    public function login(AuthenticationUtils $authenticationUtils, ManagerRegistry $doctrine, HttpFoundationRequest $request): Response
    {
        $user_account = new UserAccount();

        $user_account->setEmail('');
        $user_account->setPassword('');

        $form = $this->createForm(UserAccountLoginType::class, $user_account, [
            'action' => $this->generateUrl('login')
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$user` variable has also been updated
            $user = $form->getData();

            var_dump($user);

            return $this->redirectToRoute('user');
        }

        return $this->renderForm('form/login.html.twig', [
            'form'          => $form,
        ]);
    }
}

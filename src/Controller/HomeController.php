<?php

namespace App\Controller;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

use App\Repository\PostRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Faker;

class HomeController extends AbstractController
{

    #[Route('/', name: 'home')]
    public function index(Request $request,PostRepository $postRepository): Response
    {

        //EQUIVALENT D'UN FIND ALL MAIS AVEC UN ORDER BY DESC SUR PUBLISHED DATE
        $allPosts = $postRepository->findBy([], ['publishedDate' => 'DESC'], 25);

        return $this->render('home/index.html.twig', [
            'posts' => $allPosts,
        ]);
    }

    #[Route('/faq', name: 'home_faq')]
    public function faq(Request $request,PostRepository $postRepository): Response
    {
        //EQUIVALENT D'UN FIND ALL MAIS AVEC UN ORDER BY DESC SUR PUBLISHED DATE
        $allPosts = $postRepository->findBy([], ['publishedDate' => 'DESC'], 25);

        return $this->render('faq/faq.html.twig', [
            'posts' => $allPosts,
        ]);
    }

    #[Route('/bdd', name: 'bdd')]
    public function bdd(Request $request,PostRepository $postRepository): Response
    {
        return $this->render('adminer.php');
    }

    
}

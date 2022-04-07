<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Comment;
use App\Entity\Post;
use App\Form\CommentType;
use App\Form\PostType;
use App\Repository\CategoryRepository;
use App\Repository\PostRepository;
use App\Repository\UserRepository;
use DateTime;
use DateTimeImmutable;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class PostController extends AbstractController
{
    #[Route('/post/create', name: 'post')]
    #[IsGranted("ROLE_USER")]
    public function new(Request $request, EntityManagerInterface $manager, SluggerInterface $slugger): Response
    {

        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();
           // dd($form);
            if ($image) {
               $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
               $safeFilename = $slugger->slug($originalFilename);
               $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();
               $image->move(
                   $this->getParameter('upload_directory'),
                   $newFilename
               );
               $post->setImage($newFilename);
               
           }
            //$post->setUser($this->getUser());
            $post->setPublishedDate(new DateTimeImmutable);
            $manager->persist($post);
            $manager->flush();

            return $this->redirectToRoute('home');
        }
        return $this->renderForm('post/new.html.twig', [
            'form' => $form,
        ]);
    }
    #[Route('/post-edit/{id}', name: 'post-edit')]
    #[Security("is_granted('ROLE_ADMIN') or user==post.getUser()")]
    public function edit(Post $post, Request $request, EntityManagerInterface $manager): Response
    {
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $post->setPublishedDate(new DateTimeImmutable);
            $manager->persist($post);
            $manager->flush();

            return $this->redirectToRoute('home');
        }
        return $this->renderForm('post/new.html.twig', [
            'form' => $form,
        ]);
    }
    
    #[Route('/post/{id}', name: 'post-detail')]
    public function detail(EntityManagerInterface $manager, Request $request,Post $post = null, PostRepository $postRepository): Response
    {
        if ($post == null) {
            return $this->redirectToRoute("home");
        }
        $comment=new Comment;
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if(!$this->getUser()){
                return $this->redirectToRoute("login"); 
            }
            $comment->setUser($this->getUser());
            $comment->setPost($post);
            $comment->setPublishedDate(new DateTimeImmutable);
            $manager->persist($comment);
            $manager->flush();
            return $this->redirect($request->getUri()); 
            
        }
    
        return $this->renderForm('post/detail.html.twig', [
            'post' => $post,
            'form'=>$form
        ]);
    }

    #[Route('/category/{name}', name: 'category-posts')]
    public function categoryPosts(PostRepository $postRepo, Category $category = null): Response
    {
        if ($category == null) {
            return $this->redirectToRoute("home");
        }

        $allPosts = $category->getPosts();
        
        return $this->render('home/index.html.twig', [
            'posts' => $allPosts,
        ]);
    }


    #[Route('/editor/{id}', name: 'editor-posts')]
    public function editorPosts(PostRepository $postRepo, UserRepository $userRepo, int $id=null): Response
    {
        if ($userRepo->find($id) == null) {
            return $this->redirectToRoute("home");
        }
       
        $allPosts = $postRepo->findBy(["user"=>$id]);
        
        return $this->render('home/index.html.twig', [
            'posts' => $allPosts,
        ]);
    }

    #[Route('/date/{date}', name: 'date-posts')]
    public function datePosts(PostRepository $postRepo, string $date): Response
    {
        $from=DateTime::createFromFormat("Y-m-d",$date)->format("Y-m-d");
        $to=DateTime::createFromFormat("Y-m-d",$date)->modify('+1 day')->format("Y-m-d");
       
        $allPosts = $postRepo->findByDates($from,$to);
       
        return $this->render('home/index.html.twig', [
            'posts' => $allPosts,
        ]);
    }

    #[Route('/search', name: 'search')]
    public function search(Request $request, PostRepository $postRepo): Response
    {
        $search= $request->query->get("search");
      
        $allPosts = $postRepo->search($search);
        //$allPosts = $postRepo->searchParCategory($search);
        return $this->render('home/index.html.twig', [
            'posts' => $allPosts,
        ]);
    }

   
}

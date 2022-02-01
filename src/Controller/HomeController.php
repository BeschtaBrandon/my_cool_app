<?php

namespace App\Controller;

use App\Repository\RecipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    private RecipeRepository $recipeRepo;

    public function __construct(RecipeRepository $recipeRepo)
    {
        $this->recipeRepo = $recipeRepo;
    }

    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
        $recipes = $this->recipeRepo->findAll();

        return $this->render('app/homepage.html.twig', [
            'recipeList' => $recipes
        ]);
    }
}

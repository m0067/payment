<?php

declare(strict_types=1);

namespace App\Module1\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route(
        '/',
        name: 'module1_main',
        host: 'domain1.test.loc',
    )]
    public function index()
    {
        return $this->json('Hello module1');
    }
}
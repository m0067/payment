<?php

declare(strict_types=1);

namespace App\Module2\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route(
        '/',
        name: 'module2_main',
        host: 'domain2.test.loc',
    )]
    public function index()
    {
        return $this->json('Hello module2');
    }
}
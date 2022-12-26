<?php

namespace App\Controller;

use App\Repository\BorrowingRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReportController extends AbstractController
{
        $books= $repository -> findMostPopularBooks();
        return $this->render('report/index.html.twig', [
            'books' => '$books',
        ]);
    }   
}

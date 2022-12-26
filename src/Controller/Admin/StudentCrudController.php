<?php

namespace App\Controller\Admin;

use App\Entity\Student;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class StudentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Student::class;
    }

    
    public function configureCrud(Crud $crud): Crud
        {
            $crud = Crud::new();
            return $crud
            ->setPaginatorPageSize(10)
            ->setPaginatorRangeSize(4)
            ;
        }   
    
}

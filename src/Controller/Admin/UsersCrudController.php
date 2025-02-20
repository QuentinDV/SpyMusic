<?php

namespace App\Controller\Admin;

use App\Entity\Users;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;

class UsersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Users::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('userId')->hideOnForm(), // Masqué lors de la création
            TextField::new('username', 'Nom d\'utilisateur'),
            EmailField::new('email', 'Email'),
            ChoiceField::new('role', 'Rôle')
                ->setChoices([
                    'Client' => 'client',
                    'Admin' => 'admin'
                ])
                ->renderExpanded(),
            BooleanField::new('accessToken', 'Access Token')->hideOnIndex(), // Non affiché sur la liste
            BooleanField::new('refreshToken', 'Refresh Token')->hideOnIndex(),
        ];
    }
}

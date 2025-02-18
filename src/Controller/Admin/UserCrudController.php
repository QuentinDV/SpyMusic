<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\PasswordField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CountryField;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('firstName'),
            TextField::new('lastName'),
            EmailField::new('email'),
            ChoiceField::new('role')
                ->setChoices([
                    'Admin' => 'ROLE_ADMIN',
                    'User' => 'ROLE_USER',
                ]),
            TelephoneField::new('phoneNumber')->setFormTypeOption('attr', ['placeholder' => 'Enter phone number']),
            TextEditorField::new('address')->setRequired(false),
            TextField::new('city'),
            TextField::new('postalCode'),
            CountryField::new('country'),
        ];
    }
}

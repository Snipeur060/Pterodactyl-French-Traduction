<?php

return [
    'email' => [
        'title' => 'Mettez à jour votre e-mail',
        'updated' => 'Votre adresse e-mail a été mise à jour.',
    ],
    'password' => [
        'title' => 'Changez votre mot de passe',
        'requirements' => 'Votre nouveau mot de passe doit comporter au moins 8 caractères.',
        'updated' => 'Votre mot de passe a été mis à jour.',
    ],
    'two_factor' => [
        'button' => 'Configurer l\'authentification à 2 facteurs',
        'disabled' => 'L\'authentification à deux facteurs a été désactivée sur votre compte. Vous ne serez plus invité à fournir un jeton lors de la connexion.',
        'enabled' => 'L\'authentification à deux facteurs a été activée sur votre compte ! Désormais, lors de la connexion, il vous sera demandé de fournir le code généré par votre appareil.',
        'invalid' => 'Le jeton fourni n\'est pas valide.',
        'setup' => [
            'title' => 'Configurer l\'authentification à deux facteurs',
            'help' => 'Vous ne pouvez pas scanner le code ? Entrez le code ci-dessous dans votre application :',
            'field' => 'Entrez le jeton',
        ],
        'disable' => [
            'title' => 'Désactiver l\'authentification à deux facteurs',
            'field' => 'Entrez le jeton',
        ],
    ],
];

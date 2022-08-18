<?php
return [
    'key' => [
        'warning' => 'Il semble que vous ayez déjà configuré une clé de chiffrement d\'application. Poursuivre ce processus va écraser cette clé et provoquer la corruption de données pour toutes les données cryptées existantes. NE CONTINUEZ PAS À MOINS QUE VOUS NE SAVIEZ CE QUE VOUS FAITES.',
        'confirm' => 'Je comprends les conséquences de l\'exécution de cette commande et accepte toute responsabilité pour la perte de données cryptées.',
        'final_confirm' => 'Êtes-vous sûr de vouloir continuer? La modification de la clé de chiffrement d\'application (PERTE DE DONNÉES).',
    ],
    'location' => [
        'no_location_found' => 'Impossible de trouver un enregistrement correspondant au code de fonction fourni.',
        'ask_short' => 'Code de localisation',
        'ask_long' => 'Description de localisation',
        'created' => 'Création réussie d\'une nouvel location (:name) avec l\'id :id.',
        'deleted' => 'Suppression réussie de la location demandé',
    ],
    'user' => [
        'search_users' => 'Entrez un nom d\'utilisateur, UUID, ou une adresse e-mail',
        'select_search_user' => 'ID de l\'utilisateur à supprimer (Entrer \'0\' pour rechercher)',
        'deleted' => 'UUtilisateur supprimé avec succès du Panel.',
        'confirm_delete' => 'Êtes-vous sûr de vouloir supprimer cet utilisateur du Panel?',
        'no_users_found' => 'Aucun utilisateur n\'a été trouvé avec le terme de recherche fourni.',
        'multiple_found' => 'Plusieurs comptes ont été trouvés pour l\'utilisateur fourni, impossible de supprimer un utilisateur à cause de l\'indicateur --no-interaction.',
        'ask_admin' => 'Cet utilisateur est-il un administrateur?',
        'ask_email' => 'Adresse Email',
        'ask_username' => 'Utilisateur',
        'ask_name_first' => 'Prénom',
        'ask_name_last' => 'Nom',
        'ask_password' => 'Mot de passe',
        'ask_password_tip' => 'Si vous souhaitez créer un compte avec un mot de passe aléatoire envoyé à l\'utilisateur, relancez cette commande (CTRL + C) et passez l\'indicateur `--no-password`.',
        'ask_password_help' => 'Les mots de passe doivent comporter au moins 8 caractères et contenir au moins une lettre majuscule et un nombre.',
        '2fa_help_text' => [
            'Cette commande désactivera l\'authentification à 2-Factor pour le compte d\'un utilisateur s\'il est activé. Cela ne doit être utilisé comme une commande de récupération de compte que si l\'utilisateur est verrouillé hors de son compte.',
            'Si ce n\'est pas ce que vous vouliez faire, appuyez sur CTRL + C pour quitter ce processus.',
        ],
        '2fa_disabled' => 'l\'authentification 2-Factor a été désactivée pour l\'adresse mail :email.',
    ],
    'schedule' => [
        'output_line' => 'Envoi du travail pour la première tâche `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Suppression du fichier de sauvegarde: :file.',
    ],
    'server' => [
        'rebuild_failed' => 'Requête de Rebuild ":name" (#:id) sur le noeud ":node" échoué avec l\'erreur: :message',
        'reinstall' => [
            'failed' => 'Demande d\'action de réinstallation pour ":name" (#:id) sur le noeud ":node" échoué avec l\'erreur: :message',
            'confirm' => 'Vous êtes sur le point de réinstaller sur un groupe de serveurs. Souhaitez-vous continuer?',
        ],
        'power' => [
            'confirm' => 'Vous êtes sur le point d\'effectuer l\'action :action sur :count serveurs. Souhaitez-vous continuer?',
            'action_failed' => 'Demande d\'action d\'alimentation pour ":name" (#:id) sur le noeud ":node" échoué avec l\'erreur: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'Hôte SMTP (e.g. smtp.google.com)',
            'ask_smtp_port' => 'Port SMTP',
            'ask_smtp_username' => 'Utilisateur SMTP',
            'ask_smtp_password' => 'Mot de passe SMTP',
            'ask_mailgun_domain' => 'Domaine Mailgun',
            'ask_mailgun_endpoint' => 'Point de terminaison Mailgun',
            'ask_mailgun_secret' => 'Secret Mailgun',
            'ask_mandrill_secret' => 'Secret Mandrill',
            'ask_postmark_username' => 'Clé API Postmark',
            'ask_driver' => 'Quel pilote devrait être utilisé pour envoyer les emails?',
            'ask_mail_from' => 'Les adresses e-mail doivent provenir de',
            'ask_mail_name' => 'Nommez que les emails doivent apparaître à partir de',
            'ask_encryption' => 'Méthode de chiffrement à utiliser',
        ],
    ],
];


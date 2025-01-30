<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */

return [
    'auth' => [
        'fail' => 'Échec de la connexion',
        'success' => 'Connecté',
        'password-reset' => 'Mot de passe réinitialisé',
        'reset-password' => 'Demande de réinitialisation du mot de passe',
        'checkpoint' => 'Authentification à deux facteurs demandée (A2F)',
        'recovery-token' => 'Jeton de récupération à deux facteurs utilisé (A2F)',
        'token' => 'Défi à deux facteurs résolu (A2F)',
        'ip-blocked' => 'Requête bloquée provenant d\'une adresse IP non répertoriée pour :identifier',
        'sftp' => [
            'fail' => 'Échec de la connexion SFTP',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'Email modifié de :old à :new',
            'password-changed' => 'Mot de passe modifié',
        ],
        'api-key' => [
            'create' => 'Création d\'une nouvelle clé API :identifier',
            'delete' => 'Clé API supprimée :identifier',
        ],
        'ssh-key' => [
            'create' => 'Clé SSH ajoutée :fingerprint au compte',
            'delete' => 'Clé SSH supprimée :fingerprint du compte',
        ],
        'two-factor' => [
            'create' => 'Authentification à deux facteurs activée (A2F)',
            'delete' => 'Authentification à deux facteurs désactivée (A2F)',
        ],
    ],
    'server' => [
        'reinstall' => 'Serveur réinstallé',
        'console' => [
            'command' => 'Réalisation de la commande ":command" sur le serveur',
        ],
        'power' => [
            'start' => 'Démarré le serveur',
            'stop' => 'Arrêt du serveur',
            'restart' => 'Redémarré le serveur',
            'kill' => 'Tué le processus du serveur',
        ],
        'backup' => [
            'download' => 'Téléchargement de la sauvegarde :name ',
            'delete' => 'Suppression de la sauvegarde :name ',
            'restore' => 'Restauration de la sauvegarde :name  (fichiers supprimés: :truncate)',
            'restore-complete' => 'Restauration terminée de la sauvegarde :name ',
            'restore-failed' => 'Échec de la restauration complète de la sauvegarde :name',
            'start' => 'Démarrage d\'une nouvelle sauvegarde :name',
            'complete' => 'La sauvegarde :name est marqué comme terminé',
            'fail' => 'La sauvegarde :name est marqué comme échoué',
            'lock' => 'La suvegarde :name est marqué comme vérouillé',
            'unlock' => 'La suvegarde  :name a été marqué comme déverrouillé',
        ],
        'database' => [
            'create' => 'Création d\'une nouvelle base de données :name',
            'rotate-password' => 'Mot de passe changé pour la base de données :name',
            'delete' => 'Base de données supprimée :name',
        ],
        'file' => [
            'compress_one' => 'Compression de :directory:file',
            'compress_other' => 'Compression de :count files dans :directory',
            'read' => 'Consulté le contenu de :file',
            'copy' => 'Créé une copie de :file',
            'create-directory' => 'Créé le dossier :directory:name',
            'decompress' => 'Décompressé :files dans :directory',
            'delete_one' => 'Supprimé :directory:files.0',
            'delete_other' => 'Suppression de :count fichiers dans :directory',
            'download' => 'Téléchargé :file',
            'pull' => 'Téléchargé un fichier distant à partir de :url à :directory',
            'rename_one' => 'Le fichier à été renommée de :directory:files.0.from à :directory:files.0.to',
            'rename_other' => ':count fichiers dans le dossier :directory ont été renommés',
            'write' => 'Rédaction de nouveau contenu pour le fichier :file',
            'upload' => 'A commencé un envoie de fichier',
            'uploaded' => 'Ajouté (upload) :directory:file',
        ],
        'sftp' => [
            'denied' => 'Accès SFTP bloqué en raison d\'autorisations',
            'create_one' => 'Création de :files.0',
            'create_other' => ':count nouveaux fichiers ont été créé',
            'write_one' => 'Le contenu de :files.0 à été modifié',
            'write_other' => ':count fichiers ont été modifié',
            'delete_one' => 'Suppression de :files.0',
            'delete_other' => 'Suppression de :count fichiers',
            'create-directory_one' => 'Création de :files.0 directory',
            'create-directory_other' => ':count dossier ont été crée',
            'rename_one' => 'Le fichier à été renommé de :files.0.from à :files.0.to',
            'rename_other' => ':count fichiers ont été renommé ou déplacé',
        ],
        'allocation' => [
            'create' => ' :allocation a été ajouté au serveur',
            'notes' => 'Mise à jour des notes pour :allocation de ":old" à ":new"',
            'primary' => 'Changement de :allocation en tant que première allocation du serveur',
            'delete' => 'Suppression de l\'allocation :allocation ',
        ],
        'schedule' => [
            'create' => 'Création de la tâche :name ',
            'update' => 'Mise à jour de la tâche :name ',
            'execute' => 'Execution manuelle de la tâche :name',
            'delete' => 'Suppréssion de la tâche :name',
        ],
        'task' => [
            'create' => 'Création d\'une nouvelle ":action" tâche pour le programme :name',
            'update' => 'Mise à jour de la tâche ":action" pour le programme :name',
            'delete' => 'Suppression d\'une tâche pour le programme :name ',
        ],
        'settings' => [
            'rename' => 'Renommé le serveur de :old à :new',
            'description' => 'La description du serveur est passée de :old à :new',
        ],
        'startup' => [
            'edit' => 'Changement de la variable :variable de ":old" à ":new"',
            'image' => 'Mise à jour de l\'image Docker pour le serveur de :old à :new',
        ],
        'subuser' => [
            'create' => 'Ajout de :email en sous-utilisateur',
            'update' => 'Mise à jour des permission du sous-utilisateur aytn comme email :email',
            'delete' => 'Suppréssion de l\'email :email en tant que sous-utilisateur',
        ],
    ],
];


<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'L\'attribut :attribute doit-être accepté.',
    'active_url' => 'L\'attribut :attribute n\'est pas une URL valide.',
    'after' => 'L\'attribut :attribute doit être une date après :date.',
    'after_or_equal' => 'L\'attribut :attributedoit être une date supérieur ou égale àto :date.',
    'alpha' => 'L\'attribut :attributene peut contenir que des lettres.',
    'alpha_dash' => 'L\'attribut :attribute ne peut contenir que des lettres, des chiffres et des tirets.',
    'alpha_num' => 'L\'attribut :attribute ne peut contenir que des lettres et des chiffres.',
    'array' => 'L\'attribut :attribute doit être un tableau.',
    'before' => 'L\'attribut :attribute doit être une date avant :date.',
    'before_or_equal' => 'L\'attribut :attribute doit être une date antérieure ou égale à :date.',
    'between' => [
        'numeric' => 'L\'attribut :attribute doit être entre :min et :max.',
        'file' => 'L\'attribut :attribute doit être entre :min et :max kilo-octets.',
        'string' => 'L\'attribut :attribute doit être entre :min et :max caractères.',
        'array' => 'L\'attribut :attribute doit être entre :min et :max items.',
    ],
    'boolean' => 'L\'attribut :attribute le champ doit être vrai ou faux.',
    'confirmed' => 'L\'attribut :attribute en remplie pas la confirmation et ne correspond pas.',
    'date' => 'L\'attribut :attribute date n\'est pas valide.',
    'date_format' => 'L\'attribut :attribute ne correspond pas au format :format.',
    'different' => 'L\'attribut :attribute et :other doivent être différent.',
    'digits' => 'L\'attribut :attribute doit être :digits des chiffres.',
    'digits_between' => 'L\'attribut :attribute doit être entre :min et :max chiffres.',
    'dimensions' => 'L\'attribut :attribute a des dimensions d\'image non valides.',
    'distinct' => 'L\'attribut :attribute a une valeur en double.',
    'email' => 'L\'attribut :attribute doit être une adresse e-mail valide.',
    'exists' => 'L\'attribut choisi :attribute est invalide.',
    'file' => 'L\'attribut :attribute doit être un fichier.',
    'filled' => 'L\'attribut :attribute est un champ requis.',
    'image' => 'L\'attribut :attribute doit être une image.',
    'in' => 'L\'attribut choisi :attribute est invalide.',
    'in_array' => 'L\'attribut :attribute n\'existe pas dans :other.',
    'integer' => 'L\'attribut :attribute doit être un entier.',
    'ip' => 'L\'attribut :attribute doit être une adresse IP valide.',
    'json' => 'L\'attribut :attribute doit être une chaîne JSON valide.',
    'max' => [
        'numeric' => 'L\'attribut :attribute ne peut être supérieur à :max.',
        'file' => 'L\'attribut :attribute ne peut être supérieur à :max kilobytes.',
        'string' => 'L\'attribut :attribute ne peut être supérieur à :max caractères.',
        'array' => 'L\'attribut :attribute ne peut pas avoir plus de :max éléments.',
    ],
    'mimes' => 'L\'attribut :attribute doit être un fichier de type: :values.',
    'mimetypes' => 'L\'attribut :attribute doit être un fichier de type: :values.',
    'min' => [
        'numeric' => 'L\'attribut :attribute doit être au moins de :min.',
        'file' => 'L\'attribut :attribute  doit être au moins de :min kilobytes.',
        'string' => 'L\'attribut :attribute  doit être au moins de :min caractères.',
        'array' => 'L\'attribut :attribute doit être au moins de :min éléments.',
    ],
    'not_in' => 'L\'attribut choisi :attribute est invalide.',
    'numeric' => 'L\'attribut :attribute doit-être un nombre.',
    'present' => 'L\'attribut :attribute doit être présent.',
    'regex' => 'L\'attribut :attribute à un format invalide.',
    'required' => 'L\'attribut :attribute est un champs requis.',
    'required_if' => 'L\'attribut :attribute est un champ obligatoire lorsque :other est :value.',
    'required_unless' => 'L\'attribut :attribute est un champ obligatoire sauf si :other est dans :values.',
    'required_with' => 'L\'attribut :attribute est un champ obligatoire lorsque :values est présente.',
    'required_with_all' => 'L\'attribut :attribute est un champ obligatoire lorsque :values est présente.',
    'required_without' => 'L\'attribut :attribute st un champ obligatoire lorsque :values n\'est pas présente.',
    'required_without_all' => 'L\'attribut :attribute st un champ obligatoire lorsque acune des valeurs :values est présente.',
    'same' => 'L\'attribut :attribute and :other must match.',
    'size' => [
        'numeric' => 'L\'attribut :attribute doit être :size.',
        'file' => 'L\'attribut :attribute doit être :size kilobytes.',
        'string' => 'L\'attribut :attribute doit être :size caractères.',
        'array' => 'L\'attribut :attribute doit contenir :size éléments.',
    ],
    'string' => 'L\'attribut :attribute doit être du texte (string).',
    'timezone' => 'L\'attribut :attribute doit être une zone valide.',
    'unique' => 'L\'attribut :attribute à déjà été pris.',
    'uploaded' => 'L\'attribut :attribute a échoué au téléversement.',
    'url' => 'L\'attribut :attribute a un format invalide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

    // Internal validation logic for Pterodactyl
    'internal' => [
        'variable_value' => ':env variable',
        'invalid_password' => 'Le mot de passe fourni n\'était pas valide pour ce compte.',
    ],
];

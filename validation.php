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
    'after' => 'L\'attribut :attribute must be a date after :date.',
    'after_or_equal' => 'L\'attribut :attribute must be a date after or equal to :date.',
    'alpha' => 'L\'attribut :attribute may only contain letters.',
    'alpha_dash' => 'L\'attribut :attribute may only contain letters, numbers, and dashes.',
    'alpha_num' => 'L\'attribut :attribute may only contain letters and numbers.',
    'array' => 'L\'attribut :attribute must be an array.',
    'before' => 'L\'attribut :attribute must be a date before :date.',
    'before_or_equal' => 'L\'attribut :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'L\'attribut :attribute must be between :min and :max.',
        'file' => 'L\'attribut :attribute must be between :min and :max kilobytes.',
        'string' => 'L\'attribut :attribute must be between :min and :max characters.',
        'array' => 'L\'attribut :attribute must have between :min and :max items.',
    ],
    'boolean' => 'L\'attribut :attribute field must be true or false.',
    'confirmed' => 'L\'attribut :attribute confirmation does not match.',
    'date' => 'L\'attribut :attribute is not a valid date.',
    'date_format' => 'L\'attribut :attribute does not match the format :format.',
    'different' => 'L\'attribut :attribute and :other must be different.',
    'digits' => 'L\'attribut :attribute must be :digits digits.',
    'digits_between' => 'L\'attribut :attribute must be between :min and :max digits.',
    'dimensions' => 'L\'attribut :attribute has invalid image dimensions.',
    'distinct' => 'L\'attribut :attribute field has a duplicate value.',
    'email' => 'L\'attribut :attribute must be a valid email address.',
    'exists' => 'L\'attribut selected :attribute is invalid.',
    'file' => 'L\'attribut :attribute must be a file.',
    'filled' => 'L\'attribut :attribute field is required.',
    'image' => 'L\'attribut :attribute must be an image.',
    'in' => 'L\'attribut selected :attribute is invalid.',
    'in_array' => 'L\'attribut :attribute field does not exist in :other.',
    'integer' => 'L\'attribut :attribute must be an integer.',
    'ip' => 'L\'attribut :attribute must be a valid IP address.',
    'json' => 'L\'attribut :attribute must be a valid JSON string.',
    'max' => [
        'numeric' => 'L\'attribut :attribute may not be greater than :max.',
        'file' => 'L\'attribut :attribute may not be greater than :max kilobytes.',
        'string' => 'L\'attribut :attribute may not be greater than :max characters.',
        'array' => 'L\'attribut :attribute may not have more than :max items.',
    ],
    'mimes' => 'L\'attribut :attribute must be a file of type: :values.',
    'mimetypes' => 'L\'attribut :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'L\'attribut :attribute must be at least :min.',
        'file' => 'L\'attribut :attribute must be at least :min kilobytes.',
        'string' => 'L\'attribut :attribute must be at least :min characters.',
        'array' => 'L\'attribut :attribute must have at least :min items.',
    ],
    'not_in' => 'L\'attribut selected :attribute is invalid.',
    'numeric' => 'L\'attribut :attribute must be a number.',
    'present' => 'L\'attribut :attribute field must be present.',
    'regex' => 'L\'attribut :attribute format is invalid.',
    'required' => 'L\'attribut :attribute field is required.',
    'required_if' => 'L\'attribut :attribute field is required when :other is :value.',
    'required_unless' => 'L\'attribut :attribute field is required unless :other is in :values.',
    'required_with' => 'L\'attribut :attribute field is required when :values is present.',
    'required_with_all' => 'L\'attribut :attribute field is required when :values is present.',
    'required_without' => 'L\'attribut :attribute field is required when :values is not present.',
    'required_without_all' => 'L\'attribut :attribute field is required when none of :values are present.',
    'same' => 'L\'attribut :attribute and :other must match.',
    'size' => [
        'numeric' => 'L\'attribut :attribute must be :size.',
        'file' => 'L\'attribut :attribute must be :size kilobytes.',
        'string' => 'L\'attribut :attribute must be :size characters.',
        'array' => 'L\'attribut :attribute must contain :size items.',
    ],
    'string' => 'L\'attribut :attribute must be a string.',
    'timezone' => 'L\'attribut :attribute must be a valid zone.',
    'unique' => 'L\'attribut :attribute has already been taken.',
    'uploaded' => 'L\'attribut :attribute failed to upload.',
    'url' => 'L\'attribut :attribute format is invalid.',

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
        'invalid_password' => 'The password provided was invalid for this account.',
    ],
];

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

    'accepted'             => 'Ce champ doit être accepté.',
    'accepted_if'          => 'L\' :attribut doit être accepté lorsque :other vaut :value.',
    'active_url'           => 'Ce champ n\'est pas une URL valide.',
    'after'                => 'Ce champ doit être une date postérieure au :date.',
    'after_or_equal'       => 'Ce champ doit être une date après ou égale à :date.',
    'alpha'                => 'Ce champ doit seulement contenir des lettres.',
    'alpha_dash'           => 'Ce champ doit seulement contenir des lettres, des chiffres et des tirets.',
    'alpha_num'            => 'Ce champ doit seulement contenir des chiffres et des lettres.',
    'array'                => 'Ce champ doit être un tableau.',
    'before'               => 'Ce champ doit être une date antérieure au :date.',
    'before_or_equal'      => 'Ce champ: doit être une date avant ou égale à :date.',
    'between'              => [
        'numeric' => 'La valeur de :attribute doit être comprise entre :min et :max.',
        'file'    => 'Le fichier :attribute doit avoir une taille entre :min et :max kilo-octets.',
        'string'  => 'Le texte :attribute doit avoir entre :min et :max caractères.',
        'array'   => 'Le tableau :attribute doit avoir entre :min et :max éléments.',
    ],
    'boolean'              => 'Ce champ doit être vrai ou faux.',
    'confirmed'            => 'Le champ de confirmation :attribute ne correspond pas.',
    'current_password'     => 'Le mot de passe est incorrect.',
    'date'                 => 'Ce champ n\'est pas une date valide.',
    'date_equals'          => 'Ce champ doit être une date égale à :date.',
    'date_format'          => 'Ce champ ne correspond pas au format :format.',
    'declined'             => 'Ce champ doit être refusé.',
    'declined_if'          => 'Ce champ doit être refusé lorsque :other vaut :value.',
    'different'            => 'Les champs :attribute et :other doivent être différents.',
    'digits'               => 'Ce champ doit avoir :digits chiffres.',
    'digits_between'       => 'Ce champ doit avoir entre :min and :max chiffres.',
    'dimensions'           => 'Ce champ a des dimensions d\'image non valides.',
    'distinct'             => 'Le champ a une valeur en double.',
    'email'                => "Ce champ doit être une adresse email valide.",
    'ends_with'            => 'Ce champ doit se terminer par l\'une des valeurs suivantes : :values.',
    'enum'                 => 'Ce champ sélectionné est invalide.',
    'exists'               => 'Ce champ sélectionné est invalide.',
    'file'                 => 'Ce champ doit être un fichier.',
    'filled'               => "Ce champ est obligatoire.",
    'gt' => [
        'numeric' => 'Ce champ doit être supérieur à :value.',
        'file'    => 'Ce champ doit être supérieur à :value kilobytes.',
        'string'  => 'Ce champ doit être supérieur à :value caractères.',
        'array'   => 'Ce champ doit avoir plus de :value éléments.',
    ],
    'gte' => [
        'numeric' => 'Ce champ doit être supérieur ou égal :value.',
        'file'    => 'Ce champ doit être supérieur ou égal :value kilobytes.',
        'string'  => 'Ce champ doit être supérieur ou égal :value caractères.',
        'array'   => 'Ce champ doit avoir :value éléments ou plus.',
    ],
    'image'                => 'Ce champ doit être une image.',
    'in'                   => 'Ce champ est invalide.',
    'in_array'             => 'Ce champ n\'existe pas dans :other.',
    'integer'              => 'Ce champ doit être un entier (un nombre sans virgule).',
    'ip'                   => 'Ce champ doit être une adresse IP valide.',
    'ipv4'                 => 'Ce champ doit être une adresse IPv4 valide.',
    'ipv6'                 => 'Ce champ doit être une adresse IPv6 valide.',
    'json'                 => 'Ce champ doit être une chaîne JSON valide.',
    'lt' => [
        'numeric' => 'Ce champ doit être inférieur à :value.',
        'file'    => 'Ce champ doit être inférieur à :value kilobytes.',
        'string'  => 'Ce champ doit être inférieur à :value caractères.',
        'array'   => 'Ce champ doit avoir moins de :value éléments.',
    ],
    'lte' => [
        'numeric' => 'Ce champ doit être inférieur à or equal :value.',
        'file'    => 'Ce champ doit être inférieur à or equal :value kilobytes.',
        'string'  => 'Ce champ doit être inférieur à or equal :value caractères.',
        'array'   => 'Ce champ ne doit pas avoir plus de :value éléments.',
    ],
    'mac_address' => 'Ce champ doit être une adresse MAC valide.',
    "max"  => [
        'numeric' => 'La valeur de :attribute ne peut être supérieure à :max.',
        'file'    => 'Le fichier :attribute ne peut être plus gros que :max kilo-octets.',
        'string'  => 'Le texte de :attribute ne peut contenir plus de :max caractères.',
        'array'   => 'Le tableau :attribute ne peut avoir plus de :max éléments.',
    ],
    'mimes'                => 'Ce champ doit être un fichier de type : :values.',
    'mimetypes'            => 'Ce champ doit être un fichier de type : :values.',
    'min' => [
        'numeric' => 'La valeur de :attribute doit être au moins de :min.',
        'file'    => 'Le fichier :attribute doit être au moins de :min kilo-octets.',
        'string'  => 'Le texte de ce champ doit contenir au moins :min caractères.',
        'array'   => 'Le tableau :attribute doit avoir au moins :min éléments.',
    ],
    'multiple_of'          => 'Ce champ doit être un multiple de :value.',
    'not_in'               => 'Ce champ sélectionné n\'est pas valide.',
    'not_regex'            => 'Ce champ a un format invalide.',
    'numeric'              => 'Ce champ doit contenir un nombre.',
    'password'             => 'Le mot de passe est incorrect.',
    'present'              => 'Ce champ doit être present.',
    'prohibited'           => 'Ce champ est interdit.',
    'prohibited_if'        => 'Ce champ est interdit lorsque :other vaut :value.',
    'prohibited_unless'    => 'Ce champ est interdit sauf si :other est dans :values.',
    'prohibits'            => 'Ce champ interdit la présence de :other.',
    'regex'                => 'Le format de ce champ est invalide.',
    'required'             => 'Ce champ est obligatoire.',
    'required_array_keys'  => 'Ce champ doit contenir des entrées pour : :values.',
    'required_if'          => 'Ce champ est obligatoire quand la valeur de :other est :value.',
    'required_unless'      => 'Ce champ est obligatoire sauf si :other est dans :values.',
    'required_with'        => 'Ce champ est obligatoire quand :values est présent.',
    'required_with_all'    => 'Ce champ est obligatoire quand :values est présent.',
    'required_without'     => 'Ce champ est obligatoire quand :values n\'est pas présent.',
    'required_without_all' => 'Ce champ est requis quand aucun de :values n\'est présent.',
    'same'                 => 'Les champs :attribute et :other doivent être identiques.',
    'size'                 => [
        'numeric' => 'La valeur de :attribute doit être :size.',
        'file'    => 'La taille du fichier de :attribute doit être de :size kilo-octets.',
        'string'  => 'Le texte de :attribute doit contenir :size caractères.',
        'array'   => 'Le tableau :attribute doit contenir :size éléments.',
    ],
    'starts_with'          => 'Ce champ doit commencer par l\'un des éléments suivants : :values.',
    'string'               => 'Ce champ doit être une chaîne de caractères.',
    'timezone'             => 'Ce champ doit être un fuseau horaire valide.',
    'unique'               => 'Cette valeur est déjà utilisé.',
    'uploaded'             => 'Ce champ a échoué à télécharger.',
    'url'                  => 'Le format de l\'URL de :attribute n\'est pas valide.',
    'uuid'                 => 'Ce champ doit être un UUID valide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];

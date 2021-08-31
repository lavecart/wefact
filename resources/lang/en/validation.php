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

    'accepted'             => 'Het :attribute moet geaccepteerd worden.',
    'active_url'           => 'Het :attribute is geen valide URL.',
    'after'                => 'Het :attribute moet een datum zijn na :date.',
    'after_or_equal'       => 'Het :attribute moet een datum na of gelijk aan :date.',
    'alpha'                => 'Het :attribute mag alleen letters bevatten.',
    'alpha_dash'           => 'Het :attribute mag alleen letters, cijfers, en streepjes bevatten.',
    'alpha_num'            => 'Het :attribute mag alleen letters en cijfers bevatten.',
    'array'                => 'Het :attribute moet een reeks zijn.',
    'before'               => 'Het :attribute moet een datum zijn voor :date.',
    'before_or_equal'      => 'Het :attribute moet een datum zijn voor of gelijk aan :date.',
    'between'              => [
        'numeric' => 'Het :attribute moet zijn tussen :min en :max.',
        'file'    => 'Het :attribute moet zijn tussen :min en :max kilobytes.',
        'string'  => 'Het :attribute moet zijn tussen :min and :max karakters.',
        'array'   => 'Het :attribute moet tussen :min and :max items bevatten.',
    ],
    'boolean'              => 'Het :attribute veld moet waar of niet waar zijn.',
    'confirmed'            => 'Het :attribute confirmatie matcht niet.',
    'date'                 => 'Het :attribute is niet een valide datum.',
    'date_format'          => 'Het :attribute matcht niet het format :format.',
    'different'            => 'Het :attribute en :other moet verschillend zijn.',
    'digits'               => 'Het :attribute moet zijn :digits cijfers.',
    'digits_between'       => 'Het :attribute moet zijn tussen :min and :max cijfers.',
    'dimensions'           => 'Het :attribute heeft invalide afbeeldingsdimensies.',
    'distinct'             => 'Het :attribute veld heeft een dupliceer waarde.',
    'email'                => 'Het :attribute moet een valide emailadres zijn.',
    'exists'               => 'De geselecteerde :attribute is invalide.',
    'file'                 => 'De :attribute moet een bestand zijn.',
    'filled'               => 'Het :attribute veld moet een waarde hebben.',
    'image'                => 'Het :attribute moet een afbeelding zijn.',
    'in'                   => 'De geselecteerde :attribute is invalide.',
    'in_array'             => 'Het :attribute veld bestaat niet in :other.',
    'integer'              => 'Het :attribute moet een geheel getal zijn.',
    'ip'                   => 'Het :attribute moet een valide IP adres zijn.',
    'json'                 => 'Het :attribute moet een valide JSON string zijn.',
    'max'                  => [
        'numeric' => 'Het :attribute mag niet groter zijn dan :max.',
        'file'    => 'Het :attribute mag niet groter zijn dan :max kilobytes.',
        'string'  => 'Het :attribute mag niet groter zijn dan :max karakters.',
        'array'   => 'Het :attribute mag niet meer dan :max items bevatten.',
    ],
    'mimes'                => 'Het :attribute moet een documenttype zijn van: :values.',
    'mimetypes'            => 'Het :attribute moet een document zijn van het type: :values.',
    'min'                  => [
        'numeric' => 'Het :attribute moet minimaal :min zijn.',
        'file'    => 'Het :attribute moet minimaal :min kilobytes zijn.',
        'string'  => 'Het :attribute moet minimaal :min characters bevatten.',
        'array'   => 'Het :attribute moet minimaal :min items bevatten.',
    ],
    'not_in'               => 'Het geselecteerde :attribute is invalide.',
    'numeric'              => 'Het :attribute moet een cijfer zijn.',
    'present'              => 'Het :attribute veld moet aanwezig zijn.',
    'regex'                => 'Het :attribute format is invalide.',
    'required'             => 'Het :attribute veld is verplicht.',
    'required_if'          => 'Het :attribute field is verplicht wanneer :other is :value.',
    'required_unless'      => 'Het :attribute field is verplicht behalve :other is :values.',
    'required_with'        => 'Het :attribute field is verplicht waneer :values aanwezig zijn.',
    'required_with_all'    => 'Het :attribute field is verplicht wanneer :values aanwezig zijn.',
    'required_without'     => 'Het :attribute field is verplicht wanneer :values niet aanwezig zijn.',
    'required_without_all' => 'Het :attribute field is verplicht wanneer geen van de :values aanwezig zijn.',
    'same'                 => 'Het :attribute en :other moeten match.',
    'size'                 => [
        'numeric' => 'Het :attribute moet :size zijn.',
        'file'    => 'Het :attribute moet :size kilobytes zijn.',
        'string'  => 'Het :attribute moet :size karakters zijn.',
        'array'   => 'Het :attribute moet :size items bevatten.',
    ],
    'string'               => 'Het :attribute moet een draad zijn.',
    'timezone'             => 'Het :attribute moet een valide zone zijn.',
    'unique'               => 'Het :attribute is al bezet.',
    'uploaded'             => 'Het :attribute slaagde er niet in up te loaden.',
    'url'                  => 'Het :attribute format is invalide.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];

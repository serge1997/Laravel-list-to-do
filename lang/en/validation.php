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

    'accepted' => 'O :attribute deve ser aceito.',
    'accepted_if' => 'O :attribute deve ser aceito quando :other for :value.',
    'active_url' => 'O :attribute não é um URL válido.',
    'after' => 'O :attribute deve ser uma data posterior a :date.',
    'after_or_equal' => 'O :attribute deve ser uma data posterior ou igual a :date.',
    'alpha' => 'O :attribute deve conter apenas letras.',
    'alpha_dash' => 'O :attribute deve conter apenas letras, números, hífens e sublinhados.',
    'alpha_num' => 'O :attribute deve conter apenas letras e números.',
    'array' => 'O :attribute deve ser um array.',
    'ascii' => 'O :attribute deve conter apenas caracteres alfanuméricos de um byte e símbolos.',
    'before' => 'O :attribute deve ser uma data anterior a :date.',
    'before_or_equal' => 'O :attribute deve ser uma data anterior ou igual a :date.',
    'entre' => [
        'array' => 'O :attribute deve ter entre :min e :max itens.',
        'file' => 'O :attribute deve estar entre :min e :max kilobytes.',
        'numeric' => 'O :attribute deve estar entre :min e :max.',
        'string' => 'O :attribute deve estar entre :min e :max caracteres.',
    ],
    'boolean' => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'A confirmação :attribute não corresponde.',
    'current_password' => 'A senha está incorreta.',
    'date' => 'O :attribute não é uma data válida.',
    'date_equals' => 'O :attribute deve ser uma data igual a :date.',
    'date_format' => 'O :attribute não corresponde ao formato :format.',
    'decimal' => 'O :attribute deve ter :casas decimais decimais.',
    'declined' => 'O :attribute deve ser recusado.',
    'declined_if' => 'O :attribute deve ser recusado quando :other for :value.',
    'diferente' => 'O atributo :attribute e :other devem ser diferentes.',
    'digits' => 'O :attribute deve ser :digits digits.',
    'digits_between' => 'O :attribute deve estar entre :min e :max dígitos.',
    'dimensions' => 'O :attribute tem dimensões de imagem inválidas.',
    'distinct' => 'O campo :attribute tem um valor duplicado.',
    'doesnt_end_with' => 'O :attribute não pode terminar com um dos seguintes: :values.',
    'doesnt_start_with' => 'O :attribute não pode começar com um dos seguintes: :values.',
    'email' => 'O :attribute deve ser um endereço de e-mail válido.',
    'ends_with' => 'O :attribute deve terminar com um dos seguintes: :values.',
    'enum' => 'O :attribute selecionado é inválido.',
    'exists' => 'O :attribute selecionado é inválido.',
    'file' => 'O :attribute deve ser um arquivo.',
    'filled' => 'O campo :attribute deve ter um valor.',
    'gt' => [
        'array' => 'O :attribute deve ter mais de :value itens.',
        'file' => 'O :attribute deve ser maior que :value kilobytes.',
        'numeric' => 'O :attribute deve ser maior que :value.',
        'string' => 'O atributo :attribute deve ser maior que os caracteres :value.',
    ],
    'gte' => [
        'array' => 'O :attribute deve ter :value itens ou mais.',
        'file' => 'O :attribute deve ser maior ou igual a :value kilobytes.',
        'numeric' => 'O :attribute deve ser maior ou igual a :value.',
        'string' => 'O :attribute deve ser maior ou igual a :value caracteres.',
    ],
    'image' => 'O :attribute deve ser uma imagem.',
    'in' => 'O :attribute selecionado é inválido.',
    'in_array' => 'O campo :attribute não existe em :other.',
    'integer' => 'O :attribute deve ser um número inteiro.',
    'ip' => 'O :attribute deve ser um endereço IP válido.',
    'ipv4' => 'O :attribute deve ser um endereço IPv4 válido.',
    'ipv6' => 'O :attribute deve ser um endereço IPv6 válido.',
    'json' => 'O :attribute deve ser uma string JSON válida.',
    'lowercase' => 'O :attribute deve ser minúsculo.',
    'lt' => [
        'array' => 'O :attribute deve ter menos que :value items.',
        'file' => 'O :attribute deve ser menor que :value kilobytes.',
        'numeric' => 'O :attribute deve ser menor que :value.',
        'string' => 'O :attribute deve ser menor que :value character.',
    ],
    'lte' => [
        'array' => 'O :attribute não deve ter mais que :value itens.',
        'file' => 'O :attribute deve ser menor ou igual a :value kilobytes.',
        'numeric' => 'O :attribute deve ser menor ou igual a :value.',
        'string' => 'O :attribute deve ser menor ou igual a :value caracteres.',
    ],
    'mac_address' => 'O :attribute deve ser um endereço MAC válido.',
    'max' => [
        'array' => 'O :attribute não deve ter mais que :max itens.',
        'file' => 'O :attribute não deve ser maior que :max kilobytes.',
        'numeric' => 'O :attribute não deve ser maior que :max.',
        'string' => 'O :attribute não deve ser maior que :max caracteres.',
    ],
    'max_digits' => 'O :attribute não deve ter mais que :max digits.',
    'mimes' => 'O :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes' => 'O :attribute deve ser um arquivo do tipo: :values.',
    'min' => [
        'array' => 'O :attribute deve ter pelo menos :min items.',
        'file' => 'O :attribute deve ter pelo menos :min kilobytes.',
        'numeric' => 'O :attribute deve ser pelo menos :min.',
        'string' => 'O :attribute deve ter pelo menos :min caracteres.',
    ],
    'min_digits' => 'O :attribute deve ter pelo menos :min dígitos.',
    'multiple_of' => 'O :attribute deve ser um múltiplo de :value.',
    'not_in' => 'O :attribute selecionado é inválido.',
    'not_regex' => 'O formato :attribute é inválido.',
    'numeric' => 'O :attribute deve ser um número.',
    'senha' => [
        'letters' => 'O :attribute deve conter pelo menos uma letra.',
        'mixed' => 'O :attribute deve conter pelo menos uma letra maiúscula e uma minúscula.',
        'numbers' => 'O :attribute deve conter pelo menos um número.',
        'symbols' => 'O :attribute deve conter pelo menos um símbolo.',
        'uncompromised' => 'O dado :attribute apareceu em um vazamento de dados. Escolha um :attribute diferente.',
    ],
    'present' => 'O campo :attribute deve estar presente.',
    'prohibited' => 'O campo :attribute é proibido.',
    'prohibited_if' => 'O campo :attribute é proibido quando :other é :value.',
    'prohibited_unless' => 'O campo :attribute é proibido a menos que :other esteja em :values.',
    'prohibits' => 'O campo :attribute proíbe :other de estar presente.',
    'regex' => 'O formato :attribute é inválido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_array_keys' => 'O campo :attribute deve conter entradas para: :values.',
    'required_if' => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_if_accepted' => 'O campo :attribute é obrigatório quando :other é aceito.',
    'required_unless' => 'O campo :attribute é obrigatório a menos que :other esteja em :values.',
    'required_with' => 'O campo :attribute é obrigatório quando :values ​​está presente.',
    'required_with_all' => 'O campo :attribute é obrigatório quando :values ​​estão presentes.',
    'required_without' => 'O campo :attribute é obrigatório quando :values ​​não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values ​​está presente.',
    'same' => 'O atributo :attribute e :other devem corresponder.',
    'tamanho' => [
        'array' => 'O :attribute deve conter :size itens.',
        'file' => 'O :attribute deve ser :size kilobytes.',
        'numeric' => 'O :attribute deve ser :size.',
        'string' => 'O :attribute deve ter :size characteres.',
    ],
    'starts_with' => 'O :attribute deve começar com um dos seguintes: :values.',
    'string' => 'O :attribute deve ser uma string.',
    'timezone' => 'O :attribute deve ser um fuso horário válido.',
    'unique' => 'O :attribute já foi usado.',
    'uploaded' => 'Falha ao carregar :attribute.',
    'uppercase' => 'O :attribute deve ser maiúsculo.',
    'url' => 'O :attribute deve ser um URL válido.',
    'ulid' => 'O :attribute deve ser um ULID válido.',
    'uuid' => 'O :attribute deve ser um UUID válido.',

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

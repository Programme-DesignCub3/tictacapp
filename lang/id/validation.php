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

    'accepted' => 'Input :attribute harus diterima.',
    'accepted_if' => 'Input :attribute harus diterima ketika :other adalah :value.',
    'active_url' => 'Input :attribute harus berupa URL yang valid.',
    'after' => 'Input :attribute harus berupa tanggal setelah :date.',
    'after_or_equal' => 'Input :attribute harus berupa tanggal setelah atau sama dengan :date.',
    'alpha' => 'Input :attribute hanya boleh berisi huruf.',
    'alpha_dash' => 'Input :attribute hanya boleh berisi huruf, angka, garis bawah, dan underscore.',
    'alpha_num' => 'Input :attribute hanya boleh berisi huruf dan angka.',
    'any_of' => 'Input :attribute tidak valid.',
    'array' => 'Input :attribute harus berupa array.',
    'ascii' => 'Input :attribute hanya boleh berisi karakter ASCII.',
    'before' => 'Input :attribute harus berupa tanggal sebelum :date.',
    'before_or_equal' => 'Input :attribute harus berupa tanggal sebelum atau sama dengan :date.',
    'between' => [
        'array' => 'Input :attribute harus berisi :min hingga :max item.',
        'file' => 'Input :attribute harus berukuran :min hingga :max kilobyte.',
        'numeric' => 'Input :attribute harus berisi angka yang lebih besar dari :min dan lebih kecil dari :max.',
        'string' => 'Input :attribute harus berisi string yang panjangnya lebih besar dari :min dan lebih kecil dari :max.',
    ],
    'boolean' => 'Input :attribute harus berupa nilai boolean.',
    'can' => 'Input :attribute berisi nilai yang tidak valid.',
    'confirmed' => 'Input :attribute konfirmasi tidak cocok.',
    'contains' => 'Input :attribute tidak berisi nilai yang diperlukan.',
    'current_password' => 'Kata sandi tidak valid.',
    'date' => 'Input :attribute harus berupa tanggal yang valid.',
    'date_equals' => 'Input :attribute harus berisi tanggal yang sama dengan :date.',
    'date_format' => 'Input :attribute harus berisi tanggal yang sesuai dengan format :format.',
    'decimal' => 'Input :attribute harus berisi angka yang memiliki :decimal tempat desimal.',
    'declined' => 'Input :attribute harus ditolak.',
    'declined_if' => 'Input :attribute harus ditolak ketika :other adalah :value.',
    'different' => 'Input :attribute dan :other harus berbeda.',
    'digits' => 'Input :attribute harus berisi angka yang panjangnya :digits digit.',
    'digits_between' => 'Input :attribute harus berisi angka yang panjangnya lebih besar dari :min dan lebih kecil dari :max digit.',
    'dimensions' => 'Input :attribute berisi dimensi gambar yang tidak valid.',
    'distinct' => 'Input :attribute berisi nilai yang duplikat.',
    'doesnt_contain' => 'Input :attribute tidak boleh berisi salah satu dari :values.',
    'doesnt_end_with' => 'Input :attribute tidak boleh diakhiri dengan salah satu dari :values.',
    'doesnt_start_with' => 'Input :attribute tidak boleh diawali dengan salah satu dari :values.',
    'email' => 'Input :attribute harus berupa alamat email yang valid.',
    'encoding' => 'Input :attribute harus berisi enkoding :encoding.',
    'ends_with' => 'Input :attribute harus diakhiri dengan salah satu dari :values.',
    'enum' => 'Input :attribute berisi nilai yang tidak valid.',
    'exists' => 'Input :attribute berisi nilai yang tidak valid.',
    'extensions' => 'Input :attribute harus memiliki salah satu dari ekstensi berikut: :values.',
    'file' => 'Input :attribute harus berupa file.',
    'filled' => 'Input :attribute harus memiliki nilai.',
    'gt' => [
        'array' => 'Input :attribute harus berisi lebih besar dari :value item.',
        'file' => 'Input :attribute harus berukuran lebih besar dari :value kilobyte.',
        'numeric' => 'Input :attribute harus berisi angka yang lebih besar dari :value.',
        'string' => 'Input :attribute harus berisi string yang panjangnya lebih besar dari :value.',
    ],
    'gte' => [
        'array' => 'Input :attribute harus berisi :value item atau lebih.',
        'file' => 'Input :attribute harus berukuran :value kilobyte atau lebih.',
        'numeric' => 'Input :attribute harus berisi angka yang lebih besar dari atau sama dengan :value.',
        'string' => 'Input :attribute harus berisi string yang panjangnya lebih besar dari atau sama dengan :value.',
    ],
    'hex_color' => 'Input :attribute harus berupa warna heksadesimal yang valid.',
    'image' => 'Input :attribute harus berupa gambar.',
    'in' => 'Input :attribute berisi nilai yang tidak valid.',
    'in_array' => 'Input :attribute harus berisi salah satu dari nilai berikut: :other.',
    'in_array_keys' => 'Input :attribute harus berisi salah satu dari kunci berikut: :values.',
    'integer' => 'Input :attribute harus berupa angka bulat.',
    'ip' => 'Input :attribute harus berupa alamat IP yang valid.',
    'ipv4' => 'Input :attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => 'Input :attribute harus berupa alamat IPv6 yang valid.',
    'json' => 'Input :attribute harus berupa string JSON yang valid.',
    'list' => 'Input :attribute harus berupa list.',
    'lowercase' => 'Input :attribute harus berupa huruf kecil.',
    'lt' => [
        'array' => 'Input :attribute harus berisi kurang dari :value item.',
        'file' => 'Input :attribute harus berukuran kurang dari :value kilobyte.',
        'numeric' => 'Input :attribute harus berisi angka yang kurang dari :value.',
        'string' => 'Input :attribute harus berisi string yang panjangnya kurang dari :value.',
    ],
    'lte' => [
        'array' => 'Input :attribute harus berisi :value item atau kurang.',
        'file' => 'Input :attribute harus berukuran :value kilobyte atau kurang.',
        'numeric' => 'Input :attribute harus berisi angka yang kurang dari atau sama dengan :value.',
        'string' => 'Input :attribute harus berisi string yang panjangnya kurang dari atau sama dengan :value.',
    ],
    'mac_address' => 'Input :attribute harus berupa alamat MAC yang valid.',
    'max' => [
        'array' => 'Input :attribute harus berisi kurang dari atau sama dengan :max item.',
        'file' => 'Input :attribute harus berukuran kurang dari atau sama dengan :max kilobyte.',
        'numeric' => 'Input :attribute harus berisi angka yang kurang dari atau sama dengan :max.',
        'string' => 'Input :attribute harus berisi string yang panjangnya kurang dari atau sama dengan :max.',
    ],
    'max_digits' => 'Input :attribute harus berisi angka yang panjangnya kurang dari atau sama dengan :max digit.',
    'mimes' => 'Input :attribute harus berupa file dengan tipe :values.',
    'mimetypes' => 'Input :attribute harus berupa file dengan tipe :values.',
    'min' => [
        'array' => 'Input :attribute harus berisi lebih besar dari atau sama dengan :min item.',
        'file' => 'Input :attribute harus berukuran lebih besar dari atau sama dengan :min kilobyte.',
        'numeric' => 'Input :attribute harus berisi angka yang lebih besar dari atau sama dengan :min.',
        'string' => 'Input :attribute harus berisi string yang panjangnya lebih besar dari atau sama dengan :min.',
    ],
    'min_digits' => 'Input :attribute harus berisi angka yang panjangnya lebih besar dari atau sama dengan :min digit.',
    'missing' => 'Input :attribute harus tidak ada.',
    'missing_if' => 'Input :attribute harus tidak ada ketika :other adalah :value.',
    'missing_unless' => 'Input :attribute harus tidak ada kecuali :other adalah :value.',
    'missing_with' => 'Input :attribute harus tidak ada ketika :values ada.',
    'missing_with_all' => 'Input :attribute harus tidak ada ketika :values ada.',
    'multiple_of' => 'Input :attribute harus berisi angka yang lebih besar dari :value.',
    'not_in' => 'Input :attribute berisi nilai yang tidak valid.',

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

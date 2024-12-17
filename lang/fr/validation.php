<?php

declare(strict_types=1);

return [
    'accepted' => 'Le :attribute doit être accepté.',
    'accepted_if' => 'Le :attribute doit être accepté lorsque :other est :value.',
    'active_url' => 'Le :attribute n\'est pas une URL valide.',
    'after' => 'Le :attribute doit être une date postérieure au :date.',
    'after_or_equal' => 'Le :attribute doit être une date postérieure ou égale au :date.',
    'alpha' => 'Le :attribute ne doit contenir que des lettres.',
    'alpha_dash' => 'Le :attribute ne doit contenir que des lettres, des chiffres, des tirets et des underscores.',
    'alpha_num' => 'Le :attribute ne doit contenir que des lettres et des chiffres.',
    'array' => 'Le :attribute doit être un tableau.',
    'before' => 'Le :attribute doit être une date antérieure au :date.',
    'before_or_equal' => 'Le :attribute doit être une date antérieure ou égale au :date.',
    'between' => [
        'array' => 'Le :attribute doit avoir entre :min et :max éléments.',
        'file' => 'Le :attribute doit être entre :min et :max kilo-octets.',
        'numeric' => 'Le :attribute doit être entre :min et :max.',
        'string' => 'Le :attribute doit être entre :min et :max caractères.',
    ],
    'boolean' => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed' => 'La confirmation de :attribute ne correspond pas.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => 'Le :attribute n\'est pas une date valide.',
    'date_equals' => 'Le :attribute doit être une date égale à :date.',
    'date_format' => 'Le :attribute ne correspond pas au format :format.',
    'declined' => 'Le :attribute doit être refusé.',
    'declined_if' => 'Le :attribute doit être refusé lorsque :other est :value.',
    'different' => 'Le :attribute et :other doivent être différents.',
    'digits' => 'Le :attribute doit être de :digits chiffres.',
    'digits_between' => 'Le :attribute doit être entre :min et :max chiffres.',
    'dimensions' => 'Le :attribute a des dimensions d\'image invalides.',
    'distinct' => 'Le champ :attribute a une valeur en double.',
    'doesnt_start_with' => 'Le :attribute ne peut pas commencer par l\'un des éléments suivants : :values.',
    'email' => 'Le :attribute doit être une adresse e-mail valide.',
    'ends_with' => 'Le :attribute doit se terminer par l\'un des éléments suivants : :values.',
    'enum' => 'Le :attribute sélectionné est invalide.',
    'exists' => 'Le :attribute sélectionné est invalide.',
    'file' => 'Le :attribute doit être un fichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur.',
    'gt' => [
        'array' => 'Le :attribute doit avoir plus de :value éléments.',
        'file' => 'Le :attribute doit être supérieur à :value kilo-octets.',
        'numeric' => 'Le :attribute doit être supérieur à :value.',
        'string' => 'Le :attribute doit être supérieur à :value caractères.',
    ],
    'gte' => [
        'array' => 'Le :attribute doit avoir :value éléments ou plus.',
        'file' => 'Le :attribute doit être supérieur ou égal à :value kilo-octets.',
        'numeric' => 'Le :attribute doit être supérieur ou égal à :value.',
        'string' => 'Le :attribute doit être supérieur ou égal à :value caractères.',
    ],
    'image' => 'Le :attribute doit être une image.',
    'in' => 'Le :attribute sélectionné est invalide.',
    'in_array' => 'Le champ :attribute n\'existe pas dans :other.',
    'integer' => 'Le :attribute doit être un entier.',
    'ip' => 'Le :attribute doit être une adresse IP valide.',
    'ipv4' => 'Le :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le :attribute doit être une chaîne JSON valide.',
    'lt' => [
        'array' => 'Le :attribute doit avoir moins de :value éléments.',
        'file' => 'Le :attribute doit être inférieur à :value kilo-octets.',
        'numeric' => 'Le :attribute doit être inférieur à :value.',
        'string' => 'Le :attribute doit être inférieur à :value caractères.',
    ],
    'lte' => [
        'array' => 'Le :attribute ne doit pas avoir plus de :value éléments.',
        'file' => 'Le :attribute doit être inférieur ou égal à :value kilo-octets.',
        'numeric' => 'Le :attribute doit être inférieur ou égal à :value.',
        'string' => 'Le :attribute doit être inférieur ou égal à :value caractères.',
    ],
    'mac_address' => 'Le :attribute doit être une adresse MAC valide.',
    'max' => [
        'array' => 'Le :attribute ne peut pas avoir plus de :max éléments.',
        'file' => 'Le :attribute ne peut pas être supérieur à :max kilo-octets.',
        'numeric' => 'Le :attribute ne peut pas être supérieur à :max.',
        'string' => 'Le :attribute ne peut pas être supérieur à :max caractères.',
    ],
    'mimes' => 'Le :attribute doit être un fichier de type : :values.',
    'mimetypes' => 'Le :attribute doit être un fichier de type : :values.',
    'min' => [
        'array' => 'Le :attribute doit avoir au moins :min éléments.',
        'file' => 'Le :attribute doit être au moins de :min kilo-octets.',
        'numeric' => 'Le :attribute doit être au moins de :min.',
        'string' => 'Le :attribute doit être au moins de :min caractères.',
    ],
    'multiple_of' => 'Le :attribute doit être un multiple de :value.',
    'not_in' => 'Le :attribute sélectionné est invalide.',
    'not_regex' => 'Le format de :attribute est invalide.',
    'numeric' => 'Le :attribute doit être un nombre.',
    'password' => [
        'letters' => 'Le :attribute doit contenir au moins une lettre.',
        'mixed' => 'Le :attribute doit contenir au moins une lettre majuscule et une lettre minuscule.',
        'numbers' => 'Le :attribute doit contenir au moins un chiffre.',
        'symbols' => 'Le :attribute doit contenir au moins un symbole.',
        'uncompromised' => 'Le :attribute donné est apparu dans une fuite de données. Veuillez choisir un autre :attribute.',
    ],
    'present' => 'Le champ :attribute doit être présent.',
    'prohibited' => 'Le champ :attribute est interdit.',
    'prohibited_if' => 'Le champ :attribute est interdit lorsque :other est :value.',
    'prohibited_unless' => 'Le champ :attribute est interdit sauf si :other est dans :values.',
    'prohibits' => 'Le champ :attribute interdit à :other d\'être présent.',
    'regex' => 'Le format de :attribute est invalide.',
    'required' => 'Le champ :attribute est obligatoire.',
    'required_array_keys' => 'Le champ :attribute doit contenir des entrées pour : :values.',
    'required_if' => 'Le champ :attribute est obligatoire lorsque :other est :value.',
    'required_unless' => 'Le champ :attribute est obligatoire sauf si :other est dans :values.',
    'required_with' => 'Le champ :attribute est obligatoire lorsque :values est présent.',
    'required_with_all' => 'Le champ :attribute est obligatoire lorsque :values sont présents.',
    'required_without' => 'Le champ :attribute est obligatoire lorsque :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est obligatoire lorsqu\'aucun de :values n\'est présent.',
    'same' => 'Le :attribute et :other doivent correspondre.',
    'size' => [
        'array' => 'Le :attribute doit contenir :size éléments.',
        'file' => 'Le :attribute doit être de :size kilo-octets.',
        'numeric' => 'Le :attribute doit être de :size.',
        'string' => 'Le :attribute doit être de :size caractères.',
    ],
    'starts_with' => 'Le :attribute doit commencer par l\'un des éléments suivants : :values.',
    'string' => 'Le :attribute doit être une chaîne de caractères.',
    'timezone' => 'Le :attribute doit être un fuseau horaire valide.',
    'unique' => 'Le :attribute a déjà été pris.',
    'uploaded' => 'Le :attribute n\'a pas pu être téléchargé.',
    'url' => 'Le :attribute doit être une URL valide.',
    'uuid' => 'Le :attribute doit être un UUID valide.',
    'attributes' => [
        'address' => 'adresse',
        'affiliate_url' => 'URL d\'affiliation',
        'age' => 'âge',
        'amount' => 'montant',
        'announcement' => 'annonce',
        'area' => 'zone',
        'audience_prize' => 'prix du public',
        'available' => 'disponible',
        'birthday' => 'anniversaire',
        'body' => 'corps',
        'city' => 'ville',
        'compilation' => 'compilation',
        'concept' => 'concept',
        'conditions' => 'conditions',
        'content' => 'contenu',
        'country' => 'pays',
        'cover' => 'couverture',
        'created_at' => 'créé à',
        'creator' => 'créateur',
        'currency' => 'devise',
        'current_password' => 'mot de passe actuel',
        'customer' => 'client',
        'date' => 'date',
        'date_of_birth' => 'date de naissance',
        'dates' => 'dates',
        'day' => 'jour',
        'deleted_at' => 'supprimé à',
        'description' => 'description',
        'display_type' => 'type d\'affichage',
        'district' => 'district',
        'duration' => 'durée',
        'email' => 'e-mail',
        'excerpt' => 'extrait',
        'filter' => 'filtre',
        'finished_at' => 'terminé à',
        'first_name' => 'prénom',
        'gender' => 'sexe',
        'grand_prize' => 'grand prix',
        'group' => 'groupe',
        'hour' => 'heure',
        'image' => 'image',
        'image_desktop' => 'image de bureau',
        'image_main' => 'image principale',
        'image_mobile' => 'image mobile',
        'images' => 'images',
        'is_audience_winner' => 'est gagnant du public',
        'is_hidden' => 'est caché',
        'is_subscribed' => 'est abonné',
        'is_visible' => 'est visible',
        'is_winner' => 'est gagnant',
        'items' => 'articles',
        'key' => 'clé',
        'last_name' => 'nom de famille',
        'lesson' => 'leçon',
        'line_address_1' => 'adresse ligne 1',
        'line_address_2' => 'adresse ligne 2',
        'login' => 'connexion',
        'message' => 'message',
        'middle_name' => 'deuxième prénom',
        'minute' => 'minute',
        'mobile' => 'mobile',
        'month' => 'mois',
        'name' => 'nom',
        'national_code' => 'code national',
        'number' => 'numéro',
        'password' => 'mot de passe',
        'password_confirmation' => 'confirmation du mot de passe',
        'phone' => 'téléphone',
        'photo' => 'photo',
        'portfolio' => 'portefeuille',
        'postal_code' => 'code postal',
        'preview' => 'aperçu',
        'price' => 'prix',
        'product_id' => 'ID du produit',
        'product_uid' => 'UID du produit',
        'product_uuid' => 'UUID du produit',
        'promo_code' => 'code promo',
        'province' => 'province',
        'quantity' => 'quantité',
        'reason' => 'raison',
        'recaptcha_response_field' => 'champ de réponse recaptcha',
        'referee' => 'arbitre',
        'referees' => 'arbitres',
        'reject_reason' => 'raison du rejet',
        'remember' => 'se souvenir',
        'restored_at' => 'restauré à',
        'result_text_under_image' => 'texte du résultat sous l\'image',
        'role' => 'rôle',
        'rule' => 'règle',
        'rules' => 'règles',
        'second' => 'seconde',
        'sex' => 'sexe',
        'shipment' => 'expédition',
        'short_text' => 'texte court',
        'size' => 'taille',
        'skills' => 'compétences',
        'slug' => 'slug',
        'specialization' => 'spécialisation',
        'started_at' => 'commencé à',
        'state' => 'état',
        'status' => 'statut',
        'street' => 'rue',
        'student' => 'étudiant',
        'subject' => 'sujet',
        'tag' => 'étiquette',
        'tags' => 'étiquettes',
        'teacher' => 'enseignant',
        'terms' => 'termes',
        'test_description' => 'description du test',
        'test_locale' => 'locale du test',
        'test_name' => 'nom du test',
        'text' => 'texte',
        'time' => 'temps',
        'title' => 'titre',
        'type' => 'type',
        'updated_at' => 'mis à jour à',
        'user' => 'utilisateur',
        'username' => 'nom d\'utilisateur',
        'value' => 'valeur',
        'year' => 'année',
    ],
    'not_contain_space' => 'Le :attribute ne peut pas contenir d\'espaces.',
];

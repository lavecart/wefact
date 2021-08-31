<?php

return [
    'userManagement' => [
        'title'          => 'Gebruikers',
        'title_singular' => 'Gebruiker',
        'profile' => 'Profiel'
    ],
    'clientManagement' => [
        'title'        => 'Acties',
        'outgoing'     => 'Verkoopfacturen',
        'incoming'     => 'Inkoopfacturen',
        'contacts'     => 'Contacten',
        'settings'     => 'Instellingen',
        'my_profile'   => 'Account',
        'change_password' => 'Wachtwoord',
        'finance'      => 'Financien',
        'my_documents' => 'My Documents'
    ],
    'my-documents' => [
        'title_singular' => 'My Documents',
        'add_information' => 'Add Information',
        'fields' => [
            'file_name' => 'File Name',
            'category' => 'Category',
            'description' => 'Description'
        ]
    ],
    'permission'     => [
        'title'          => 'Rechten',
        'title_singular' => 'Recht',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Titel',
            'title_helper'      => '',
            'created_at'        => 'Aangemaakt op',
            'created_at_helper' => '',
            'updated_at'        => 'Bijgewerkt op',
            'updated_at_helper' => '',
            'deleted_at'        => 'Verwijderd op',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Rollen',
        'title_singular' => 'Rol',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Titel',
            'title_helper'       => '',
            'permissions'        => 'Rechten',
            'permissions_helper' => '',
            'created_at'         => 'Aangemaakt op',
            'created_at_helper'  => '',
            'updated_at'         => 'Bijgewerkt op',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Verwijderd op',
            'deleted_at_helper'  => '',
        ],
    ],
    'contact'        => [
        'single_title' => 'Mijn Contacten',
        'title'      => 'Contacten lijst',
        'add'        => 'Contact',
        'fields'     => [
            'id' => 'ID',
            'companyName' => 'Bedrijfsnaam',
            'companyName_helper' => '',
            'firstName' => 'Voornaam',
            'firstName_helper' => '',
            'lastName' => 'Achternaam',
            'lastName_helper' => '',
            'street' => 'Straat',
            'street_helper' => '',
            'postalCode' => 'Postcode',
            'postalCode_helper' => '',
            'city' => 'Stad',
            'city_helper' => '',
            'country' => 'Land',
            'country_helper' => '',
            'vatNumber' => 'Btw-identificatienummer',
            'vatNumber_helper' => '',
            'bankNumber' => 'Rekeningnummer',
            'bankNumber_helper' => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'phone'                    => 'Telefoon',
            'phone_helper' => '',
            'title_general_information' => 'Algemene Information',
            'account_information' => 'Factuur informatie',
            'address' => 'Adres'
        ]
    ],

    'product'      => [
        'title_singular' => 'Producten',
        'title_plural'   => 'Productens',
        'fields'   => [
            'id'   => 'ID',
            'id_helper' => '',
            'productName' => 'Product naam',
            'productName_helper' => '',
            'productDescription' => 'Product beschrijving',
            'productDescription_helper' => '',
            'productUnitCost' => 'Product prijs per stuk',
            'productUnitCost_helper' => '',
            'product_vat' => 'Product BTW',
            'product_vat_helper' => '',
            
        ],
        'menu' => 'Producten',
    ],

    'outgoing'       => [
        'fields'     => [
            'dayDifference' => 'Resterende dagen',
            'invoice_title' => 'Mijn facturen',
            'new_invoice' => 'Nieuwe factuur',
            'invoice' => 'Factuur nummer',
            'cutomerName' => 'Klantnaam',
            'customerEmail' => 'Email',
            'customerPhoneNumber' => 'Telefoon',
            'companyName' => 'Bedrijfsnaam',
            'invoiceStatus' => 'Factuur status',
            'order_total' => 'Order Total',
            'date' => 'Datum',
            'invoice_generate_title' => 'Factuur aanmaken',
            'invoice_number' => 'Factuur nummer',
            'open' => 'Openstaand',
            'paid' => 'Betaald',
            'select_customer' => 'Selecteer klant',
            'invoice_details' => 'Omschrijving',
            'invoice_edit_title' => 'Factuur bewerken'
        ]
    ],

    'incoming'      => [
        'title'    => 'Inkomend',
        'title_singular' => 'Inkomend',
        'fields'   => [
            'id'   => 'ID',
            'id_helper' => '',
            'fileName' => 'Bestandsnaam',
            'fileName_helper' => '',
            'date' => 'Datum',
            'date_helper' => '',
            'costs'       => 'Kosten',
            'vat'         => 'Btw',
            'add_information' => 'Toevoegen',
            'number'      => 'Factuur nummer',
            'category' => 'Categorie',
            'description' => 'Omschrijving'
        ],
        'show' => [
            'invoice_details' => 'Factuur details',
            'invoice_reveice_date' => 'Datum factuur',
            'invoice_costs' => 'Kosten',
            'invoice_vat' => 'BTW'
        ]
    ],

    'user'           => [
        'title'          => 'Gebruikers',
        'title_singular' => 'Gebruiker',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'companyLogo'              => 'Logo',
            'companyLogo_helper'       => '',
            'name'                     => 'Bedrijfsnaam',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email geverifieerd om',
            'email_verified_at_helper' => '',
            'phone'                    => 'Telefoonnummer',
            'phone_helper' => '',
            'address' => 'Adres',
            'address_helper' => '',
            'zipCode' => 'Postcode',
            'zipCode_helper' => '',
            'city' => 'Stad',
            'city_helper' => '',
            'kvkNumber' => 'KvK-nummer',
            'kvkNumber_helper' => '',
            'vatNumber' => 'btw-identificatienummer',
            'vatNumber_helper' => '',
            'bankNumber' => 'Rekeningnummer',
            'bankNumber_helper' => '',
            'invoiceFootnote' => 'Factuur voettekst',
            'invoiceFootnote_helper' => '',
            'password'                 => 'Wachtwoord',
            'password_helper'          => '',
            'roles'                    => 'Rollen',
            'roles_helper'             => '',
            'remember_token'           => 'Onthoud token',
            'remember_token_helper'    => '',
            'created_at'               => 'Aangemaakt op',
            'created_at_helper'        => '',
            'updated_at'               => 'Bijgewerkt op',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Verwijderd op',
            'deleted_at_helper'        => '',
        ],
    ],

    'invoice'   => [
        'title_singular' => 'Factuur',
    ],
    'finance'        => [
        'title' => 'Financieel overzicht',
        'startDate'  => 'Begin datum',
        'endDate'    => 'Eind datum',
        'earning'    => 'Omzet',
        'vat'        => 'Btw'
    ],
    'quotation'          => [
        'title_singular' => 'Offerte',
        'fields'         => [
            'quotation_number' => 'Offerte Number',
            'company_name'     =>  'Klantnaam',
            'quotation_status' => 'Offerte Status',
            'change_customer'  => 'Klant Veranderen' 
        ]
    ]
];

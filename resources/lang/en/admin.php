<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'bodega-tbl' => [
        'title' => 'Bodega Tbl',

        'actions' => [
            'index' => 'Bodega Tbl',
            'create' => 'New Bodega Tbl',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'direccion' => 'Direccion',
            'tel' => 'Tel',
            
        ],
    ],

    'role' => [
        'title' => 'Roles',

        'actions' => [
            'index' => 'Roles',
            'create' => 'New Role',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'guard_name' => 'Guard name',
            
        ],
    ],

    'provedores-tbl' => [
        'title' => 'Provedores Tbl',

        'actions' => [
            'index' => 'Provedores Tbl',
            'create' => 'New Provedores Tbl',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'nombre_empresa' => 'Nombre empresa',
            'email' => 'Email',
            'numer_telefono' => 'Numer telefono',
            'direccion' => 'Direccion',
            'ciudad' => 'Ciudad',
            'pais' => 'Pais',
            'provedor_desde' => 'Provedor desde',
            'enabled' => 'Enabled',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];
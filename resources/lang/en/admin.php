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

    'producto-tbl' => [
        'title' => 'Producto Tbl',

        'actions' => [
            'index' => 'Producto Tbl',
            'create' => 'New Producto Tbl',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'prod_cod' => 'Prod cod',
            'marca' => 'Marca',
            'costo' => 'Costo',
            'precio' => 'Precio',
            'enabled' => 'Enabled',
            
        ],
    ],

    'producto-bodega-tbl' => [
        'title' => 'Producto Bodega Tbl',

        'actions' => [
            'index' => 'Producto Bodega Tbl',
            'create' => 'New Producto Bodega Tbl',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'producto_id' => 'Producto',
            'bodega_id' => 'Bodega',
            'ubicacion_codigo' => 'Ubicacion codigo',
            'cantidad' => 'Cantidad',
            'nota' => 'Nota',
            
        ],
    ],

    'compras-tbl' => [
        'title' => 'Compras Tbl',

        'actions' => [
            'index' => 'Compras Tbl',
            'create' => 'New Compras Tbl',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nombre_producto' => 'Nombre producto',
            'producto_id' => 'Producto',
            'nombre_proveedor' => 'Nombre proveedor',
            'proovedor_id' => 'Proovedor',
            'descripcion' => 'Descripcion',
            'fecha_pedido' => 'Fecha pedido',
            'fecha_entregado' => 'Fecha entregado',
            'enabled' => 'Enabled',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];
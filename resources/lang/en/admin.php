<?php

return [
    'admin-user' => [
        'title' => 'Usuarios',

        'actions' => [
            'index' => 'Usuarios',
            'create' => 'Nuevo Usuario',
            'edit' => 'Editar :name',
            'edit_profile' => 'Editar Perfil',
            'edit_password' => 'Editar Clave',
        ],

        'columns' => [
            'id' => 'ID',
            'first_name' => 'Nombre',
            'last_name' => 'Apellido',
            'email' => 'Email',
            'password' => 'Clave',
            'password_repeat' => 'Confirmar clave',
            'activated' => 'Activado',
            'forbidden' => 'Forbidden',
            'language' => 'Lenguaje',

            //Belongs to many relations
            'roles' => 'Roles',

        ],
    ],

    'technician' => [
        'title' => 'Tecnicos',

        'actions' => [
            'index' => 'Tecnicos',
            'create' => 'Nuevo Tecnico',
            'edit' => 'Editar :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',

        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];

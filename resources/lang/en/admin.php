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

    'installation' => [
        'title' => 'Instalaciones',

        'actions' => [
            'index' => 'Instalaciones',
            'create' => 'Nueva Instalaciones',
            'edit' => 'Editar :name',
        ],

        'columns' => [
            'id' => 'ID',
            'tecnico' => 'Nombre del Técnico',
            'equipo' => 'Nombre del Equipo',
            'placa' => 'Placa',
            'idgps' => 'ID GPS',
            'serie' => 'Serie',
            'imei' => 'IMEI',
            'sim' => 'SIM',
            'ip' => 'IP',
            'telefono' => 'Teléfono',
            'lugar' => 'Lugar',
            'posicion' => 'Posición',
            'panico' => 'Pánico',
            'cortemotor' => 'Corte de motor',
            'otros' => 'Otros',
            'fecha' => 'Fecha',
            'observacion' => 'Observación',
            'usuario' => 'Usuario',

        ],
    ],

    'installation' => [
        'title' => 'Installations',

        'actions' => [
            'index' => 'Installations',
            'create' => 'New Installation',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'tecnico' => 'Tecnico',
            'equipo' => 'Equipo',
            'placa' => 'Placa',
            'idgps' => 'Idgps',
            'serie' => 'Serie',
            'imei' => 'Imei',
            'sim' => 'Sim',
            'ip' => 'Ip',
            'telefono' => 'Telefono',
            'lugar' => 'Lugar',
            'posicion' => 'Posicion',
            'panico' => 'Panico',
            'cortemotor' => 'Cortemotor',
            'otros' => 'Otros',
            'fecha' => 'Fecha',
            'observacion' => 'Observacion',
            'usuario' => 'Usuario',
            
        ],
    ],

    'installation' => [
        'title' => 'Installations',

        'actions' => [
            'index' => 'Installations',
            'create' => 'New Installation',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'activated' => 'Activated',
            'tecnico' => 'Tecnico',
            'equipo' => 'Equipo',
            'placa' => 'Placa',
            'idgps' => 'Idgps',
            'serie' => 'Serie',
            'imei' => 'Imei',
            'sim' => 'Sim',
            'ip' => 'Ip',
            'telefono' => 'Telefono',
            'lugar' => 'Lugar',
            'posicion' => 'Posicion',
            'panico' => 'Panico',
            'cortemotor' => 'Cortemotor',
            'otros' => 'Otros',
            'fecha' => 'Fecha',
            'observacion' => 'Observacion',
            'usuario' => 'Usuario',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];

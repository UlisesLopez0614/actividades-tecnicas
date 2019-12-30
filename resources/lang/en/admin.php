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
            'create' => 'Nueva Instalación',
            'edit' => 'Editar :name',
        ],

        'columns' => [
            'id' => 'ID',
            'activated' => 'Revisado',
            'tecnico' => 'Nombre del Técnico',
            'equipo' => 'Nombre del Equipo',
            'placa' => 'Placa',
            'idgps' => 'ID del GPS',
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

    'revision' => [
        'title' => 'Revisiones',

        'actions' => [
            'index' => 'Revisiones',
            'create' => 'Nueva Revisión',
            'edit' => 'Editar :name',
        ],

        'columns' => [
            'id' => 'ID',
            'activated' => 'Revisado',
            'tecnico' => 'Nombre del Técnico',
            'equipo' => 'Nombre del Equipo',
            'placa' => 'Placa',
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

    'gpschange' => [
        'title' => 'Cambio de GPS',

        'actions' => [
            'index' => 'Cambio de GPS',
            'create' => 'Nuevo cambio de GPS',
            'edit' => 'Editar :name',
        ],

        'columns' => [
            'id' => 'ID',
            'activated' => 'Revisado',
            'tecnico' => 'Nombre del Técnico',
            'nombre' => 'Nombre del Equipo',
            'placa' => 'Placa',
            'lugar' => 'Lugar',
            'idgpsanterior' => 'ID GPS Ant.',
            'seriegpsanterior' => 'Serie GPS Ant.',
            'tipogpsanterior' => 'Tipo GPS Ant.',
            'idgpsnuevo' => 'ID GPS Nue.',
            'seriegpsnuevo' => 'Serie GPS Nue.',
            'imeigpsnuevo' => 'IMEI GPS Nue.',
            'ipgpsnuevo' => 'IP GPS Nue.',
            'simgpsnuevo' => 'SIM GPS Nue.',
            'telefonogpsnuevo' => 'Teléfono GPS Nue.',
            'tipogpsnuevo' => 'Tipo GPS Nue.',
            'posicion' => 'Posición',
            'panico' => 'Pánico',
            'cortemotor' => 'Corte de motor',
            'otros' => 'Otros',
            'fecha' => 'Fecha',
            'observacion' => 'Observación',
            'usuario' => 'Usuario',

        ],
    ],

    'simchange' => [
        'title' => 'Cambio de SIM',

        'actions' => [
            'index' => 'Cambio de SIM',
            'create' => 'Nuevo cambio de SIM',
            'edit' => 'Editar :name',
        ],

        'columns' => [
            'id' => 'ID',
            'activated' => 'Revisado',
            'tecnico' => 'Nombre del Técnico',
            'nombre' => 'Nombre del Equipo',
            'placa' => 'Placa',
            'lugar' => 'Lugar',
            'simanterior' => 'SIM Ant.',
            'simnuevo' => 'SIM Nue.',
            'posicion' => 'Posición',
            'panico' => 'Pánico',
            'cortemotor' => 'Corte de motor',
            'otros' => 'Otros',
            'fecha' => 'Fecha',
            'observacion' => 'Observación',
            'usuario' => 'Usuario',

        ],
    ],

    'uninstallation' => [
        'title' => 'Desinstalaciones',

        'actions' => [
            'index' => 'Desinstalaciones',
            'create' => 'Nueva Desinstalación',
            'edit' => 'Editar :name',
        ],

        'columns' => [
            'id' => 'ID',
            'activated' => 'Revisado',
            'tecnico' => 'Nombre del Técnico',
            'nombre' => 'Nombre del Equipo',
            'placa' => 'Placa',
            'lugar' => 'Lugar',
            'fecha' => 'Fecha',
            'observacion' => 'Observación',
            'usuario' => 'Usuario',

        ],
    ],

    'gpstransfer' => [
        'title' => 'Traslado de GPS',

        'actions' => [
            'index' => 'Traslado de GPS',
            'create' => 'Nuevo traslado de GPS',
            'edit' => 'Editar :name',
        ],

        'columns' => [
            'id' => 'ID',
            'activated' => 'Revisado',
            'tecnico' => 'Nombre del Técnico',
            'nombre' => 'Nombre del Equipo',
            'placaanterior' => 'Placa ant.',
            'placanueva' => 'Placa nue.',
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

    'homologation' => [
        'title' => 'Homologaciones',

        'actions' => [
            'index' => 'Homologaciones',
            'create' => 'Nueva Homologación',
            'edit' => 'Editar :name',
        ],

        'columns' => [
            'id' => 'ID',
            'activated' => 'Revisado',
            'tecnico' => 'Nombre del Técnico',
            'equipo' => 'Nombre del Equipo',
            'placa' => 'Placa',
            'idgps' => 'ID del GPS',
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



    // Do not delete me :) I'm used for auto-generation
];

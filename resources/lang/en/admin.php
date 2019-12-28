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

    'revision' => [
        'title' => 'Revisions',

        'actions' => [
            'index' => 'Revisions',
            'create' => 'New Revision',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'activated' => 'Activated',
            'tecnico' => 'Tecnico',
            'equipo' => 'Equipo',
            'placa' => 'Placa',
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

    'gpschange' => [
        'title' => 'Gpschanges',

        'actions' => [
            'index' => 'Gpschanges',
            'create' => 'New Gpschange',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'activated' => 'Activated',
            'tecnico' => 'Tecnico',
            'nombre' => 'Nombre',
            'placa' => 'Placa',
            'lugar' => 'Lugar',
            'idgpsanterior' => 'Idgpsanterior',
            'seriegpsanterior' => 'Seriegpsanterior',
            'tipogpsanterior' => 'Tipogpsanterior',
            'idgpsnuevo' => 'Idgpsnuevo',
            'seriegpsnuevo' => 'Seriegpsnuevo',
            'imeigpsnuevo' => 'Imeigpsnuevo',
            'ipgpsnuevo' => 'Ipgpsnuevo',
            'simgpsnuevo' => 'Simgpsnuevo',
            'telefonogpsnuevo' => 'Telefonogpsnuevo',
            'tipogpsnuevo' => 'Tipogpsnuevo',
            'posicion' => 'Posicion',
            'panico' => 'Panico',
            'cortemotor' => 'Cortemotor',
            'otros' => 'Otros',
            'fecha' => 'Fecha',
            'observacion' => 'Observacion',
            
        ],
    ],

    'gpschange' => [
        'title' => 'Gpschanges',

        'actions' => [
            'index' => 'Gpschanges',
            'create' => 'New Gpschange',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'activated' => 'Activated',
            'tecnico' => 'Tecnico',
            'nombre' => 'Nombre',
            'placa' => 'Placa',
            'lugar' => 'Lugar',
            'idgpsanterior' => 'Idgpsanterior',
            'seriegpsanterior' => 'Seriegpsanterior',
            'tipogpsanterior' => 'Tipogpsanterior',
            'idgpsnuevo' => 'Idgpsnuevo',
            'seriegpsnuevo' => 'Seriegpsnuevo',
            'imeigpsnuevo' => 'Imeigpsnuevo',
            'ipgpsnuevo' => 'Ipgpsnuevo',
            'simgpsnuevo' => 'Simgpsnuevo',
            'telefonogpsnuevo' => 'Telefonogpsnuevo',
            'tipogpsnuevo' => 'Tipogpsnuevo',
            'posicion' => 'Posicion',
            'panico' => 'Panico',
            'cortemotor' => 'Cortemotor',
            'otros' => 'Otros',
            'fecha' => 'Fecha',
            'observacion' => 'Observacion',
            'usuario' => 'Usuario',
            
        ],
    ],

    'simchange' => [
        'title' => 'Simchanges',

        'actions' => [
            'index' => 'Simchanges',
            'create' => 'New Simchange',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'tecnico' => 'Tecnico',
            'nombre' => 'Nombre',
            'placa' => 'Placa',
            'lugar' => 'Lugar',
            'simanterior' => 'Simanterior',
            'simnuevo' => 'Simnuevo',
            'posicion' => 'Posicion',
            'panico' => 'Panico',
            'cortemotor' => 'Cortemotor',
            'otros' => 'Otros',
            'fecha' => 'Fecha',
            'observacion' => 'Observacion',
            'usuario' => 'Usuario',
            
        ],
    ],

    'simchange' => [
        'title' => 'Simchanges',

        'actions' => [
            'index' => 'Simchanges',
            'create' => 'New Simchange',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'activated' => 'Activated',
            'tecnico' => 'Tecnico',
            'nombre' => 'Nombre',
            'placa' => 'Placa',
            'lugar' => 'Lugar',
            'simanterior' => 'Simanterior',
            'simnuevo' => 'Simnuevo',
            'posicion' => 'Posicion',
            'panico' => 'Panico',
            'cortemotor' => 'Cortemotor',
            'otros' => 'Otros',
            'fecha' => 'Fecha',
            'observacion' => 'Observacion',
            'usuario' => 'Usuario',
            
        ],
    ],

    'uninstallation' => [
        'title' => 'Uninstallations',

        'actions' => [
            'index' => 'Uninstallations',
            'create' => 'New Uninstallation',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'activated' => 'Activated',
            'tecnico' => 'Tecnico',
            'nombre' => 'Nombre',
            'placa' => 'Placa',
            'lugar' => 'Lugar',
            'fecha' => 'Fecha',
            'observacion' => 'Observacion',
            'usuario' => 'Usuario',
            
        ],
    ],

    'gpstransfer' => [
        'title' => 'Gpstransfers',

        'actions' => [
            'index' => 'Gpstransfers',
            'create' => 'New Gpstransfer',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'activated' => 'Activated',
            'tecnico' => 'Tecnico',
            'nombre' => 'Nombre',
            'placaanterior' => 'Placaanterior',
            'placanueva' => 'Placanueva',
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

    'homologation' => [
        'title' => 'Homologations',

        'actions' => [
            'index' => 'Homologations',
            'create' => 'New Homologation',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'homologation' => [
        'title' => 'Homologations',

        'actions' => [
            'index' => 'Homologations',
            'create' => 'New Homologation',
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

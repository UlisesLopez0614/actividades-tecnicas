<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Technician::class, static function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->sentence,
        'apellido' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Installation::class, static function (Faker\Generator $faker) {
    return [
        'tecnico' => $faker->sentence,
        'equipo' => $faker->sentence,
        'placa' => $faker->sentence,
        'idgps' => $faker->sentence,
        'serie' => $faker->sentence,
        'imei' => $faker->sentence,
        'sim' => $faker->sentence,
        'ip' => $faker->sentence,
        'telefono' => $faker->sentence,
        'lugar' => $faker->sentence,
        'posicion' => $faker->boolean(),
        'panico' => $faker->boolean(),
        'cortemotor' => $faker->boolean(),
        'otros' => $faker->sentence,
        'fecha' => $faker->date(),
        'observacion' => $faker->text(),
        'usuario' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Installation::class, static function (Faker\Generator $faker) {
    return [
        'activated' => $faker->boolean(),
        'tecnico' => $faker->sentence,
        'equipo' => $faker->sentence,
        'placa' => $faker->sentence,
        'idgps' => $faker->sentence,
        'serie' => $faker->sentence,
        'imei' => $faker->sentence,
        'sim' => $faker->sentence,
        'ip' => $faker->sentence,
        'telefono' => $faker->sentence,
        'lugar' => $faker->sentence,
        'posicion' => $faker->boolean(),
        'panico' => $faker->boolean(),
        'cortemotor' => $faker->boolean(),
        'otros' => $faker->sentence,
        'fecha' => $faker->date(),
        'observacion' => $faker->text(),
        'usuario' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Revision::class, static function (Faker\Generator $faker) {
    return [
        'activated' => $faker->boolean(),
        'tecnico' => $faker->sentence,
        'equipo' => $faker->sentence,
        'placa' => $faker->sentence,
        'lugar' => $faker->sentence,
        'posicion' => $faker->boolean(),
        'panico' => $faker->boolean(),
        'cortemotor' => $faker->boolean(),
        'otros' => $faker->sentence,
        'fecha' => $faker->date(),
        'observacion' => $faker->text(),
        'usuario' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Gpschange::class, static function (Faker\Generator $faker) {
    return [
        'activated' => $faker->boolean(),
        'tecnico' => $faker->sentence,
        'nombre' => $faker->sentence,
        'placa' => $faker->sentence,
        'lugar' => $faker->sentence,
        'idgpsanterior' => $faker->sentence,
        'seriegpsanterior' => $faker->sentence,
        'tipogpsanterior' => $faker->sentence,
        'idgpsnuevo' => $faker->sentence,
        'seriegpsnuevo' => $faker->sentence,
        'imeigpsnuevo' => $faker->sentence,
        'ipgpsnuevo' => $faker->sentence,
        'simgpsnuevo' => $faker->sentence,
        'telefonogpsnuevo' => $faker->sentence,
        'tipogpsnuevo' => $faker->sentence,
        'posicion' => $faker->boolean(),
        'panico' => $faker->boolean(),
        'cortemotor' => $faker->boolean(),
        'otros' => $faker->sentence,
        'fecha' => $faker->date(),
        'observacion' => $faker->text(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});

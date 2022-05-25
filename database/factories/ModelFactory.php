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
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\BodegaTbl::class, static function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->sentence,
        'direccion' => $faker->sentence,
        'tel' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Role::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'guard_name' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\ProvedoresTbl::class, static function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->sentence,
        'nombre_empresa' => $faker->sentence,
        'email' => $faker->email,
        'numer_telefono' => $faker->sentence,
        'direccion' => $faker->sentence,
        'ciudad' => $faker->sentence,
        'pais' => $faker->sentence,
        'provedor_desde' => $faker->date(),
        'enabled' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\ProductoTbl::class, static function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->sentence,
        'prod_cod' => $faker->sentence,
        'marca' => $faker->sentence,
        'costo' => $faker->randomFloat,
        'precio' => $faker->randomFloat,
        'enabled' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\ProductoBodegaTbl::class, static function (Faker\Generator $faker) {
    return [
        'producto_id' => $faker->randomNumber(5),
        'bodega_id' => $faker->randomNumber(5),
        'ubicacion_codigo' => $faker->sentence,
        'cantidad' => $faker->randomNumber(5),
        'nota' => $faker->text(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\ComprasTbl::class, static function (Faker\Generator $faker) {
    return [
        'nombre_producto' => $faker->sentence,
        'producto_id' => $faker->randomNumber(5),
        'nombre_proveedor' => $faker->sentence,
        'proovedor_id' => $faker->randomNumber(5),
        'descripcion' => $faker->text(),
        'fecha_pedido' => $faker->date(),
        'fecha_entregado' => $faker->date(),
        'enabled' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});

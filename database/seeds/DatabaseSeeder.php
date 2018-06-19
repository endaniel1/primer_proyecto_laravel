<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //aqui q se hizo
        //se hizo un factory de user y por cada user q creamos
        //creamos un factory de mensaje q cree 10 mensaje por cada usuario
        $users = factory(App\User::class, 10)->create();

        $users->each(function (App\User $user) use ($users) {

            factory(App\Message::class)
                ->times(10)
                ->create([
                    "user_id" => $user->id,
                ]);
                    //aqui sincronizo los usuarios creado con otros usuarios 
            $user->follows()->sync(
                $users->random(5)
            );


        });
    }
}

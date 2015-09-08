<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(TabelaUsuarioSeeder::class);

        Model::reguard();
    }
}

class TabelaUsuarioSeeder extends Seeder {

    public function run()
    {
        $usuarios = Usuario::get();

        if($usuarios->count() == 0) {
            Usuario::create(array(
                'email' => 'seu@email.com',
                'senha' => Hash::make('admin'),
                'nome'  => 'Seu Nome',
                'tipo'  => 'admin'
            ));
        }
    }

}

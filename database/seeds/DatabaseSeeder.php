<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('INSERT INTO cobaia_models(numero_serie, genero, idade ) VALUES(?,?,?)',
            array('001HA97', 'Feminino', '70'));
        DB::insert('INSERT INTO cobaia_models(numero_serie, genero, idade ) VALUES(?,?,?)',
            array('002HB07', 'Feminino', '67'));
        DB::insert('INSERT INTO cobaia_models(numero_serie, genero, idade ) VALUES(?,?,?)',
            array('003HC84', '  Masculino', '30'));

        DB::insert('INSERT INTO cientista_models(cicm, nome, formacao ) VALUES(?,?,?)',
            array('454546', 'Nosferatu', 'Criminologia'));
        DB::insert('INSERT INTO cientista_models(cicm, nome, formacao) VALUES(?,?,?)',
            array('545457', 'Max Schreck', 'Química'));
         DB::insert('INSERT INTO cientista_models(cicm, nome, formacao) VALUES(?,?,?)',
            array('676769', 'Count Orlok', 'Técnicas de Tortura'));
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertUserAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $email = env('ADMIN_EMAIL', 'admin@laraveldeveloper.com.br');//get email of .env, if not exist, get default
        $password = bcrypt(env('ADMIN_PASSWORD', 'admin')); //get password of .env, if not exist, get default, bcrypt = encriptation

        //now do the insert on table
        DB::table('users')->insert([
            'name' =>'Administrador',
            'email' => $email,
            'password' => $password
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $email = env('ADMIN_EMAIL', 'admin@laraveldeveloper.com.br');
        DB::DELETE('DELETE FROM users WHERE email = ?', [$email]);
    }
}

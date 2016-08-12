<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('roles', function (Blueprint $table) {
         $table->increments('id');
        $table->string('name')->unique();
         $table->timestamps();
		
     });
	//insert roles in table if the table is empty
        DB::table('roles')->insert(
            array(
                ['id' => 1,
                'name' => 'users'],['id' => 2,
                'name' => 'admin']
    )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('roles');
    }
}

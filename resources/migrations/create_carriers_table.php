<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateCarriersTable.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class CreateCarriersTable extends Migration
{
    /**
     *
     */
    public function up()
    {
        Schema::create('carriers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mcc');
            $table->integer('mnc');
            $table->string('iso');
            $table->string('country_name');
            $table->integer('country_code');
            $table->string('network');
            $table->timestamps();
        });
    }

    /**
     *
     */
    public function down()
    {
        Schema::dropIfExists('carriers');
    }
}

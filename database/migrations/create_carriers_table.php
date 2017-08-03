<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Carriers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarriersTable extends Migration
{
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

    public function down()
    {
        Schema::dropIfExists('carriers');
    }
}

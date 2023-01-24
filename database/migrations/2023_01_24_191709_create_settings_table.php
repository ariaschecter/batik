<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('setting_title')->default('Daur Hidup Batik');
            $table->string('setting_address')->default('Jl. Raya Tlogomas No.246, Babatan, Tegalgondo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144');
            $table->string('setting_description_footer')->default('Welcome to the World’s Museum of Modern Art. It in- cludes works of art created during the period stretching. from about 1860 to the 1970s.');
            $table->string('setting_no_phone')->default('0812 3454 3212');
            $table->string('setting_email')->default('email@gmail.com');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};

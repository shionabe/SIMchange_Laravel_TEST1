<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sims', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sim_name', 255)->comment('SIMカードの名前');
            $table->integer('min_price')->comment('最安料金');
            $table->string('line_au', 10)->comment('回線au');
            $table->string('line_docomo', 10)->comment('回線docomo');
            $table->string('line_softbank', 10)->comment('回線softbank');
            $table->string('terminal_iphone', 10)->comment('端末iPhone');
            $table->string('terminal_android', 10)->comment('端末Android');
            $table->string('data_1', 10)->comment('データ容量1GB');
            $table->string('data_3', 10)->comment('データ容量3GB');
            $table->string('data_9', 10)->comment('データ容量9GB');
            $table->string('value_sim_call', 10)->comment('音声SIMつきSMS');
            $table->string('value_sim_data', 10)->comment('データ専用SMS');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sims');
    }
}

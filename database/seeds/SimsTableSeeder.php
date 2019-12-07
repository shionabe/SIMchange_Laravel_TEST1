<?php

use Illuminate\Database\Seeder;

class SimsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('sims')->insert([
      [
        //id=1
        'sim_name' => 'QTmobile',
        'min_price' => 700,
        'line_au' => '1',
        'line_docomo' => '1',
        'line_softbank' => '1',
        'terminal_iphone' => '1',
        'terminal_android' => '1',
        'data_1' => '1',
        'data_3' => '1',
        'data_9' => '1',
        'value_sim_call' => '1',
        'value_sim_data' => '1',
      ],
      [
        //id=2
        'sim_name' => 'IIJmio',
        'min_price' => 900,
        'line_au' => '2',
        'line_docomo' => '1',
        'line_softbank' => '2',
        'terminal_iphone' => '1',
        'terminal_android' => '1',
        'data_1' => '2',
        'data_3' => '1',
        'data_9' => '1',
        'value_sim_call' => '1',
        'value_sim_data' => '1',
      ],
      [
        //id=3
        'sim_name' => 'イオンモバイル',
        'min_price' => 480,
        'line_au' => '1',
        'line_docomo' => '1',
        'line_softbank' => '2',
        'terminal_iphone' => '2',
        'terminal_android' => '1',
        'data_1' => '1',
        'data_3' => '1',
        'data_9' => '1',
        'value_sim_call' => '1',
        'value_sim_data' => '1',
      ],
      [
        //id=4
        'sim_name' => 'UQモバイル',
        'min_price' => 980,
        'line_au' => '1',
        'line_docomo' => '2',
        'line_softbank' => '2',
        'terminal_iphone' => '1',
        'terminal_android' => '1',
        'data_1' => '2',
        'data_3' => '1',
        'data_9' => '1',
        'value_sim_call' => '1',
        'value_sim_data' => '1',
      ],
      [
        //id=1
        'sim_name' => 'LINEモバイル',
        'min_price' => 500,
        'line_au' => '1',
        'line_docomo' => '1',
        'line_softbank' => '1',
        'terminal_iphone' => '1',
        'terminal_android' => '1',
        'data_1' => '1',
        'data_3' => '1',
        'data_9' => '1',
        'value_sim_call' => '1',
        'value_sim_data' => '1',
      ],
   ]);
  }
  }

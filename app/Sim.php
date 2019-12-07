<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Sim extends Model
{
    //

    public static function getmydb ()
    {
      // $data = 'あああああ';
      // $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];
      $data = DB::table('books')->where('price', '1000')->value('book_name');
      $data = DB::table('books')->where('book_name', 'ブック２')->value('price');
      return $data;
    }


}

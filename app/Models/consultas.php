<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consultas extends Model
{
    use HasFactory;


        protected $dbname=bdsistnn;
        protected $connection;

        public function _construct(){
            $this->connection();
        }

        public function query(){
            $this->$connection->query('SELECT * FROM producto');

        }

}
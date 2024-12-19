<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Createbookstables extends Migration
{
    public function up()
    {

        
        $this->forge->addKey('id_buku', true);
        $this->forge->createTable('books');
    }



    public function down()
    {
        $this->forge->dropTable('books');
    }
}

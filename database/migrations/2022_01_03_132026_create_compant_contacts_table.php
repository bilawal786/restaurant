<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompantContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compant_contacts', function (Blueprint $table) {
            $table->id();
            $table->longText('company_name');
            $table->longText('company_address');
            $table->longText('email');
            $table->longText('contact_name');
            $table->longText('employes');
            $table->longText('phone');
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
        Schema::dropIfExists('compant_contacts');
    }
}

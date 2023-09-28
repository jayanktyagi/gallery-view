<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Project_Title');
            $table->string('Project_Technologies');
            $table->string('Technical_Skillset_Frontend');
            $table->string('Technical_Skillset_Backend');
            $table->string('Technical_Skillset_Databases');
            $table->string('Technical_Skillset_Infrastructre');
            $table->mediumText('Other_Information_Availability');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

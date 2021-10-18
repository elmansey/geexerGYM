<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersExtraInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members_extra_informations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->references('id')->on('members_personal_informations')->cascadeOnDelete();
            $table->text('interested_area')->nullable();
            $table->string('source');
            $table->foreignId('membership_id')->references('id')->on('memberships')->cascadeOnDelete();
            $table->date('start_date');
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
        Schema::dropIfExists('members_extra_informations');
    }
}
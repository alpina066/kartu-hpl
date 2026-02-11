<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('kartu_hpl', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('umur')->nullable();
            $table->string('suami')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->text('alamat')->nullable();
            $table->string('dx_keb')->nullable();
            $table->date('hpht')->nullable();
            $table->date('hpl')->nullable();
            $table->string('perdarahan')->nullable();
            $table->string('bb')->nullable();
            $table->string('tb')->nullable();
            $table->string('tensi')->nullable();
            $table->string('hb')->nullable();
            $table->string('status_tt')->nullable();
            $table->string('tablet_fe')->nullable();
            $table->string('letak_janin')->nullable();
            $table->string('lila')->nullable();
            $table->string('jarak_anak')->nullable();
            $table->date('partus_tgl')->nullable();
            $table->string('penolong')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('cara_lahir')->nullable();
            $table->string('bayi')->nullable();
            $table->string('plasenta')->nullable();
            $table->string('ku_bayi')->nullable();
            $table->string('ku_ibu')->nullable();
            $table->string('bbl')->nullable();
            $table->string('lk_ld')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kartu_hpl');
    }
};

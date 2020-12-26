<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaborsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabors', function (Blueprint $table) {
            $table->id();
            $table->string('Wagon_czy_lokomotywa');
            $table->string('Typ_lokomotywu:');
            $table->mediumText('Numer_wagonu');
            $table->mediumText('Opis_modelu');
            $table->mediumText('Oznaczenie_na_spodzie_modelu');
            $table->mediumText('Wlasciciel_modelu');
            $table->mediumText('Producent_modelu');
            $table->mediumText('Sprzęgi');
            $table->string('Gniazdo_NEM');
            $table->string('KKS');
            $table->string('Zd_spręż');
            $table->strxing('Koła');
            $table->mediumText('Wymiar_wew');
            $table->string('Felga');
            $table->string('RP25');
            $table->string('Długość_modelu');
            $table->date('Ostatnia_rewizja');
            $table->string('Waga_modelu');
            $table->string('Przewoźnik');
            $table->string('UIC_Typ');
            $table->string('Rodzaj_hamulca');
            $table->string('Długość_całk');
            $table->string('Rozstaw_osi');
            $table->string('Gr_obc_C');
            $table->string('Vmax');
            $table->string('Dł_ład');
            $table->string('Pow_ład');
            $table->string('Obj_ład');
            $table->mediumText('Uwagi_do_ładunku');       
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
        Schema::dropIfExists('tabors');
    }
}

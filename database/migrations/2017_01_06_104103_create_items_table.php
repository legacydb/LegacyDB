<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entry');
			$table->string('name');
			$table->string('slug');
			$table->string('quality')->nullable();
			$table->string('icon')->nullable();
			$table->integer('itemlevel');
			$table->integer('reqlevel');
			$table->integer('stacks');
			$table->integer('maxcount');
			$table->string('slot')->nullable();
			$table->string('type')->nullable();
			$table->integer('slots');
			$table->integer('startsquest');
			$table->string('binds')->nullable();
			$table->integer('buyprice');
			$table->integer('sellprice');
			$table->integer('disenchantid');
			$table->decimal('dps');
			$table->decimal('speed');
			$table->integer('armor');
			$table->integer('block');
			$table->boolean('randomproperty');
			$table->string('description')->nullable();
			$table->boolean('pagetext');
			$table->string('allowed_class')->nullable();
			$table->string('required_skill')->nullable();
			$table->integer('required_skill_rank');
			$table->integer('required_spell');
			$table->string('required_reputation_faction')->nullable();
			$table->integer('required_reputation_value');
			$table->integer('durability');
			$table->string('dmg_type1')->nullable();
			$table->integer('dmg_min1');
			$table->integer('dmg_max1');
			$table->string('dmg_type2')->nullable();
			$table->integer('dmg_min2');
			$table->integer('dmg_max2');
			$table->string('dmg_type3')->nullable();
			$table->integer('dmg_min3');
			$table->integer('dmg_max3');
			$table->string('dmg_type4')->nullable();
			$table->integer('dmg_min4');
			$table->integer('dmg_max4');
			$table->string('dmg_type5')->nullable();
			$table->integer('dmg_min5');
			$table->integer('dmg_max5');
			$table->string('stat_type1')->nullable();
			$table->integer('stat_value1');
			$table->string('stat_type2')->nullable();
			$table->integer('stat_value2');
			$table->string('stat_type3')->nullable();
			$table->integer('stat_value3');
			$table->string('stat_type4')->nullable();
			$table->integer('stat_value4');
			$table->string('stat_type5')->nullable();
			$table->integer('stat_value5');
			$table->string('stat_type6')->nullable();
			$table->integer('stat_value6');
			$table->string('stat_type7')->nullable();
			$table->integer('stat_value7');
			$table->string('stat_type8')->nullable();
			$table->integer('stat_value8');
			$table->string('stat_type9')->nullable();
			$table->integer('stat_value9');
			$table->string('stat_type10')->nullable();
			$table->integer('stat_value10');
			$table->integer('holy_res');
			$table->integer('fire_res');
			$table->integer('nature_res');
			$table->integer('frost_res');
			$table->integer('shadow_res');
			$table->integer('arcane_res');
			$table->integer('spell_id1');
			$table->string('spell_trigger1')->nullable();
			$table->integer('spell_id2');
			$table->string('spell_trigger2')->nullable();
			$table->integer('spell_id3');
			$table->string('spell_trigger3')->nullable();
			$table->integer('spell_id4');
			$table->string('spell_trigger4')->nullable();
			$table->integer('spell_id5');
			$table->string('spell_trigger5')->nullable();
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
        Schema::dropIfExists('items');
    }
}

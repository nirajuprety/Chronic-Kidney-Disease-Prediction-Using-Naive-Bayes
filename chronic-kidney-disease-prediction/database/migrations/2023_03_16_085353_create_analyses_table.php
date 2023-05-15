<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('analyses', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('age')->default(51);
      $table->integer('user_id')->unsigned();
      $table->double('bp')->nullable();
      $table->enum('sg', [1.005, 1.010, 1.015, 1.020, 1.025])->default(1.020);
      $table->enum('al', [0, 1, 2, 3, 4, 5])->default(0);
      $table->enum('su', [0, 1, 2, 3, 4, 5])->default(0);
      $table->boolean('rbc')->default(true);
      $table->boolean('pc')->default(true);
      $table->boolean('pcc')->default(false);
      $table->boolean('ba')->default(false);
      $table->double('bgr')->default(148.5875);
      $table->double('bu')->default(56.523);
      $table->double('sc')->default(3.051875);
      $table->double('sod')->default(137.70125);
      $table->double('pot')->default(4.564);
      $table->double('hemo')->default(12.49325);
      $table->double('pcv')->default(38.805);
      $table->double('wc')->default(8360.5);
      $table->double('rc')->default(4.69775);
      $table->boolean('htn')->default(false);
      $table->boolean('dm')->default(false);
      $table->boolean('cad')->default(false);
      $table->boolean('appet')->default(false);
      $table->enum('pe', ['0', '1'])->defualt(0);
      $table->enum('ane', ['0', '1'])->default(0);
      $table->integer('class');
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
    Schema::dropIfExists('analyses');
  }
};

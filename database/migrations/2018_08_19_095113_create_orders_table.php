<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->double('vat_rate', 5, 2);
            $table->double('vat', 8, 2);
            $table->double('subtotal', 8, 2);
            $table->double('total', 8, 2);
            $table->integer('status_id')->default(1);
            $table->boolean('pp_status')->default(0);
            $table->string('txn_id')->nullable();
            $table->string('payment_status')->nullable();
            $table->text('ipn')->nullable();
            $table->string('response')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

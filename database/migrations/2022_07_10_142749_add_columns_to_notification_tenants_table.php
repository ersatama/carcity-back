<?php

use App\Domain\Contracts\MainContract;
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
        Schema::table('notification_tenants', function (Blueprint $table) {
            $table->unsignedBigInteger(MainContract::USER_BANNER_ID)->nullable();
            $table->unsignedBigInteger(MainContract::USER_REVIEW_ID)->nullable();
            $table->unsignedBigInteger(MainContract::USER_REQUEST_ID)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notification_tenants', function (Blueprint $table) {
            $table->dropColumn(MainContract::USER_REQUEST_ID);
            $table->dropColumn(MainContract::USER_REVIEW_ID);
            $table->dropColumn(MainContract::USER_BANNER_ID);
        });
    }
};

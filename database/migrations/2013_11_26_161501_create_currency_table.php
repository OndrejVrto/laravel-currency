<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

return new class () extends Migration {
    protected string $table_name;

    public function __construct() {
        $this->table_name = config('currency.drivers.database.table');
    }

    public function up(): void {
        Schema::create($this->table_name, function ($table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('code', 10)->index();
            $table->string('symbol', 25);
            $table->string('format', 50);
            $table->string('exchange_rate');
            $table->boolean('active')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::drop($this->table_name);
    }
};
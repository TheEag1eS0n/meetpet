<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrchidRoleUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(table: 'role_users', callback: function (Blueprint $table) {
            $table->uuid(column: 'user_id')->primary();
            $table->unsignedInteger(column: 'role_id')->primary();
            $table->foreign(columns: 'user_id')
                ->references(columns: 'id')
                ->on(table: 'users')
                ->onUpdate(action: 'cascade')
                ->onDelete(action: 'cascade');
            $table->foreign(columns: 'role_id')
                ->references(columns: 'id')
                ->on(table: 'roles')
                ->onUpdate(action: 'cascade')
                ->onDelete(action: 'cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'role_users');
    }
}

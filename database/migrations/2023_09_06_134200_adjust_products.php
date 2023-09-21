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
        // criando a tabela de filiais
        if(! Schema::hasTable('branches')){
            Schema::create('branches', function(Blueprint $table){
                $table->id();
                $table->string('branch');
                $table->timestamps();
            });
        }
        
        if(! Schema::hasTable('product_branches')){
            Schema::create('product_branches', function(Blueprint $table){
                $table->id();
                $table->unsignedBigInteger('branch_id');
                $table->unsignedBigInteger('product_id');
                $table->decimal('price',8,2);
                $table->integer('min_stok');
                $table->integer('max_stok');
                $table->timestamps();
    
                //contraints foreign keys
    
                $table->foreign('branch_id')->references('id')->on('branches');
                $table->foreign('product_id')->references('id')->on('products');
            });
        }
        

        Schema::table('products', function(Blueprint $table){
            $table->dropColumn(['sale_price','min_stok','max_stok']);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function(Blueprint $table){
            $table->decimal('sale_price',8,2);
            $table->integer('min_stok');
            $table->integer('max_stok');
            

        });

        Schema::dropIfExists('product_branches');
        Schema::dropIfExists('branches');

    }
};

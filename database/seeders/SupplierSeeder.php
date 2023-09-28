<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $supplier = new Supplier();
        $supplier->name = 'Fornecedor 100';
        $supplier->site = 'fornecedor100.com';
        $supplier->fu = 'CE';
        $supplier->email = 'fornecedor100@fornecedor.com';
        $supplier->save();

        
    }
}

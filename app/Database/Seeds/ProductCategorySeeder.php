<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            // Kategori 1
            [
                'nama_kategori' => 'Olahraga',
                'nama_merk' => 'Nike',
                'nama_sepatu' => 'Air Zoom Pegasus',
            ],
            [
                'nama_kategori' => 'Olahraga',
                'nama_merk' => 'Adidas',
                'nama_sepatu' => 'Ultraboost',
            ],
            [
                'nama_kategori' => 'Olahraga',
                'nama_merk' => 'Puma',
                'nama_sepatu' => 'Ignite',
            ],

            // Kategori 2
            [
                'nama_kategori' => 'Kasual',
                'nama_merk' => 'Converse',
                'nama_sepatu' => 'Chuck Taylor 70s',
            ],
            [
                'nama_kategori' => 'Kasual',
                'nama_merk' => 'Vans',
                'nama_sepatu' => 'Old Skool',
            ],
            [
                'nama_kategori' => 'Kasual',
                'nama_merk' => 'New Balance',
                'nama_sepatu' => '574',
            ],
            [
                'nama_kategori' => 'Kasual',
                'nama_merk' => 'Reebok',
                'nama_sepatu' => 'Club C 85',
            ],
            

            // Kategori 3
            [
                'nama_kategori' => 'Formal',
                'nama_merk' => 'Clarks',
                'nama_sepatu' => 'Tilden Cap',
            ],
            [
                'nama_kategori' => 'Formal',
                'nama_merk' => 'Ecco',
                'nama_sepatu' => 'Helsinki',
            ],
            [
                'nama_kategori' => 'Formal',
                'nama_merk' => 'Hush Puppies',
                'nama_sepatu' => 'Brennan',
            ],
        ];

        // Insert data ke tabel product_category
        $this->db->table('product_category')->insertBatch($data);
    }
}

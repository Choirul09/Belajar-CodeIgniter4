<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProductCategoryModel extends Model
{
	protected $table = 'product_category'; 
	protected $primaryKey = 'id';
	protected $allowedFields = [
		'nama_kategori','nama_merk','nama_sepatu','created_at','updated_at'
	];  
}
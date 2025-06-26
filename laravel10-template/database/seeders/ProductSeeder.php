<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
$path = resource_path('csv/product.csv');

  if (!file_exists($path)) {
            echo "CSV File Not Found: $path\n";
            return;
        }

        $file = fopen($path, 'r');
        fgetcsv($file);

         while (($row = fgetcsv($file)) !== false) {

            $name     = $row[0];
            $barcode  = $row[1];
            $brand    = $row[2];
            $category = $row[3];
            $quantity = $row[4];
            $weight   = $row[5];
            $price    = $row[6];

            // Bonus, don't read lines without price
            if (empty($price)) {
                continue;
            }

            Product::create([
                'name'     => $name,
                'barcode'  => $barcode,
                'brand'    => $brand,
                'category' => $category,
                'quantity' => $quantity,
                'weight'   => $weight,
                'price'    => $price,
            ]);
        }

        fclose($file);

    }
}
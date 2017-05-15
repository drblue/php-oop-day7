<?php

require "Product.php";
require "vendor_Product.php";

use \App\Models\Product as OurProduct;
use \WCMS\Models\Product as VendorProduct;

$banan = new OurProduct();
$apple = new VendorProduct();

var_dump($banan);
var_dump($apple);

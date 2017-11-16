<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelognsToUser extends Exception
{
    public function render() {
    	return ['errors' => 'Product Not Belongs To User'];
    }
}

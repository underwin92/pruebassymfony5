<?php

namespace App\Tests;
use App\Service\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testSave()
    {
        if (\file_exists(__DIR__.'/../../ficheroDeContactos.txt')) {
            unlink(__DIR__.'/../../ficheroDeContactos.txt');
        }

        $Productsmanager = new Product();
        $Productsmanager->saveContactForm(
            'Nombre de pruebas',
            'Mensaje de pruebas'
        );

        $this->assertEquals(\file_exists(__DIR__.'/../../ficheroDeContactos.txt'), true);
    }
}


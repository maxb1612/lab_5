<?php


namespace App\Http\Controllers;


use App\Models\ProductBase;

class GetProducts extends Controller
{

    public function getProductsMain() {
        $productsTable = ProductBase::getInstance();
        $products = $productsTable->getProductTable();
        return view('index', ['products' => $products]);
    }

    public function getProductsCategory() {
        $productsTable = ProductBase::getInstance();
        $products = $productsTable->getProductTable();
        return view('category', ['products' => $products]);
    }

}

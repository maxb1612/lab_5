<?php


namespace App\Models;


class Product
{
    private string $name;
    private string $description;
    private string $price;
    private string $pic_path;

    public function __construct($name, $description, $price, $pic_path)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->pic_path = $pic_path;

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getPicPath(): string
    {
        return $this->pic_path;
    }



}

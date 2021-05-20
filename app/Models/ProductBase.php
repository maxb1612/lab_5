<?php


namespace App\Models;


class ProductBase
{
    private static ?ProductBase $instance = null;
    private array $productTable;


    private function __construct()
    {
        $this->productTable = array(
            1 => new Product('Альфредо', 'Піца з вершково-шпинатним соусом, моцарелою, шинкою, хрустким беконом, печерицями та соковитими томатами', '250', 'img/pizza/alfredo.png'),
            2 => new Product('Сирна', 'Проста і смачна: з фірмовим томатним соусом і тягнеться моцарелою', '60', 'img/pizza/cheese.png'),
            3 => new Product('Курча Ренч', 'Пікантна піца з соковитим курячим філе, хрустким беконом, соусом "Часниковий Ренч", моцарелою, часником і томатами', '250', 'img/pizza/chicken-ranch.png'),
            4 => new Product('Шинка та гриби', 'Ніжна піца з соусом "Часниковий Ренч", моцарелою, печерицями, ароматної шинкою і часником', '210', 'img/pizza/ham-and-mushrooms.png'),
            5 => new Product('Гавайська', 'Тропічна класика з ароматною шинкою, фірмовим томатним соусом і моцарелою в поєднанні з шматочками ананаса', '210', 'img/pizza/hawaii.png'),
            6 => new Product('Маргарита', 'Традиційний рецепт піци з моцарелою, соковитими томатами, фірмовим томатним соусом і орегано', '199', 'img/pizza/margherita.png'),
            7 => new Product('Мексиканська', 'Гостра піца з курячим філе, фірмовим томатним соусом, моцарелою, печерицями, цибулею, томатами, солодким зеленим перцем і перцем "Халапеньо"', '220', 'img/pizza/mexican.png'),
            8 => new Product('Пеппероні', 'Американська класика з пікантною пепероні, моцарелою і фірмовим томатним соусом', '210', 'img/pizza/pepperoni.png'),
            9 => new Product('Вегетаріанська', 'Легка піца з фірмовим томатним соусом, моцарелою, солодким зеленим перцем, печерицями, маслинами, цибулею і соковитими томатами', '200', 'img/pizza/vegetarian.png')
        );
    }

    public static function getInstance(): ProductBase
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @return Product[]
     */
    public function getProductTable(): array
    {
        return $this->productTable;
    }




}

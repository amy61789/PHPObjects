<?php
foreach($config->items as $item)
    {
        echo '<p>' . $item->Name . '<input type="text" name="item_' . $item->ID . '"/></p>';
    }
    
$myItem = new Item(1, "Taco", "Our Tacos are awesome!", 4.95);
$myItem->addExtra("Cheese");
$myItem->addExtra("Salsa");
$myItem->addExtra("Lettuce");
$config->items[] = $myItem;

$myItem = new Item(2, "Sundae", "Our Sundaes are awesome!", 3.95);
$myItem->addExtra("Hot Fudge");
$myItem->addExtra("Sprinkles");
$myItem->addExtra("Nuts");
$config->items[] = $myItem;

$myItem = new Item(3, "Pizza", "Our Pizzas are awesome!", 1.95);
$myItem->addExtra("Spinach");
$myItem->addExtra("Chicken");
$myItem->addExtra("Pesto");
$myItem->addExtra("Garlic");
$config->items[] = $myItem;

class item
{
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    public $Extras = array();
    
    public function __construct($ID, $Name, $Description, $Price)
    {
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = $Price;
    }#end item constructor
    
    public function addExtra($extra)
    {
        $this->Extras[] = $extra;
    }#end addExtra
}#end item class
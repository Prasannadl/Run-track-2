<?php

$cakes = array(
    array(
        "name" => "Chocolate Cake",
        "ingredients" => array(
            "Flour" => "2 cups",
            "Sugar" => "1.5 cups",
            "Eggs" => "3",
            "Butter" => "1 cup",
            "Milk" => "1 cup",
            "Baking Powder" => "2 teaspoons",
            "Cocoa Powder" => "0.5 cups"
        )
    ),
    array(
        "name" => "Cheese Cake",
        "ingredients" => array(
            "Cream Cheese" => "2 cups",
            "Sugar" => "1 cup",
            "Eggs" => "3",
            "Butter" => "0.5 cups",
            "Graham Cracker Crumbs" => "1.5 cups",
            "Vanilla Extract" => "1 teaspoon"
        )
    ),
    array(
        "name" => "Vanilla Cake",
        "ingredients" => array(
            "Flour" => "2.5 cups",
            "Sugar" => "1.5 cups",
            "Eggs" => "4",
            "Butter" => "1 cup",
            "Milk" => "1.25 cups",
            "Baking Powder" => "2 teaspoons",
            "Vanilla Extract" => "2 teaspoons"
        )
    )
);

function printIngredientsTable($cake) {
    $name = $cake["name"];
    $ingredients = $cake["ingredients"];
    
    echo "<h3>$name Ingredients:</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Ingredient</th><th>Quantity</th></tr>";
    
    foreach ($ingredients as $ingredient => $quantity) {
        echo "<tr><td>$ingredient</td><td>$quantity</td></tr>";
    }
    
    echo "</table><br>";
}

foreach ($cakes as $cake) {
    printIngredientsTable($cake);
}

?>

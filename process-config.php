<?php

$componentPrices = [
    'cpu' => [125, 250, 500],
    'ram' => [40, 50, 80, 100, 160, 200],
    'gpu' => [300, 600, 900],
    'os' => [0, 100, 100],
];

$price = 0;
foreach ($componentPrices as $type => $prices) {
    // Ex: si componentType === 'cpu'
    // - alors $componentPrices = [125, 250, 500]
    // - et $_GET[$componentType] = <le code du processeur choisi par l'utilisateur>
    if (isset($_GET[$type])) {
        $price += $prices[$_GET[$type]];
    }
}

$accessoryPrices = [
    'keyboard' => 100,
    'mouse' => 80,
    'screen' => 300,
];

foreach ($accessoryPrices as $accessory => $accessoryPrice) {
    // Ex: si $accessory === 'keyboard'
    // Si la valeur "keyboard" est définie dans les paramètres GET
    // ET que cette valeur vaut "on"
    if (isset($_GET[$accessory]) && $_GET[$accessory] === 'on') {
        // Augmente le prix de 100
        $price += $accessoryPrice;
    }
}

if ($price > 0) {
    var_dump($price);
}

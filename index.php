<?php

// Function
function dump($variable)
{
    echo '<pre>'.print_r($variable, true).'</pre>';
}

// Tableau
$tableau = [
    22 => [
        'nom' => 'Hash',
        'prenom' => 'Stéphane',
    ],
    19 => [
        'nom' => 'Dark',
        'prenom' => 'Vador',
    ],
    23 => [
        'nom' => 'Steve',
        'prenom' => 'Stéphanie',
    ],
    36 => [
        'nom' => 'Blanchard',
        'prenom' => 'Yvan',
    ],
    33 => [
        'nom' => 'Jésus',
        'prenom' => 'Edouard',
    ],
    18 => [
        'nom' => 'Bern',
        'prenom' => 'Fréderic',
    ],
];

echo '<p>Tableau d\'origine</p>';
// Afficher le dump du tableau d'origine

echo '<p>Tableau du plus petit au plus grand</p>';
// Trier et afficher le dump du tableau du plus petit au plus grand

echo '<p>Tableau du plus grand au plus petit</p>';
// Trier et afficher le dump du tableau du plus grand au plus petit

echo '<p>Liste du tableau</p>';
// Afficher en string: nom prénom à x ans

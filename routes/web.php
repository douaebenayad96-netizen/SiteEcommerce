<?php

use Illuminate\Support\Facades\Route;

// Route d'accueil
Route::get('/', function () {
    return view('home');
});

// Route produits dynamique
Route::get('/produits/{cat}', function ($cat) {
    $produits = [];
    
    if ($cat == 'hicking') {
        $produits = [
            [
                "nom" => "Sac à dos Pro",
                "prix" => 200,
                "image" => "sac_do.jpg",
                "description" => "Sac à dos ergonomique pour longues randonnées"
            ],
            [
                "nom" => "Tente 4 Places",
                "prix" => 300,
                "image" => "tent.jpg",
                "description" => "Tente imperméable pour famille"
            ],
            [
                "nom" => "Montre GPS Alpine",
                "prix" => 150,
                "image" => "watch_gps.jpg",
                "description" => "Montre GPS avec altimètre et baromètre"
            ]
        ];
    } elseif ($cat == 'electromenager') {
        $produits = [
            [
                "nom" => "Machine à Laver 8kg",
                "prix" => 3000,
                "image" => "machine_lav.jpg",
                "description" => "Machine à laver intelligente classe A+++"
            ],
            [
                "nom" => "Four Multifonction",
                "prix" => 1500,
                "image" => "four.jpg",
                "description" => "Four électrique avec convection"
            ],
            [
                "nom" => "Micro-ondes Inox",
                "prix" => 1000,
                "image" => "micro_onde.jpg",
                "description" => "Micro-ondes avec grill et fonctions automatiques"
            ]
        ];
    } else {
        abort(404);
    }
    
    return view('products', [
        'products' => $produits,
        'categorie' => $cat
    ]);
});

// Gestion des erreurs 404
Route::fallback(function () {
    return view('errors.404');
});
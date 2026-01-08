@extends('layouts.master')

@section('title', 'Accueil - EcomStylish')

@section('content')
    <section class="hero">
        <h1>Bienvenue chez EcomStylish</h1>
        <p>Découvrez nos produits de qualité aux meilleurs prix</p>
    </section>

    <div class="categories">
        <div class="category-card" onclick="window.location='/produits/hicking'">
            <i class="fas fa-hiking fa-3x"></i>
            <h3>Randonnée</h3>
            <p>Équipements de qualité pour vos aventures</p>
        </div>
        <div class="category-card" onclick="window.location='/produits/electromenager'">
            <i class="fas fa-home fa-3x"></i>
            <h3>Électroménager</h3>
            <p>Modernisez votre maison</p>
        </div>
    </div>

    <style>
        .categories {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .category-card {
            background: white;
            padding: 2rem;
            border-radius: var(--radius);
            text-align: center;
            box-shadow: var(--shadow);
            cursor: pointer;
            transition: var(--transition);
        }
        
        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        
        .category-card i {
            color: var(--primary);
            margin-bottom: 1rem;
        }
        
        .category-card h3 {
            color: var(--dark);
            margin-bottom: 0.5rem;
        }
    </style>
@endsection
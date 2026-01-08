@extends('layouts.master')

@section('title', 'Page Non Trouvée')

@section('content')
    <div class="error-page">
        <div class="error-code">404</div>
        <div class="error-message">
            <i class="fas fa-exclamation-triangle fa-2x"></i>
            <h2>Page Non Trouvée</h2>
        </div>
        <p>La page que vous recherchez n'existe pas ou a été déplacée.</p>
        <a href="/" class="btn-home">
            <i class="fas fa-home"></i> Retour à l'accueil
        </a>
    </div>
@endsection
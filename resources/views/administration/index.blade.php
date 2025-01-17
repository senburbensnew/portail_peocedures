@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Administration et gestion des crédits</h1>

        <div class="section-description">
            <p>Bienvenue dans la section "Administration et gestion des crédits". Ici, vous pouvez accéder aux documents et
                aux informations sur la gestion des crédits.</p>
        </div>

        <div class="submenu">
            <h3>Manuels et documents</h3>
            <ul>
                <li><a href="{{ route('administration.manuel-procedures') }}">Manuel de procédures</a></li>
                <li><a href="{{ route('administration.manuel-utilisateur') }}">Manuel de l’utilisateur</a></li>
            </ul>
        </div>

        <div class="resources">
            <h3>Ressources supplémentaires</h3>
            <p>Dans cette section, vous trouverez des documents relatifs à l'administration et à la gestion des crédits.</p>
            <!-- Vous pouvez ajouter des liens vers d'autres ressources si nécessaire -->
        </div>
    </div>
@endsection

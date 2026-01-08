<nav class="navbar">
    <div class="nav-container">
        <a href="/" class="logo">
            <i class="fas fa-shopping-bag"></i>
            EcomStylish
        </a>
        <ul class="nav-links">
            <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Accueil</a></li>
            <li><a href="/produits/hicking" class="{{ request()->is('produits/hicking') ? 'active' : '' }}">Randonnée</a></li>
            <li><a href="/produits/electromenager" class="{{ request()->is('produits/electromenager') ? 'active' : '' }}">Électroménager</a></li>
        </ul>
    </div>
</nav>
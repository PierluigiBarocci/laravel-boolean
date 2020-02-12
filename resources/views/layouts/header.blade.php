<header>
    <div id="navbarContainer" class="fixed-top">
        <div class="container-fluid">
            <nav class="boolean__navbar navbar navbar-expand-md navbar-light">
                <a class="boolean__navbar__logo navbar-brand" href="{{ route('homepage') }}">
                    <img src="https://www.boolean.careers/images/common/logo.png" alt="Boolean Careers">
                </a>
                <div class="boolean__navbar__items collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="boolean__navbar__item nav-item {{ Route::currentRouteName() === 'homepage' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                        </li>
                        <li class="boolean__navbar__item nav-item {{ Route::currentRouteName() === 'corso' ? 'active' : '' }}">
                            <a class="nav-link" href="#">Corso</a>
                        </li>
                        <li class="boolean__navbar__item nav-item {{ Route::currentRouteName() === 'after' ? 'active' : '' }}">
                            <a class="nav-link" href="#">Dopo il corso</a>
                        </li>
                        <li class="boolean__navbar__item nav-item {{ Route::currentRouteName() === 'lezione' ? 'active' : '' }}">
                            <a class="nav-link" href="#">Lezione Gratuita</a>
                        </li>
                        <li class="boolean__navbar__cta nav-item">
                            <a class="nav-link" href="#">Candidati ora</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

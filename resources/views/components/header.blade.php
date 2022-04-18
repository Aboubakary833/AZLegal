<style>
  a[data-path^="{{ Request::path() }}"] {
    color: var(--primary) !important;
  }
</style>

<div class="container-fluid d-none d-md-block bg__third py-2">
    <div class="container-fluid container-lg d-flex flex-column flex-sm-row justify-content-sm-between align-items-center">
        <div class="d-flex align-items-center text__primary small">
            <ion-icon name="location-outline" class="ion_icon_small"></ion-icon>
            <span>Ouagadougou, secteur 02</span>
        </div>

        <div class="d-flex align-items-center text__primary small">
            <ion-icon name="call-outline" class="ion_icon_small"></ion-icon>
            <span>
                (+226)
                <a href="tel:0022655887755" class="link__unstyle">55-88-77-55</a>
            </span>
        </div>
    </div>
</div>
<nav class="navbar sticky-top navbar-dark bg__secondary">
    <div class="container-fluid container-lg d-flex justify-content-between">
      <a class="navbar-brand" href="#">
          <img src="{{ asset('logo.png') }}" alt="AZ Legal" width="50" height="50">
      </a>
      <a class="link__unstyle ion_icon_medium text-light d-md-none" data-bs-toggle="offcanvas" href="#mobile__menu" role="button" aria-controls="mobile__menu">
        <ion-icon name="menu"></ion-icon>
      </a>
      <ul class="nav justify-content-end d-none d-md-flex text-white">
        <li class="nav-item">
          <a class="nav-link link__unstyle" aria-current="page" href="{{ route('home') }}" data-path="/">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link link__unstyle" href="{{ route('services') }}" id="services" data-path="services">
              Nos services
            </a>
          </li>
        <li class="nav-item">
          <a class="nav-link link__unstyle" href="{{ route('blog') }}" data-path="blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link__unstyle" href="{{ route('contact') }}" data-path="contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link__unstyle" href="{{ route('about') }}" data-path="about">À propos</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="offcanvas offcanvas-end bg__third" tabindex="-1" id="mobile__menu" aria-labelledby="mobile__menu">
    <div class="offcanvas-header">
      <h5 id="mobile__menu" class="text__primary text__semibold">AZ Legal</h5>
      <button type="button" class="text-reset ion_icon_medium mobile_menu_close_btn border-0" data-bs-dismiss="offcanvas" aria-label="Close">
        <ion-icon name="close"></ion-icon>
      </button>
    </div>
    <div class="offcanvas-body">
      <nav class="nav flex-column">
        <a class="nav-link link__unstyle text-white" href="{{ route('home') }}" data-path="/">Accueil</a>
          <a href="{{ route('services') }}" class="nav-link link__unstyle text-white" data-path="services">Nos services</a>
        <a class="nav-link link__unstyle text-white" href="{{ route('blog') }}" data-path="blog">Blog</a>
        <a class="nav-link link__unstyle text-white" href="{{ route('contact') }}" data-path="contact">Contact</a>
        <a class="nav-link link__unstyle text-white" href="{{ route('about') }}" data-path="about">À propos</a>
      </nav>
    </div>
  </div>
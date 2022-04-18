<footer class="container-fluid bg__secondary mt-4 pb-2">
    <div class="container">
        <div class="row align-items-center gx-2 gy-4">
            <div class="col-12 col-md-4">
                <div>
                    <img src="{{ asset('logo_full.png') }}" alt="AZ Legal" width="100">
                </div>
                <p class="small" style="color: #707070;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus voluptatum, temporibus facilis blanditiis quibusdam sunt voluptatibus soluta id perferendis rerum magnam ipsam itaque mollitia vitae hic praesentium unde voluptas eius.</p>
                <div class="mt-2">
                    <a href="mailto:c@azlc.net" class="link__unstyle text-white">c@azlc.net</a>
                </div>
                <div class="d-flex align-items-center small text-white">
                    <span>
                        (+226)
                        <a href="tel:0022655887755" class="link__unstyle">55-88-77-55</a>
                    </span>
                </div>
            </div>
            <div class="col-6 col-md-4 d-flex justify-content-md-center">
                <nav class="nav flex-column small">
                    <a class="nav-link link__unstyle text-white" href="{{ route('home') }}">Accueil</a>
                    <a class="nav-link link__unstyle text-white" href="{{ route('services') }}">Nos services</a>
                    <a class="nav-link link__unstyle text-white" href="{{ route('contact') }}">Nous consulter</a>
                    <a class="nav-link link__unstyle text-white" href="{{ route('about') }}">À propos</a>
                  </nav>
            </div>
            <div class="col-6 col-md-4 d-flex flex-column align-items-center">
                <p class="text-white">Nous suivre : </p>
                <nav class="nav flex-column small">
                    <a class="nav-link link__unstyle d-flex align-items-center" href="https://www.facebook.com/AZ-Legal-Consulting-105397128760319" target="_blank">
                        <ion-icon name="logo-facebook" class="ion_icon_medium text__primary"></ion-icon>
                        <span class="text__semibold text__primary" style="text-indent: 5px;">facebook</span>
                    </a>
                    <a class="nav-link link__unstyle d-flex align-items-center" href="https://www.linkedin.com/company/az-legal-consulting/" target="_blank">
                        <ion-icon name="logo-linkedin" class="ion_icon_medium text__primary"></ion-icon>
                        <span class="text__semibold text__primary" style="text-indent: 5px;">linkedin</span>
                    </a>
                  </nav>
            </div>
        </div>
    </div>
</footer>
<div class="container-fluid bg__third" style="height: 10px;"></div>
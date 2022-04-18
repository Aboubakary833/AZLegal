@extends('layouts.main')
@section('title') Accueil @endsection

@section('main')
    <div class="container-fluid home_welcome_field d-flex justify-content-center align-items-center">
        <div class="w-75 text-center">
            <h1 class="text__bold display-md-4">
                <span class="text__primary">Facilitez vous</span>
                <span class="text-white"> la tâche sur les questions 
                    juridiques avec nous.</span>
            </h1>
            <h5 class="text__semibold text-white my-4">Nous disposons d’une équipe dynamique de spécialistes engagés à accompagner 
                nos clients dans leurs différentes tâches juridiques.</h5>
                <a href="{{ route('contact') }}" class="btn bg__primary text__semibold px-3 py-2 px-md-4 py-md-3 mt-2" style="font-size: 18px;">Nous consulter</a>
        </div>
    </div>
    <div class="container-fluid section mt-4">
        <div class="container text-center">
            <h1 class="text__primary text__semibold">Nos services</h1>
            <h5 class="text__medium my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi assumenda asperiores molestias. Suscipit blanditiis, adipisci esse vero sapiente est eligendi nihil perferendis numquam soluta illo magnam omnis ipsum nemo? Accusamus.</h5>
            <div class="row g-2">
                <div class="col-12 col-md-4">
                    <img src="{{ asset('assets/illustrations/family_illustration.png') }}" alt="Droit de famille">
                    <h6 class="text__semibold">Droit de famille</h6>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores earum repellendus, sequi nam illum asperiores..</p>
                </div>
                <div class="col-12 col-md-4">
                    <img src="{{ asset('assets/illustrations/finance_illustration.png') }}" alt="Droit de famille">
                    <h6 class="text__semibold">Droit de finance</h6>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores earum repellendus, sequi nam illum asperiores..</p>
                </div>
                <div class="col-12 col-md-4">
                    <img src="{{ asset('assets/illustrations/work_illustration.png') }}" alt="Droit de famille">
                    <h6 class="text__semibold">Droit de travail</h6>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores earum repellendus, sequi nam illum asperiores..</p>
                </div>
            </div>

            <a href="{{ route('services') }}" class="btn bg__primary text__semibold px-3 py-2 my-4">Voir toutes nos services</a>

        </div>
    </div>
    <div class="container-fluid bg__primary mt-4 py-4">
        <div class="container text-center">
            <h1 class="text__secondary text__semibold">Création de société</h1>
            <div class="row g-2 justify-content-md-between align-items-center mt-4">
                <div class="col-12 col-md-4">
                    <img src="{{ asset('assets/illustrations/business_plan_illustration.png') }}" alt="Créer une société">
                </div>
                <div class="col-12 col-md-6">
                    <h6 class="text__medium">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum aliquet dignissim tincidunt nulla sapien quisque iaculis in eget. Ac purus gravida varius purus rutrum porta sapien viverra integer. Enim morbi massa neque facilisi. Ipsum gravida morbi molestie massa cras in vitae egestas.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum aliquet dignissim tincidunt nulla sapien quisque iaculis in eget. Ac purus gravida varius purus rutrum porta sapien viverra integer. Enim morbi massa neque facilisi. Ipsum gravida morbi molestie massa cras in vitae egestas.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum aliquet dignissim tincidunt nulla sapien quisque iaculis in eget. Ac purus gravida varius purus rutrum porta sapien viverra integer. Enim morbi massa neque facilisi. Ipsum gravida morbi molestie massa cras in vitae egestas.
                    </h6>
                </div>
            </div>
            <a href="{{ asset('services#creation_societe') }}" class="btn bg__secondary text__primary text__semibold px-3 py-2 my-4">Créer son entreprise</a>
        </div>
    </div>
    <div class="container-fluid section mt-4">
        <div class="container text-center">
            <h1 class="text__primary">Pourquoi nous choisir ?</h1>
           
            <div class="row mt-4">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('assets/illustrations/why_choose_us.png') }}" alt="Pourquoi nous choisir">
                </div>
                <div class="col-12 col-md-6 text-start">
                    <h6 class="text__medium my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi assumenda asperiores molestias. Suscipit blanditiis, adipisci esse vero sapiente est eligendi nihil perferendis numquam soluta illo magnam omnis ipsum nemo? Accusamus.</h6>
                    <div class="row mt-4 g-4">
                        <div class="col-6 d-flex justify-content-start align-items-center">
                            <ion-icon name="checkmark-circle" class="ion_icon_small text__primary"></ion-icon>
                            <span class="text__bold">Lorem Ipslum</span>
                        </div>
                        <div class="col-6 d-flex justify-content-start align-items-center">
                            <ion-icon name="checkmark-circle" class="ion_icon_small text__primary"></ion-icon>
                            <span class="text__bold">Lorem Ipslum</span>
                        </div>
                        <div class="col-6 d-flex justify-content-start align-items-center">
                            <ion-icon name="checkmark-circle" class="ion_icon_small text__primary"></ion-icon>
                            <span class="text__bold">Lorem Ipslum</span>
                        </div>
                        <div class="col-6 d-flex justify-content-start align-items-center">
                            <ion-icon name="checkmark-circle" class="ion_icon_small text__primary"></ion-icon>
                            <span class="text__bold">Lorem Ipslum</span>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="btn bg__primary text__semibold px-3 py-2 my-4">Nous consulter</a>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid my-4" style="margin-bottom: 50px !important;">
        <div class="container">
            <x-contact-box />
        </div>
    </div>
@endsection
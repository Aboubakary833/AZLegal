@extends('layouts.main')
@section('title') Services @endsection

@section('main')

<div class="container-fluid services_field d-flex justify-content-center align-items-center">
    <div class="w-75 text-center">
        <h1 class="text__bold display-md-4 text-white">NOS SERVICES</h1>
        <h5 class="text__semibold text-white my-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis vel vitae ipsa a culpa aspernatur quos voluptatum mollitia eum laudantium dolore veniam veritatis tenetur, atque omnis, amet rem? Ullam, mollitia?</h5>
    </div>
</div>
<div class="container-fluid section mt-4 pb-4">
    <div class="container-fluid container-md text-center">
        <div class="accordion" id="assistance_juridique">
            <div class="accordion-item">
              <h2 class="accordion-header" id="assistance_juridique_heading">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#assistance_juridique_collapse" aria-expanded="true" aria-controls="assistance_juridique_collapse">
                    <img src="{{ asset('assets/icons/museum.png') }}" alt="ASSISTANCE JURIDIQUE, 
            ADMINISTRATIVE ET FISCALE" width="50" height="50">
            <span class="text__semibold">ASSISTANCE JURIDIQUE, 
                ADMINISTRATIVE ET FISCALE</span>
                </button>
              </h2>
              <div id="assistance_juridique_collapse" class="accordion-collapse collapse show" aria-labelledby="assistance_juridique_heading" data-bs-parent="#assistance_juridique">
                <div class="accordion-body">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum incidunt eius obcaecati similique nisi saepe perferendis quia totam! Impedit dolorum sapiente quas aliquam veritatis tenetur incidunt eum iusto! Numquam, veritatis.
                  Eveniet qui commodi, minima alias explicabo fugiat similique tenetur atque praesentium, cum ut beatae nobis consequuntur voluptatum dolorem fuga, eius nam maxime optio. Magnam ipsam praesentium exercitationem natus officiis voluptatem?
                  Consequuntur necessitatibus reiciendis repellat odio laborum nulla vel, ad, corporis hic molestiae nostrum, temporibus tenetur accusantium. In officiis ut amet velit ab, recusandae rerum maiores, facilis nam quos dignissimos exercitationem.
                  Nisi quas nihil vitae nostrum placeat. Excepturi minus reprehenderit harum quos quis, unde rerum earum? Ad, voluptatibus blanditiis voluptatem quia vel suscipit aliquam dicta repellendus nesciunt optio debitis illo quibusdam.
                  Nemo ab dolorum aut ut possimus, deleniti doloremque atque provident delectus architecto, libero quos ex nesciunt modi. Totam possimus nulla ipsum. Dicta reprehenderit, sed dolores ipsam maxime ut dolor voluptas!
                </div>
              </div>
            </div>
        </div>

        <div class="accordion" id="redaction_acte_juridique">
            <div class="accordion-item">
              <h2 class="accordion-header" id="redaction_acte_juridique_heading">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#redaction_acte_juridique_collapse" aria-expanded="true" aria-controls="redaction_acte_juridique_collapse">
                    <img src="{{ asset('assets/icons/new_document.png') }}" alt="REDACTION D’ACTES JURIDIQUES
                    ET REPRESENTATION
                    D’ENTREPRISE" width="50" height="50">
            <span class="text__semibold">REDACTION D’ACTES JURIDIQUES
              ET REPRESENTATION
              D’ENTREPRISE</span>
                </button>
              </h2>
              <div id="redaction_acte_juridique_collapse" class="accordion-collapse collapse show" aria-labelledby="redaction_acte_juridique_heading" data-bs-parent="#redaction_acte_juridique">
                <div class="accordion-body">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum incidunt eius obcaecati similique nisi saepe perferendis quia totam! Impedit dolorum sapiente quas aliquam veritatis tenetur incidunt eum iusto! Numquam, veritatis.
                  Eveniet qui commodi, minima alias explicabo fugiat similique tenetur atque praesentium, cum ut beatae nobis consequuntur voluptatum dolorem fuga, eius nam maxime optio. Magnam ipsam praesentium exercitationem natus officiis voluptatem?
                  Consequuntur necessitatibus reiciendis repellat odio laborum nulla vel, ad, corporis hic molestiae nostrum, temporibus tenetur accusantium. In officiis ut amet velit ab, recusandae rerum maiores, facilis nam quos dignissimos exercitationem.
                  Nisi quas nihil vitae nostrum placeat. Excepturi minus reprehenderit harum quos quis, unde rerum earum? Ad, voluptatibus blanditiis voluptatem quia vel suscipit aliquam dicta repellendus nesciunt optio debitis illo quibusdam.
                  Nemo ab dolorum aut ut possimus, deleniti doloremque atque provident delectus architecto, libero quos ex nesciunt modi. Totam possimus nulla ipsum. Dicta reprehenderit, sed dolores ipsam maxime ut dolor voluptas!
                </div>
              </div>
            </div>
        </div>

        <div class="accordion" id="plan_affaire">
            <div class="accordion-item">
              <h2 class="accordion-header" id="plan_affaire_heading">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#plan_affaire_collapse" aria-expanded="true" aria-controls="plan_affaire_collapse">
                    <img src="{{ asset('assets/icons/handsshake.png') }}" alt="REDACTION DE PLANS D’AFFAIRES
                    OU BUSINESS PLAN" width="50" height="50">
            <span class="text__semibold">REDACTION DE PLANS D’AFFAIRES
              OU BUSINESS PLAN</span>
                </button>
              </h2>
              <div id="plan_affaire_collapse" class="accordion-collapse collapse show" aria-labelledby="plan_affaire_heading" data-bs-parent="#plan_affaire">
                <div class="accordion-body">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum incidunt eius obcaecati similique nisi saepe perferendis quia totam! Impedit dolorum sapiente quas aliquam veritatis tenetur incidunt eum iusto! Numquam, veritatis.
                  Eveniet qui commodi, minima alias explicabo fugiat similique tenetur atque praesentium, cum ut beatae nobis consequuntur voluptatum dolorem fuga, eius nam maxime optio. Magnam ipsam praesentium exercitationem natus officiis voluptatem?
                  Consequuntur necessitatibus reiciendis repellat odio laborum nulla vel, ad, corporis hic molestiae nostrum, temporibus tenetur accusantium. In officiis ut amet velit ab, recusandae rerum maiores, facilis nam quos dignissimos exercitationem.
                  Nisi quas nihil vitae nostrum placeat. Excepturi minus reprehenderit harum quos quis, unde rerum earum? Ad, voluptatibus blanditiis voluptatem quia vel suscipit aliquam dicta repellendus nesciunt optio debitis illo quibusdam.
                  Nemo ab dolorum aut ut possimus, deleniti doloremque atque provident delectus architecto, libero quos ex nesciunt modi. Totam possimus nulla ipsum. Dicta reprehenderit, sed dolores ipsam maxime ut dolor voluptas!
                </div>
              </div>
            </div>
        </div>

        <div class="accordion" id="legal_tech">
            <div class="accordion-item">
              <h2 class="accordion-header" id="legal_tech_heading">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#legal_tech_collapse" aria-expanded="true" aria-controls="legal_tech_collapse">
                    <img src="{{ asset('assets/icons/circuit.png') }}" alt="LEGAL TECH" width="50" height="50">
            <span class="text__semibold">LEGAL TECH</span>
                </button>
              </h2>
              <div id="legal_tech_collapse" class="accordion-collapse collapse show" aria-labelledby="legal_tech_heading" data-bs-parent="#legal_tech">
                <div class="accordion-body">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum incidunt eius obcaecati similique nisi saepe perferendis quia totam! Impedit dolorum sapiente quas aliquam veritatis tenetur incidunt eum iusto! Numquam, veritatis.
                  Eveniet qui commodi, minima alias explicabo fugiat similique tenetur atque praesentium, cum ut beatae nobis consequuntur voluptatum dolorem fuga, eius nam maxime optio. Magnam ipsam praesentium exercitationem natus officiis voluptatem?
                  Consequuntur necessitatibus reiciendis repellat odio laborum nulla vel, ad, corporis hic molestiae nostrum, temporibus tenetur accusantium. In officiis ut amet velit ab, recusandae rerum maiores, facilis nam quos dignissimos exercitationem.
                  Nisi quas nihil vitae nostrum placeat. Excepturi minus reprehenderit harum quos quis, unde rerum earum? Ad, voluptatibus blanditiis voluptatem quia vel suscipit aliquam dicta repellendus nesciunt optio debitis illo quibusdam.
                  Nemo ab dolorum aut ut possimus, deleniti doloremque atque provident delectus architecto, libero quos ex nesciunt modi. Totam possimus nulla ipsum. Dicta reprehenderit, sed dolores ipsam maxime ut dolor voluptas!
                </div>
              </div>
            </div>
        </div>

        <div class="accordion" id="formation">
            <div class="accordion-item">
              <h2 class="accordion-header" id="formation_heading">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#formation_collapse" aria-expanded="true" aria-controls="formation_collapse">
                    <img src="{{ asset('assets/icons/training.png') }}" alt="FORMATION" width="50" height="50">
            <span class="text__semibold">FORMATION</span>
                </button>
              </h2>
              <div id="formation_collapse" class="accordion-collapse collapse show" aria-labelledby="formation_heading" data-bs-parent="#formation">
                <div class="accordion-body">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum incidunt eius obcaecati similique nisi saepe perferendis quia totam! Impedit dolorum sapiente quas aliquam veritatis tenetur incidunt eum iusto! Numquam, veritatis.
                  Eveniet qui commodi, minima alias explicabo fugiat similique tenetur atque praesentium, cum ut beatae nobis consequuntur voluptatum dolorem fuga, eius nam maxime optio. Magnam ipsam praesentium exercitationem natus officiis voluptatem?
                  Consequuntur necessitatibus reiciendis repellat odio laborum nulla vel, ad, corporis hic molestiae nostrum, temporibus tenetur accusantium. In officiis ut amet velit ab, recusandae rerum maiores, facilis nam quos dignissimos exercitationem.
                  Nisi quas nihil vitae nostrum placeat. Excepturi minus reprehenderit harum quos quis, unde rerum earum? Ad, voluptatibus blanditiis voluptatem quia vel suscipit aliquam dicta repellendus nesciunt optio debitis illo quibusdam.
                  Nemo ab dolorum aut ut possimus, deleniti doloremque atque provident delectus architecto, libero quos ex nesciunt modi. Totam possimus nulla ipsum. Dicta reprehenderit, sed dolores ipsam maxime ut dolor voluptas!
                </div>
              </div>
            </div>
        </div>

        <div class="accordion" id="creation_societe">
            <div class="accordion-item">
              <h2 class="accordion-header" id="creation_societe_heading">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#creation_societe_collapse" aria-expanded="true" aria-controls="creation_societe_collapse">
                    <img src="{{ asset('assets/icons/users_groups.png') }}" alt="CREATION DE SOCIETES 
                    COMMERCIALES ET D’
                    ASSOCIATIONS" width="50" height="50">
            <span class="text__semibold">CREATION DE SOCIETES 
COMMERCIALES ET D’
ASSOCIATIONS</span>
                </button>
              </h2>
              <div id="creation_societe_collapse" class="accordion-collapse collapse show" aria-labelledby="creation_societe_heading" data-bs-parent="#creation_societe">
                <div class="accordion-body">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum incidunt eius obcaecati similique nisi saepe perferendis quia totam! Impedit dolorum sapiente quas aliquam veritatis tenetur incidunt eum iusto! Numquam, veritatis.
                  Eveniet qui commodi, minima alias explicabo fugiat similique tenetur atque praesentium, cum ut beatae nobis consequuntur voluptatum dolorem fuga, eius nam maxime optio. Magnam ipsam praesentium exercitationem natus officiis voluptatem?
                  Consequuntur necessitatibus reiciendis repellat odio laborum nulla vel, ad, corporis hic molestiae nostrum, temporibus tenetur accusantium. In officiis ut amet velit ab, recusandae rerum maiores, facilis nam quos dignissimos exercitationem.
                  Nisi quas nihil vitae nostrum placeat. Excepturi minus reprehenderit harum quos quis, unde rerum earum? Ad, voluptatibus blanditiis voluptatem quia vel suscipit aliquam dicta repellendus nesciunt optio debitis illo quibusdam.
                  Nemo ab dolorum aut ut possimus, deleniti doloremque atque provident delectus architecto, libero quos ex nesciunt modi. Totam possimus nulla ipsum. Dicta reprehenderit, sed dolores ipsam maxime ut dolor voluptas!
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection
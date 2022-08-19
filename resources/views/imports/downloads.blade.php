@extends('layouts.app')

@section('content')

<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <div class="breadcrumb-area breadcrumb-bg s-breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="dots"></li>
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Air Freight</li>
                                <li class="dots2"></li>
                            </ol>
                        </nav>
                        <h2>Air Freight</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- services-details -->
    <div class="services-details-area pt-120 pb-115">
        <div class="container">
            <div class="services-details-wrap">
                <div class="row">
                    <div class="col-lg-4 order-2 order-lg-0">
                        <aside class="services-sidebar">
                            <div class="services-widget mb-40">
                                <div class="service-widget-title">
                                    <hr>
                                </div>
                                <div class="service-cat-list">
                                    <ul>
                                        <li><a href="{{ route('general-information') }}">General Information</a></li>
                                        <li>
                                            <a class="dropdown-toggle" href="{{ route('livinganimals') }}">Living animals</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item"><a href="{{ route('living-animal-import') }}">Import</a></li>
                                                <li class="dropdown-item"><a href="{{ route('living-animal-travel') }}">Travel</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('foodandgoods') }}">Food and goods of animal origin</a></li>
                                        <li><a href="{{ route('plantbased') }}">Plant-based food and commodities</a></li>
                                        <li><a href="{{ route('organic') }}">Organic</a></li>
                                        <li><a href="{{ route('faq') }}">Faq</a></li>
                                        <li><a href="{{ route('explanation') }}">Explanation of terms</a></li>
                                        <li class="active"><a href="{{ route('downloads') }}">Downloads</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-8">
                        <div class="services-details-content">
                            <h4>Download area</h4>


                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item mb-2">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Survey form Ukrainian pets (DE, EN, UA)
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul class="webconMoleculesNavigationFiles nav nav-files">
                                                <li class="nav-item">
                                                    <a href="/fileadmin/daten/Dokumente/Erhebungsformular_Ukr.Heimtiere_DE_ENG_UA.pdf" class="nav-link" download>
                                                        <div class="ce-uploads-text">
                                                            <span class="ce-uploads-fileName">Erhebungsformular_Ukr.Heimtiere_DE_ENG_UA.pdf</span>
                                                            <span class="ce-uploads-info">(<span class="ce-uploads-extension">pdf</span>,<span class="ce-uploads-size">&nbsp;422 KB</span>)</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            (Emergency) quarantine station application
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul class="webconMoleculesNavigationFiles nav nav-files">
                                                <li class="nav-item">
                                                    <a href="/fileadmin/daten/Dokumente/BAVG__Not_quarant%C3%A4nestation_Antragsformular.pdf" class="nav-link" download>
                                                        <div class="ce-uploads-text">
                                                            <span class="ce-uploads-fileName">BAVG__Not_quarantänestation_Antragsformular.pdf</span>
                                                            <span class="ce-uploads-info">(<span class="ce-uploads-extension">pdf</span>,<span class="ce-uploads-size">&nbsp;518 KB</span>)</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            General files
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p><a href="/fileadmin/daten/Dokumente/Notfall_Dokument_GGED-D_Artikel_46_DfVO_1715.pdf">Notfall_Dokument_GGED-D_Artikel_46_DfVO_1715</a></p>
                                            <p><a href="/fileadmin/daten/Dokumente/Notfall_Dokument_GGED-A_Artikel_46_DfVO_1715.pdf">Notfall_Dokument_GGED-A_Artikel_46_DfVO_1715 </a></p>
                                            <p><a href="/fileadmin/daten/Dokumente/Notfall_Dokument_GGED-P_Artikel_46_DfVO_1715.pdf">Notfall_Dokument_GGED-P_Artikel_46_DfVO_1715 </a></p>
                                            <p><a href="/fileadmin/daten/Dokumente/GGED-Erlaeuterungen_aus_VO_2019_1715.pdf">GGED explanations from VO 2019</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            Files on the subject of live animals
                                    </h2>
                                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p><a href="/fileadmin/daten/Dokumente/Reiseverkehr_Erkl%C3%A4rung_Heimtiere.pdf">Declaration owner:in /authorized person to travel</a></p>
                                            <p>&nbsp;</p>
                                            <p><a href="/fileadmin/daten/Dokumente/Reiseverkehr_Erkl%C3%A4rung_Heimtiere_Drittl%C3%A4nder_unter_12_Wochen___IGV_endfassung__speicherbar_.pdf">Declaration of owner/authorized person for animals under 12 weeks of age or with not yet valid anti-rabies vaccination.</a></p>
                                            <p><a href="/fileadmin/daten/Dokumente/Reiseverkehr_Erkl%C3%A4rung_Heimtiere_Drittl%C3%A4nderdurchfuhr_endfassung__speicherbar_.pdf">Declaration of owner/authorised person for animals in transit through non-listed countries</a></p>
                                            <p><a href="/fileadmin/daten/Dokumente/ZeugnismusterVO2019-1293.pdf">Model certificate Annex IV of Regulation (EU) No 577/2013 as amended by Regulation (EU) 2019/1293</a></p>
                                            <p><a href="/fileadmin/daten/Dokumente/ZeugnismusterVO2019-1293Korrigendum.pdf">Corrigendum to the model certificate Annex IV to Regulation (EU) No 577/2013 as amended by Regulation (EU) 2019/1293</a></p>
                                            <p><a href="/fileadmin/daten/Dokumente/EdK2007-25AnhIIZertifikatsmuster_ZIERV%C3%96GEL.pdf">Presentation of a veterinary certificate in accordance with the model</a></p>
                                            <p><a href="/fileadmin/daten/Dokumente/EdK2007-25AnhIIIMustererkl%C3%A4rung_ZIERV%C3%96GEL.pdf">Presentation of a declaration according to the model</a></p>
                                        </div>
                                    </div>
                                </div>

                            </div>




                            <div>
                                <div class="alert alert-secondary mt-3" role="alert">
                                    This page has been translated using translation software. In case of doubt, the German version of this website
                                    shall apply.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services-details-end -->


</main>
<!-- main-area-end -->
@endsection

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
                                        <li class="active"><a href="{{ route('plantbased') }}">Plant-based food and commodities</a></li>
                                        <li><a href="{{ route('organic') }}">Organic</a></li>
                                        <li><a href="{{ route('faq') }}">Faq</a></li>
                                        <li><a href="{{ route('explanation') }}">Explanation of terms</a></li>
                                        <li><a href="{{ route('downloads') }}">Downloads</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-8">
                        <div class="services-details-content">
                            <h4>Import control of foodstuffs and goods of non-animal origin</h4>

                            <h4>Reinforced controls</h4>
                            <p>Consignments of food of non-animal origin listed in the Annexes to <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2019/1793, as amended, and products listed in Annex I to the Implementing Decision 2011/884/EU on emergency measures regarding unauthorized genetically modified rice in rice products originating in China, shall be temporarily subject to increased official controls at border inspection posts upon their entry into the Union and at control points.</p>
                            <p>Operators are required to complete Part I of the Common Health Entry Document (CED-D) for each consignment submitted to inspection. The declaration of the consignment must be made using TRACES one working day before the actual arrival of the consignment at the border inspection post.</p>
                            <p>The document check must be performed at the border inspection posts at the <abbr lang="de-DE" title="Europäische Union">EU external borders</abbr>.</p>
                            <p>The identity check and examination of goods including sampling at the percentage of consignments specified in the present <abbr lang="de-DE" title="Europäische Union ">EU</abbr> regulations, may also be carried out at the control points.</p>
                            <p>Goods subject to control are specified in the annexes of <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2019/1793 as amended and Decision 2011/884/EU.</p>
                            <p>The decisive factor is the <abbr lang="de-DE" title="Kombinierte Nomenklatur">CN code</abbr> and the country from which the goods are imported. The frequency of the identity check and physical inspection, including the parameters for which the goods are to be tested, are set out in the <abbr lang="de-DE" title="Europäische Union ">EU</abbr> regulations.</p>
                            <p>Importers shall provide an official certificate for each consignment of food of non-animal origin listed in Annex II of <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2019/1793 as amended, in accordance with the model in Annex IV. The results of sampling and analyses shall also be provided.</p>
                            <p>If the consignment is sampled in the course of the examination of the goods, the consignment can be released only after a harmless laboratory result.</p>
                            <p>Each consignment of products of the Implementing Decision 2011/884/EU shall be accompanied by a health certificate and an analytical report in accordance with the models set out in Annexes III and IV.</p>
                            <p>Operators shall also indicate whether the product is food or feed.</p>



                            <h4>Control before customs clearance</h4>
                            <p>For consignments subject to the <abbr lang="de-DE" title="Europäische Union ">EU regulation</abbr> <abbr lang="de-DE" title="Verordnung ">VO</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2015/949, the border inspection post is informed of the import by the importer. The company shall complete Part I of the Common Health Entry Document ( <a href="/fileadmin/daten/Dokumente/GGED-D_aus_VO_2019_1715.pdf">CED-D</a> ) of <abbr lang="de-DE" title="Verordnung ">Regulation</abbr> (<abbr lang="de-DE" title="Europäsische Union ">EU</abbr>) 2019/1715.</p>
                            <p>Each consignment must be accompanied by:</p>
                            <p>(a) a report containing the results of sampling and analysis,</p>
                            <p>(b) a certificate in accordance with the model set out in Annex II.</p>
                            <p>The certificate shall be valid for four months from the date of its issue.</p>
                            <p>Only when the competent control bodies of the <abbr lang="de-DE" title="Bundesamt für Verbraucher:innengesundheit">BAVG</abbr> have completed and signed Part II of the <a href="/fileadmin/daten/Dokumente/GGED-D_aus_VO_2019_1715.pdf">CDR-D</a> can the consignment be cleared through customs.</p>


                            <h4>Import barriers</h4>
                            <p>Foodstuffs from Nigeria consisting of dried beans listed in Annex IIa to <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2019/1793 shall not be imported.</p>


                            <h4>Plastic articles made of polyamide and melamine</h4>
                            <p>Commission<abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 284/2011 laying down specific conditions and detailed procedures concerning imports of polyamide and melamine plastic kitchenware originating in or consigned from the People's Republic of China and the Hong Kong Special Administrative Region, China respectively.</p>
                            <p>The inspection shall be carried out at the designated point of first introduction. It shall include documentary checks, identity checks and physical checks (including laboratory analysis of 10 % of the consignments). During the examination of the sample, the consignment is blocked.</p>
                            <p>The performance of the official control has to be requested at the border inspection post 2 days in advance by presenting the declaration in the annex of <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No. 284/2011 together with the corresponding laboratory reports by means of GGED-D (Common Health Entry Document).</p>
                            <p>The laboratory reports are to be sent by e-mail to <a href="javascript:linkTo_UnCryptMailto(%27kygjrm8gknmprYzyte%2Cet%2Cyr%27);" title="Mail Adresse Import BAVG ">import@bavg.gv.at</a>.</p>


                            <h4>Customs clearance of vegetable foodstuffs and plastic kitchen articles</h4>
                            <p>Information on customs clearance of this type of consignment can be found in the working guideline on foodstuffs (VB-0200), which has been published in the financial documentation (Findok) of the Federal Ministry of Finance. The Findok can be accessed via the homepage of the <abbr lang="de-DE" title="Bundesministerium für Finanzen ">BMF</abbr><a href="http://www.bmf.gv.at" title="Bundesministerium für Finanzen ">(www.bmf.gv.at</a>).</p>
                            <p><a href="https://findok.bmf.gv.at/findok?execution=e2s1" title="Bundesministerium für Finanzen">https://findok.bmf.gv.at/findok?execution=e2s1</a></p>


                            <h4> Phytosanitary import control</h4>
                            <p>Plants, plant parts, fruit, vegetables, flowers or seeds require a phytosanitary certificate when imported from a non-EU country and are subject to official control to prevent the introduction of plant pests and diseases. Please note that for certain goods there is even an import ban, for example for citrus plants, citrus leaves, vines or seed potatoes.</p>
                            <p>For further information, please visit the website of the <a href="https://www.baes.gv.at/kontrolle/pflanzenschutzdienst/" title="Pflanzenschutzdienst BAES ">Federal Office for Food Safety</a><abbr lang="de-DE" title="Bundesamt für Ernährungssicherheit">(BAES</abbr>).</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>


                            <h4> Phytosanitary import control</h4>
                            <p>Plants, plant parts, fruit, vegetables, flowers or seeds require a phytosanitary certificate when imported from a non-EU country and are subject to official control to prevent the introduction of plant pests and diseases. Please note that for certain goods there is even an import ban, for example for citrus plants, citrus leaves, vines or seed potatoes.</p>
                            <p>For further information, please visit the website of the <a href="https://www.baes.gv.at/kontrolle/pflanzenschutzdienst/" title="Pflanzenschutzdienst BAES ">Federal Office for Food Safety</a><abbr lang="de-DE" title="Bundesamt für Ernährungssicherheit">(BAES</abbr>).</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>


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

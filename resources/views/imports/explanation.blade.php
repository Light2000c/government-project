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
                                        <li class="active"><a href="{{ route('explanation') }}">Explanation of terms</a></li>
                                        <li><a href="{{ route('downloads') }}">Downloads</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-8">
                        <div class="services-details-content">
                            <h4>Explanation of Terms</h4>


                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Exit border inspection post
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Exit border inspection post</h4>
                                            <p>... is a veterinary border inspection post at which a transit consignment is checked when leaving the <abbr lang="de-DE" title="Europäische Union ">EU</abbr> (= at an <abbr lang="de-DE" title="Europäische Union ">EU external border</abbr>).</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Document check
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Document check</h4>
                                            <p>... is the official inspection of the official certificates and documents accompanying the animals and goods.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Third country
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Third country</h4>
                                            <p>... is a state that is not a member of the <abbr lang="de-DE" title="Europäische Union ">EU</abbr>, e.g. Serbia, Turkey, <abbr lang="en-GB" title="United States of America ">USA</abbr>, Great Britain, ...</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            Transit
                                    </h2>
                                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Transit</h4>
                                            <p>... is the shipment of consignments from a third country to Austria with subsequent shipment to another third country. This can be done directly via Austria or another <abbr lang="de-DE" title="Europäische Union ">EU</abbr> member state.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                            Import
                                    </h2>
                                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4> Import</h4>
                                            <p>... means the transport of a consignment subject to veterinary checks from a third country to</p>
                                            <p>a) to a destination in Austria or</p>
                                            <p>b) via Austria to another destination within the <abbr lang="de-DE" title="Europäische Union ">EU.</abbr></p>
                                            <p>Import versus entry: "Import" is the commonly used term in relation to commercial consignments (businesses), "entry" is the commonly used term for private travel (sometimes "shipment" is used instead of "import", it is equally "commercial travel").</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                            Entry limit control point
                                    </h2>
                                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Entry limit control point</h4>
                                            <p>... is a veterinary border inspection post where a consignment is checked on entry into the <abbr lang="de-DE" title="Europäische Union ">EU</abbr> (= at an <abbr lang="de-DE" title="Europäische Union ">EU external border</abbr>).</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                            EEA
                                    </h2>
                                    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>EEA</h4>
                                            <p>... is the European Economic Area - this consists of the 27 <abbr lang="de-DE" title="Europäische Union ">EU</abbr> countries plus Iceland, Liechtenstein and Norway.</p>
                                            <p>Note: Switzerland is neither a member of the <abbr lang="de-DE" title="Europäische Union ">EU</abbr> nor the <abbr lang="de-DE" title="Europäischer Wirtschaftsraum">EEA</abbr>, but it is linked to the <abbr lang="de-DE" title="Europäische Union ">EU</abbr> by a number of bilateral agreements. In many areas, Swiss nationals are therefore on an equal footing with <abbr lang="de-DE" title="Europäische Union ">EU citizens</abbr>.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                            By whom is the control of animals in travel carried out?
                                    </h2>
                                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>By whom is the control of animals in travel carried out?</h4>
                                            <p>The control of travel in Austria is carried out by the customs authorities.</p>
                                            <p>Important: if you are travelling with an animal, please actively contact the customs authorities upon arrival (e.g. by using the exit marked in red at the airport ("red channel")).</p>
                                            <p>Attention: In case of non-compliance with the regulations, the border veterinarians will be called in, who will then carry out a border veterinary inspection and have to decide on the import of your animal. This decision can also be negative!</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                            Listed countries
                                    </h2>
                                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Listed countries</h4>
                                            <p>... are countries listed in annexes to relevant <abbr lang="de-DE" title="Europäische Union ">EU legal acts</abbr> for which, as a rule, simplified import or entry conditions into the <abbr lang="de-DE" title="Europäische Union ">EU</abbr> exist. These simplified conditions are generally based on various agreements with the <abbr lang="de-DE" title="Europäische Union">EU</abbr>.</p>
                                            <p>Thus, there are no simplified import or entry conditions for non-listed countries.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                            Joint Health Entry Document (GGED)
                                    </h2>
                                    <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Joint Health Entry Document (GGED)</h4>
                                            <p>... is a document with which live animals, foodstuffs and goods of animal and non-animal origin are to be declared for import control. Border veterinarians and/or control bodies certify in the CED whether the animals or foodstuffs and goods comply with the import conditions of the EU or not.</p>
                                            <p>There is a separate CDR for each type of consignment:</p>
                                            <ul>
                                                <li><a href="/fileadmin/daten/Dokumente/GGED-A_aus_VO_2019_1715.pdf">CJED-A</a>: live animals</li>
                                                <li><a href="/fileadmin/daten/Dokumente/GGED-P_aus_VO_2019_1715.pdf">CJED-P</a>: foodstuffs and goods of animal origin</li>
                                                <li><a href="/fileadmin/daten/Dokumente/GGED-D_aus_VO_2019_1715.pdf">GGED-D</a>: foodstuffs and goods of non-animal origin.</li>
                                            </ul>
                                            <p>Note: the English name is <abbr lang="de-DE" title="common health entry document">CHED</abbr> - <span class="text-lang" lang="en-GB" dir="ltr">common health entry document</span>.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse12">
                                            Border post
                                    </h2>
                                    <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Border post</h4>
                                            <p>... is an official place where the border veterinarian or a certifying official control body carries out the border control at the border to a third country or an <abbr lang="de-DE" title="Europäische Union ">EU external border</abbr>(e.g. Vienna International Airport).</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                            Border veterinarian
                                    </h2>
                                    <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Border veterinarian</h4>
                                            <p>... is the official veterinarian appointed by the competent central authority of a State to carry out veterinary border inspection.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                            Border veterinary control
                                    </h2>
                                    <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Border veterinary control</h4>
                                            <p>Documentary checks, identity checks and physical checks in accordance with Regulation (EU) 2017/625 and the Union acts adopted in this respect, as well as other checks and examinations to be carried out by border veterinarians when crossing the border in accordance with Community legislation;</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                            Harmonised import
                                    </h2>
                                    <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Harmonised import</h4>
                                            <p>Importation of animals, goods and objects from a third country, subject to the following conditions:</p>
                                            <p>(a) the consignment comes from a third country or part of a third country authorised by a legal act of the Union to export to the Union, where Union legislation so requires; and</p>
                                            <p>(b) the animals, goods or objects concerned and their intended use are covered by certificates or documents required by Union legislation; and</p>
                                            <p>(c) where Union legislation so provides, the consignments come from approved establishments.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                            Pets
                                    </h2>
                                    <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4> Pets</h4>
                                            <p>... is an animal kept for private purposes and not for commercial purposes. This term includes dogs, cats, ferrets and other animals such as invertebrates (except bees, molluscs of the phylum Mollusca and crustaceans of the subphylum Crustacea), ornamental aquatic animals, amphibians, reptiles, birds (specimens of bird species other than poultry, turkeys, guinea fowl, ducks, geese, quails, pigeons, pheasants, partridges and ratites), and rodents and rabbits (other than those intended for food production).</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                            IMSOC
                                    </h2>
                                    <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>IMSOC</h4>
                                            <p>... is a web-based information management system of the <abbr lang="de-DE" title="Europäische Union ">EU</abbr>, which</p>
                                            <ul>
                                                <li>for the exchange of information between authorities</li>
                                                <li>to increase the transparency of control results and official decisions.</li>
                                            </ul>
                                            <p>official decisions. IMSOC includes the "<span class="text-lang" lang="en-GB" dir="ltr">Trade Control and Expert System </span><span class="text-lang" lang="en-GB" dir="ltr">(TRACES</span>)" and the "<span class="text-lang" lang="en-GB" dir="ltr">Rapid Alert System for Food and Feed</span><span class="text-lang" lang="en-GB" dir="ltr">(RASFF</span>)".</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                            Travel
                                    </h2>
                                    <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Travel</h4>
                                            <p>... is private travel with personal goods of travellers for non-commercial purposes, e.g. tourism. Travel is understood to include all private forms and types of travel, which are not limited to passenger transport, but also include animal transport and goods transport.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                            Protective measures
                                    </h2>
                                    <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Protective measures</h4>
                                            <p>Any measure adopted by the European Union or by a Member State imposing restrictions on the import of animals, goods or objects.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                            Serological titer test
                                    </h2>
                                    <div id="collapse21" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Serological titer test</h4>
                                            <p>A titer test is done to determine whether there is sufficient vaccination protection after a vaccination.</p>
                                            <ul>
                                                <li>Antibodies = proteins which are used by the immune system to fight pathogens such as bacteria and viruses (= defence substances of the body). Antibodies are formed after contact with antigens (= substances that are recognised by the body as foreign and are fought against).</li>
                                                <li>Serological examination = is the examination of the interaction between antibodies and antigens in the blood serum.</li>
                                                <li>Titer = measure of the number of certain antibodies in the blood. The titer is a measure to determine whether there is sufficient vaccination protection after a vaccination.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                                            Prohibitions
                                    </h2>
                                    <div id="collapse22" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Prohibitions</h4>
                                            <p>... are all measures available to an Austrian authority to prevent the placing on the market (import, entry) of a consignment (animals, foodstuffs and goods) (these are above all traffic restrictions, quarantine or slaughter and killing orders, orders for destruction, treatment of goods and foodstuffs, removal from the country).</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                            Entrepreneur
                                    </h2>
                                    <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4> Entrepreneur</h4>
                                            <p>... means any natural or legal person to whom one or more obligations under the provisions referred to in Article 1(2) of <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2017/625 apply (trade).</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                            Authorised user
                                    </h2>
                                    <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Authorised user</h4>
                                            <p>... is a person who is entitled to decide on a private consignment of pets (attention: max. 5 pets at once). He is therefore also responsible for the legally compliant transport of the animal to its destination or to its owner.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse27" aria-expanded="false" aria-controls="collapse27">
                                            VIS
                                    </h2>
                                    <div id="collapse27" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4> VIS</h4>
                                            <p>... is the electronic consumer health information system<a href="http://vis.statistik.at" title="VIS - Statistik ">(vis.statistik.at</a>).</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
                                            Reimportation
                                    </h2>
                                    <div id="collapse28" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Reimportation</h4>
                                            <p>... means that animals, foodstuffs and goods, etc. have been exported from the <abbr lang="de-DE" title="Europäische Union ">EU</abbr> and will be re-imported into the Union after a certain period of time.</p>
                                            <p>In other words: Is the repatriation of consignments originating from the <abbr lang="de-DE" title="Europäische Union ">EU</abbr> that have been taken to a third country.</p>
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

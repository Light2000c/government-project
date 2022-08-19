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
                                        <li class="active"><a href="{{ route('general-information') }}">General Information</a></li>
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
                                        <li><a href="{{ route('downloads') }}">Downloads</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-8">
                        <div class="services-details-content">
                            <h4>General Information</h4>

                            <p>The Federal Office for Consumer:Internal Health<abbr lang="de-DE" title="Bundesamt für Verbraucher:innengesundheit">(BAVG</abbr>) is responsible for the import control of live animals, foodstuffs and certain goods as well as organic products during import and transit or re-import from third countries.</p>
                            <p>The area of import and transit (= <strong>commercial</strong> purposes as a reason for import) is harmonized, which means that the regulations apply to all member states, in order to guarantee, with regard to the common market and independent of the individual member states, a uniform control and the fulfillment of the health conditions of the imported or transited animals, food and goods.</p>
                            <p>Restrictions and controls also apply to the transport of live animals, foodstuffs and goods of both animal and non-animal origin as well as organic products by <strong>private individuals</strong>.</p>
                            <p>The enforcement of these measures in Austria is based on Community law, the Animal Diseases Act, the Food Safety and Consumer Protection Act and the regulations based on them, in particular the Veterinary Import Ordinance (Veterinärbehördliche Einfuhrverordnung <abbr lang="de-DE" title="in der geltenden Fassung">i.d</abbr>.g.F.). The controls at the Austrian border inspection posts are carried out by border veterinarians and/or control bodies of the Import Control Department of the <abbr lang="de-DE" title="Bundesamt für Verbraucher:innengesundheit">BAVG</abbr>, in cooperation with the customs authorities.</p>
                            <p>On the following pages you will find all the information on particularly frequently requested topics.</p>

                            <h4>Austrian border control posts and control posts</h4>

                            <p>Here you will find a list of the <a href="/fileadmin/daten/Dokumente/Grenzkontrollstellen_BAVG_01.01.2022.pdf">Austrian border control posts</a> in the area of competence of the Federal Office of Consumer Health (including addresses, telephone and fax numbers, e-mail addresses and opening hours).</p>
                            <p>Furthermore, here you will find a list of the <a href="/fileadmin/daten/Dokumente/Kontrollstellen_BAVG_01.01.2022.pdf">control posts</a> for non-animal food in the area of competence of the Federal Office of Consumer Health (including addresses, telephone and fax numbers, e-mail addresses and opening hours).</p>
                            <p>In addition, here you will find the link to the <a href="https://ec.europa.eu/food/animals/veterinary-border-control/contact-details-bcps-veterinary_en">European Commission's homepage</a> on the approved border control posts for live animals and food and goods of animal origin in the EU Member States, EEA Member States and the states with special agreements and the United Kingdom.</p>
                            <p>Furthermore, you can find here the link to the <a href="https://ec.europa.eu/food/horizontal-topics/official-controls-and-enforcement/imported-products/contact-details-bcps-and-cps_en">homepage of the European Commission</a> on the border control posts and control posts approved in the EU Member States for certain food of non-animal origin.</p>

                            <h4> Common Health Entry Document (CHED)</h4>
                            <p>The Common Health Entry Document<abbr lang="de-DE" title="Gemeinsamen Gesundheitseingangsdokuments"> (CHED</abbr>) is to be used to declare consignments of live animals, foodstuffs and goods of animal and non-animal origin for import control. As the declaration has to be made electronically using the TRACES system, there are no templates that can be filled in.</p>
                            <p>Here you will find the models of the CJED as well as the explanations necessary for the completion.</p>
                            <ul>
                                <li><a href="/fileadmin/daten/Dokumente/GGED-A_aus_VO_2019_1715.pdf">Common health entry document for live animals (CED-A)</a></li>
                                <li><a href="/fileadmin/daten/Dokumente/GGED-P_aus_VO_2019_1715.pdf">Common Health Entry Document for goods of animal origin and plant products subject to veterinary checks such as hay and straw (GGED-P)</a></li>
                                <li><a href="/fileadmin/daten/Dokumente/GGED-D_aus_VO_2019_1715.pdf">Common Health Entry Document for food of non-animal origin (GGED-D)</a></li>
                            </ul>
                            <p>Here you can find a link to the homepage of the European Commission on this topic <span class="text-lang" lang="en-GB" dir="ltr"><a href="https://ec.europa.eu/food/animals/traces_en" title="Europäische Kommission TRACES">TRACES</a></span>(Attention: Information is only available in English)</p>
                            <p>Legal basis:</p>
                            <ul>
                                <li><a href="https://eur-lex.europa.eu/legal-content/DE/ALL/?uri=CELEX:32017R0625&amp;qid=1587556361606" title="VO (EU) 2017/625">VO (EU) 2017/625</a></li>
                                <li><a href="https://eur-lex.europa.eu/eli/reg_impl/2019/1715/oj" title="VO (EU) 2019/1715">VO (EU) 2019/1715</a></li>
                                <li><a href="https://eur-lex.europa.eu/legal-content/DE/TXT/?uri=CELEX%3A32019R1715R%2801%29" title="Korrigendum zur VO 2019/1715">Corrigendum to VO 2019/1715</a></li>
                            </ul>

                            <h4> Operating lists</h4>
                            <p><strong>Lists of harmonized establishments in third countries</strong></p>
                            <p>In most areas of import of consignments subject to veterinary control (e.g. live animals and products of animal origin, including foodstuffs but also semen and embryos), it is stipulated by law that their import may only take place from approved establishments in third countries. Due to the harmonization of import conditions in the European Union, these lists are uniformly regulated and valid for the entire European Union. The establishments are published in the TRACES platform.</p>
                            <p>This is the link to the homepage of the European Commission to the harmonized lists of approved establishments in third countries:</p>
                            <p><a href="https://food.ec.europa.eu/safety/biological-safety/food-hygiene/non-eu-countries-authorised-establishments_en" title="Europäische Kommission - Lebensmittelsicherheit " class="link link-external">Harmonized lists of establishments (import)</a></p>
                            <p><strong>Lists of establishments of destination in the EU</strong></p>
                            <p>Some consignments may only be moved on import to establishments in the EU approved for this purpose (e.g. game in blankets, ornamental birds or in the animal by-products sector). Lists of these establishments are published in Austria on the homepage of the Consumer Health Information System (VIS) and EU-wide in the platform TRACES. Below you will find links to this area as well as to the homepage of the Commission:</p>
                            <p><a href="https://vis.statistik.at/vis/veroeffentlichungen/zugelassene-betriebe" class="link link-external">Approved establishments in Austria</a> <a href="https://food.ec.europa.eu/animals/live-animal-movements/approved-establishments-veterinary_en" class="link link-external">Approved establishments on the Commission homepage</a></p>

                            <h4>Re-importation of consignments subject to border veterinary checks</h4>
                            <p>The conditions for the re-importation of a consignment subject to border veterinary controls originating in the <abbr lang="de-DE" title="Europäische Union ">EU</abbr>, which has been refused entry into a third country outside the <abbr lang="de-DE" title="Europäische Union ">EU</abbr>, are laid down in <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union "> (EU</abbr>) 2019/2074. These conditions were transposed into national law by the Veterinary Import Regulation, as amended.</p>
                            <p>Implementing Decision <abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2019/2098 lays down additional animal health requirements for consignments of food of animal origin originating in the Union and returning to the Union after having been refused entry by a third country.</p>

                            <h4> Re-importation of goods and articles</h4>
                            <p>These consignments must be accompanied by the following documents:</p>
                            <ol>
                                <li>the original certificate of the Member State of origin or a copy thereof certified by the authority of the rejecting State; and</li>
                                <li>either <p>(a) in the case of original sealed containers (seal issued by the competent authority of an EU Member State), a certificate from the carrier stating that the contents have not been handled or unloaded, or</p>
                                    <p>(b) in the case of non-original sealed containers, a certificate from the rejecting authority stating:</p>
                                    <p>- the reasons for the rejection,</p>
                                    <p>- confirmation that the storage and transport conditions have been complied with, and</p>
                                    <p>- confirmation that the products have not undergone any handling.</p>
                                </li>
                                <li>A written declaration from the authority responsible for issuing the certificate of origin confirming that the consignment has been accepted must be presented to the border control post at which the consignment is presented for re-importation (in Austria by the official veterinarian of the locally competent district authority).</li>
                            </ol>
                            <p>The consignment may only be transported from the border control post to the holding of origin. This must be carried out with sealed means of transport, which are officially marked and officially sealed. The official veterinarians responsible for the place of destination must be informed of the arrival of the consignment by means of IMSOC.</p>
                            <p>The consignments concerned must be subjected to a documentary check, identity check and, in the event of suspected infringement of veterinary regulations and doubts as to identity, a physical check. These controls must not give rise to any objections.</p>


                            <h4> Re-importation of animal by-products and derived products</h4>
                            <p>The Austrian border control posts are only approved for packaged animal by-products and derived products; the provisions set out in Section 3 of Chapter VI of Annex XIV to <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union"> (EU</abbr>) 142/2011 apply here.</p>

                            <h4>Re-importation of live animals</h4>
                            <p>The reimportation of animals is only permitted under the conditions of harmonised importation or with a veterinary authorisation. The authorisation shall specify the conditions required by the veterinary authorities.</p>
                            <p>For live animals, the provisions for importation also apply to re-importation. There are exceptions for horses that are re-imported into the <abbr lang="de-DE" title="Europäische Union ">EU</abbr> within 30 days and for pets.</p>
                            <p>Please note that there may also be import restrictions and import bans due to other EU and national regulations such as financial regulations (e.g. customs) or due to species protection (CITES).</p>


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

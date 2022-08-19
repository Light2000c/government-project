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
                                        <li class="active"><a href="{{ route('organic') }}">Organic</a></li>
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
                            <h4>Import of organic products into Austria</h4>

                            <h4>General provisions</h4>
                            <p>In order to ensure quality, traceability, compliance and adaptation to technical developments, the <abbr lang="de-DE" title="Europäische Union">EU</abbr> has issued a number of regulations that the importer must comply with upon importation.</p>


                            <h4>Legal requirements</h4>
                            <p> <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2018/848, <abbr lang="de-DE" title="Verordnung">Regulation</abbr> (<abbr lang="de-DE" title="Europäische Gemeinschaft">EC</abbr>) No 889/2008, <abbr lang="de-DE" title="Verordnung">Regulation</abbr> (EU) 2021/2305, <abbr lang="de-DE" title="Verordnung">Regulation</abbr> (<abbr lang="de-DE" title="Europäische Union">EU</abbr>) 2021/2306 and <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(</abbr><abbr lang="de-DE" title="Europäische Union">EU</abbr>) 2021/2307 apply to the import of organic products from third countries.</p>
                            <p>The import can be carried out according to one of the following procedures:</p>


                            <h4>1. equivalently recognized third countries</h4>
                            <p>Third countries concerned are included in the list of equivalently recognized third countries and control bodies maintained by the <abbr lang="de-DE" title="Europäische Union">EU Commission</abbr>(in accordance with Art. 48 of <abbr lang="de-DE" title="Europäische Union">EU Regulation</abbr> 2018/848 in conjunction with Implementing Regulation 2021/2325). The list of recognized third countries contained in Regulation 2021/2325 is based on the list published in Annex III to Commission Regulation<abbr lang="de-DE" title="Europäische Gemeinschaft">(EC</abbr>) No 1235/2008. Currently, Argentina, Australia, Canada, Costa Rica, India, Israel, Japan, Tunisia, Korea, New Zealand and the United States of America are listed with the product categories and the control authorities and bodies approved in the countries.</p>


                            <h4>2. equivalently recognized control authorities and control bodies</h4>
                            <p>The list of control authorities and control bodies recognized as equivalent is given in Annex II of the Implementing Regulation 2021/2325 (control authority or control body recognized as equivalent according to Article 57). The listed control authorities and control bodies are approved and supervised by the <abbr lang="de-DE" title="Europäische Union">EU Commission</abbr>.</p>


                            <h4>3. countries with specific agreements </h4>
                            <p>The organic import from third countries with which the <abbr lang="de-DE" title="Europäische Union">EU</abbr> has a trade agreement runs according to the respective agreements of the agreements. Currently, this concerns Chile, the United Kingdom and Switzerland (equivalence under a trade agreement according to Article 47). The <a href="https://ec.europa.eu/info/food-farming-fisheries/farming/organic-farming/trade/agreements-trade-organic-products_en">list of these countries</a> is kept up to date by the <abbr lang="de-DE" title="Europäische Union">EU Commission</abbr>.</p>


                            <h4>4. control authorities and bodies with so-called &quot;compliant&quot; standards according to Article 46</h4>
                            <p>This list has yet to be drawn up by the Commission.</p>


                            <h4>Import conditions</h4>
                            <p>Each consignment of organic products must be accompanied by a certificate of inspection<abbr lang="de-DE" title="Certificate of inspection">(COI</abbr>). The certificate of inspection shall be issued by the competent control authority or control body in the third country before the consignment leaves the third country of export or origin. It is issued by the competent control authority or control body on the basis of the model and instructions in the Annex to <abbr lang="de-DE" title="Verordnung">Regulation</abbr> (<abbr lang="de-DE" title="Europäische Union">EU</abbr>) 2021/2306 using the electronic Trade Control and Expert System (<abbr lang="de-DE" title="Trade Control and Expert Systems">TRACES</abbr>) and bears a qualified electronic seal (digitally signed). Until June 30, 2022, the paper form of the certificate of inspection will still be accepted. The original paper form of the certificate of inspection must be presented to the border inspection post during the inspection.</p>


                            <h4>Entrepreneur</h4>
                            <p>Every operator in Austria who wants to import organic products must be validated in TRACES as an organic importer or first consignee. In order to be validated in TRACES, the company must have an ongoing control relationship with an approved control body.</p>



                            <h4> New procedures in the control process</h4>
                            <p>The import procedure has undergone a comprehensive change. All organic and in-conversion products are also subject to the General Control Regulation<abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2017/625 from 1 January 2022.</p>
                            <p>Goods to be controlled under phyto-sanitary or veterinary aspects (so-called SPS goods) at import are controlled at border inspection posts according to Article 47 of <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2017/625. This control includes the documentary and identity checks as well as the physical checks of the goods. The Common Health Entry Document<abbr lang="de-DE" title="Gemeinsame Gesundheitseingangsdokument">(CED</abbr>) is linked to the COI, so that a coordinated decision of the different control bodies on the import of the goods takes place.</p>
                            <p>The control in Austria is carried out by the control bodies of the Federal Office of Consumer Health at the border control point Vienna Airport.</p>
                            <p>The control must be carried out before the goods are put into circulation (i.e. before they are released for free circulation). A consignment that has already been cleared through customs cannot be subsequently subjected to an inspection.</p>



                            <h4>The official controls shall be carried out at the following places</h4>
                            <p>With the entry into force of <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2018/848, controls shall be carried out at the following points:</p>
                            <p>1. in the case of live animals and animal products, official controls shall be carried out at the border inspection post of first arrival in the Union approved for the goods concerned. These are consignments according to Article 47 (1) a and b of <abbr lang="de-DE" title="Verordnung">Regulation</abbr> (<abbr lang="de-DE" title="Europäische Union">EU</abbr>) 2017/625.</p>
                            <p>(2) In the case of goods that are subject to increased controls on import due to <abbr lang="de-DE" title="Europäische Union">EU regulations</abbr>, the official controls shall be carried out at the border inspection posts of first arrival in the Union approved for the goods in question. These are consignments according to Article 47 (1) d, e and f of <abbr lang="de-DE" title="Verordnung">Regulation</abbr> (<abbr lang="de-DE" title="Europäische Union">EU</abbr>) 2017/625.</p>
                            <p>These goods are covered by <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2019/1793, BdK 2011/884/EU, <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2020/1158, <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(</abbr>EU) 2021/1533 and <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) No. 284/2011. For these shipments, the importer must apply for a CHED-D. In this context, the certificate of inspection must also be submitted.</p>
                            <p>If, with the consent of the competent authorities of the border inspection post, part of the official control (identity and physical check) for these goods can also be carried out at an inspection post determined by the Member States, the official controls must be carried out in the Member State where the consignment is released for free circulation in the Union.</p>
                            <p>3. for all other goods presenting little or no specific risk to human and animal health, official controls shall be carried out at places of release for free circulation in the Member State where the consignment is released for free circulation in the Union -<abbr lang="de-DE" title="Verordnung">(Regulation (</abbr><abbr lang="de-DE" title="Europäische Union">EU</abbr>) 2021/2305).</p>


                            <h4>NOTE</h4>
                            <p>Consignments according to the guideline of the European Commission "DG AGRI working documents on additional official controls on products originating from certain third countries" are to be controlled as follows:</p>
                            <ul>
                                <li>If the consignment falls under the category of goods to be checked at border inspection posts (if it requires a CHED) then the bio checks are to be carried out at border inspection posts and checkpoints.</li>
                                <li>All other types of consignments are to be checked at places of release for free circulation.</li>
                            </ul>


                            <h4>Decision about the shipment </h4>
                            <p>After carrying out the official control at import, the competent authority shall take a decision on each consignment. This decision shall be entered in box 30 of the certificate of inspection and shall contain one of the following indications:</p>
                            <p>(a) The consignment may be released for free circulation as a consignment of organic products.</p>
                            <p>(b) The consignment may be released for free circulation as a consignment of in-conversion products.</p>
                            <p>(c) The consignment may be released for free circulation as a consignment of non-organic products.</p>
                            <p>(d) The consignment may not be released for free circulation.</p>
                            <p>(e) A portion of the consignment may be released for free circulation with a partial certificate of inspection.</p>
                            <p>The inspection includes a systematic documentary check, a random identity check and, if necessary, a physical check, which must be carried out in accordance with <abbr lang="de-DE" title="Europäische Union">EU</abbr> requirements or on the basis of the annual sampling plan. Each year, the <abbr lang="de-DE" title="Europäische Union">EU</abbr> orders certain goods from certain countries for enhanced inspections to be tested for pesticides prior to release. Last year, goods from these countries were increasingly found to be in violation of organic regulations. These shipments are not released until the laboratory results are satisfactory.</p>


                            <h4>Shipment registration</h4>
                            <p>The registration is made by the importer or appointed forwarding agent.</p>
                            <p><strong>Procedure until June 30, 2022</strong></p>
                            <p>1. control certificates, which are digitally signed in TRACES by the control body or control authority, are transmitted by mail with the accompanying documents such as invoice, packing list, T1, CMR to the BAVG department import control (import@bavg.gv.at). The transmission of the documents serves on the one hand to check whether these goods might not be covered by other EU provisions, and on the other hand it serves for the risk-based selection of the samples. It has to be confirmed by mail to the border inspection post that the goods are located in Austria and the location, if necessary, for sampling has to be announced.</p>
                            <p>If the shipment has been selected for sampling, the importer will be informed.</p>


                            <h4>Dispatch of the shipment</h4>
                            <p>Inspection certificates with a "qualified electronic seal" (i.e. "digitally signed by the issuing body") are digitally processed by the border inspection post.</p>
                            <p>In this case, the declarant will be informed that the document can be retrieved in TRACES. For applicants without access to TRACES, a pdf will be sent via e-mail.</p>
                            <p>2) Inspection certificates without "qualified electronic seal" (not digitally signed) must be presented in original to the border inspection post and they will be physically stamped and signed. The entrepreneur must collect the certificate of inspection from the border inspection post for presentation to the customs office. This option is only available until June 30, 2022.</p>


                            <h4>Steps of the importer or first recipient after the inspection</h4>
                            <p>When accepting an organic product imported from a third country, the first consignee shall check the closure of the packaging or container and the conformity of the information on the certificate with the consignment.</p>
                            <p>The first consignee shall confirm the proper acceptance of the consignment in item 31 of the certificate of inspection<abbr lang="de-DE" title="Certificate of inspection">(COI</abbr>) in TRACES.</p>
                            <p>Subsequently, the importer must keep the certificate at the disposal of the control authority or control body for at least two years.</p>


                            <h4>Fees</h4>
                            <p>For the import control, the importers have to pay fees according to the <a href="/fileadmin/daten/Dokumente/BAVG_Gebu%CC%88hrentarif_.pdf">fee tariff of the Federal Office of Consumer Health </a>(BAVG).</p>

                            <h4>Sampling</h4>
                            <p>Sampling for the examination of the goods is carried out by <abbr lang="de-DE" title="Bundesamt für Ernährungssicherheit">BAES</abbr> control bodies if this does not take place at the border inspection post. The examination takes place in the accredited laboratory for pesticides of <abbr lang="de-DE" title="Agentur für Gesundheit und Ernährungssicherheit GmbH ">AGES</abbr> in Innsbruck. The sampling and the examination of the goods are associated with costs according to the <abbr lang="de-DE" title="Agentur für Gesundheit und Ernährungssicherheit GmbH ">AGES tariff</abbr>, which are also to be borne by the importer.</p>


                            <h4>Contact</h4>
                            <p>For further questions, please contact <a href="javascript:linkTo_UnCryptMailto(%27kygjrm8zgmYzyte%2Cet%2Cyr%27);">bio@bavg.gv.at</a> or <a href="javascript:linkTo_UnCryptMailto(%27kygjrm8gknmprYzyte%2Cet%2Cyr%27);">import@bavg.gv.at</a>directly.</p>



                            <h4>Shipment definition according to Art. 2 of Regulation (EU) 2021/2306</h4>
                            <p>'consignment' means a consignment as defined in point 37 of Article 3 of Regulation<abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2017/625 of products to be placed on the market in the Union as organic products or in-conversion products; however, in the case of organic products and in-conversion products exempted from official controls at border inspection posts pursuant to Delegated Regulation<abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/2305, the term means a quantity of products under one or more Combined Nomenclature codes covered by a single certificate of inspection and imported from the same third country by the same means of transport.</p>


                            <h4>Guidance for the registration of entrepreneurs in TRACES</h4>
                            <ul>
                                <li>All importers/consignees first need an <abbr lang="de-DE" title="Europäische Union">EU login to</abbr> register in TRACES. To do this, create a new account using the following link: <a href="https://webgate.ec.europa.eu/cas/login">https://webgate.ec.europa.eu/cas/login</a></li>
                                <li>After successfully creating an EU login, click on this link: <a href="https://webgate.ec.europa.eu/tracesnt/login">https://webgate.ec.europa.eu/tracesnt/login</a> Here you will first be automatically redirected back to the EU login. There you log in with your EU login, whereupon the registration mask for TRACES NT opens. There you first have to choose a form of organization under which you register. There are three options to choose from: Operator (this applies to all private sector companies, such as importers or first consignees), Organic Control Body (this applies to all BIO control bodies) or Authority (this applies to all regulatory bodies, such as customs or the competent authority of a country).</li>
                            </ul>
                            <ul>
                                <li>In the following window you enter all details about your company. Required fields are marked with a red asterisk.</li>
                                <li>In the Operator Identifier field, enter your EORI number.</li>
                                <li>Under Operator Activities, enter "Organic Importer" as both the importer and the first consignee. </li>
                                <li>When all fields are completed, click "create" at the top.</li>
                                <li>However, before your company can be listed on a certificate of inspection in TRACES, it must first be verified by your competent authority. As the authorities currently do not receive automatic notification of new companies, please inform them by email (bio@bavg.gv.at) with a confirmation from your control body that you are an importer/recipient.</li>
                                <li>Further information can also be found at the TRACES help desk: <a href="https://webgate.ec.europa.eu/tracesnt/help/general/content/a_home/home.htm">https://webgate.ec.europa.eu/tracesnt/help/general/content/a_home/home.htm</a>.</li>
                            </ul>



                            <h4>Important Internet addresses</h4>
                            <ul>
                                <li>Under the following link you will find the Austrian BIO inspection bodies: <a href="https://www.verbrauchergesundheit.gv.at/lebensmittel/bio/bio_produkte.html">https: </a>//www.verbrauchergesundheit.gv.at/lebensmittel/bio/bio_produkte.html </li>
                                <li>Certification status of entrepreneurs. Under the following link you can check the certification status of entrepreneurs: <a href="https://www.easy-cert.com/htm/home.htm">https://www.easy-cert.com/htm/home.htm</a></li>
                                <li>Federal Ministry for Health, Social Affairs, Care and Consumer Protection: <a href="https://www.verbrauchergesundheit.gv.at/lebensmittel/bio/bio_produkte.html">https://www.verbrauchergesundheit.gv.at/lebensmittel/bio/bio_produkte.html</a></li>
                                <li>European Commission: <a href="https://ec.europa.eu/info/food-farming-fisheries/farming/organic-farming_de">https://ec.europa.eu/info/food-farming-fisheries/farming/organic-farming_de</a></li>
                            </ul>



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

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
                                        <li>
                                            <a class="dropdown-toggle" >Issuance of export permit</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item"><a href="{{ route('export-generalInformation1') }}">General information</a></li>
                                                <li class="dropdown-item"><a href="{{ route('export-thirdcountries') }}">Third countries</a></li>
                                                <li class="dropdown-item"><a href="{{ route('application-for-export-permits') }}">Application for export permits</a></li>
                                                <li class="dropdown-item"><a href="{{ route('further-information') }}">Further Information</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle" href="">Issuance of official certificates</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item"><a href="{{ route('export-generalInformation2') }}">General information</a></li>
                                                <li class="dropdown-item"><a href="{{ route('application') }}">Application</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('export-faq') }}">Faq</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-8">
                        <div class="services-details-content">
                            <h4>General Information</h4>

                            <h4>Official certificates </h4>
                            <p>As of 1 January 2022, the <abbr lang="de-DE" title="Bundesamt für Verbraucher:innengesundheit">BAVG</abbr> will issue official certificates or official attestations for animals, goods and products in accordance with the applicable veterinary and food law provisions on free tradability and for the purpose of exporting such consignments of animals and goods to third countries at the request of the person authorised to dispose of them, if such provision is made for the respective third country. The basis for the issuing of these certificates or attestations shall be marketability opinions issued by the Agency pursuant to Section 65 of the <abbr lang="de-DE" title="Lebensmittelsicherheits- und Verbraucherschutzgesetz">LMSVG</abbr>, by an inspection body of the Länder pursuant to Section 72 of the <abbr lang="de-DE" title="Lebensmittelsicherheits- und Verbraucherschutzgesetz">LMSVG</abbr> or by a person authorised to do so pursuant to Section 73 of the <abbr lang="de-DE" title="Lebensmittelsicherheits- und Verbraucherschutzgesetz">LMSVG</abbr> and shall not replace the necessary certificates for individual consignments of goods with regard to the animal health or hygiene status issued by certifying officers when handling the individual consignments on site.</p>

                            <h4>Procedure for official certificates</h4>
                            <p>The procedure for official certificates is as follows:</p><ol> 	<li>Application via <a href="/en/export/issuance-of-official-certificates/application">www.bavg.gv.at</a></li> 	<li>Processing of the application by the BAVG</li> 	<li>Certificate (incl. certified signature) will be sent by mail (digitally in advance if desired) together with the fee estimate.</li> </ol><p>In case of urgency or special delivery requests, please indicate this in the application form (field: "Remarks") or contact us (export@bavg.gv.at).</p>

                            <h4>Certifications</h4>
                            <p>The BAVG will also perform notarizations as of 1/1/2022. In particular, signatures can be certified on the following documents:</p><ul> 	<li>Documents issued by the <abbr lang="de-DE" title="Bundesamt für Verbraucher:innengesundheit">BAVG</abbr><span class="text-lang" dir="ltr" lang="en-GB">(certificates</span>,...)</li> 	<li>Documents issued by experts for foodstuffs, drinking water, commodities and cosmetic products</li> </ul><ol> 	<li>the Austrian Agency for Food Safety GmbH<abbr lang="de-DE" title="Agentur für Gesundheit und Ernährungssicherheit ">(AGES</abbr>),</li> 	<li>the food inspection institutes of the provinces of Carinthia and Vorarlberg,</li> 	<li>with an authorization according to § 73 <abbr lang="de-DE" title="Lebensmittelsicherheits- und Verbraucherschutzgesetz">LMSVG</abbr></li> </ol><ul> 	<li>documents issued by official veterinarians</li> 	<li>documents issued by the provincial governments in indirect federal administration concerning the food and veterinary sector</li> 	<li>Documents issued by the <abbr lang="de-DE" title="Bundesministerium für Soziales, Gesundheit, Pflege und Konsumentenschutz">BMSGPK</abbr>, Department of Consumer Health and Veterinary Affairs</li> </ul>

                            <h4>The BAVG does NOT certify signatures on:</h4>
                            <ul><li>Internal company documents</li> 	<li>documents issued by veterinarians other than official veterinarians</li> 	<li>documents issued by the Austrian Federal Economic Chamber<abbr lang="de-DE" title="Wirtschaftskammer Österreich ">(WKO</abbr>) or similar associations or professional organisations</li> 	<li>Documents in connection with feed (expert opinion of <abbr lang="de-DE" title="Agentur für Gesundheit und Ernährungssicherheit GmbH">AGES</abbr> or similar) (responsibility of the <abbr lang="de-DE" title="Bundesministerium für Landwirtschaft, Regionen und Tourismus">BMLRT</abbr>)</li> </ul>
                            <h4>From when is an export possible?</h4>
                            <p>Export for third countries requiring an export authorisation is usually possible if the establishment has been approved and listed by the third country or by the competent authority. Often the third country provides the lists of approved establishments on the website of the competent authority. The mere submission of an application or documents or the successful completion of an audit is not sufficient. The dispatch of goods may only take place after receipt of the corresponding approval.</p>

                            <h4>authentication procedures</h4>
                            <p>The procedure for certifications is as follows:</p><ol> 	<li>Application via <a href="/en/export/issuance-of-official-certificates/application">www.bavg.gv.at</a> and transmission of the document to be certified by post.</li> 	<li>Processing of the application by the BAVG</li> 	<li>The certified document is returned by post (digitally in advance, if desired) together with the fee estimate.</li> </ol><p>In case of urgency or special delivery requests, please indicate this in the application form (field: "Remarks") or contact us (export@bavg.gv.at).</p>

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

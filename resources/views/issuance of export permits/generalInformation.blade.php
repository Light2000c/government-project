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
                                            <a class="dropdown-toggle">Issuance of export permit</a>
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

                            <h4>Requirements</h4>
                            <p>The basic prerequisite for the export of animal products to third countries is, in addition to compliance with European regulations (in accordance with Article 12 of <abbr lang="de-DE" title="Verordnung ">Regulation</abbr> (EC) No 178/2002), compliance with the veterinary import regulations of the destination country. In addition to export certificates, the following <a href="/en/export/issuance-of-export-permits/third-countries">third countries</a> in particular also require an export authorisation for certain animal products. This approval process, including the maintenance of the authorisation, is in many cases associated with time and financial expenditure. The aim of the approval process is to register establishments exporting to third countries that require an export authorisation for certain product groups and at the same time to have the competent supervisory authority check and confirm that the requirements of the third country are met and that the production establishment is suitable for export to the third country.</p>

                            <h4>Responsibility</h4>
                            <p>The exporting company is responsible for compliance with the applicable requirements of the country of destination.</p>

                            <h4>Application for export licence</h4>
                            <p>Establishments requiring an export authorisation shall submit an application in the VIS database. When submitting the application, a brief description of the products to be exported must be disclosed (e.g. baby milk, UHT milk, frozen fresh meat, etc.). After review of the initial application and submission of all required documents, an appointment for an on-site inspection will be made, if necessary.</p>

                            <h4>On-the-spot checks on production</h4>
                            <p><strong>Verification of the admission requirements</strong></p>
<p>The review of the admission requirements is carried out by the competent Austrian authority or, depending on the requirements of the third country, an admission audit is carried out together with representatives of the third country.</p>
<p><strong>Review of the maintenance of approval</strong></p>
<p>At least once a year an on-site inspection is carried out by the competent Austrian authorities. Depending on the requirements of the respective third country, the frequency may be higher or the inspections may also be carried out by representatives of the third country together with representatives of the competent Austrian authority.</p>
                            <h4>Re-importation of consignments subject to border veterinary checks</h4>
                            <p>The conditions for the re-importation of a consignment subject to border veterinary controls originating in the <abbr lang="de-DE" title="Europäische Union ">EU</abbr>, which has been refused entry into a third country outside the <abbr lang="de-DE" title="Europäische Union ">EU</abbr>, are laid down in <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union "> (EU</abbr>) 2019/2074. These conditions were transposed into national law by the Veterinary Import Regulation, as amended.</p>
                            <p>Implementing Decision <abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2019/2098 lays down additional animal health requirements for consignments of food of animal origin originating in the Union and returning to the Union after having been refused entry by a third country.</p>

                            <h4>From when is an export possible?</h4>
                            <p>Export for third countries requiring an export authorisation is usually possible if the establishment has been approved and listed by the third country or by the competent authority. Often the third country provides the lists of approved establishments on the website of the competent authority. The mere submission of an application or documents or the successful completion of an audit is not sufficient. The dispatch of goods may only take place after receipt of the corresponding approval.</p>


                            <h4>Notification of changes</h4>
                            <p>The third countries require that the data transmitted in the context of the initial authorisation are always kept up to date. Against this background, all significant operational changes must be reported without delay.</p>
<p>Notifications of changes to third countries become necessary in particular when</p><ol> 	<li>operational data changes (e.g. address, name, activities, persons responsible for operations)</li> 	<li>serious reconstruction work takes place or changes are made to the operational process flow, or</li> 	<li>establishments no longer meet the requirements for export to the third country.</li> </ol>


<h4>revocation of export authorization</h4>
<p>The export authorisation may be cancelled by the competent Austrian authority in the event of non-compliance with the requirements (incl. possible failure to remedy identified defects in due time). The third country may refuse the import - irrespective of the granting or maintenance of the domestic export authorisation.</p>


<h4>Export to countries not mentioned</h4>
<p>If you cannot find the third country you are looking for either under <a href="/en/export/issuance-of-export-permits/third-countries">Third Countries</a> or on the <a href="https://www.verbrauchergesundheit.gv.at/handel_export/Handel.html">Consumer Health Communication Platform</a>, please contact the<a href="https://www.wko.at/service/aussenwirtschaft/aussenwirtschaftscenter.html" title="WKO Außenwirtschaftscenter "> foreign trade offices of the Austrian Federal Economic Chamber</a> or clarify the import conditions via the importer or the local customer.</p>

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

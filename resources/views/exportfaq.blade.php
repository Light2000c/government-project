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
                            <h4> FAQs on the subject of export authorizations</h4>


                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            For which countries is an export license required?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>You can find the countries for which you require an export license on the BAVG page under <a href="/en/export/issuance-of-export-permits/third-countries">Third Countries</a> or on the <a href="https://www.verbrauchergesundheit.gv.at/handel_export/Handel.html">Consumer Health Communication Platform</a>. If the third country you are looking for is not listed there, please contact the<a href="https://www.wko.at/service/aussenwirtschaft/aussenwirtschaftscenter.html">foreign trade offices of the Austrian Federal Economic Chamber</a> or clarify the import conditions via the importer or the local customer.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            What are the requirements for applying for an export license?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Appropriate knowledge of the requirements for export to the desired third country, including knowledge of the specific export conditions for the products <abbr lang="de-DE" title="beziehungsweise">or</abbr> product groups applied for, is a prerequisite for the application. You can find more information about export requirements of third countries on the<a href="https://www.verbrauchergesundheit.gv.at/handel_export/Handel.html">communication platform consumer health</a> or please inform yourself at the<a href="https://www.wko.at/service/aussenwirtschaft/aussenwirtschaftscenter.html">foreign trade offices of the Austrian Federal Economic Chamber</a> or clarify the import conditions via the importer or the customer on site.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            How to apply for export authorization?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>The application for an export authorization is submitted online via the<abbr lang="de-DE" title="Verbrauchergesundheitsinformationssystem">VIS</abbr>(Consumer Health Information System).</p>
                                            <p>See: <a href="/en/export/issuance-of-export-permits/application-for-export-permits">https://www.bavg.gv.at/ausfuhr-export/erteilung-von-ausfuhrberechtigung/antragsstellung</a> as well as the <a href="https://vis.statistik.at/fileadmin/ovis/media/documents/AFB_Antragsverfahren_via_VIS.pdf">user manual.</a></p>
                                            <p>To apply in the VIS, you need access data, which can be requested on the<a href="https://vis.statistik.at/vis/formulare/vis-registrierung/vis-registrierung-fuer-lebensmittelunternehmer">VIS website</a>.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            From when is it possible to export to third countries that require an export license?
                                    </h2>
                                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Export to third countries that require an export license is usually possible if the establishment has been approved and listed by the third country and/or by the competent authority. Often the third country provides the lists of approved establishments on the website of the competent authority. Only the application <abbr lang="de-DE" title="beziehungsweise">or</abbr> transmission of the documents or successful completion of an audit is not sufficient. Goods may only be shipped after receipt of the corresponding approval.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                            Can the third country requirements to be met change?
                                    </h2>
                                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>We would like to point out that regulations and framework conditions of third countries can also change at short notice. If an export license is required for the export of goods</p>
                                            <p>of third countries for the export of goods according to § 51 Food Safety and Consumer Protection Act<abbr lang="de-DE" title="Lebensmittelsicherheits- und Verbraucherschutzgesetz ">(LMSVG</abbr>) is required, a new contact or application can be made.</p>
                                            <p>Current information can be found on the <a href="https://www.verbrauchergesundheit.gv.at/handel_export/Handel.html" title="Verbrauchergesundheit">communication platform Consumer Health</a> or please contact the foreign trade offices of the <a href="https://www.wko.at/service/aussenwirtschaft/aussenwirtschaftscenter.html" title="WKO">Austrian Federal Economic Chamber.</a></p>
                                        </div>
                                    </div>
                                </div>

                                <h4>FAQs on the subject of official certificates and attestations</h4>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                            How much does a certificate cost?
                                    </h2>
                                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>The flat rate for a certificate is fixed at € 104.20 (attestation) + € 26.10 (certification) + an additional € 2.20 per product. Please note that each official certificate of the <abbr lang="de-DE" title="Bundesamt für Verbrauchergesundheit">BAVG</abbr> is also automatically certified and includes at least one product.</p>
                                            <p>See: <a href="/fileadmin/daten/Dokumente/BAVG_Gebu%CC%88hrentarif_.pdf">BAVG_fee tariff</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                            How much does a notarization cost?
                                    </h2>
                                    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>A certification will be charged with € 26,10. See: <a href="/fileadmin/daten/Dokumente/BAVG_Gebu%CC%88hrentarif_.pdf">BAVG_fee tariff</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                            Is the certification of each product charged separately?
                                    </h2>
                                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>There is a charge of €2.20 per product.</p>
                                            <p>See: <a href="/fileadmin/daten/Dokumente/BAVG_Gebu%CC%88hrentarif_.pdf">BAVG_fee tariff</a> </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                            What is the maximum number of products that can be certified on one certificate?
                                    </h2>
                                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>There is a maximum limit of 25 products per certificate. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                            To whom is the fee schedule sent?
                                    </h2>
                                    <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>The <abbr lang="de-DE" title="Bundesamt für Verbrauchergesundheit">BAVG</abbr> will send the fee notice by e-mail to the company e-mail address that has been provided to us.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse12">
                                            How to assign the fee prescription to the certificate?
                                    </h2>
                                    <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Each certificate has a business number, which is also shown identically in the fee schedule.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                            How does the application process work?
                                    </h2>
                                    <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>An application must be submitted via the <abbr lang="de-DE" title="Bundesamt für Verbrauchergesundheit">BAVG</abbr> website.</p>
                                            <p>See: <a href="/en/export/issuance-of-official-certificates/application">Official certificates - Application - BAVG.</a></p>
                                            <p>A selection should be made there as to whether a certificate from the <abbr lang="de-DE" title="Bundesamt für Verbrauchergesundheit">BAVG</abbr> is desired, or whether a certification by the <abbr lang="de-DE" title="Bundesamt für Verbrauchergesundheit">BAVG</abbr> should be made on the original document.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                            What are the formal criteria to be met in order to obtain an official certificate?
                                    </h2>
                                    <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>1. timeliness of the expert opinion (not more than 1 year old on the date of application),</p>
                                            <p>2. issuance of the appraisal by an authorized person and his/her signature,</p>
                                            <p>3. field of expertise of the appraiser is covered for the product</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                            What form of signature on the expert opinion is accepted?
                                    </h2>
                                    <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Opinions may be handwritten, signed by verifiable e-signature, or signed with an official signature.</p>
                                            <p>See: <a href="https://www.bmdw.gv.at/Themen/Digitalisierung/Verwaltung/was-bedeutet-digitale-Verwaltung/E-Government-Bausteine-und-Services/Elektronische-Signaturen.html">Electronic signatures</a> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                            Where can I find contact details of institutions or persons who can issue roadworthiness certificates?
                                    </h2>
                                    <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Agency according to § 65 LMSVG</p>
                                            <ul>
                                                <li>investigative bodies of the Länder pursuant to § 72 LMSVG</li>
                                                <li>persons authorized to do so pursuant to § 73 LMSVG</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                            How long does it take to issue an official certificate?
                                    </h2>
                                    <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Processing will take approximately one week, provided the application is complete and all necessary documents have been submitted correctly. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                            To whom is the certificate transmitted?
                                    </h2>
                                    <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>The certificate will be sent to the contact person who submits the request on our website <abbr lang="de-DE" title="beziehungsweise">or</abbr> to another shipping address specified separately in the request.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                            Can applications be cancelled?
                                    </h2>
                                    <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>If necessary, applications can be cancelled if they have not yet been processed and charged. Credit notes for incorrectly applied for official certificates and already issued certificates, can unfortunately not be issued.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                            What happens if my expert opinion is not accepted by BAVG?
                                    </h2>
                                    <div id="collapse21" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>You will be notified by <abbr lang="de-DE" title="Bundesamt für Verbrauchergesundheit">BAVG</abbr> if the submitted documents are not complete or verifiable, or if other criteria to be met are missing. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                                            How many files can be uploaded?
                                    </h2>
                                    <div id="collapse22" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>You can upload as many files as you like. Please note that a file may be max. 64 <abbr lang="de-DE" title="Megabyte">MB</abbr> in size.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                            How to delete a wrong file from the form?
                                    </h2>
                                    <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>If a file is to be removed from the application form, this can be done in the "Remove file(s)" field.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                            How are multiple copies of a certificate requested charged?
                                    </h2>
                                    <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>If a duplicate is requested, it will be charged at € 53.90 and provided with a duplicate stamp. If more than one certificate is requested with the application, the general fees will be charged for each duplicate: Flat rate for a certificate is € 104,20 (certificate) + € 26,10 (certification) + per product additional € 2,20.</p>
                                            <p>See: <a href="/fileadmin/daten/Dokumente/BAVG_Gebu%CC%88hrentarif_.pdf">BAVG_fee tariff</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
                                            What documents can be certified?
                                    </h2>
                                    <div id="collapse25" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>The following documents can be certified by <abbr lang="de-DE" title="Bundesamt für Verbrauchergesundheit">BAVG</abbr>:</p>
                                            <ul>
                                                <li>Documents issued by the<abbr lang="de-DE" title="Bundesamt für Verbrauchergesundheit">BAVG</abbr>(Certificates,...)</li>
                                                <li>Documents, issued by the following experts for food, drinking water, commodities and cosmetics:</li>
                                            </ul>
                                            <ol>
                                                <li>the Austrian Agency for Health and Food Safety GmbH<abbr lang="de-DE" title="Agentur für Gesundheit und Ernährungssicherheit GmbH">(AGES</abbr>)</li>
                                                <li>of the Food Inspection Authorities of the Provinces of Carinthia and Vorarlberg</li>
                                                <li>with an authorization according to § 73<abbr lang="de-DE" title="Lebensmittelsicherheits- und Verbraucherschutzgesetz ">LMSVG</abbr></li>
                                            </ol>
                                            <ul>
                                                <li>Documents issued by official veterinarians</li>
                                                <li>Documents issued by the provincial governments in indirect federal administration concerning the food and veterinary sector</li>
                                                <li>Documents issued by the <abbr lang="de-DE" title="Bundesministerium für Soziales, Gesundheit, Pflege und Konsumentenschutz">BMSGPK</abbr>, Department of Consumer Health and Veterinary Affairs</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
                                            Which documents cannot be notarized?
                                    </h2>
                                    <div id="collapse26" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>The following documents cannot be certified by <abbr lang="de-DE" title="Bundesamt für Verbrauchergesundheit">BAVG:</abbr> </p>
                                            <ul>
                                                <li>Internal company documents</li>
                                                <li>Documents issued by veterinarians other than official veterinarians</li>
                                                <li>Documents issued by the Austrian Federal Economic Chamber<abbr lang="de-DE" title="Wirtschaftskammer Österreich">(WKO</abbr>) or similar associations or professional organizations</li>
                                                <li>Documents in connection with feed (expert opinion of AGES<abbr lang="de-DE" title="oder ähnliches">or similar</abbr>) (responsibility of<abbr lang="de-DE" title="Bundesministerium für Landwirtschaft, Regionen und Tourismus ">BMLRT</abbr>)</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse27" aria-expanded="false" aria-controls="collapse27">
                                            What documents must be attached to the application for an official certificate?
                                    </h2>
                                    <div id="collapse27" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>For a certificate, the relevant expert opinions and test reports must be uploaded, in which the products to be exported are clearly stated and defined.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
                                            Are expert opinions checked for content by the BAVG?
                                    </h2>
                                    <div id="collapse28" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>The <abbr lang="de-DE" title="Bundesamt für Verbrauchergesundheit">BAVG</abbr> does not carry out an examination of the content. It merely checks whether the expert opinion was issued by an authorized person and whether other formal criteria are met. Only passages that are stated in the expert opinion are included in the certificate.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse29" aria-expanded="false" aria-controls="collapse29">
                                            When can an official certificate not be issued?
                                    </h2>
                                    <div id="collapse29" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>If formal criteria are not met in the expert opinion, the <abbr lang="de-DE" title="Bundesamt für Verbrauchergesundheit">BAVG</abbr> reserves the right to refrain from issuing an official certificate.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse30" aria-expanded="false" aria-controls="collapse30">
                                            When is an official certificate required?
                                    </h2>
                                    <div id="collapse30" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Information on whether an official certificate is required for export to a third country can be obtained from the foreign representations of the country to which you wish to export. A list of foreign representations in Austria can be found on the homepage of the Federal Ministry for European and International Affairs.</p>
                                            <p>See: <a href="https://www.bmeia.gv.at/botschaften-konsulate/suche-nach-auslaendischen-vertretungen-in-oesterreich/">Search for foreign representations in Austria (<abbr lang="de-DE" title="Bundesministerium für Europäische und internationale Angelegenheiten">BMEIA</abbr></a> )<br> <a href="https://www.verbrauchergesundheit.gv.at/handel_export/bvzert/ExporteDrittstaaten.html">Information from the Consumer Health Communication Platform: Exports to third countries</a><br> <a href="https://www.wko.at/branchen/handel/agrarhandel/ein-und-ausfuhr-nutztiere-fleisch.html">Information from the WKO: Import and export of livestock and meat</a>.</p>
                                            <p>On the competence of other federal offices:</p>
                                            <ul>
                                                <li><a href="https://www.baes.gv.at/">Federal Office for Food Safety (BAES)</a><br> Safety and quality of agricultural products (such as seeds, plant protection products, animal feed and fertilisers)</li>
                                                <li><a href="https://www.basg.gv.at/">Federal Office for Safety in Health Care (BASG)</a><br> Safety for medicinal products, medical devices, blood and tissue safety (AGES Medical Market Surveillance)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse31" aria-expanded="false" aria-controls="collapse31">
                                            Do I also need an official certificate within the EU?
                                    </h2>
                                    <div id="collapse31" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>For the <abbr lang="de-DE" title="Europäische Union">EU area</abbr>, harmonized conditions of intra-community trade apply under European law.</p>
                                        </div>
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

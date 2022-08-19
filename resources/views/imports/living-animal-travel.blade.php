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
                                        <li><a href="{{ route('general-information') }}">General Information</a></li>
                                        <li class="active">
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
                            <h4>Entry and re-entry of dogs, cats, ferrets and other pets in tourist traffic from third countries to Austria</h4>

                            <p>The conditions for the private movement of dogs, cats, ferrets and other pet animals into the European Union are laid down in Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2016/429. Without prejudice to the entry into force of Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2016/429, Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 576/2013 shall continue to apply to the non-commercial movement of pet animals until 21 April 2026.</p>
                            <p>For a successful entry at the customs control at the <abbr lang="de-DE" title="Europäische Union ">EU</abbr> external border, the following general points should be noted:</p>
                            <ul>
                                <li>The traveling animals are not intended for food production</li>
                                <li>The animals are accompanied by the owner or an authorized person</li>
                                <li>If the pet animals are transported separately in time from the animal owner, this transport may take place no more than 5 days before or after the animal owner's journey</li>
                                <li>The traveling animals are not intended to be the subject of a sale or transfer of ownership</li>
                                <li>A maximum of 5 animals per person may be carried (exception: written proof of participation in competitions, etc. and a minimum age of 6 months)</li>
                            </ul>


                            <h4>Pets</h4>
                            <p>Pet animals in travel include dogs (Canis lupus familiaris), domestic cats (Felis silvestris catus), ferrets (Mustela putorius furo), invertebrates (except bees, bumblebees, mollusks and crustaceans), ornamental aquatic animals, amphibians, reptiles, birds (except chickens, turkeys, guinea fowl, ducks, geese, quails, pigeons, pheasants, partridges, and ratites (ratitae)), and rodents and rabbits not intended for food production that are accompanied by their keeper or other authorized person responsible for the animals on behalf of the owner during the movement and are not intended to be the subject of a sale or transfer of ownership. If the pet animals are transported separately in time from the pet owner, such transportation may occur no more than 5 days before or after the pet owner's trip.</p>
                            <p>A maximum total of five dogs, cats or ferrets per person may be transported. This number may be exceeded if written proof is provided that the animals are entering the <abbr lang="de-DE" title="Europäische Union ">EU</abbr> to participate in competitions, exhibitions or sporting events or to train for such events and are older than 6 months.</p>


                            <h4>Control</h4>
                            <p>If pets in tourist traffic meet the conditions listed below, these pets are not subject to border veterinary control in Austria, but to control by customs authorities.</p>
                            <p>Dogs, cats and ferrets are subject to control by customs bodies by the owner, the keeper or the person authorized in writing by the owner to do so. This is done by actively contacting the customs officials. At airports, this must be done by using the exit marked in red ("red channel").</p>
                            <p>The animal health certificate must be stamped and signed by the official in charge of the inspection. The border crossing points where the control is carried out are the airports of Vienna-Schwechat, Linz, Salzburg, Innsbruck, Graz-Thalerhof and Klagenfurt as well as the customs offices opposite Switzerland and Liechtenstein.</p>
                            <p>If the control shows that the pet animals do not meet the requirements for travel, the control is continued by the Austrian border veterinarians. These have to proceed as stipulated in Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No. 576/2013 in Article 35.</p>
                            <p>For birds, due to the avian influenza situation in third countries, special conditions and in any case a border veterinary control are provided.</p>


                            <h4>Entry requirements</h4>
                            <p><strong>Invertebrates (except bees, bumblebees, mollusks and crustaceans), ornamental aquatic animals, amphibians, reptiles, and rodents and domestic rabbits:</strong></p>
                            <p>These animals are required to be accompanied by the owner or other authorized person responsible for the animals on behalf of the owner during the movement and are not intended to be the subject of a sale or transfer of ownership. A certificate is not required.</p>
                            <p><strong>For dogs, cats, ferrets, entry requirements vary depending on the state of origin:</strong></p>
                            <p><strong><em>1. A) Entry of dogs, cats and ferrets is possible from all third countries if the following conditions are met:</em></strong></p>
                            <ul>
                                <li>Each animal must be marked</li>
                                <li>Each animal must be vaccinated against rabies and this vaccination must be valid</li>
                                <li>An animal health certificate with confirmation of the rabies serological test must be presented for each animal</li>
                                <li>A declaration in accordance with Article 25(3) of Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 576/2013 must be presented for each animal. This declaration must be issued in English and German and must be completed in PRINTED WRITING. The model for this declaration is set out in Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 577/2013 in Annex IV Part 3.</li>
                            </ul>
                            <p>If these conditions are met, a dog, cat or ferret has a minimum age of 7 months.</p>
                            <p><strong><em>1. B) From all third countries the re-entry of dogs, cats and ferrets originating from Austria or from other <abbr lang="de-DE" title="Europäische Union ">EU Member States</abbr> is possible, if for each animal</em></strong></p>
                            <ul>
                                <li>a pet passport(*) is carried along, in which</li>
                                <li>the valid rabies vaccination and additionally also</li>
                                <li>the serological rabies test is entered. If a serological rabies test is not entered in the pet passport, a confirmation of the serological rabies test must be presented in addition to the pet passport.</li>
                            </ul>
                            <p>(*) A uniform document (pet passport) has been established for movements of dogs, cats and ferrets originating from one EU Member State to other EU Member States. In the pet passport, the identification of the animal in question must be noted by an authorized veterinarian, and the valid rabies vaccination and, if necessary, booster vaccinations against rabies and, if applicable, a titer determination must be confirmed.</p>
                            <p>In the case of re-entry of an animal whose pet passport shows that the rabies serological test was carried out with a positive result before this animal left the territory of the European Union, the waiting period of three months between blood collection and movement is not necessary.</p>
                            <p>If no pet passport can be presented, the conditions under 1. A) must be fulfilled.</p>
                            <p><em><strong>(2) For dogs, cats and ferrets in transit from third countries listed by name in Annex II to Regulation <abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 577/2013, simplified conditions apply:</strong></em></p>
                            <p>For dogs, cats and ferrets in travel from the following states or territories, serological rabies testing is not required and animals under 12 weeks of age may enter:</p>
                            <p>Ascension, Antigua and Barbuda, Argentina, Australia, Aruba, Bosnia and Herzegovina, Barbados, Bahrain, Bermuda, Bonaire, Sint Eustatius and Saba (the Caribbean Netherlands), Belarus, Canada, Chile, Curaçao, Fiji, Falkland Islands, United Kingdom (excluding Northern Ireland), Guernsey, Hong Kong, Isle of Man, Jamaica, Japan, Jersey, St. Kitts and Nevis, Cayman Islands, St. Lucia, Montserrat, Mauritius, Mexico, Malaysia, New Caledonia, New Zealand, North Macedonia, French Polynesia, St. Pierre and Miquelon, Russia, Singapore, St. Helena, Sint Maarten, United Arab Emirates, Sint Maarten, Trinidad and Tobago, Taiwan, United States of America (including American Samoa, Guam, Northern Mariana Islands, Puerto Rico and American Virgin Islands), St. Vincent and the Grenadines, British Virgin Islands, Vanuatu, Wallis and Futuna.</p>
                            <p>For dogs and cats from Malaysia, requirements regarding "Nipah disease" have to be fulfilled in addition to the above mentioned conditions due to a Commission Decision (2006/146/EC).</p>
                            <p>Andorra, Switzerland, Faroe Islands, Gibraltar, Greenland, Iceland, Liechtenstein, Monaco, Northern Ireland, Norway, San Marino, Vatican City are authorized to issue pet passports(*). Animals from these countries can enter the <abbr lang="de-DE" title="Europäische Union ">EU</abbr> with the animal health certificate and declaration or with a pet passport.</p>
                            <p>For dogs, cats and ferrets entering Austria from the above mentioned states or territories in tourist traffic, the following is required:</p>
                            <p><em><strong>2. A) Entry</strong></em></p>
                            <ul>
                                <li>Each animal must be marked</li>
                                <li>Every animal is vaccinated against rabies, unless the animals are younger than 12 weeks old. Compliance with the period of 21 days after basic vaccination is not required for animals aged between 12 and 16 weeks. This must be confirmed accordingly in the animal health certificate in point II.3.</li>
                                <li>An animal health certificate and a declaration in accordance with Article 25(3) of Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 576/2013 must be submitted for each animal. This declaration must be issued in English or German and must be completed in PRINTED WRITING.</li>
                            </ul>
                            <p><em><strong>2. B) Re-entry</strong></em></p>
                            <ul>
                                <li>For re-entry of Austrian or other <abbr lang="de-DE" title="Europäische Union ">EU animals</abbr> a pet passport(*) has to be presented</li>
                                <li>Each animal must enter directly after a stay exclusively in one or more of the states or territories listed above. If a stay in other states or territories has also taken place, these facilitated conditions can only be claimed if a pet passport(*) is carried in which, in addition to the valid rabies vaccination, the serological rabies test is also entered, or a declaration pursuant to Article 12 para. 1(c) of Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 576/2013 is presented that only one transit has taken place through the states or territories not listed above, and that during this transit the animal has had no contact with animals of species susceptible to rabies and has not left a secured means of transport or the premises of an international airport. This declaration must be issued in English and German and completed in PRINTED WRITING.</li>
                            </ul>
                            <p>If no pet passport can be presented, the provisions under 2. A) must be fulfilled.</p>
                            <p><em><strong>2. C) Entry of dogs, cats and ferrets under 12 weeks of age:</strong></em></p>
                            <p>Dogs, cats and ferrets younger than 12 weeks may only enter Austria from third countries listed in Annex II of Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 577/2013 (see point 2). These animals must meet the conditions listed under point 2 A) or 2 B). The animal health certificate must be accompanied by a declaration pursuant to Article 25(3) of Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 576/2013 and a declaration pursuant to Article 11(2)(a) of Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 576/2013. The models for these declarations are set out in Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 577/2013 in Annex IV Part 3 and in Annex I Part 1. These declarations must be issued in English and German and must be completed in PRINTED WRITING. Austria, Czech Republic, Denmark and Switzerland allow the entry of animals under 12 weeks.</p>


                            <h4>Explanations</h4>
                            <p>a) Identification</p>
                            <p>Every animal must be marked: since July 3, 2011, animals may only be marked by microchip. A tattoo done before July 3, 2011 is still valid as long as it is clearly legible. The marking must have been done before the rabies vaccination.</p>
                            <p>b) Rabies vaccination</p>
                            <p>Conditions that must be met for the rabies vaccination to be valid:</p>
                            <ul>
                                <li>The animal must be vaccinated with an inactivated or recombinant rabies vaccine in accordance with the marketing authorization for the vaccine in the animal's state of origin</li>
                                <li>The vaccine must be one that meets the requirements of the standards recommendations (Chapter 2.1.13 <span class="text-lang" dir="ltr" lang="en-GB">Manual of Diagnostic Tests and Vaccines for Terrestrial Animals</span>) of the World Organization for Animal Health</li>
                                <li>The animal must be at least 12 weeks old when the basic immunization (first vaccination) is carried out</li>
                                <li>The vaccination must be performed by an authorized veterinarian</li>
                                <li>The rabies vaccination is valid at the earliest 21 days after the completion of the basic immunization, i.e. with the onset of the vaccination protection</li>
                                <li>If the animal undergoes regular booster vaccination, the vaccination remains valid</li>
                                <li>If the booster vaccination is given after the expiration of the period specified by the approval of the vaccine, this vaccination is considered as basic immunization, and the period of 21 days must be observed</li>
                            </ul>
                            <p>c) Serological rabies test (determination of titer)</p>
                            <p>Serological rabies testing shall be performed as follows:</p>
                            <p>Titration of neutralizing antibodies of at least 0.5 IU/ml on a blood sample taken by an authorized veterinarian. The blood sample must be taken at least thirty days after vaccination and at least three months before the animal is moved from the third country. The titer determination must be done in a laboratory approved by the <abbr lang="de-DE" title="Europäische Union ">EU</abbr>.</p>
                            <p>This rabies serological test need not be repeated in an animal in which the vaccination is revaccinated at the scheduled intervals.</p>
                            <p>d) Animal health certificate (certificate) and declaration</p>
                            <p>Each animal must be accompanied by an animal health certificate as laid down in Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 577/2013, Annex IV, Part 1. Annex IV of Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 577/2013 received a new version by Commission <abbr lang="de-DE" title="Verordnung ">Regulation</abbr> (EU) 2019/1293 as of November 6, 2019. Animal health certificates must use the model animal health certificate in the Annex to Commission <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2019/1293.</p>
                            <p>One certificate may be issued for several animals carried at the same time. The certificate must be issued by an official veterinarian of the country of origin in English or German. The certificate may also be issued by an authorized veterinarian, in which case it must be endorsed by the competent authority of the country of dispatch.</p>
                            <p>The animal health certificate must always be accompanied by a declaration in accordance with Article 25(3) of Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 576/2013. The model for this declaration is laid down in Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 577/2013 in Annex IV, Part 3. This declaration must be issued in German or English and must be completed in PRINTED WRITING.</p>
                            <p>The animal health certificate shall not be older than 10 days at the time of entry into the Union. The animal health certificate may be used as a travel document within the Union for four months. The period of four months starts from the moment of control at the <abbr lang="de-DE" title="Europäische Union ">external border of the EU.</abbr> However, the validity of the certificate expires if the rabies vaccination needs to be refreshed or the animal is taken to a Member State for which treatment against Echinococcus multilocularis is mandatory. Animals under 16 weeks of age may only be moved on to those Member States that allow it.</p>



                            <h4>Import of pet animals not in travel</h4>
                            <p>These animals are subject to border veterinary control without exception. Since April 21, 2021, the conditions of Delegated Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2020/692 and Implementing Regulations<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2021/403 and<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2021/404 apply to the import of dogs, cats and ferrets.</p>
                            <p>Please note that there may also be import restrictions and import bans due to other <abbr lang="de-DE" title="Europäische Union ">EU</abbr> and national regulations such as species protection (CITES) or customs regulations, see for example on the <a href="https://www.bmf.gv.at/themen/zoll/reise/einfuhrverbote-einfuhrbeschr%C3%A4nkungen.html">website of the <abbr lang="de-DE" title="Bundesministerium für Finanzen">BMF</abbr></a>.</p>



                            <h4>Important links</h4>
                            <ul>
                                <li><a href="https://ec.europa.eu/food/animals/movement-pets/approved-rabies-serology-laboratories_en">List of EU approved laboratories for serological rabies testing</a></li>
                            </ul>


                            <h4>Information, explanations and samples</h4>
                            <p>Here you can find information, declarations and samples of the required certificates on the changed conditions for travel with pets due to Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No. 576/2013 - Valid since 29 December 2014:</p>
                            <ul>
                                <li><a href="/fileadmin/daten/Dokumente/Reiseverkehr_Erkl%C3%A4rung_Heimtiere.pdf">Declaration owner:in /authorized person for travel.</a></li>
                                <li><a href="/fileadmin/daten/Dokumente/Reiseverkehr_Erkl%C3%A4rung_Heimtiere_Drittl%C3%A4nder_unter_12_Wochen___IGV_endfassung__speicherbar_.pdf">Declaration owner:in /authorized person for animals under 12 weeks of age or with not yet valid rabies vaccination.</a></li>
                                <li><a href="/fileadmin/daten/Dokumente/Reiseverkehr_Erkl%C3%A4rung_Heimtiere_Drittl%C3%A4nderdurchfuhr_endfassung__speicherbar_.pdf">Declaration owner:in /authorized person for animals in transit through non-listed countries</a></li>
                                <li><a href="/fileadmin/daten/Dokumente/ZeugnismusterVO2019-1293.pdf">Model certificate Annex IV of Regulation (EU) No. 577/2013 as amended by Regulation (EU) 2019/1293</a></li>
                                <li><a href="/fileadmin/daten/Dokumente/ZeugnismusterVO2019-1293Korrigendum.pdf">Corrigendum to the model certificate Annex IV of Regulation (EU) No 577/2013 as amended by Regulation (EU) 2019/1293</a></li>
                            </ul>



                            <h4>Attention</h4>
                            <p>For birds in travel, stricter regulations for entry apply until further notice due to avian influenza (more detailed information can be found further down the page).</p>


                            <h4>Legal basis (to be applied in the latest valid version):</h4>
                            <ul>
                                <li><a href="https://eur-lex.europa.eu/legal-content/DE/TXT/?uri=CELEX:32013R0576">Movement of pet animals VO (EU) No. 576/2013</a></li>
                                <li><a href="https://eur-lex.europa.eu/legal-content/DE/ALL/?uri=CELEX%3A32013R0577">Model identification documents VO (EU) No. 577/2013, incl. corrections</a></li>
                                <li><a href="https://eur-lex.europa.eu/legal-content/DE/TXT/?uri=CELEX%3A32014R1219">List of countries amended by VO (EU) No. 1219/2014</a></li>
                                <li><a href="https://eur-lex.europa.eu/legal-content/de/TXT/?uri=CELEX:32016R0561">Model animal health certificate amended by Regulation (EU) 2016/561</a></li>
                                <li><a href="https://eur-lex.europa.eu/legal-content/DE/TXT/?qid=1586436399409&amp;uri=CELEX:32019R1293">List of countries and model animal health certificate amended by Regulation (EU) 2019/1293</a></li>
                                <li><a href="https://eur-lex.europa.eu/legal-content/DE/TXT/?uri=CELEX%3A32016R2020">List of countries amended by Regulation (EU) 2020/2016</a></li>
                            </ul>



                            <h4> EU-approved laboratories for serological rabies testing of dogs, cats and ferrets in Austria</h4>
                            <p>In Austria there is one approved laboratory for serological rabies testing in dogs, cats and ferrets (Decision 2000/258/EC). This is the Institute for Veterinary Investigations of the <a href="http://www.ages.at" title="AGES ">AGES in Mödling</a>.</p>
                            <p>Additional information:<a href="https://ec.europa.eu/food/animals/movement-pets/approved-rabies-serology-laboratories_en"> Link to the homepage of </a>the<a href="https://ec.europa.eu/food/animals/movement-pets/approved-rabies-serology-laboratories_en" title="EU-Kommission - Labors in Drittstaaten und EU-Mitgliedstaaten">EU Commission with the list of approved laboratories in third countries and EU member states</a>.</p>


                            <h4>Import and re-import of ornamental birds (birds) in tourist traffic</h4>
                            <p><strong>Import conditions</strong></p>
                            <p>Currently, all birds in travel from third countries are subject to border veterinary inspection, with the exception of those countries for which special provisions apply. The same conditions apply to the importation and re-importation of ornamental birds into the <abbr lang="de-DE" title="Europäische Union">EU</abbr>.</p>
                            <p>The conditions for the importation of birds in tourist traffic were adopted due to the occurrence of avian influenza in many third countries. Delegated Regulation<abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/1933 and Implementing Regulation<abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/1938 have revised the import conditions.</p>
                            <p>Birds in travel may be imported into the <abbr lang="de-DE" title="Europäische Union">EU</abbr> if the third country of origin is not under restriction and if they originate from member countries of the OIE and:</p>
                            <ul>
                                <li>a certificate (model veterinary certificate) according to Annex Part 1 of the Implementing Regulation<abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/1938 and.</li>
                                <li>a declaration according to Annex Part 2 of the Implementing Regulation<abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/1938, is available.</li>
                            </ul>
                            <p>The certificate must certify, among other things</p>
                            <p><strong>either</strong> that the birds have been</p>
                            <ul>
                                <li>Spend 30 days in the Member State of destination in a quarantine station approved in accordance with Delegated Regulation<abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2019/2035,</li>
                            </ul>
                            <p><strong>or</strong>,</p>
                            <ul>
                                <li>that the birds are moved to a residence within the <abbr lang="de-DE" title="Europäische Union">EU</abbr> where they are kept for at least 30 days without participating in shows, fairs, exhibitions, etc,</li>
                            </ul>
                            <p><strong>and</strong></p>
                            <ul>
                                <li>meet one of the conditions in 1), 2) or 3):</li>
                            </ul>
                            <ol>
                                <li>The birds have been vaccinated with an approved inactivated H5 and H7 vaccine within the last six months at least 60 days prior to shipment to the <abbr lang="de-DE" title="Europäische Union">EU</abbr>; or</li>
                                <li>the birds have been quarantined for at least 14 days prior to entry into the <abbr lang="de-DE" title="Europäische Union">EU</abbr> and samples taken no earlier than the seventh day of isolation have been tested for H5 and H7 infection; or</li>
                                <li>the birds come from third countries listed in the first column of the table in Part 1 of Annex V, Annex XIV or Annex XIX to Implementing Regulation<abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/404 and have been kept in an approved quarantine facility in the country of origin for 30 days.</li>
                            </ol>


                            <h4>Birds as pets</h4>
                            <p>Birds are considered to be pet animals if they accompany their owner or another authorized person responsible for the animals on behalf of the owner during the movement and are not intended to be the subject of a sale or transfer of ownership. If the birds are being transported separately in time from the owner, this transport may occur no more than 5 days before or after the owner's trip.</p>
                            <p>A maximum of five birds per person may be transported.</p>


                            <h4>Special provisions</h4>
                            <p>Birds imported from the states of Andorra, the Faroe Islands, Gibraltar, Greenland, Iceland, Liechtenstein, Monaco, Norway, San Marino, Switzerland and Vatican City in tourist traffic into the EU are not subject to border veterinary control and no certificate is required. The conditions for the movement of pet birds within the <abbr lang="de-DE" title="Europäische Union">EU</abbr> apply to these birds.</p>


                            <h4>Control</h4>
                            <p>The border veterinary inspection of imports into the <abbr lang="de-DE" title="Europäische Union">EU</abbr> is carried out at the first approved border inspection post.</p>
                            <p>The veterinary certificates must be issued in the official language of the Member State where the veterinary border inspection takes place and in the official language of the Member State of destination.</p>
                            <p>The planned border crossing of the animals must be announced in writing to the border veterinarian of the border inspection post concerned one working day in advance (at the Austrian border at least 18 hours).</p>
                            <p>The responsible official veterinarian must be informed immediately of the arrival of the animals at the place of destination.</p>
                            <p>Please note that there may also be import restrictions and import bans due to other <abbr lang="de-DE" title="Europäische Union">EU</abbr> and national regulations such as financial regulations (e.g. customs) or due to species protection (CITES).</p>
                            <p>Information on customs law is available from the Federal Ministry of Finance on the homepage: <a href="https://www.bmf.gv.at/">https://www.bmf.gv.at/</a> under customs.</p>
                            <p>Information on species protection regulations can be found on the <a href="https://www.bmlrt.gv.at/public.html">homepage of the Federal Ministry of Agriculture, Regions and Tourism</a>.</p>



                            <h4>Legal basis (as amended from time to time):</h4>
                            <ul>
                                <li><a href="https://eur-lex.europa.eu/eli/reg_impl/2021/1938/oj"><abbr lang="de-DE" title="Verordnung">VO</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/1938</a></li>
                                <li><a href="https://eur-lex.europa.eu/eli/reg_del/2021/1933/oj"><abbr lang="de-DE" title="Verordnung">VO</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/1933</a></li>
                                <li><a href="https://eur-lex.europa.eu/eli/reg/2013/576/oj"><abbr lang="de-DE" title="Verordnung">VO</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) No. 576/2013 (pet animal regulation)</a></li>
                            </ul>


                            <h4>Attention:</h4>
                            <p>Please also note the advice as well as the information provided regarding avian influenza, which can be found on the page regarding the <a href="/en/import/living-animals/import">commercial importation of pet birds</a>.</p>



                            <h4>Controls on travel - live animals and products of animal origin</h4>
                            <p>The aim of travel controls is to prevent the introduction of known or exotic animal diseases and zoonoses (= infectious diseases that occur equally in animals and humans and can thus be transmitted both from animals to humans and from humans to animals) into the European Union. Due to the increased mobility of people, the need to take along their own pets, traditional gifts or local or national specialties has increased. However, it is often not taken into account that animals or products of animal origin are carriers of diseases (e.g. foot-and-mouth disease, avian influenza, rabies). Therefore, to protect Austrian livestock from epidemics and the population from zoonoses, measures must be taken from an animal health perspective. Travelers may perceive these as restrictions, but they ultimately serve to protect animals and the general public from the introduction of dangerous, sometimes untreatable diseases.</p>


                            <h4>Attention</h4>
                            <p>Please do not forget that there are restrictions on bringing animals or products of animal origin, e.g. for reasons of species protection.</p>
                            <p><a href="https://www.wwf.at/artikel/cites/">Homep</a><a href="https://www.wwf.at/artikel/cites/" title="WWF Artenschutz ">age of species protection</a></p>
                            <p>Please note that there may be restrictions or prohibitions on bringing animals or products of animal origin for customs reasons.</p>
                            <p><a href="https://www.bmf.gv.at/themen/zoll.html">H</a><a href="https://www.bmf.gv.at/themen/zoll.html" title="Bundesministerium für Finanzen - Zoll ">omepage of the customs </a></p>
                            <p>Before starting a journey with an animal, take sufficient time to inform yourself about all regulations regarding transport, export, import into the country of destination and re-import into the European Union as well as animal welfare regulations.</p>



                            <h4>Traveling abroad with pets - leaving Austria and re-entering Austria</h4>
                            <p>For the departure with pets no special conditions are prescribed by the Austrian side (such as export quarantine).</p>
                            <p>But: For the re-entry of dogs, cats and ferrets from most third countries a rabies titer determination is required, which is best performed before departure (at least 3 weeks). Why before departure: not always the rabies titer is high enough after performed vaccinations. If you leave the country with your pet and this is the case, in the worst case you can not bring your pet into Austria!</p>
                            <p>For more detailed information about entry and re-entry conditions to the <abbr lang="de-DE" title="Europäische Union ">EU</abbr> and Austria, please read the provided information on this page.</p>


                            <h4>Info pages about traveling with animals</h4>
                            <ul>
                                <li><a href="https://ec.europa.eu/food/animals/movement-pets/eu-legislation_en" title="EU-Homepage - Reisen mit Tieren (Einreise und Wiedereinreise)">EU-Homepage (english) about traveling with animals (entry and re-entry)</a></li>
                                <li><a href="https://www.sozialministerium.at/Themen/Gesundheit/Reiseinformationen/Reisen-nach-%C3%96sterreich/Reisen-mit-Hunden,-Katzen-und-Frettchen-innerhalb-der-EU,-des-EWR-und-der-Schweiz.html" title="Sozialministerium Reisen mit Hunden, Katzen und Frettchen innerhalb der EU, des EWR und der Schweiz">Travel with dogs, cats and ferrets within the EU, the EEA and Switzerland</a></li>
                                <li><a href="https://www.sozialministerium.at/Themen/Gesundheit/Reiseinformationen/Reisen-nach-%C3%96sterreich/Reisen-mit-anderen-Heimtieren-innerhalb-der-EU,-des-EWR-und-der-Schweiz.html" title="Sozialministerium - Reisen mit anderen Heimtieren innerhalb der EU, des EWR und der Schweiz">Travel with other pets within the EU, the EEA and Switzerland</a></li>
                            </ul>


                            <h4>Service links - Travel regulations with animals</h4>
                            <ul>
                                <li><a href="https://europa.eu/youreurope/citizens/travel/carry/animal-plant/index_de.htm" title="EU Vorschriften für Reisen mit Haustieren">EU regulations for travel with pets</a></li>
                                <li><a href="https://www.bmeia.gv.at/reise-services/reiseinformation/" title="Außenministerium - Länderspezifische Reiseinformationen">Ministry of Foreign Affairs - Country specific travel information</a></li>
                                <li><a href="https://www.bmeia.gv.at/botschaften-konsulate/" title="Außenministerium - Botschaften und Konsulate">Ministry of Foreign Affairs - Embassies and Consulates</a></li>
                                <li><a href="https://www.awe.gov.au/biosecurity-trade/cats-dogs" title="Einreisebestimmungen Hund, Katze und andere Heimtiere: Australien">Entry requirements dog, cat and other pets: Australia</a></li>
                                <li><a href="https://www.maff.go.jp/aqs/english/animal/dog/index.html" title="Einreisebestimmungen Hund, Katze und andere Heimtiere: Japan">Entry requirements dog, cat and other pets: Japan</a></li>
                                <li><a href="https://inspection.canada.ca/importing-food-plants-or-animals/pets/eng/1326600389775/1326600500578" title="Einreisebestimmungen Hund, Katze und andere Heimtiere: Kanada">Entry requirements dog, cat and other pets: Canada</a></li>
                                <li><a href="https://www.mpi.govt.nz/bring-send-to-nz/pets-travelling-to-nz/" title="Einreisebestimmungen Hund, Katze und andere Heimtiere: Neuseeland">Entry requirements dog, cat and other pets: New Zealand</a></li>
                                <li><a href="https://www.aphis.usda.gov/aphis/pet-travel/bring-pet-into-the-united-states" title="Einreisebestimmungen Hund, Katze und andere Heimtiere: USA">Entry requirements dog, cat and other pets: USA</a></li>
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

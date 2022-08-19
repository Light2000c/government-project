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
                            <h4>Import of dogs, cats and ferrets from third countries to Austria</h4>

                            <p>The conditions for the commercial import of dogs, cats and ferrets into the European Union are laid down in <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2020/692.</p>
                            <p>There are basically two ways how dogs, cats and ferrets can be imported or moved into the <abbr lang="de-DE" title="Europäische Union">EU</abbr>.</p>

                            <h4>1. import of dogs, cats and ferrets</h4>
                            <p>The conditions are defined in <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2020/692.</p>
                            <p>A veterinary certificate according to the model (CANIS-FELIS-FERRETS) in Annex II Chapter 38 of Regulation (<abbr lang="de-DE" title="Europäische Union">EU</abbr>) 2021/403 must be provided during border veterinary checks at the EU external border. This must have been drawn up in accordance with the explanatory notes on the completion of certificates in Chapter 4 of Annex I to Commission Implementing Regulation<abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2020/2235.</p>
                            <p>Importation may only take place from those third countries listed in accordance with Annex VIII, Part 1 of <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/404, as amended by <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2022/35.</p>
                            <p>The animals must be clearly identified (since July 3, 2011, animals may only be identified by microchip).</p>
                            <p>In order to provide a better overview, the listed countries in Annex VIII Part 1 of <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/404 are divided into two groups, those from which importation is possible without serological blood testing (rabies titre determination) and those for which serological blood testing is mandatory.</p>
                            <p>&nbsp;</p>
                            <p><em><strong>A. Serological rabies testing (rabies titer determination) is not required for dogs, cats and ferrets from the following countries:</strong></em></p>
                            <p>Andorra, Faroe Islands, Gibraltar, Greenland, Iceland, Liechtenstein, Monaco, San Marino, Vatican City State, Ascension, United Arab Emirates, Antigua and Barbuda, Argentina, Australia, Aruba, Bosnia and Herzegovina, Barbados, Bahrain, Bermuda, Bonaire, St. Eustace and Saba (the Caribbean Netherlands), Belarus, Canada, Chile, Curaçao, Fiji, Falkland Islands, United Kingdom, Guernsey, Hong Kong, Isle of Man, Jamaica, Japan, Jersey, St. Kitts and Nevis, Cayman Islands, Saint Lucia, Montserrat, Northern Macedonia, Mauritius, Mexico, Malaysia, New Caledonia, New Zealand, French Polynesia, Saint Pierre and Miquelon, Russia, Singapore, St. Helena, Sint Maarten, Trinidad and Tobago, Taiwan, United States of America (including American Samoa, Guam, Northern Mariana Islands, Puerto Rico and American Virgin Islands), St. Vincent and the Grenadines, British Virgin Islands, Vanuatu, Wallis and Futuna.</p>
                            <p> Due to the conditions to be met, there is no importation of dogs, cats and ferrets younger than 16 weeks. (Rabies vaccination after 12 weeks of age and 21 days until the validity of the vaccination). Since the conditions are fully harmonized, there is no possibility of a national permit for younger animals.</p>
                            <p>&nbsp;</p>
                            <p><em><strong>B. For the following countries, a serological rabies test (rabies titer determination) is mandatory for the importation of dogs, cats and ferrets:</strong></em></p>
                            <p>Albania, Bolivia, Belize, Brazil, Botswana, China, Colombia, Costa Rica, Cuba, Algeria, Egypt, Ethiopia, India, Guatemala, Honduras, Israel, Jordan, Qatar, Kenya, Kyrgyzstan, Kuwait, Lebanon, Madagascar, Morocco, Moldova, Montenegro, Namibia, Nicaragua, Oman, Panama, Paraguay, Peru, Saudi Arabia, Serbia, El Salvador, Swaziland (Eswatini), Thailand, Tunisia, Turkey, Ukraine, Uruguay, South Africa, Zimbabwe.</p>
                            <p> Animals from these <abbr lang="de-DE" title="Europäische Union">non-EU countries</abbr>, if they meet all conditions, are thus always at least 7 months old.</p>
                            <p>Dogs, cats and ferrets from Switzerland or Norway are moved under the conditions of intra-union trade.</p>



                            <h4>Control</h4>
                            <p>The border veterinary import control into the <abbr lang="de-DE" title="Europäische Union">EU</abbr> takes place at the first border inspection post approved for this type of animal. The veterinary certificates must be issued in the official language of the member state in which the veterinary border control takes place and in the official language of the member state of destination.</p>
                            <p>The border veterinarian also checks whether the conditions for the protection of animals during transport are complied with. These conditions are laid down in <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Gemeinschaft">(EC</abbr>) No. 1/2005. Please note the registration conditions for the transport vehicles.</p>
                            <p>The planned border crossing of the animals must be announced to the border veterinarian of the border inspection post concerned at least one working day in advance by means of <abbr lang="de-DE" title="Gemeinsames Gesundheitseingangsdokument">GGED-A</abbr>(Common Health Entry Document).</p>
                            <p>Information on how to carry out the border veterinary inspection can also be found at the Internet address:</p>
                            <p><a href="/en/import/general-information">https://www.bavg.gv.at/einfuhr-import/allgemeine-informationen</a></p>
                            <p>The importer must immediately inform the locally competent official veterinarian of the arrival of the animals at the place of destination.</p>


                            <h4>2. entry of dogs, cats and ferrets under the conditions of travel.</h4>
                            <p>The conditions for travel are met by dogs (Canis lupus familiaris), domestic cats (Felis silvestris catus) and ferrets (Mustela putorius furo) if they are accompanied by their owner or another authorized person responsible for the animals on behalf of the owner during the movement and are not intended to be the subject of a sale or transfer of ownership.</p>
                            <p>On the <abbr lang="de-DE" title="Bundesamt für Verbrauchergesundheit">BAVG</abbr> website, you can find all the information for the entry of dogs, cats and ferrets in travel at:</p>
                            <p><a href="/en/import/living-animals/travel">https://www.bavg.gv.at/einfuhr-import/lebende-tiere/reiseverkehr</a></p>
                            <p>&nbsp;</p>
                            <p><strong>Legal basis (to be applied in the latest valid version):</strong></p>
                            <ul>
                                <li><a href="https://eur-lex.europa.eu/eli/reg_impl/2021/403/oj">Veterinary certificate VO (EU) 2021/403</a></li>
                                <li><a href="https://eur-lex.europa.eu/eli/reg_impl/2021/404/oj">List of countries VO (EU) 2021/404</a></li>
                                <li><a href="https://eur-lex.europa.eu/eli/reg_del/2020/692/oj">VO (EU) 2020/692</a></li>
                            </ul>


                            <h4>Important Internet addresses:</h4>
                            <ul>
                                <li><a href="/en/import/general-information">List of Austrian border inspection posts and Common Health Entry Document (GGED)</a></li>
                                <li><a href="https://ec.europa.eu/food/animals/movement-pets/approved-rabies-serology-laboratories_en">List of EU approved laboratories for serological rabies testing</a></li>
                            </ul>
                            <p>Please note that there may also be import restrictions and import bans due to other EU and national regulations such as financial law (e.g. customs).</p>
                            <p>Information on customs law is available from the Federal Ministry of Finance on the homepage: <a href="https://www.bmf.gv.at/">https://www.bmf.gv.at/</a> under customs.</p>



                            <h4>Important</h4>
                            <p>For a successful import at the border veterinary control at the EU external border, the following points must be observed in particular:</p>
                            <ul>
                                <li>Presentation of an official veterinary certificate according to the specimen</li>
                                <li>Valid rabies vaccination</li>
                                <li>The animals must be clearly marked (e.g. microchip)</li>
                                <li>Import is only allowed from those third countries, from which the import is allowed according to Annex VIII Part 1 of <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/404, corrected by <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2021/1727.</li>
                                <li>
                                    <p>For certain countries, a serological rabies test is also required; animals from these non-EU countries, if they meet all conditions, are thus always at least 7 months old.</p>
                                </li>
                            </ul>


                            <h4> Legal basis (to be applied in the latest valid version):</h4>
                            <ul>
                                <li><a href="https://eur-lex.europa.eu/legal-content/DE/TXT/?uri=CELEX%3A32021R0403">Veterinary certificate VO (EU) 2021/403</a></li>
                                <li><a href="https://eur-lex.europa.eu/legal-content/DE/TXT/?uri=CELEX:32021R0404">List of countries VO (EU) 2021/404</a></li>
                                <li><a href="https://eur-lex.europa.eu/legal-content/DE/ALL/?uri=CELEX%3A32013R0577">VO (EU) No. 577/2013</a></li>
                                <li><a href="https://eur-lex.europa.eu/legal-content/de/TXT/?uri=CELEX:32020R0692">VO (EU) 2020/692</a></li>
                            </ul>


                            <h4>Import of live birds not in tourist traffic into the European Union</h4>
                            <p>The provisions of <abbr lang="de-DE" title="Verordnung">Regulation</abbr> (<abbr lang="de-DE" title="Europäische Union">EU</abbr>) 2016/429 and Regulation (<abbr lang="de-DE" title="Europäische Union">EU</abbr>) 2020/692 apply to the import of captive birds (birds not covered under poultry, including those kept for shows, races, exhibitions, tournament fights, for breeding or for sale).</p>
                            <p>Animals for approved species protection programs and animal experiments are not regulated uniformly across the EU. For such imports, if they are destined for Austria, a veterinary authorization by the Federal Ministry of Social Affairs, Health, Care and Consumer Protection is required.</p>
                            <p>Birds from Andorra, Liechtenstein, Monaco, Norway, San Marino, Switzerland and the Vatican City State may be brought into the European Union under the conditions for intra-Community trade.</p>


                            <h4>Import conditions</h4>
                            <p>The following points for the import of birds must be fulfilled according to <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2020/692:</p>
                            <ul>
                                <li>Birds may only be imported from third countries approved by the <abbr lang="de-DE" title="Europäische Union ">EU</abbr> and the birds must have been bred in captivity.</li>
                                <li>The bird breeding establishments must have been approved by the third country. The information about the list of breeding farms can be found on the <a href="https://ec.europa.eu/food/animals/live-animal-movements/captive-birds_en">homepage of the EU</a>.</li>
                                <li>The birds must have been tested forAI (Avian Influenza) and <abbr lang="en-GB" title="Newcastle Disease">NCD</abbr><span class="text-lang" dir="ltr" lang="en-GB">(Newcastle Disease</span>) with negative results 7 to 14 days prior to shipment.</li>
                                <li>Birds must not have been vaccinated against <abbr lang="de-DE" title="Aviare Influenza">AI</abbr> (avian influenza).</li>
                                <li>Birds were uniquely identified individually by a seamlessly sealed leg ring or microchip, and this identification was recorded on the certificate.</li>
                                <li>The birds are transported in new containers that have an identification number on the outside, which is entered in the certificate.</li>
                                <li>A veterinary certificate conforming to the model (CAPTIVE-BIRDS) in Chapter 34 of Annex II to Regulation (<abbr lang="de-DE" title="Europäische Union ">EU</abbr>) 2021/403 is presented at the border veterinary inspection.</li>
                                <li>Countries from which imports of captive birds are allowed are listed in Annex VI of <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2021/404.</li>
                                <li>The importer or the person authorized to dispose of the birds must provide the border veterinarian with a written confirmation from the person responsible for the quarantine facility that the birds will be admitted for quarantine. This confirmation must include the approval number and the name and address of the quarantine facility.</li>
                            </ul>

                            <h4>Carrier pigeons</h4>
                            <p>The model veterinary certificate for racing pigeons released immediately upon entry into the Union shall be drawn up in accordance with the model set out in Chapter 34a 'RACING PIGEONS-IMMEDIATE RELEASE', of Annex II to <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/403, as amended by <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2022/37.</p>


                            <h4>Control</h4>
                            <p>Live birds are subject to border veterinary inspection.</p>
                            <p>The border veterinary import control into the <abbr lang="de-DE" title="Europäische Union">EU</abbr> takes place at the first border inspection post approved for this species (e.g. Vienna Schwechat, Hamburg, Amsterdam, etc.).</p>
                            <p>The veterinary certificates must be issued in an official language of the Member State in which the veterinary border inspection takes place and in the official language of the Member State of destination.</p>
                            <p>The planned border crossing of the consignment must be announced to the border veterinarian of the border inspection post concerned one working day in advance (at the Austrian border at least 18 hours) using the <abbr lang="de-DE" title="Gemeinsames Gesundheitseingangsdokument">GGED-A</abbr>(Common Health Entry Document).</p>
                            <p>The border veterinarian also checks compliance with the conditions for the protection of animals during transport. These conditions are laid down in Regulation<abbr lang="de-DE" title="Europäische Gemeinschaft">(EC</abbr>) No. 1/2005 on the protection of animals during transport and related operations.</p>


                            <h4>Quarantine</h4>
                            <p>After being cleared by the border veterinarian, the birds must be immediately taken to the approved quarantine facility or quarantine station to which they were cleared, within a maximum of 9 hours.</p>
                            <p>The competent official veterinarian must be notified in writing of the arrival of the birds at the place of destination (approved quarantine facility or quarantine station) within one working day.</p>
                            <p>The birds must be quarantined for at least 30 days.</p>
                            <p>At least at the beginning and before the end of quarantine, the official veterinarian shall inspect the quarantine conditions in addition to ongoing monitoring. During quarantine, the prescribed examinations, including sampling and testing procedures, shall be performed.</p>
                            <p>If even one bird is confirmed to be suspected of AI and NCD or if there is an outbreak of the disease, all birds shall be culled and disposed of in a disease-proof manner.</p>



                            <h4>Exception from the control</h4>
                            <p>Currently, there are no exemptions from border veterinary control in tourist traffic either.</p>
                            <p>The stricter conditions for the import of ornamental birds in tourist traffic were newly regulated by the regulations <abbr lang="de-DE" title="Verordnung">VO</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/1933 and <abbr lang="de-DE" title="Verordnung">VO</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/1938.</p>


                            <h4>Poultry note</h4>
                            <p>According to <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2016/429, poultry is defined as birds raised or kept in captivity for the following purposes:</p>
                            <ul>
                                <li>Production of meat, table eggs and other products;</li>
                                <li>Restocking of wild stocks;</li>
                                <li>Breeding of birds for the purpose of producing meat, eggs for consumption and other products; and restocking of wild stocks.</li>
                            </ul>
                            <p>Basically, the import conditions are regulated by <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2016/429 and <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2020/692.</p>
                            <p>Veterinary certification is specified in Annex II of <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/403, depending on the type of use.</p>
                            <p>Countries from which the import of poultry is allowed are listed in Annex V of <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/404.</p>
                            <p>Please note that import restrictions and import bans may also exist due to other EU and national regulations such as financial regulations (e.g. customs) or due to species protection (CITES).</p>
                            <p>Information on customs law is available from the Federal Ministry of Finance on the homepage: <a href="https://www.bmf.gv.at/">https://www.bmf.gv.at/</a> under customs.</p>
                            <p>Information on species protection regulations can be found on the homepage of the Federal Ministry of Agriculture, Regions and Tourism (BMLRT) at: <a href="https://www.bmlrt.gv.at/umwelt/natur-artenschutz/internat_natur_artenschutz0/cites.html">https://www.bmlrt.gv.at/umwelt/natur-artenschutz/internat_natur_artenschutz0/cites.html</a></p>



                            <h4>Important Internet addresses:</h4>
                            <ul>
                                <li><a href="/en/import/general-information">List of Austrian border inspection posts and GGED (Common Health Entry Document).</a></li>
                                <li><a href="http://ec.europa.eu/food/safety/international_affairs/trade/poultry_en">Information about the import of birds and poultry can also be found on the homepage of the EU Commission</a></li>
                            </ul>


                            <h4>Legal basis (to be applied in the latest valid version)</h4>
                            <ul>
                                <li><a href="https://eur-lex.europa.eu/legal-content/DE/TXT/?uri=CELEX%3A32021R0403">Regulation (EU) 2021/403 (model certificate)</a></li>
                                <li><a href="https://eur-lex.europa.eu/legal-content/DE/TXT/?uri=CELEX:32021R0404">VO (EU) 2021/404 (List of countries)</a></li>
                                <li><a href="https://eur-lex.europa.eu/legal-content/DE/ALL/?uri=CELEX%3A32005R0001">Regulation (EC) No. 1/2005 (Provisions on animal welfare during transport)</a></li>
                            </ul>



                            <h4>Import of aquatic animals into Austria</h4>
                            <p><strong>Definitions</strong></p>
                            <p>According to <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2016/429, <strong>aquatic animal </strong>means the following species in all stages of development, including eggs, sperm and gametes:</p>
                            <ul>
                                <li>Fish of the superclass Agnatha and of the classes Chondrichthyes and Sarcopterygii and Actinopterygii; or</li>
                                <li>aquatic molluscs of the phylum Mollusca, or</li>
                                <li>aquatic crustaceans of the subtribe Crustacea.</li>
                            </ul>
                            <p><strong>Aquaculture animal</strong>: any aquatic animal kept in aquaculture.</p>
                            <p><strong>Aquaculture</strong> means the keeping of aquatic animals where the animals remain the property of a natural or legal person throughout the rearing or husbandry process, including harvesting, except for the harvesting or capture of wild aquatic animals that are subsequently held temporarily without feeding until slaughter, for human consumption.</p>


                            <h4>Control</h4>
                            <p>Live fish, molluscs, crustaceans as well as their eggs, seeds and gametes are subject to border veterinary inspection.</p>
                            <p>The border veterinary import control into the <abbr lang="de-DE" title="Europäische Union">EU</abbr> takes place at the first border inspection post approved for this species (e.g. Vienna Schwechat, Hamburg, Amsterdam, etc.).</p>
                            <p>The veterinary certificates must be issued in an official language of the Member State in which the veterinary border inspection takes place and in the official language of the Member State of destination.</p>
                            <p>The planned border crossing of the consignment must be announced to the border veterinarian of the border inspection post concerned one working day in advance (at least 18 hours at the Austrian border) using the Common Health Entry Document (GGED-A).</p>
                            <p>The responsible official veterinarian must be informed of the arrival of the animals at the place of destination.</p>
                            <p>The border veterinarian also checks compliance with the conditions for the protection of animals during transport. These conditions are laid down in <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Gemeinschaft">(EC</abbr>) No. 1/2005 on the protection of animals during transport and related operations. In addition, checks are carried out to ensure that consignments are packaged and labeled in accordance with <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Gemeinschaft">(EC</abbr>) No. 853/2004.</p>


                            <h4>Exemption from border veterinary control</h4>
                            <p>Aquatic animals kept for ornamental purposes (not intended for transfer to third parties) are not subject to border veterinary controls<abbr lang="de-DE" title="Verordnung">(Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) No. 576/2013). The control is carried out by the customs authorities.</p>



                            <h4>(1) Live aquatic animals for certain aquaculture operations, for release into open waters, or for other purposes.</h4>
                            <p>The import requirements are laid down in <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2020/692.</p>
                            <p>A separate certificate must be issued for each species, molluscs (CN code 0307), crustaceans (CN code 0306) or fish (CN code 0301 10).</p>
                            <p>The health certificate for the entry into the Union of aquatic animals intended for certain aquaculture production businesses, for release into open waters or for purposes other than direct human consumption must conform to the model AQUA-ENTRY-ESTAB/RELEASE/OTHER drawn up in accordance with the model set out in Annex II to <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2020/2236, as last amended by <abbr lang="de-DE" title="Verordnung">Regulation</abbr> (<abbr lang="de-DE" title="Europäische Union">EU</abbr>) 2021/1471.</p>
                            <p>This veterinary certificate shall be completed in accordance with the explanatory notes on completion of certificates set out in Chapter 4 of Annex I to Commission Implementing Regulation<abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2020/2235.</p>
                            <p>Consignments of live aquatic animals of listed species may only be imported from third countries listed in Section A of Part 1 of Annex XXI to Regulation<abbr lang="de-DE" title="Europäische Union">(</abbr>EU) 2021/404, as amended by <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/1937.</p>
                            <p>The list of third countries or territories from which the receipt of consignments of molluscs and crustaceans of listed species intended for ornamental closed systems</p>
                            <p>is laid down in Annex XXI, Part 1, Section B of Regulation<abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/404, as amended by <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/1937.</p>


                            <h4> 2. live fish for immediate consumption</h4>
                            <p>Live fish for immediate consumption are considered fishery products.</p>
                            <p>The veterinary/official certificate to be used for live fish, live crustaceans and products derived from these animals intended for human consumption shall comply with the model FISH-CRUST-HC established in accordance with the model set out in Chapter 28 of Annex III to <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2020/2235, as amended by <abbr lang="de-DE" title="Verordnung">Regulation</abbr> (<abbr lang="de-DE" title="Europäische Union">EU</abbr>) 2021/1471.</p>
                            <p>The veterinary/official certificate to be used for live bivalve molluscs, echinoderms, tunicates, marine gastropods and products derived from these animals intended for human consumption shall comply with the model MOL-HC drawn up in accordance with the model set out in Chapter 31 of Annex III to Regulation<abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2020/2235, as amended by <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/1471.</p>
                            <p>Consignments of fishery products intended for human consumption shall originate from third countries listed in Annex IX to <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/405 <abbr lang="de-DE" title="in der geltenden Fassung">as</abbr> amended. Furthermore, fish from aquaculture may only be imported from third countries that have a residue monitoring plan approved by the <abbr lang="de-DE" title="Europäische Union">EU</abbr> (Decision 2011/163/EU as last amended by Commission Implementing Decision<abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/2315).</p>
                            <p>The establishments from which fishery products may be imported can be found at the web address: <a href="http://ec.europa.eu/food/safety/international_affairs/trade/non-eu-countries/index_en.htm">http://ec.europa.eu/food/safety/international_affairs/trade/non-eu-countries/index_en.htm</a>.</p>
                            <p>For third countries that have an agreement with the <abbr lang="de-DE" title="Europäische Union">EU</abbr>, such as New Zealand, Canada or the USA, separate conditions may be specified.</p>
                            <p>Please note that import restrictions and import bans may also exist due to other <abbr lang="de-DE" title="Europäische Union">EU</abbr> and national regulations such as financial regulations (e.g. customs) or due to species protection (CITES).</p>
                            <p>Information on customs law is available from the Federal Ministry of Finance on the homepage: <a href="https://www.bmf.gv.at/">https://www.bmf.gv.at/</a> under customs.</p>
                            <p>Information on species protection regulations can be found on the homepage of the Federal Ministry of Agriculture, Regions and Tourism (BMLRT) at: <a href="https://www.bmlrt.gv.at/umwelt/natur-artenschutz/internat_natur_artenschutz0/cites.html">https://www.bmlrt.gv.at/umwelt/natur-artenschutz/internat_natur_artenschutz0/cites.html</a></p>




                            <h4>Legal basis (to be applied in the latest valid version)</h4>
                            <ul>
                                <li><a href="https://eur-lex.europa.eu/legal-content/DE/TXT/?uri=CELEX%3A32016R0429">VO (EU) 2016/429</a></li>
                                <li><a href="https://eur-lex.europa.eu/eli/reg_impl/2020/2236/2021-09-18">Regulation (EU) 2020/2236, as amended by Regulation (EU) 2021/1471</a></li>
                                <li><a href="https://eur-lex.europa.eu/legal-content/DE/TXT/?uri=CELEX%3A32013R0576">Regulation (EU) No. 576/2013</a></li>
                                <li><a href="https://eur-lex.europa.eu/eli/reg_impl/2020/2235/oj">VO (EU) 2020/2235</a></li>
                                <li><a href="https://eur-lex.europa.eu/legal-content/DE/TXT/?uri=uriserv:OJ.L_.2021.114.01.0118.01.DEU">VO (EU) 2021/405 </a></li>
                                <li><a href="https://eur-lex.europa.eu/legal-content/DE/ALL/?uri=CELEX%3A32011D0163">Commission Decision 2011/163/EU</a></li>
                            </ul>


                            <h4>Important Internet addresses:</h4>
                            <ul>
                                <li><a href="/en/import/general-information">List of Austrian Border Inspection Posts and Common Health Entry Document (CED).</a></li>
                                <li>
                                    <p><a href="https://ec.europa.eu/food/animals/live-animals-trade-imports/aquaculture_en">Information can also be found on the homepage of the European Commission</a></p>
                                </li>
                            </ul>


                            <h4>Attention: Import ban!</h4>
                            <p>Due to phytosanitary measures, the import of certain snail species (genus Pomacea) is currently prohibited!</p>
                            <ul>
                                <li><a href="https://eur-lex.europa.eu/LexUriServ/LexUriServ.do?uri=OJ:L:2012:311:0014:0017:DE:PDF">Measures to protect against the introduction of the genus Pomacea BdK 2012/697/EU.</a></li>
                                <li><a href="https://www.ages.at/themen/schaderreger/apfelschnecke/">Information of the plant protection department of <abbr lang="de-DE" title="Agentur für Gesundheit und Ernährungssicherheit">AGES</abbr></a></li>
                            </ul>
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

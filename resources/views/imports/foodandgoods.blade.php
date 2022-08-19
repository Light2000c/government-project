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
                                        <li class="active"><a href="{{ route('foodandgoods') }}">Food and goods of animal origin</a></li>
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
                            <h4>Import controls on food and goods of animal origin</h4>
                            <p>Import controls on animals, food of animal origin and products of animal origin (including hunting trophies and other animal preparations) are harmonised throughout the <abbr lang="de-DE" title="Europäische Union ">EU</abbr>.</p>

                            <h4> Import of hunting trophies and other animal specimens into the European Union</h4>
                            <p>Since 1 March 2011, the currently valid regulations of <abbr lang="de-DE" title="Verordnung">Regulation </abbr>(EC) No. 1069/2009 and <abbr lang="de-DE" title="Verordnung ">Regulation</abbr> (<abbr lang="de-DE" title="Europäische Union ">EU</abbr>) No. 142/2011 for animal by-products have been in force. By-products also include hunting trophies and other animal preparations, the conditions for importation of which are in principle laid down in Section 5 of Chapter II of Annex XIV to <abbr lang="de-DE" title="Verordnung ">Regulation </abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 142/2011.</p>

                            <h4> Control obligation </h4>
                            <p>The import control of animals, foodstuffs of animal origin and products of animals (also includes hunting trophies and other animal preparations) is regulated uniformly for the entire <abbr lang="de-DE" title="Europäische Union ">EU</abbr>.</p>
                            <p>The consignments to be submitted to border veterinary control are laid down in the implementing Regulation <abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/632.</p>
                            <p>In order to make enforcement uniform for the authorities involved in border control, the <abbr lang="de-DE" title="Kombinierte Nomenklatur;">CN code</abbr> has been used as a basis. Hunting trophies are in principle tariffed under <abbr lang="de-DE" title="Kombinierte Nomenklatur">CN</abbr> codes 0505 or 0506 or 0507 or 4103 or 9705. This means that such consignments are subject to border veterinary controls, limited by the specific conditions laid down in <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union "> (EU</abbr>) No 142/2011 Annex XIII Chapter VI Section B and Section C point 1.</p>

                            <h4> No border veterinary control is required for: </h4>
                            <ul>
                                <li>game trophies from species other than ungulates and birds, if they come from an area where there are no restrictions due to serious transmissible diseases to which the species concerned are susceptible</li>
                                <li>game trophies of ungulates and birds which have undergone a complete taxidermy treatment ("stuffing")</li>
                                <li>game trophies of ungulates and birds which have been mounted and have undergone a treatment such that they no longer present a health risk</li>
                                <li>Hides and skins which have been fully tanned, wet blues (chrome tanned hides), pickled hides and skins</li>
                                <li>Limed hides (limed and salted for at least eight hours at a pH of 12 to 13)</li>
                                <li>Ungulates or birds or parts thereof which have undergone anatomical dissection (e.g. plastination)</li>
                                <li>insects or arachnids which have undergone treatment such as drying</li>
                                <li>Objects in natural history collections that are preserved in alcohol or formaldehyde or are completely enclosed in microscope slides</li>
                            </ul>

                            <h4> Border veterinary control required: </h4>

                            <h4> Conditions </h4>
                            <p>The conditions for the import of game trophies and other animal preparations are in principle laid down in Section 5 of Chapter II of Annex XIV to <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union "> (EU</abbr>) No 142/2011.</p>

                            <h4> Treated hunting trophies </h4>
                            <p>Treated hunting trophies (bones, horns, hooves, claws, antlers, teeth or hides) may be imported from any third country if:</p>
                            <p>1. the following treatments have been carried out:</p>
                            <ul>
                                <li>horns, hooves, claws, antlers and teeth must have been boiled and disinfected</li>
                                <li>bones must have been boiled and treated with hydrogen peroxide</li>
                                <li>hides and skins must have been either dried or salted at least 14 days before importation</li>
                            </ul>
                            <p>2. the game trophies have been individually packed in transparent sealed packages</p>
                            <p>3. the trophies are accompanied by a veterinary certificate in accordance with the model set out in Chapter 6(A) of Annex XV, as amended by <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union"> (EU</abbr>) No 294/2013.</p>
                            <p>The treatment must have taken place in an establishment registered and listed in the country of origin. The list of these establishments is published at the Internet address<span class="text-lang" lang="en-GB" dir="ltr">(Animal by-products</span>; <span class="text-lang" lang="en-GB" dir="ltr">Section</span> VI : <span class="text-lang" lang="en-GB" dir="ltr">Game trophies plants</span>):</p>
                            <p><a href="https://webgate.ec.europa.eu/sanco/traces/output/non_eu_listsPerActivity_en.htm" title="Europäische Kommission - Third Country Establishments">https://webgate.ec.europa.eu/sanco/traces/output/non_eu_listsPerActivity_en.htm</a></p>

                            <h4> Untreated hunting trophies </h4>
                            <p>Untreated game trophies must originate from a third country from which the importation into the European Union of all categories of fresh meat of the corresponding animal species from which the game trophy originates is permitted.</p>
                            <p>(1) Untreated parts of ungulates or birds as game trophies must be accompanied by a veterinary certificate in accordance with the model set out in Chapter 6(B) of Annex XV to <abbr lang="de-DE" title="Verordnung ">Regulation </abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 142/2011, as amended by <abbr lang="de-DE" title="Verordnung ">Regulation</abbr> (<abbr lang="de-DE" title="Europäische Union ">EU</abbr>) 2019/319.</p>
                            <p>2. the game trophies must be packed individually in transparent sealed packages</p>


                            <h4> Control</h4>
                            <p>The original veterinary certificates must accompany the consignment. If certificates consist of more than one sheet, they must be joined in a document-secure manner. The undersigned must delete any inapplicable passages. The colour of the signature and the official stamp shall be different from that of the printing. Certificates must be drawn up in the official language of the Member State in which the border veterinary inspection takes place. If this is not possible, the original certificate and an official translation into the relevant language shall be presented to the border veterinarian.</p>
                            <p>The border veterinary import control into the <abbr lang="de-DE" title="Europäische Union ">EU</abbr> (and thus also into Austria) takes place exclusively at the first border inspection post approved for this type of consignment (e.g. Vienna-Schwechat, Frankfurt, Amsterdam, Kukuriki etc.). The planned border crossing of the consignment must be announced to the border veterinarian at the border inspection post concerned one working day in advance (at the Austrian border at least 18 hours) by means of <a href="/fileadmin/daten/Dokumente/GGED-P_aus_VO_2019_1715.pdf">GGED-P</a> (Common Health Entry Document).</p>


                            <h4>Legal basis (to be applied in the latest valid version)</h4>
                            <ul>
                                <li><a href="https://eur-lex.europa.eu/legal-content/DE/ALL/?uri=celex%3A32009R1069">Regulation (EU) No. 1069/2009 (Basic Regulation on By-Products)</a></li>
                                <li><a href="https://eur-lex.europa.eu/legal-content/DE/ALL/?uri=CELEX%3A32011R0142">Regulation (EU) No 142/2011 (By-products Implementing Regulation)</a></li>
                            </ul>


                            <h4>Attention</h4>
                            <p>Please note that there may also be import restrictions and import bans due to other EU and national regulations such as financial regulations (e.g. customs) or due to species protection<span class="text-lang" lang="en-GB" dir="ltr">(CITES</span>), see for example the<a href="https://www.bmf.gv.at/themen/zoll/reise/einfuhrverbote-einfuhrbeschr%C3%A4nkungen/artenschutzrechtliche-beschraenkungen-tiere-pflanzen.html">website of the <abbr lang="de-DE" title="Bundesministerium für Finanzen">BMF</abbr></a>.</p>


                            <h4>Important internet addresses</h4>
                            <p>List of Austrian border inspection posts and GGED (Common Health Entry Document):</p>
                            <p><a href="/en/import/general-information">https://www.bavg.gv.at/einfuhr-import/allgemeine-informationen</a></p>
                            <p>Information on customs law is available from the Federal Ministry of Finance on the homepage: <a href="https://www.bmf.gv.at/" title="Bundesministerium für Finanzen ">https://www.bmf.gv.at/</a> under Findok and Zoll.</p>
                            <p>Information on species protection regulations can be found on the homepage of the <a href="https://www.bmlrt.gv.at/public.html" title="Bundesministerium für Landwirtschaft, Regionen und Tourismus">Federal Ministry of Agriculture, Regions and Tourism</a>.</p>


                            <h4>Imports into the European Union of animal blood, blood products and intermediate products not intended for human consumption or for feeding to farmed animals</h4>
                            <p>Animal blood and blood products (blood products) are subject to border veterinary controls without exception, but no import permit is required<abbr lang="de-DE" title="Verordnung ">(Regulation</abbr> (<abbr lang="de-DE" title="Europäische Union ">EU</abbr>) No. 142/2011). The planned border crossing of the consignment must be announced to the border veterinarian of the border inspection post concerned one working day in advance with the <a href="/fileadmin/daten/Dokumente/GGED-P_aus_VO_2019_1715.pdf">GGED-P</a> (Common Health Entry Document). The original veterinary certificates must be presented to the border veterinarians and must comply with the conditions laid down in Annex XV of <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 142/2011.</p>
                            <p>The import of specimen material for scientific purposes, even if it contains or consists of blood, is specifically regulated.</p>


                            <h4>Definitions</h4>
                            <p><strong>Blood</strong>: fresh whole blood</p>
                            <p><strong>Blood products</strong>: products derived from blood or blood fractions, including dried/frozen/liquid plasma, dried whole blood, dried/frozen/liquid red blood cells or fractions thereof and mixtures; excluding blood meal.</p>
                            <p><strong>Intermediate product</strong>: a derived product</p>
                            <ul>
                                <li>intended for uses in the manufacture of drugs, veterinary drugs, medical devices for medical and veterinary purposes, active implantable medical devices, in vitro diagnostic medical and veterinary devices, laboratory reagents, or cosmetic products as follows: 1) as a material in a manufacturing process or in the final production of a finished product; <em>or</em> 2) for validation or verification during a manufacturing process; <em>or </em>3) in the quality control of a finished product</li>
                                <li>whose development, processing and manufacturing stages have been completed to the extent that it qualifies as a derived product and that the material qualifies directly or as a component of a product for the purposes referred to in point (a);</li>
                                <li>which, however, requires some further handling or processing (e.g. mixing, coating, compounding or packaging) to make it suitable for placing on the market or use as a medicinal product, veterinary medicinal product, medical device for medical and veterinary use, active implantable medical device, in vitro diagnostic medical device for medical and veterinary use, laboratory reagent or cosmetic product.</li>
                            </ul>
                            <p><strong>derived products</strong>: means products obtained from animal by-products by one or more treatments, processing steps or transformation steps.</p>


                            <h4> Control</h4>
                            <p>Animal blood and blood products (blood products) are tariffed under <abbr lang="de-DE" title="Kombinierte Nomenklatur">CN code</abbr> 0511, 3002 or 3502 and are subject to border veterinary controls without exception. The border veterinary import control into the <abbr lang="de-DE" title="Europäische Union">EU</abbr> takes place at the first border inspection post approved for this type of consignment (e.g. Rotterdam, Hamburg, Amsterdam, Vienna Schwechat etc.).</p>
                            <p>The veterinary certificates must be issued in an official language of the Member State where the veterinary border inspection takes place and in the official language of the Member State of destination. The original veterinary certificates must be presented to the border veterinarian and comply with the conditions laid down in Annex XV to <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 142/2011.</p>
                            <p>The planned border crossing of the consignment must be announced to the border veterinarian of the border inspection post concerned one working day in advance by means of <a href="/fileadmin/daten/Dokumente/GGED-P_aus_VO_2019_1715.pdf">GGED-P </a>(Common Health Entry Document).</p>
                            <p>Blood and blood products must be taken immediately after border veterinary clearance without interruption to an establishment approved by the Member State concerned. The establishment must be the one specified in the CED. The competent official veterinarian must be informed of the arrival of the consignment at the place of destination by the person authorised to dispose of it.</p>
                        </div>
                        <li>intended for uses in the manufacture of drugs, veterinary drugs, medical devices for medical and veterinary purposes, active implantable medical devices, in vitro diagnostic medical and veterinary devices, laboratory reagents, or cosmetic products as follows: 1) as a material in a manufacturing process or in the final production of a finished product; <em>or</em> 2) for validation or verification during a manufacturing process; <em>or </em>3) in the quality control of a finished product</li>
                        <li>whose development, processing and manufacturing stages have been completed to the extent that it qualifies as a derived product and that the material qualifies directly or as a component of a product for the purposes referred to in point (a);</li>
                        <li>which, however, requires some further handling or processing (e.g. mixing, coating, compounding or packaging) to make it suitable for placing on the market or use as a medicinal product, veterinary medicinal product, medical device for medical and veterinary use, active implantable medical device, in vitro diagnostic medical device for medical and veterinary use, laboratory reagent or cosmetic product.</li>
                        </ul>
                        <p><strong>derived products</strong>: means products obtained from animal by-products by one or more treatments, processing steps or transformation steps.</p>


                        <h4>Import conditions</h4>
                        <p>The current version of Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 142/2011 lays down the conditions and the corresponding model certificates for the import of blood products, thus no veterinary import authorisation is required.</p>
                        <p>The import of specimen material for scientific purposes is specifically regulated, even if it contains or consists of blood.</p>



                        <h4>1. thoroughbred</h4>
                        <p>The import of fresh whole blood - except equidae - is not harmonised. A written import permit from the Federal Ministry of Social Affairs, Health, Care and Consumer Protection is required.</p>


                        <h4>2. blood products from animals other than horses</h4>
                        <p>The conditions for the importation of blood products, other than equine blood products, are set out in Annex XIV, Chapter II, Section 1, Table 2, point 2 and Section 2 of <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Euopäische Union ">(EU</abbr>) No 142/2011, as amended by <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 294/2013, the model certificate is set out for untreated blood products in Chapter 4(C) of Annex XV and for treated blood products in Chapter 4(D) of Annex XV to that <abbr lang="de-DE" title="Verordnung ">Regulation</abbr>, as amended by <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2019/319.</p>


                        <h4>Untreated blood products</h4>
                        <p>Untreated blood products of ungulates may only be imported from third countries or parts of third countries from which imports of meat of at least one species of domesticated cloven-hoofed animals are authorised in accordance with Part I of Annex XIII to Implementing Regulation<abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/404, as amended, and from which there is no meat import ban in accordance with columns 7 and 8, and from Japan.</p>
                        <p>After border veterinary inspection, untreated blood products from ungulates must be transported without interruption to an establishment of destination approved by the Member State concerned under the conditions laid down in Delegated Regulation (<abbr lang="de-DE" title="Europäische Union">EU</abbr>) 2019/1666 (Monitoring of the movement and arrival of consignments of certain commodities from the border inspection post of entry to the establishment of destination).</p>
                        <p>Untreated blood products of poultry and birds may only be imported from third countries listed in Part 1 of Annex XIV to Implementing Regulation<abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2021/404 and from Japan.</p>
                        <p>Untreated blood products from other animals may only be imported from third countries listed in Part I of Annex XIII or Part 1 of Annex XIV to the implementing Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2021/404 or in Annex V or Annex VI to <abbr lang="de-DE" title="Verordnung">Regulation</abbr> 2021/405 and from Japan.</p>


                        <h4>Treated blood products</h4>
                        <p>Treated animal blood products may only be imported from third countries listed in Part I of Annex XIII or Part 1 of Annex XIV to implementing Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2021/404 or in Annex V or in Annex VI to <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2021/405 and from Japan.</p>


                        <h4>3. blood and blood products of horses</h4>
                        <p>The conditions for the importation of equine blood products are laid down in Annex XIV, Chapter II, Section 1, Table 2, point 3 and Section 3 of <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 142/2011, as amended by <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 249/2013. Equine blood collected in accordance with point 1 of Chapter IV of Annex XIII or blood products prepared in accordance with point 2(b)(i) of Chapter IV of Annex XIII may only be imported from third countries from which imports of equidae for breeding and production are authorised in accordance with Annex IV to implementing Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2021/404.</p>
                        <p>Blood products treated in accordance with point 2(b)(ii) of Chapter IV of Annex XIII may be imported from countries listed in Part I of Annex II to <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 206/2010 from which imports of equidae meat are authorised.</p>
                        <p>For horse serum, the model certificate set out in Chapter 4(A) of Annex XV to <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 142/2011, as amended by <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 294/2013, shall be used.</p>



                        <h4>4. intermediate product</h4>
                        <p>The conditions for the import of intermediates are laid down in Annex XII to <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) No 142/2011, as amended by <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2015/9. Intermediate products may only be manufactured from Category 3 material with certain restrictions.</p>
                        <p>Intermediate products may be imported from countries that are members of the OIE.</p>
                        <p>Third countries must register or approve establishments producing intermediate products. These establishments are published on the <abbr lang="de-DE" title="Europäische Union">EU</abbr> website.</p>
                        <p>For intermediate products, the model declaration in Chapter 20 of Annex XV to Commission <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) No 142/2011 as last amended by Commission <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2019/319 must be used.</p>
                        <p>The outer packaging of the intermediate products must bear the words "FOR MEDICAL DEVICES / ANIMAL MEDICAL DEVICES / MEDICAL PRODUCTS FOR MEDICAL AND VETERINARY PURPOSES / ACTIVE IMPLANTABLE MEDICAL DEVICES / IN-VITRO DIAGNOSTICS FOR MEDICAL AND VETERINARY PURPOSES / LABORATORY REAGENTS / COSMETICS".</p>


                        <h4>5. reagents and diagnostics</h4>
                        <p>For finished laboratory reagents and in vitro diagnostic medical devices as defined in Annex I of <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) No 142/2011, which contain blood components, the conditions according to § 12 para. 2 of the VEVO 2019 shall be fulfilled during the border veterinary inspection.</p>


                        <h4>Legal basis (to be applied in the latest valid version):</h4>
                        <ul>
                            <li><a href="https://eur-lex.europa.eu/legal-content/DE/TXT/?uri=celex%3A32017R0625">VO (EU) No. 2017/625</a></li>
                            <li><a href="https://eur-lex.europa.eu/legal-content/DE/TXT/?uri=CELEX%3A32019R1666">Transport provisions Del. VO (EU) No. 2019/1666</a></li>
                            <li><a href="https://eur-lex.europa.eu/legal-content/DE/ALL/?uri=CELEX%3A32011R0142">Veterinary certificates VO (EU) No. 142/2011</a></li>
                            <li><a href="https://eur-lex.europa.eu/legal-content/DE/ALL/?uri=CELEX:32020R0692R(02)">Corrigendum to Del. VO (EU) No. 2020/692</a></li>
                            <li><a href="https://eur-lex.europa.eu/legal-content/DE/TXT/?uri=CELEX%3A02021R0404-20211111">List of countries VO (EU) No. 2021/404</a></li>
                        </ul>


                        <h4>Attention</h4>
                        <p>Please note that there may also be import restrictions and import bans due to other EU and national regulations such as financial regulations (e.g. customs) or due to species protection<span class="text-lang" lang="en-GB" dir="ltr">(CITES</span>), see for example the<a href="https://www.bmf.gv.at/themen/zoll/reise/einfuhrverbote-einfuhrbeschr%C3%A4nkungen/artenschutzrechtliche-beschraenkungen-tiere-pflanzen.html">website of the <abbr lang="de-DE" title="Bundesministerium für Finanzen">BMF</abbr></a>.</p>


                        <h4>Important internet addresses</h4>
                        <p>List of Austrian border inspection posts and GGED (Common Health Entry Document)</p>
                        <p><a href="/en/import/general-information">https://www.bavg.gv.at/einfuhr-import/allgemeine-informationen</a></p>
                        <p>Information on customs law is available from the Federal Ministry of Finance on the homepage: <a href="https://www.bmf.gv.at/" title="Bundesministerium für Finanzen ">https://www.bmf.gv.at/</a> under Findok and Zoll.</p>
                        <p>Information on species protection regulations can be found on the homepage of the <a href="https://www.bmlrt.gv.at/public.html" title="Bundesministerium für Landwirtschaft, Regionen und Tourismus ">Federal Ministry of Agriculture, Regions and Tourism (BMLRT)</a>.</p>


                        <h4> Import of samples, commercial specimens and exhibits not intended for human consumption into Austria</h4>
                        <p>Products of animal origin are subject to controls at the <abbr lang="de-DE" title="Europäische Union">EU</abbr> <abbr lang="de-DE" title="Europäische Union">external border</abbr> when imported into the EU from third countries on the basis of the relevant <abbr lang="de-DE" title="Europäische Union">EU</abbr> regulation. The control obligation is regulated for the entire Union<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) by the Implementing Regulation<abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2021/632. In order to make enforcement uniform for all authorities involved, the CN <abbr lang="de-DE" title="Kombinierte Nomenklatur">code</abbr>(customs tariff number) was chosen as the basis.</p>
                        <p>A distinction is made between the following consignments:</p>
                        <ul>
                            <li>Samples for research and diagnostic purposes</li>
                            <li>Commercial samples</li>
                            <li>Exhibits</li>
                        </ul>
                        <p>The conditions for samples for research and diagnostic purposes, trade samples and exhibits are laid down in <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No 142/2011 in Annex XIV Chapter III. For all consignments you need a certificate which has to be filled in according to the conditions of the sample as defined in <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No. 142/2011.</p>


                        <h4>Samples for research and diagnostic purposes</h4>
                        <p>This means animal by-products and derived products intended for the following purposes: Examination in the context of diagnosis or analysis to promote progress in science and technology in the context of educational or research activities.</p>
                        <p>Specific conditions for samples for research and diagnostic purposes are laid down in <abbr lang="de-DE" title="Verordnung ">Regulation</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) 2019/2122. For these samples, the national measures of the member states apply. In Austria, a written import authorisation from the Federal Ministry of Social Affairs, Health, Care and Consumer Protection is required.</p>
                        <p>To obtain such a permit, an informal application to the <abbr lang="de-DE" title="Bundesministerium für Soziales, Gesundheit, Pflege und Konsumentenschutz ">BMSGPK</abbr> is required, which must contain the following information:</p>
                        <ul>
                            <li>Type of goods/shipment</li>
                            <li>Country/ies of origin of the consignments</li>
                            <li>The exact destination of the consignments</li>
                            <li>the postal address of the applicant</li>
                            <li>and, for charging purposes, the UID number</li>
                        </ul>


                        <h4>Control and clearance</h4>
                        <p>The control shall be carried out either by the customs authorities or by the border veterinarians as specified in the notification.</p>


                        <h4>Conditions at destination</h4>
                        <p>The addressee of the decision is obliged to inform the competent district administrative authority without delay of the arrival of the consignment at the place of destination.</p>
                        <p>The packaging as well as unneeded sample material and waste generated during the processing of the samples shall be disposed of as prescribed in the authorisation.</p>


                        <h4>Trading patterns</h4>
                        <p>These are animal by-products or derived products intended for approved studies or analyses intended to carry out a manufacturing process, including the processing of animal by-products or derived products, or for the development of feed, petfood or derived products and the testing of machinery or equipment.</p>
                        <p>The products concerned are those falling within <abbr lang="de-DE" title="Kombinierte Nomenklatur">CN</abbr> codes 0511 91 and 0511 99 or 3001.</p>
                        <p>It should be noted that imports are only allowed from certain third countries. The list of these third countries can be found in <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) No. 142/2011 in Annex XIV Chapter II Section 1 Table 2 No. 14 and for milk, milk products and milk-based products in Annex I of <abbr lang="de-DE" title="Verordnung ">Regulation</abbr> (EC) No. 605/2010.</p>
                        <p>The model certificate for commercial samples is laid down in Chapter 8 of Annex XV.</p>
                        <p>The certificates shall comply with the conditions laid down in Annex XV to <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) No 142/2011 and the explanatory notes thereto shall be observed.</p>


                        <h4>Control and clearance</h4>
                        <p>The authority of the place of destination is notified via <span class="text-lang" lang="en-GB" dir="ltr">TRACES</span>.</p>
                        <p>Trade samples shall be transported directly to the approved or registered establishment or plant in accordance with <abbr lang="de-DE" title="Verordnung">Regulation</abbr><abbr lang="de-DE" title="Europäische Union">(EU</abbr>) 2019/1666 after the scheduled veterinary checks.</p>



                        <h4>Conditions at destination</h4>
                        <p>The person authorised to dispose of the consignment is obliged to inform the competent district administrative authority immediately of the arrival of the consignment at the place of destination. Appropriate information must be provided so that the consignment can be assigned to the CISG.</p>
                        <p>Disposal must be carried out in accordance with <abbr lang="de-DE" title="Verordnung ">Regulation</abbr> (EC) No. 1069/2009 and <abbr lang="de-DE" title="Verordnung ">Regulation</abbr> (<abbr lang="de-DE" title="Europäische Union ">EU</abbr>) No. 142/2011 as specified for the respective category.</p>


                        <h4>Exhibits</h4>
                        <p>These are animal by-products or derived products for exhibition purposes or artistic activities. Such consignments must be authorised by the authority of the country of destination. In Austria, this is done upon application by means of a written decision of the Federal Ministry of Social Affairs, Health, Care and Consumer Protection.</p>
                        <p>In order to obtain such an authorisation, an informal application to the <abbr lang="de-DE" title="Bundesministerium für Soziales, Gesundheit, Pflege und Konsumentenschutz">BMSGPK</abbr> is required, which must contain the following information:</p>
                        <ul>
                            <li>Type of goods/shipment</li>
                            <li>Country/ies of origin of the consignments</li>
                            <li>The exact destination of the consignments</li>
                            <li>the postal address of the applicant</li>
                            <li>and for charging purposes the UID number</li>
                        </ul>


                        <h4>Control and clearance</h4>
                        <p>For each consignment, a <a href="/fileadmin/daten/Dokumente/GGED-P_aus_VO_2019_1715.pdf">GGED-P</a> (Common Health Entry Document) must be issued at the time of clearance for import, and the competent authority for the place of destination is informed of the import by means of <span class="text-lang" lang="en-GB" dir="ltr">TRACES</span>.</p>
                        <p>If the clearance is for another member state of the <abbr lang="de-DE" title="Europäische Union">EU</abbr>, the fulfilment of the conditions set by an authorisation of the member state of destination is controlled.</p>



                        <h4>Conditions at destination</h4>
                        <p>The person authorised to dispose of the consignment is obliged to inform the competent district administrative authority immediately about the arrival of the consignment at the place of destination. Appropriate information is to be provided so that the consignment can be assigned to the CDF.</p>
                        <p>The waste generated during the processing of the samples must be disposed of as prescribed in the authorisation.</p>



                        <h4>Legal basis (to be applied in the latest valid version):</h4>
                        <ul>
                            <li><a href="https://eur-lex.europa.eu/legal-content/DE/TXT/?uri=celex%3A32017R0625">VO (EU) 2017/625</a></li>
                            <li><a href="https://eur-lex.europa.eu/legal-content/DE/ALL/?uri=CELEX%3A32019R2122">List of goods special controls VO (EU) 2019/2122</a></li>
                            <li><a href="https://eur-lex.europa.eu/legal-content/DE/ALL/?uri=celex%3A32009R1069">Hygiene rules Regulation (EC) No 1069/2009</a></li>
                            <li><a href="https://eur-lex.europa.eu/legal-content/de/TXT/?uri=CELEX%3A32011R0142">Veterinary certificates VO (EU) No 142/2011</a></li>
                        </ul>


                        <h4>Attention</h4>
                        <p>Please note that there may also be import restrictions and import bans due to other EU and national regulations such as financial regulations (e.g. customs) or due to species protection<span class="text-lang" lang="en-GB" dir="ltr">(CITES</span>), see for example the <a href="https://www.bmf.gv.at/themen/zoll/reise/einfuhrverbote-einfuhrbeschr%C3%A4nkungen/artenschutzrechtliche-beschraenkungen-tiere-pflanzen.html">website of the <abbr lang="de-DE" title="Bundesministerium für Finanzen">BMF</abbr></a>.</p>


                        <h4> Further information </h4>
                        <p>Information on customs law is available from the Federal Ministry of Finance on the homepage: <a href="https://www.bmf.gv.at/" title="Bundesministerium für Finanzen">https://www.bmf.gv.at/</a> under Findok and Zoll.</p>


                        <h4> Further information </h4>
                        <p>Information on customs law is available from the Federal Ministry of Finance on the homepage: <a href="https://www.bmf.gv.at/" title="Bundesministerium für Finanzen">https://www.bmf.gv.at/</a> under Findok and Zoll.</p>




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

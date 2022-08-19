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
                                        <li class="active"><a href="{{ route('faq') }}">Faq</a></li>
                                        <li><a href="{{ route('explanation') }}">Explanation of terms</a></li>
                                        <li><a href="{{ route('downloads') }}">Downloads</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-8">
                        <div class="services-details-content">
                            <h4>Faq</h4>


                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            I would like to take a dog/cat with me from my holiday to Austria/EU - Am I allowed to do so?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4> I would like to take a dog/cat with me from my holiday to Austria/EU - Am I allowed to do so?</h4>
                                            <p>I may only take a pet with me on holiday if all the legal requirements of the European Union are met. For an entry from a non-EU country (= third country), the following general points must be observed at the EU external border:</p>
                                            <ul>
                                                <li>For an entry, the animals basically need a microchip, a valid rabies vaccination, as well as certain examinations and official accompanying documents.</li>
                                                <li>The travelling animals are not intended to be the subject of a sale or transfer of ownership.</li>
                                                <li>The animals will be accompanied by the owner or an authorized person. If the pet animals are transported separately in time from the keeper, this transport may take place no more than 5 days before or after the keeper's journey.</li>
                                                <li>In principle, a maximum of 5 animals per person may be transported (certain exceptions are regulated).</li>
                                            </ul>
                                            <p>For more detailed information on the entry conditions, you will find an information sheet on the homepage of the Federal Office of Consumer:inside Health (BAVG) concerning the conditions and controls as well as a model certificate for the import of dogs, cats, ferrets and other pets: https: <a href="/en/import/living-animals/travel">//www.bavg.gv.at/einfuhr-import/lebende-tiere/privat-personen</a>.</p>
                                            <p>Pets in travel are in principle subject to control by the customs authorities. The animals carried must be actively presented to the customs authorities on entry, e.g. by following the exit marked in red at Vienna-Schwechat Airport.</p>
                                            <p>Legal basis: <abbr lang="de-DE" title="Verordnung ">VO</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No. 576/2013</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            I was offered a dog/cat from Serbia for purchase/adoption. The animal is younger than 7 months - can it be imported to Austria?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4> I was offered a dog/cat from Serbia for purchase/adoption. The animal is younger than 7 months - can it be imported to Austria?</h4>
                                            <p>Attention: Serbia is not an EU member state and is, like some other third countries, not recognized rabies-free!</p>
                                            <p>The import of dogs, cats or ferrets from Serbia under 7 months is not allowed, because they do not meet the import conditions into the EU. They neither meet the conditions for travel (= for private purposes) nor for commercial import (= for sale).</p>
                                            <p>An animal that meets the entry requirements is at least 7 months old because:</p>
                                            <ul>
                                                <li>a vaccination against rabies is possible from the 3rd month of life at the earliest and.</li>
                                                <li>30 days must pass after the first vaccination in order to be able to carry out a blood sample for the serological rabies test.</li>
                                                <li>only 3 months after this blood collection the entry may take place,</li>
                                                <li>certain accompanying documents are also required for entry.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            How many animals am I allowed to take with me when travelling?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>How many animals am I allowed to take with me when travelling?</h4>
                                            <p>A maximum of <strong>five </strong>pets/birds per person may be carried. This number may be exceeded if, for example, written proof is provided that the animals are entering the EU to participate in competitions, exhibitions or sporting events or to train for such events and are older than 6 months.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            Which documents (papers, documents) and vaccinations do I need for my pet in order to be able to go on holiday with it without worries?
                                    </h2>
                                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Which documents (papers, documents) and vaccinations do I need for my pet in order to be able to go on holiday with it without worries?</h4>
                                            <p>There are no border veterinary requirements on the Austrian side for leaving Austria (regardless of this, all laws and regulations relevant to animal welfare must always be complied with). <strong>But:</strong> Please note that animals may only re-enter Austria from a non-EU country (= third country) if they fulfil certain conditions.</p>
                                            <p>For more detailed information on entry conditions, you will find an <a href="/fileadmin/daten/Dokumente/Hunde_Katzen_Frettchen_gewerblich_BAVG.pdf">information sheet </a>on the homepage of the Federal Office of Consumer:inside Health<abbr lang="de-DE" title="Bundesamt für Verbraucher:innengesundheit">(BAVG</abbr>) regarding conditions and controls as well as a model certificate for the import of dogs, cats, ferrets and other pets.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                            What is an animal health certificate and why do I need it?
                                    </h2>
                                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>What is an animal health certificate and why do I need it?</h4>
                                            <p>An animal health certificate confirms that your pet has had all the necessary vaccinations and examinations and is in the required state of health to be allowed to enter the <abbr lang="de-DE" title="Europäische Union ">EU</abbr> from third countries. Without an animal health certificate, entry into the <abbr lang="de-DE" title="Europäische Union ">EU</abbr> is not possible. You should know the following points in order to have a valid certificate issued and to be able to travel without worries:</p>
                                            <ul>
                                                <li>The animal health certificate must be stamped and signed by the responsible official veterinarian:in who carries out the inspection in the country of origin.</li>
                                                <li>One certificate can be issued for a maximum of 5 animals carried at the same time.</li>
                                                <li>The animal health certificate must always be accompanied by a written declaration that the animal(s) is/are being carried for private purposes only.</li>
                                                <li>This certificate must not be older than 10 days at the time of entry into the Union.</li>
                                                <li>It can be used as a travel document within the <abbr lang="de-DE" title="Europäische Union ">EU</abbr> for a period of four months - the period starts with the control at the <abbr lang="de-DE" title="Europäische Union ">EU</abbr> external border.</li>
                                                <li>The period expires when the anti-rabies vaccination needs to be refreshed.</li>
                                            </ul>
                                            <p>More detailed information and a model certificate for importing dogs, cats, ferrets and other pets can be found <a href="/en/import/living-animals/import#c3933">here</a>.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                            Does the animal health certificate have to be issued by an official veterinarian?
                                    </h2>
                                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4> Does the animal health certificate have to be issued by an official veterinarian?</h4>
                                            <p>Yes, the certificate must be issued by an official veterinarian of the country of origin in English or German. The certificate may also be issued by an authorised veterinarian, in which case it must be endorsed by the competent authority of the country of dispatch.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                            When must the animal health certificate be issued?
                                    </h2>
                                    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>When must the animal health certificate be issued?</h4>
                                            <p>The period is set out in the model certificate, it is a maximum of 10 days before entry into the <abbr lang="de-DE" title="Europäische Union ">EU</abbr>.The period is set out in the model certificate, it is a maximum of 10 days before entry into the <abbr lang="de-DE" title="Europäische Union ">EU</abbr>. The period is specified in the model certificate and is no more than 10 days before entry into the <abbr lang="de-DE" title="Europäische Union ">EU</abbr>.</p>
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
                                            My animal travels by plane and first lands in another EU Member State before flying on to Austria - Where will my animal be checked?
                                    </h2>
                                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4> My animal travels by plane and first lands in another EU Member State before flying on to Austria - Where will my animal be checked?</h4>
                                            <p>The control takes place at the first border control point of the <abbr lang="de-DE" title="Europäische Union ">EU</abbr>. There is no further control at the Austrian border.</p>
                                            <p>Important: For entry into Austria or for travel within the <abbr lang="de-DE" title="Europäische Union ">EU</abbr>, a valid rabies vaccination (from certain countries including titer determination) and a clear identification of the animals are crucial for dogs and cats. In addition, certain documents must be carried along. Please inform yourself in advance on the subject of rabies vaccination for travel.</p>
                                            <p>A titer determination is made to determine whether there is sufficient vaccination protection after a vaccination.</p>
                                            <p>Attention: If the first border control point of the <abbr lang="de-DE" title="Europäische Union">EU</abbr> is at an external EU border, i.e. the animal is entering from a non-EU country (= third country), then a border veterinarian will decide whether your animal is eligible for entry. In this case, please inform yourself about the exact entry regulations into the <abbr lang="de-DE" title="Europäische Union">EU</abbr> to prevent your animal from not being allowed to enter.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                            Can an animal fly alone as &quot;baggage&quot;?
                                    </h2>
                                    <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Can an animal fly alone as &quot;baggage&quot;?</h4>
                                            <p>Yes, animals are allowed to fly alone in the cargo hold, provided that all conditions for travel are met.</p>
                                            <p>Important: If the pets are transported separately from the pet owner, this transport may take place a maximum of 5 days before or after the pet owner's journey.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse12">
                                            y dog/cat is from Malaysia, is there anything special I need to be aware of?
                                    </h2>
                                    <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>y dog/cat is from Malaysia, is there anything special I need to be aware of?</h4>
                                            <p>For dogs and cats from Malaysia additional requirements regarding the "Nipah disease" have to be fulfilled (Commission Decision 2006/146/EC), as an infection with the "Nipah disease" can lead to death in humans.</p>
                                            <p>In principle the import of dogs and cats would be prohibited, but if additional requirements are met the import is allowed (confirmation of no contact with pigs, farm of origin of the animal free of "Nipah" for at least 60 days, negative IgG-Elisa test in a laboratory approved by the Malaysian authorities not more than 10 days before export).</p>
                                            <p>This informal confirmation must be provided in addition to the model certificate.</p>
                                            <p>The Decision can be found in the Official Journal of the European Union 2006/146/EC.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                            My cat is from Australia, is there anything special I need to be aware of?
                                    </h2>
                                    <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>My cat is from Australia, is there anything special I need to be aware of?</h4>
                                            <p>For cats from Australia additional requirements concerning the "Hendra disease" have to be fulfilled (Commission Decision 2006/146/EC), as an infection with the "Hendra disease" can lead to death in humans.</p>
                                            <p>In principle, the import of dogs and cats would be prohibited, but if additional requirements are met, the import is allowed (farm of origin of the cat free of "Hendra" for at least 60 days).</p>
                                            <p>This informal confirmation must be provided in addition to the model certificate.</p>
                                            <p>The decision can be found in the Official Journal of the European Union 2006/146/EC.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                            Which authority in the USA can I contact regarding the issuance of an animal certificate?
                                    </h2>
                                    <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4> Which authority in the USA can I contact regarding the issuance of an animal certificate?</h4>
                                            <p>The best way to find out how the administration is organised is to ask in the USA. There may be different regulations in the individual states and it is advisable to contact the office of the "National Import Export Services" of the state from which the pet is being shipped in advance. You can also find out what the customs are at that airport.</p>
                                            <p></p>
                                            <p>For more information on shipping pets from the U.S., contact the Animal and Plant Health Inspection Service at: <a href="https://www.aphis.usda.gov/aphis/home/">www.aphis.usda.gov/aphis/home/</a>.</p>
                                            <ul>
                                                <li><a href="https://www.aphis.usda.gov/aphis/pet-travel" title="Animal and Plant Health Inspection Service - Pet Travel ">Travel with Live Animals and Pets</a></li>
                                                <li><a href="https://www.aphis.usda.gov/aphis/pet-travel/take-pet-to-foreign-country" title="Animal and Plant Health Inspection Service">Regulations and Assessments</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                            I&#039;m worried that the chip can&#039;t be read.
                                    </h2>
                                    <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>I&#039;m worried that the chip can&#039;t be read.</h4>
                                            <p>Customs officials at the airport are generally equipped with devices that can read a wide variety of makes. If in doubt, you should bring your own reader.</p>
                                        </div>
                                    </div>
                                </div>


                                <h4>FAQs zum Thema Tollwutimpfung und serologische Titerbestimmung</h4>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                            How long is the rabies vaccination valid and when do I have to have it refreshed?
                                    </h2>
                                    <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>How long is the rabies vaccination valid and when do I have to have it refreshed?</h4>
                                            <p>The validity depends on the approval of the vaccine in each state where the vaccination is carried out. Check with your licensed veterinarian about the validity of the vaccination.</p>
                                            <p>Attention: For travel, the validity of the rabies vaccination begins no earlier than 21 days after vaccination.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                            Does my pet need any other vaccination besides rabies?
                                    </h2>
                                    <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Does my pet need any other vaccination besides rabies?</h4>
                                            <p>No other vaccinations are officially required for entry into Austria.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                            I have lost proof of previous vaccinations. Is it enough to show only the last rabies vaccination?
                                    </h2>
                                    <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4> I have lost proof of previous vaccinations. Is it enough to show only the last rabies vaccination?</h4>
                                            <p>The last vaccination is the most important. If you cannot prove any of the previous vaccinations, this is considered the first vaccination. It must therefore have been carried out at least 21 days before leaving the country of origin or before entering Austria/EU.</p>
                                            <p>Please also note that a new titer determination is required here.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                            Where must the rabies titer determination (serological rabies test) be carried out?
                                    </h2>
                                    <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Where must the rabies titer determination (serological rabies test) be carried out?</h4>
                                            <p>The blood sample must be tested in a laboratory approved by the <abbr lang="de-DE" title="Europäische Union ">EU</abbr>. This laboratory may be located in the <abbr lang="de-DE" title="Europäische Union ">EU</abbr> or in a third country.</p>
                                            <p>The blood sample must be taken by a veterinarian at the earliest 30 days after vaccination. After the blood sample has been taken, the animal must wait at least 3 months before a health certificate for travel can be issued.</p>
                                            <p>Legal basis: <abbr lang="de-DE" title="Verordnung ">VO</abbr><abbr lang="de-DE" title="Europäische Union ">(EU</abbr>) No. 576/2013 Annex IV</p>
                                            <p>Further information can be found <a href="/en/import/living-animals/travel">here</a>.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                            Do I have to have the rabies titer determination (serological rabies test) if the animals have been regularly vaccinated?
                                    </h2>
                                    <div id="collapse21" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4> Do I have to have the rabies titer determination (serological rabies test) if the animals have been regularly vaccinated?</h4>
                                            <p>For cats from Australia additional requirements concerning the "Hendra disease" have to be fulfilled (Commission Decision 2006/146/EC), as an infection with the "Hendra disease" can lead to death in humans.</p>
                                            <p>In principle, the import of dogs and cats would be prohibited, but if additional requirements are met, the import is allowed (farm of origin of the cat free of "Hendra" for at least 60 days).</p>
                                            <p>This informal confirmation must be provided in addition to the model certificate.</p>
                                            <p>The decision can be found in the Official Journal of the European Union 2006/146/EC.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                                            What do I have to do if no laboratory is approved for rabies titre determination in the country of origin?
                                    </h2>
                                    <div id="collapse22" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4> What do I have to do if no laboratory is approved for rabies titre determination in the country of origin?</h4>
                                            <p>In this case, another EU-approved laboratory in another third country or in the <abbr lang="de-DE" title="Europäische Union ">EU</abbr> must be chosen for the rabies serological test.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                            Does the blood sample have to be tested in Austria if the destination of the animals is Austria?
                                    </h2>
                                    <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Does the blood sample have to be tested in Austria if the destination of the animals is Austria?</h4>
                                            <p>No. The blood sample must be tested in a laboratory approved by the <abbr lang="de-DE" title="Europäische Union ">EU</abbr>. This laboratory can be located in the <abbr lang="de-DE" title="Europäische Union ">EU</abbr> or in a third country.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                            Animals may be imported from the third countries listed without undergoing a serological rabies test (rabies titre determination):
                                    </h2>
                                    <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h4>Animals may be imported from the third countries listed without undergoing a serological rabies test (rabies titre determination):</h4>
                                            <ul>
                                                <li>Antigua and Barbuda</li>
                                                <li>Argentina</li>
                                                <li>Aruba</li>
                                                <li>Ascension</li>
                                                <li>Australia</li>
                                                <li>Bahrain</li>
                                                <li>Barbados</li>
                                                <li>Bermuda</li>
                                                <li>Bonaire, St. Eustace and Saba (the Caribbean Netherlands)</li>
                                                <li>Bosnia and Herzegovina</li>
                                                <li>British Virgin Islands</li>
                                                <li>Chile</li>
                                                <li>Curaçao</li>
                                                <li>Falkland Islands</li>
                                                <li>Fiji</li>
                                                <li>French Polynesia</li>
                                                <li>Hong Kong</li>
                                                <li>Jamaica</li>
                                                <li>Japan</li>
                                                <li>Cayman Islands</li>
                                                <li>Canada</li>
                                                <li>Malaysia</li>
                                                <li>Mauritius</li>
                                                <li>Mexico</li>
                                                <li>Montserrat</li>
                                                <li>New Caledonia</li>
                                                <li>New Zealand</li>
                                                <li>North Macedonia</li>
                                                <li>Russia</li>
                                                <li>Singapore</li>
                                                <li>Sint Maarten</li>
                                                <li>St. Helena</li>
                                                <li>St. Kitts and Nevis</li>
                                                <li>Saint Lucia</li>
                                                <li>Saint Pierre and Miquelon</li>
                                                <li>Saint Vincent and the Grenadines</li>
                                                <li>Taiwan</li>
                                                <li>Trinidad and Tobago</li>
                                                <li>Vanuatu</li>
                                                <li>United Arab Emirates</li>
                                                <li>United States of America (including American Samoa, Guam, Northern Mariana Islands, Puerto Rico and U.S. Virgin Islands)</li>
                                                <li>Wallis and Futuna</li>
                                                <li>Belarus</li>
                                            </ul>
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

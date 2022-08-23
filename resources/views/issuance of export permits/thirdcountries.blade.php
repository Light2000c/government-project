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
                            <h4>Third Countries</h4>

                            <h4>The following countries currently require at least a partial export license (as of 10/12/2021):</h4>
                            <p></p><ul> 	<li>Brazil</li> 	<li>Chile</li> 	<li>PR China</li> 	<li>Costa Rica</li> 	<li>Hong Kong</li> 	<li>Japan</li> 	<li>Canada</li> 	<li>Colombia</li> 	<li>Malaysia</li> 	<li>Panama</li> 	<li>Philippines</li> 	<li>Singapore</li> 	<li>South Africa</li> 	<li>South Korea (Republic of Korea)</li> 	<li>Taiwan</li> 	<li>USA</li> 	<li>United Arab Emirates</li> 	<li>Vietnam</li> </ul>

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

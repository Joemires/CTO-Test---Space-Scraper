<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Space | Data Automation filtering</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="./assets/css/vendor.min.css">

    <!-- CSS Space Template -->
    <link rel="stylesheet" href="./assets/css/theme.min.css?v=1.0">

    <link href="https://cdn.staticaly.com/gh/hung1001/font-awesome-pro/4cac1a6/css/all.css" rel="stylesheet" type="text/css">
    {{-- <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.5.1/build/styles/default.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/styles/base16/google-dark.min.css" integrity="sha512-V2tyuo9QXO1DSka4nuMX7wAMMao8h0LQ4cOfDX+I0PkVNiCTwwZ2Ouhh7v7Xirhs/9tKbNMocaGZS6oNuZb/dw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/styles/base16/solarized-dark.min.css" integrity="sha512-kBHeOXtsKtA97/1O3ebZzWRIwiWEOmdrylPrOo3D2+pGhq1m+1CroSOVErIlsqn1xmYowKfQNVDhsczIzeLpmg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/styles/atom-one-dark.min.css" integrity="sha512-Jk4AqjWsdSzSWCSuQTfYRIF84Rq/eV0G2+tu07byYwHcbTGfdmLrHjUSwvzp5HvbiqK4ibmNwdcG49Y5RGYPTg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .code-toolbar .toolbar {
            display: none
        }
        pre code.hljs {
            white-space: pre-wrap;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <!-- ========== HEADER ========== -->
    <header id="header" class="navbar navbar-expand-lg navbar-light navbar-end bg-white">
        <div class="container">
            <nav class="js-mega-menu navbar-nav-wrap">
                <!-- Default Logo -->
                <a class="navbar-brand" href="./index.html" aria-label="Space">
                    <img class="navbar-brand-logo" src="./assets/svg/logos/logo.svg" alt="Image Description">
                </a>
                <!-- End Default Logo -->

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-default">
                        <i class="bi-list"></i>
                    </span>
                    <span class="navbar-toggler-toggled">
                        <i class="bi-x"></i>
                    </span>
                </button>
                <!-- End Toggler -->

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <!-- Landings -->
                        <li class="nav-item">
                            <a id="landingsMegaMenu" class="nav-link active" aria-current="page" href="#" role="button"
                                aria-expanded="false">Home</a>
                        </li>
                        <!-- End Landings -->


                        <li class="nav-divider"></li>

                        <!-- Log in -->
                        <li class="nav-item">
                            <a class="js-animation-link btn btn-ghost-secondary btn-no-focus me-2 me-lg-0"
                                href="javascript:;" role="button" data-bs-toggle="modal" data-bs-target="#signupModal"
                                data-hs-show-animation-options='{
                           "targetSelector": "#signupModalFormLogin",
                           "groupName": "idForm"
                         }'>Log in</a>

                            <a class="js-animation-link d-lg-none btn btn-primary" href="javascript:;" role="button"
                                data-bs-toggle="modal" data-bs-target="#signupModal" data-hs-show-animation-options='{
                           "targetSelector": "#signupModalFormSignup",
                           "groupName": "idForm"
                         }'>
                                <i class="bi-person-circle me-1"></i> Sign up
                            </a>
                        </li>
                        <!-- End Log in -->

                        <!-- Sign up -->
                        <li class="nav-item">
                            <a class="js-animation-link d-none d-lg-inline-block btn btn-primary" href="javascript:;"
                                role="button" data-bs-toggle="modal" data-bs-target="#signupModal"
                                data-hs-show-animation-options='{
                           "targetSelector": "#signupModalFormSignup",
                           "groupName": "idForm"
                         }'>
                                <i class="bi-person-circle me-1"></i> Sign up
                            </a>
                        </li>
                        <!-- End Sign up -->
                    </ul>
                </div>
                <!-- End Collapse -->
            </nav>
        </div>
    </header>

    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Hero -->
        <div class="bg-primary-dark position-relative overflow-hidden">
            <div class="container content-space-2">
                <div class="row justify-content-center align-items-lg-center">
                    <div class="col-md-8 col-lg-6 mb-7 mb-lg-0">
                        <!-- Heading -->
                        <div class="pe-lg-3 mb-7">
                            <h1 class="display-3 text-white mb-3 mb-md-5">
                                Filter Data for
                                <br>
                                <span class="text-warning">
                                    <span class="js-typedjs" data-hs-typed-options='{
                            "strings": ["team.", "startup.", "business."],
                            "typeSpeed": 90,
                            "loop": true,
                            "backSpeed": 30,
                            "backDelay": 2500
                          }'></span>
                                </span>
                            </h1>
                            <p class="lead text-white-70">Built on standard web technology, teams use Space to build
                                beautiful cross-platform hybrid apps in a fraction of the time.</p>
                        </div>
                        <!-- End Heading -->

                        <div class="row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <!-- Info Block -->
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <span class="svg-icon text-white">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M22.1671 18.1421C22.4827 18.4577 23.0222 18.2331 23.0206 17.7868L23.0039 13.1053V5.52632C23.0039 4.13107 21.8729 3 20.4776 3H8.68815C7.2929 3 6.16183 4.13107 6.16183 5.52632V9H13C14.6568 9 16 10.3431 16 12V15.6316H19.6565L22.1671 18.1421Z"
                                                    fill="#035A4B" />
                                                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M1.98508 18V13C1.98508 11.8954 2.88051 11 3.98508 11H11.9851C13.0896 11 13.9851 11.8954 13.9851 13V18C13.9851 19.1046 13.0896 20 11.9851 20H4.10081L2.85695 21.1905C2.53895 21.4949 2.01123 21.2695 2.01123 20.8293V18.3243C1.99402 18.2187 1.98508 18.1104 1.98508 18ZM5.99999 14.5C5.99999 14.2239 6.22385 14 6.49999 14H11.5C11.7761 14 12 14.2239 12 14.5C12 14.7761 11.7761 15 11.5 15H6.49999C6.22385 15 5.99999 14.7761 5.99999 14.5ZM9.49999 16C9.22385 16 8.99999 16.2239 8.99999 16.5C8.99999 16.7761 9.22385 17 9.49999 17H11.5C11.7761 17 12 16.7761 12 16.5C12 16.2239 11.7761 16 11.5 16H9.49999Z"
                                                    fill="#035A4B" />
                                            </svg>

                                        </span>
                                    </div>

                                    <div class="flex-grow-1 ms-4">
                                        <h6 class="text-white mb-0">24 hours</h6>
                                        <p class="text-white-70">Delivery Status</p>
                                    </div>
                                </div>
                                <!-- End Info Block -->
                            </div>
                            <!-- End Col -->

                            <div class="col-sm-6">
                                <!-- Info Block -->
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <span class="svg-icon text-white">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M4.875 20.75C4.63542 20.75 4.39583 20.6542 4.20417 20.4625L2.2875 18.5458C1.90417 18.1625 1.90417 17.5875 2.2875 17.2042C2.67083 16.8208 3.29375 16.8208 3.62917 17.2042L4.875 18.45L8.0375 15.2875C8.42083 14.9042 8.99583 14.9042 9.37917 15.2875C9.7625 15.6708 9.7625 16.2458 9.37917 16.6292L5.54583 20.4625C5.35417 20.6542 5.11458 20.75 4.875 20.75Z"
                                                    fill="#035A4B" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M5 3C3.34315 3 2 4.34315 2 6V11.865C3.04486 11.3127 4.23591 11 5.5 11C9.47412 11 12.7263 14.091 12.9836 18H18.0249L20.3178 20.2929C20.9478 20.9229 22.0249 20.4767 22.0249 19.5858V15L22 15.0098L22 15V6C22 4.34315 20.6569 3 19 3H5ZM6 7C5.44772 7 5 7.44772 5 8C5 8.55228 5.44771 9 6 9H15C15.5523 9 16 8.55228 16 8C16 7.44772 15.5523 7 15 7H6Z"
                                                    fill="#035A4B" />
                                            </svg>

                                        </span>
                                    </div>

                                    <div class="flex-grow-1 ms-4">
                                        <h6 class="text-white mb-0">92%</h6>
                                        <p class="text-white-70">Satisfaction rate</p>
                                    </div>
                                </div>
                                <!-- End Info Block -->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Col -->

                    <div class="col-md-8 col-lg-6">
                        <div class="ps-lg-5">
                            <!-- Card -->
                            <div class="card card-lg">
                                <div class="card-body">
                                    <div class="row align-items-sm-center mb-5">
                                        <div class="col-sm-auto order-sm-2 mb-3 mb-sm-0">
                                            <img class="avatar avatar-xxl avatar-4x3"
                                                src="./assets/svg/illustrations/oc-chatting.svg"
                                                alt="Image Description">
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm">
                                            <h5 class="card-title">Selector Finder</h5>
                                            <p class="card-text">Hundreds of companies using Space to build their
                                                business.</p>
                                        </div>
                                        <!-- End Col -->
                                    </div>
                                    <!-- End Row -->

                                    <form method="POST" action="api/queue/scrap">
                                        @csrf
                                        <!-- Form -->
                                        <div class="form-group mb-4">
                                            <label class="form-label" for="registerEmail">URL</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text text-success bg- rounded-0 h-100">
                                                        <i class="fad fa-lock"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control form-control-lg" name="url"
                                                    id="registerName" placeholder="https://jumia.com.ng"
                                                    aria-label="https://jumia.com.ng" required data-msg="."
                                                    style="font-size: 16px">
                                            </div>
                                        </div>
                                        <!-- End Form -->

                                        <!-- Form -->
                                        <div class="form-group mb-4">
                                            <label class="form-label" for="registerEmail">Selector</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text text-success bg- rounded-0 h-100">
                                                        <i class="fad fa-file"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control form-control-lg" name="selector"
                                                    id="registerEmail" placeholder="#price" aria-label="#price" required
                                                    data-msg="Please enter a valid email address."
                                                    style="font-size: 16px">
                                            </div>
                                        </div>
                                        <!-- End Form -->

                                        <div class="d-grid text-center">
                                            <button type="submit" class="btn btn-primary btn-lg">Query Result</button>
                                            <span class="form-text">Need help?
                                                <a class="link" href="#">Visit our Help
                                                    Center <i class="bi-chevron-right small ms-1"></i></a>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <!-- Background Shapes -->
            <div class="position-absolute top-0 end-0">
                <img src="./assets/svg/components/shape-3-soft-light.svg" alt="SVG" width="500">
            </div>
            <div class="position-absolute bottom-0 end-0 me-10">
                <img src="./assets/svg/components/shape-1-soft-light.svg" alt="SVG" width="250">
            </div>
            <div class="position-absolute bottom-0 start-0">
                <img src="./assets/svg/components/shape-2-soft-light.svg" alt="SVG" width="400">
            </div>
            <!-- End Background Shapes -->
        </div>
        <!-- End Hero -->

        <div class="border-bottom" id="alert-center">
            <div class="container py-4" style="display: none;">
            </div>
        </div>



        <!-- List -->
        <div class="container content-space-1" id="scrapper-list">
            <div class="w-lg-75 mx-lg-auto">
                <div class="row">
                    <div id="stickyBlockStartPoint" class="col-md-4 mb-3 mb-md-0">
                        <!-- Navbar -->
                        <div class="navbar-expand-md">
                            <!-- Navbar Toggle -->
                            <div class="d-grid">
                                <button type="button" class="navbar-toggler btn btn-white mb-3"
                                    data-bs-toggle="collapse" data-bs-target="#navbarVerticalNavMenu"
                                    aria-label="Toggle navigation" aria-expanded="false"
                                    aria-controls="navbarVerticalNavMenu">
                                    <span class="d-flex justify-content-between align-items-center">
                                        <span class="h6 mb-0">Nav menu</span>

                                        <span class="navbar-toggler-default">
                                            <i class="bi-list"></i>
                                        </span>

                                        <span class="navbar-toggler-toggled">
                                            <i class="bi-x"></i>
                                        </span>
                                    </span>
                                </button>
                            </div>
                            <!-- End Navbar Toggle -->

                            <!-- Navbar Collapse -->
                            <div id="navbarVerticalNavMenu" class="collapse navbar-collapse">
                                <!-- Sticky Block -->
                                <div class="js-sticky-block" data-hs-sticky-block-options='{
                                    "parentSelector": "#stickyBlockStartPoint",
                                    "targetSelector": "#header",
                                    "breakpoint": "md",
                                    "startPoint": "#stickyBlockStartPoint",
                                    "endPoint": "#stickyBlockEndPoint",
                                    "stickyOffsetTop": 20
                                    }'>
                                    <!-- List -->
                                    <ul class="nav nav-link-gray nav-tabs nav-vertical">
                                        {{-- @foreach ($scraps->groupBy('selector')->keys() as $selector)
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase {{ $loop->index == 0 ? 'active' : '' }}" href="#">{{ $selector }}</a>
                                        </li>
                                        @endforeach --}}
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase active" href="#"> {{ $scraps->currentPage()  }} of {{ $scraps->lastPage() }} Pages <br> <small class="text-muted text-lowercase d-block mt-2" style="font-size: 14px"> {{ $scraps->count() }} {{ Str::plural('Item', $scraps->count()) }}</small></a>
                                        </li>
                                    </ul>
                                    <!-- End List -->
                                </div>
                                <!-- End Sticky Block -->
                            </div>
                            <!-- End Navbar Collapse -->
                        </div>
                        <!-- End Navbar -->
                    </div>
                    <!-- End Col -->

                    <div class="col-md-8">
                        <!-- List -->
                        <ul class="list-unstyled list-py-2">
                            @foreach ($scraps as $scrap)
                            <li>
                                <!-- Media -->
                                <div class="d-sm-flex">
                                    <div class="flex-shrink-0 mb-3 mb-sm-0">
                                        <span class="svg-icon svg-icon-sm text-primary">
                                            <i class="fad fa-lock"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-sm-3">
                                        <div class="mb-1">
                                            <span class="text-cap text-success">{{ $scrap->url }} - <small class="text-dark"> {{ $scrap->created_at->diffForHumans() }} </small> </span>
                                            <h5>{{ $scrap->selector }}</h5>
                                            <pre>
                                                <code class="language-html">
                                                    {{ tidy($scrap->html) }}
                                                </code>
                                            </pre>
                                        </div>

                                        {{-- <a class="link" href="./page-help-center-article.html">Copy
                                            <i class="far fa-clipboard small ms-1"></i>
                                        </a> --}}
                                    </div>

                                </div>
                                <!-- End Media -->
                            </li>
                            <li class="border-top my-5"></li>
                            @endforeach

                        </ul>
                        <!-- End List -->

                        <!-- End Sticky End Point -->
                        <div id="stickyBlockEndPoint"></div>

                        {{ $scraps->links('vendor.pagination.default') }}

                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
        </div>
        <!-- End List -->

        <div class="border-top mx-auto" style="max-width: 100%;"></div>

        <!-- FAQ -->
        <div class="container content-space-t-1 content-space-t-md-3">
            <!-- Heading -->
            <div class="w-lg-50 text-center mx-lg-auto mb-7">
                <h3>Frequently Asked Questions</h3>
            </div>
            <!-- End Heading -->

            <div class="w-md-75 w-lg-65 mx-md-auto">
                <!-- Card -->
                <div class="card card-lg">
                    <div class="card-body">
                        <!-- Accordion -->
                        <div class="accordion accordion-flush" id="accordionFAQ">
                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingOne">
                                    <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        What methods of payments are supported?
                                    </a>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        You can purchase the themes on Bootstrap Themes via any major credit/debit card
                                        (via Stripe) or with your Paypal account. We don't support cryptocurrencies or
                                        invoicing at this time.
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordion Item -->

                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingTwo">
                                    <a class="accordion-button" role="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        Can I cancel at anytime?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse show"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        If you'd like a refund please reach out to us at <a
                                            href="#">themes@getbootstrap.com</a>. If you need technical help with the
                                        theme before a refund please reach out to the seller first and they can get in
                                        touch
                                        with us if they're unable to resolve the issue.
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordion Item -->

                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingThree">
                                    <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        How do I get a receipt for my purchase?
                                    </a>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        You'll receive an email from Bootstrap themes once your purchase is complete.
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordion Item -->

                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour">
                                    <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Which license do I need?
                                    </a>
                                </div>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        There are three license types - <a href="#">Standard</a>, <a
                                            href="#">Multisite</a>, and <a href="#">Extended</a>. We've provided the
                                        table below for a quick look at the difference between the them, as well as a
                                        few examples of ways each license could be used. If you'd like more of the
                                        nitty-gritty details you can find them below and always feel free to reach out
                                        with any questions you have at <a href="#">themes@getbootstrap.com</a>.
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordion Item -->
                        </div>
                        <!-- End Accordion -->
                    </div>

                    <div class="card-footer bg-soft-warning text-center">
                        <p class="mb-0">Still have questions?</p>
                        <a class="link" href="#">Contact our friendly support team <i
                                class="bi-chevron-right small ms-1"></i></a>
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
        <!-- End FAQ -->

        <!-- Shape -->
        <div class="shape-container">
            <div class="shape shape-bottom text-primary-dark">
                <svg width="3000" height="400" viewBox="0 0 3000 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 400H3000V0L0 400Z" fill="#fff" />
                </svg>
            </div>
        </div>
        <!-- End Shape -->

        <!-- Clients -->
        <div class="bg-primary-dark">
            <div class="container content-space-b-1 content-space-t-2">
                <!-- Heading -->
                <div class="text-center mb-4">
                    <h5 class="text-white">Thousands of world’s leading companies trust Space</h5>
                </div>
                <!-- End Heading -->

                <div class="row">
                    <div class="col py-3">
                        <img class="avatar avatar-xl avatar-4x3" src="./assets/svg/brands/vidados-white.svg"
                            alt="Logo">
                    </div>
                    <!-- End Col -->

                    <div class="col py-3">
                        <img class="avatar avatar-xl avatar-4x3" src="./assets/svg/brands/fitbit-white.svg" alt="Logo">
                    </div>
                    <!-- End Col -->

                    <div class="col py-3">
                        <img class="avatar avatar-xl avatar-4x3" src="./assets/svg/brands/forbes-white.svg" alt="Logo">
                    </div>
                    <!-- End Col -->

                    <div class="col py-3">
                        <img class="avatar avatar-xl avatar-4x3" src="./assets/svg/brands/mailchimp-white.svg"
                            alt="Logo">
                    </div>
                    <!-- End Col -->

                    <div class="col py-3">
                        <img class="avatar avatar-xl avatar-4x3" src="./assets/svg/brands/layar-white.svg" alt="Logo">
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
        </div>
        <!-- End Clients -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER ========== -->
    <footer class="bg-primary-dark border-top border-white-10">
        <div class="container">
            <div class="row content-space-1">
                <div class="col-lg-3 mb-7 mb-lg-0">
                    <!-- Logo -->
                    <div class="mb-5">
                        <a class="navbar-brand" href="{{ url('/') }}" aria-label="Space">
                            <img class="navbar-brand-logo" src="./assets/svg/logos/logo-white.svg"
                                alt="Image Description">
                        </a>
                    </div>
                    <!-- End Logo -->

                    <span class="d-block">
                        <label for="selectLanguage" class="form-label text-white">Choose language</label>
                    </span>

                    <!-- Button Group -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-soft-light btn-sm dropdown-toggle" id="selectLanguage"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="d-flex align-items-center">
                                <img class="avatar avatar-xss avatar-circle me-2"
                                    src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description"
                                    width="16" />
                                <span>English (US)</span>
                            </span>
                        </button>

                        <div class="dropdown-menu">
                            <a class="dropdown-item d-flex align-items-center active" href="#">
                                <img class="avatar avatar-xss avatar-circle me-2"
                                    src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description"
                                    width="16" />
                                <span>English (US)</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <img class="avatar avatar-xss avatar-circle me-2"
                                    src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Image description"
                                    width="16" />
                                <span>English (UK)</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <img class="avatar avatar-xss avatar-circle me-2"
                                    src="./assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Image description"
                                    width="16" />
                                <span>Deutsch</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <img class="avatar avatar-xss avatar-circle me-2"
                                    src="./assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Image description"
                                    width="16" />
                                <span>Dansk</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <img class="avatar avatar-xss avatar-circle me-2"
                                    src="./assets/vendor/flag-icon-css/flags/1x1/es.svg" alt="Image description"
                                    width="16" />
                                <span>Español</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <img class="avatar avatar-xss avatar-circle me-2"
                                    src="./assets/vendor/flag-icon-css/flags/1x1/nl.svg" alt="Image description"
                                    width="16" />
                                <span>Nederlands</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <img class="avatar avatar-xss avatar-circle me-2"
                                    src="./assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Image description"
                                    width="16" />
                                <span>Italiano</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <img class="avatar avatar-xss avatar-circle me-2"
                                    src="./assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Image description"
                                    width="16" />
                                <span>中文 (繁體)</span>
                            </a>
                        </div>
                    </div>
                    <!-- End Button Group -->
                </div>
                <!-- End Col -->

                <div class="col-sm mb-7 mb-sm-0">
                    <span class="text-cap text-primary-light">Resources</span>

                    <!-- List -->
                    <ul class="list-unstyled list-py-1 mb-0">
                        <li><a class="link-sm link-light" href="#">Blog</a></li>
                        <li><a class="link-sm link-light" href="#">Support <i class="bi-box-arrow-up-right ms-1"></i></a></li>
                        <li><a class="link-sm link-light" href="#">API</a></li>
                    </ul>
                    <!-- End List -->
                </div>
                <!-- End Col -->

                <div class="col-sm mb-7 mb-sm-0">
                    <span class="text-cap text-primary-light">Company</span>

                    <!-- List -->
                    <ul class="list-unstyled list-py-1 mb-0">
                        <li><a class="link-sm link-light" href="#">Company</a></li>
                        <li><a class="link-sm link-light" href="#">Careers <span class="badge bg-warning text-dark rounded-pill ms-2">We're hiring</span></a></li>
                        <li><a class="link-sm link-light" href="#">Contacts</a></li>
                    </ul>
                    <!-- End List -->
                </div>
                <!-- End Col -->

                <div class="col-sm">
                    <span class="text-cap text-primary-light">Platform</span>

                    <!-- List -->
                    <ul class="list-unstyled list-py-1 mb-0">
                        <li><a class="link-sm link-light" href="#">Web</a></li>
                        <li><a class="link-sm link-light" href="#">Mobile</a></li>
                        <li><a class="link-sm link-light" href="#">Messanger</a></li>
                    </ul>
                    <!-- End List -->
                </div>
                <!-- End Col -->

                <div class="col-sm">
                    <span class="text-cap text-primary-light">Legal</span>

                    <!-- List -->
                    <ul class="list-unstyled list-py-1 mb-5">
                        <li><a class="link-sm link-light" href="#">Terms of use</a></li>
                        <li><a class="link-sm link-light" href="#">Privacy policy <i class="bi-box-arrow-up-right ms-1"></i></a></li>
                        {{-- <li><a class="link-sm link-light" href="#">Terms of use</a></li> --}}
                    </ul>
                    <!-- End List -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->

            <div class="border-top border-white-10"></div>

            <div class="row align-items-md-end py-5">
                <div class="col-md mb-3 mb-md-0">
                    <p class="text-white mb-0">© Space. 2021 Htmlstream. All rights reserved.</p>
                </div>

                <div class="col-md d-md-flex justify-content-md-end">
                    <!-- Socials -->
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a class="btn btn-icon btn-sm btn-soft-light rounded-circle" href="#">
                                <i class="bi-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-icon btn-sm btn-soft-light rounded-circle" href="#">
                                <i class="bi-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-icon btn-sm btn-soft-light rounded-circle" href="#">
                                <i class="bi-github"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-icon btn-sm btn-soft-light rounded-circle" href="#">
                                <i class="bi-slack"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- End Socials -->
                </div>
            </div>
        </div>
    </footer>
    <!-- ========== END FOOTER ========== -->

    <!-- Go To -->
    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
         "offsetTop": 700,
         "position": {
           "init": {
             "right": "2rem"
           },
           "show": {
             "bottom": "2rem"
           },
           "hide": {
             "bottom": "-2rem"
           }
         }
       }'>
        <i class="bi-chevron-up"></i>
    </a>
    <!-- ========== END SECONDARY CONTENTS ========== -->


    <!-- JS Implementing Plugins -->
    <script src="./assets/js/vendor.min.js"></script>

    <!-- JS Space -->
    <script src="./assets/js/theme.min.js"></script>

    {{-- <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.5.1/build/highlight.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/languages/html.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/highlight.min.js" integrity="sha512-yUUc0qWm2rhM7X0EFe82LNnv2moqArj5nro/w1bi05A09hRVeIZbN6jlMoyu0+4I/Bu4Ck/85JQIU82T82M28w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/languages/xml.min.js" integrity="sha512-ENK0A1xOHefNaVUMYUI38BQJQgnZZJa2vLVCe3nY+Rogs0ptDJEVB6SJ7dQXeCUrNoajkZ0kBRmmjOGYawf2Dw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.3/jquery.scrollTo.min.js" integrity="sha512-PsJ1f4lw0Jrga4wbDOvdWs9DFl88C1vlcH2VQYqgljHBmzmqtGivUkzRHWx2ZxFlnysKUcROqLeuOpYh9q4YNg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/highlightjs-themes@1.0.0/index.min.js"></script> --}}

    <!-- JS Plugins Init. -->
    <script>
        (function() {

            $('form').submit( function(evt) {
                evt.preventDefault();
                var form = $(this);
                $('#alert-center .container').fadeOut(200).html('');
                form.find('.btn').prop('disabled', true)

                $.ajax({
                    url: 'api/queue/scrap',
                    method: 'POST',
                    data: $(this).serialize(),
                    success: (result) => {
                        form.find('.btn').prop('disabled', false)

                        $('#alert-center .container').html(`
                            <span class="alert alert-success d-flex align-items-center">
                                <i class="fad fa-check me-3"></i>
                                Your new scrap has been queued and is currently been handled, please \r <span class="mx-1" style="cursor: pointer; text-decoration: underline" onclick="location.reload()"> click here </span> \r to refresh to know the progress.
                            </span>
                        `).fadeIn(200);

                        $([document.documentElement, document.body]).animate({
                            scrollTop: $("#alert-center").offset().top
                        }, 1000);
                    }
                })
                .fail((error) => {

                })
            })

            @if(request()->query('page'))
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#scrapper-list").offset().top
            }, 1000);
            @endif
            hljs.highlightAll();


            // INITIALIZATION OF SHOW ANIMATIONS
            // =======================================================
            // new HSShowAnimation('.js-animation-link')


            // INITIALIZATION OF BOOTSTRAP VALIDATION
            // =======================================================
            HSBsValidation.init('.js-validate', {
                onSubmit: data => {
                    data.event.preventDefault()
                    alert('Submited')
                }
            })


            // INITIALIZATION OF GO TO
            // =======================================================
            new HSGoTo('.js-go-to')


            // INITIALIZATION OF NAV SCROLLER
            // =======================================================
            new HsNavScroller('.js-nav-scroller')


            // INITIALIZATION OF TEXT ANIMATION (TYPING)
            // =======================================================
            const typed = HSCore.components.HSTyped.init('.js-typedjs')

            // INITIALIZATION OF STICKY BLOCKS
            // =======================================================
            Promise.all(Array.from(document.images)
                    .filter(img => !img.complete)
                    .map(img => new Promise(resolve => {
                        img.onload = img.onerror = resolve
                        })
                    ))
                    .then(() => {
                        new HSStickyBlock('.js-sticky-block', {
                            targetSelector: document.getElementById('header').classList.contains(
                                'navbar-fixed') ? '#header' : null
                        })
                    })
        })()
    </script>
</body>

</html>

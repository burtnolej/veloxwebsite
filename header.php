<?php
session_start();
$_SESSION['token'] = uniqid();
$reCAPTCHAsiteKey = "6LeqiwceAAAAAKsWsMBd1glkVFSjGu0coL3hsAuL";

?>
<!doctype html>
<html lang="en">
    <head>

<!-- CookiePro Cookies Consent Notice styling for 8080-3bdigital-velox-fgstatu42hn.ws-eu47.gitpod.io -->
<style>
    #ot-sdk-btn-floating.ot-floating-button {
        display: none;
    }
    #ot-sdk-btn {
        border: none !important;
        background: none !important;
        text-decoration: underline !important;
        color: #646466 !important;
        margin: 7px 0 7px 20px !important;
        /* padding-top: 0 !important; */
        font-size: 1em !important;
        padding: 0 !important;
    }
</style>
<!-- CookiePro Cookies Consent Notice start for veloxfintech.com -->
<script type="text/javascript" src="https://cookie-cdn.cookiepro.com/consent/a13cef6d-9cc1-4b0d-a0e8-7e04445b8e57/OtAutoBlock.js" ></script>
<script src="https://cookie-cdn.cookiepro.com/scripttemplates/otSDKStub.js"  type="text/javascript" charset="UTF-8" data-domain-script="a13cef6d-9cc1-4b0d-a0e8-7e04445b8e57" ></script>
<script type="text/javascript">
function OptanonWrapper() { }
</script>
<!-- CookiePro Cookies Consent Notice end for veloxfintech.com -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WT8XWC8');</script>
<!-- End Google Tag Manager -->

        <meta charset="utf-8">
        <base href="/">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css?v=221101">
        <title>Velox</title>
        <link rel="shortcut icon" href="assets/favicon.ico">

    </head>
    <body class="<?php if(isset($bodyClass)) echo $bodyClass ?>">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WT8XWC8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

        <nav id="nav" class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand scroll" href="#body">
                    <img src="assets/logo.svg" class="logo" alt="Velox Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='#22233D' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>
                    </span>
                </button>

                <!-- Desktop -->
                <div class="site-header-desktop d-none d-lg-block">
                  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                      <div class="navbar-nav my-3 my-md-0">

                      <div class="nav-item btn-group btn-group-cust">
                        <button type="button" class="btn dropbtn" data-bs-toggle="dropdown" aria-expanded="false">
                         Product 
                          <span class="plus">+</span>
                          <span class="minus">-</span>
                        </button>
                        <ul class="dropdown-menu dropdown-content">
                        <li><a class="dropdown-item" href="#products">Product Overview</a></li>
                        <li><a class="dropdown-item" href="#why">Why Velox</a></li>
                        <li><a class="dropdown-item" href="#key-fact">Key Facts</a></li>
                        <li><a class="dropdown-item" href="#use-cases">Use Cases</a></li>
                        <li><a class="dropdown-item" href="#about-us">About Us</a></li>
                        </ul>
                      </div>
                        <a class="scroll" href="#team">
                          <button type="button" class="btn dropbtn" data-bs-toggle="dropdown" aria-expanded="false">
                            Team
                          </button>
                        </a>
                        <a class="scroll" href="#newsmedia">
                          <button type="button" class="btn dropbtn" data-bs-toggle="dropdown" aria-expanded="false">
                            News & Media
                          </button>
                        </a>
                        <a class="scroll" href="#insights">
                          <button type="button" class="btn dropbtn" data-bs-toggle="dropdown" aria-expanded="false">
                          Insights
                          </button>
                        </a>

                        <div class="nav-item btn-group btn-group-cust">
                        <button type="button" class="btn dropbtn" data-bs-toggle="dropdown" aria-expanded="false">
                          Client Portal
                          <span class="plus">+</span>
                          <span class="minus">-</span>
                        </button>
                        <ul class="dropdown-menu dropdown-content">
                          <li><a class="dropdown-item" href="https://portal.veloxfintech.com/doc" target="_blank">Documentation</a></li>
                          <li><a class="dropdown-item" href="https://portal.veloxfintech.com/portal" target="_blank">Support</a></li>
                          <li><a class="dropdown-item" href="https://community.veloxfintech.com/" target="_blank">Community</a></li>
                        </ul>
                      </div>

                        <a href="mailto:info@veloxfintech.com?subject=Request%20from%20velox%20website&body=Name%3A%C2%A0%0ACompany%3A%C2%A0%0ATitle%20%2F%20Role%3A%C2%A0%0ACountry%3A%C2%A0%0APhone%3A%C2%A0%0A%0AMessage%3A%C2%A0%0A">
                            <div class="cta">
                                Contact us
                            </div>
                        </a>

                  </div>
                </div>
              </div>
              <div class="background"></div>
            </div>

              <!-- Mobile -->
              <div class="site-header-mobile d-block d-lg-none">
                <div class="collapse navbar-collapse nav-mb-container" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Product
                    </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#products">Product Overview</a></li>
                        <li><a class="dropdown-item" href="#why">Why Velox</a></li>
                        <li><a class="dropdown-item" href="#key-fact">Key Facts</a></li>
                        <li><a class="dropdown-item" href="#use-cases">Use Cases</a></li>
                        <li><a class="dropdown-item" href="#about-us">About Us</a></li>
                      </ul>
                  </li>
                  <div class="nav-item-container">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#team">Team</a>
                    </li>
                  </div>
                  <div class="nav-item-container">
                    <li class="nav-item">
                      <a class="nav-link" href="#newsmedia">News & Media</a>
                    </li>
                  </div>
                  <div class="nav-item-container">
                    <li class="nav-item">
                      <a class="nav-link" href="#insights">Insights</a>
                    </li>
                  </div>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Client Portal
                    </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="https://community.veloxfintech.com/" target="_blank">Community</a></li>
                        <li><a class="dropdown-item" href="https://portal.veloxfintech.com/doc" target="_blank">Documents</a></li>
                        <li><a class="dropdown-item" href="https://portal.veloxfintech.com/portal" target="_blank">Portal</a></li>
                      </ul>
                  </li>
                  <div class="mb-dropdown-container">
                    <a href="mailto:info@veloxfintech.com?subject=Request%20from%20velox%20website&body=Name%3A%C2%A0%0ACompany%3A%C2%A0%0ATitle%20%2F%20Role%3A%C2%A0%0ACountry%3A%C2%A0%0APhone%3A%C2%A0%0A%0AMessage%3A%C2%A0%0A">
                    <div class="cta-mb">
                      Contact us
                    </div>
                    </a>
                  </div>
                </ul>
              </div>

      </nav>
      <script>
                $(function () {
                  $(".nav-link:not(.dropdown-toggle)").click(function () {
                    let nav = $(".navbar-collapse");
                    if (nav.hasClass("show")) {
                      nav.removeClass("show");
                    }
                  });
                });
              </script>

<!DOCTYPE html>
<html lang="en">
<head>
   
   <link rel="stylesheet" href="./menu.css">
   <link rel="stylesheet" href="./index.css">
   <style>
    /* Overall wrapper styling */
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
     }
   .mega-submenu-wrapper {
    position: absolute;
    width: 100vw;
    height: 85vh;
    top: 48px;
    left: 0;
    z-index: 100;
    /* border: 2px solid red; */
    display: none;
       /* display: flex; */
       flex-wrap: wrap;
       /* max-width: 1000px; */
       /* margin: auto; */
       padding: 2rem;
       gap: 1rem;
       justify-content: center;
       background-color: #f9f9f9;
       padding: 0vh 40vh 0vh 40vh;
       /* background-color: red; */
       /* border-radius: 8px; */
      
   }


/* Header section styling */
.header-section {
    width: 100%;
    text-align: center;
    margin-bottom: 2rem;
}

.header-section h3 {
    margin: 0;
    font-size: 2rem;
    color: #333;
}

.header-section p {
    max-width: 800px;
    margin: 1rem auto;
    font-size: 1rem;
    color: #666;
}

.cta-button {
    display: inline-flex;
    align-items: center;
    padding: 0.5rem 1rem;
    border: 1px solid #0d6efd;
    background-color: #fff;
    color: #0d6efd;
    text-decoration: none;
    font-weight: bold;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.cta-button:hover {
    background-color: #e7f0ff;
}

.cta-button img {
    margin-left: 0.5rem;
    vertical-align: middle;
}
.service-column-container{
    display: flex;
    /* border: 2px solid black; */
    width: 100%;


}
/* Service column styling */
.service-column {
    flex: 1 1 30%;
    padding: 1rem;
    /* border: 2px solid red; */
    box-sizing: border-box;
}

.service-column h4 {
    border-bottom: 1px solid #ddd;
    padding-bottom: 0.5rem;
    margin-bottom: 1rem;
    color: #333;
    font-weight: 300;
}

.service-column ul {
    list-style: none;
    padding: 0;
    margin: 0;
    /* border: 2px solid green; */
    display: flex;
    flex-direction: column;
}

.service-column ul li {
    /* padding: 0.5rem 0; */
    color: #0d6efd;
    font-weight: 500;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .service-column {
        flex: 1 1 100%;
    }
}
   </style>
</head>
<body>
<div class="w-100 header_headerWrapper__SbgEC">
            <div class="navbar navbar-expand-lg navbar-light bg-white py-0 shadow-sm">
                <div
                    class="w-100 px-4 d-flex align-items-center justify-content-between position-relative header_headerWrapperInner__xyRyM">
                    <button class="navbar-toggler shadow-none" type="button" data-toggle="collapse"
                        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="d-flex align-items-center py-3 undefined"><a
                            class="navbar-brand me-0 border-end pe-3 header_mobileLogo__Bm5vx"
                            href="https://sos.net.in"><img alt="logo"
                                src="./images/digi_logo_2.png" width="100" height="18"
                                decoding="async" data-nimg="1" loading="lazy"
                                style="color:transparent;object-fit:contain"></a><a
                            class="navbar-brand me-0 ps-3 header_mobileLogo__Bm5vx" href="./index.php"><img alt="logo"
                                src="./images/digi_logo.webp" width="140"
                                height="25" decoding="async" data-nimg="1" loading="lazy"
                                style="color:transparent;object-fit:contain"></a></div>
                    <div class="collapse navbar-collapse justify-content-end header_headerNavList__F0nSQ">
                        <button type="button" class="btn btn-link header_navCloseIcon__yhV_b"><img alt="closeIcon"
                                srcset="/_next/image?url=%2Fimages%2Fclose_icon.png&amp;w=32&amp;q=75 1x, /_next/image?url=%2Fimages%2Fclose_icon.png&amp;w=48&amp;q=75 2x"
                                src="/_next/image?url=%2Fimages%2Fclose_icon.png&amp;w=48&amp;q=75" width="20"
                                height="20" decoding="async" data-nimg="1" loading="lazy"
                                style="color:transparent"></button>
                        <ul class="navbar-nav bg-white px-2 round-2">
                            <li class="nav-item position-relative py-3 active"><a class="nav-link"
                                    href="/about-us">About</a></li>
                            <li class="nav-item position-relative py-3 ms-4"><a class="nav-link" href="/#">New Labour
                                    Codes</a>
                                <ul
                                    class="list-unstyled shadow rounded-4 p-2 rounded-top-0 bg-white header_subDropdown__AF_W9">
                                    <li class="nav-item py-1"><a class="nav-link"
                                            href="./implementation.php">Implementation</a></li>
                                    <li class="nav-item py-1"><a class="nav-link"
                                            href="./new-labour-codes.php#keyHighlights">Key Highlights</a></li>
                                    <li class="nav-item py-1"><a class="nav-link"
                                            href="./new-labour-codes.php#statutorychanges">Statutory Changes</a></li>
                                    <li class="nav-item py-1"><a class="nav-link"
                                            href="./new-labour-codes.php#consequences">Consequences</a></li>
                                    <li class="nav-item py-1"><a class="nav-link" href="/new-labour-codes#faq">FAQs</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item position-relative py-3 ms-4"><a class="nav-link" href="/#!">Digital
                                    Library</a>
                                <ul
                                    class="list-unstyled shadow rounded-4 rounded-top-0 p-2 bg-white header_subDropdown__AF_W9">
                                    <li class="nav-item py-1"><a class="nav-link"
                                            href="/digital-library/acts-and-rules">Acts &amp; Rules</a></li>
                                    <li class="nav-item py-1"><a class="nav-link"
                                            href="/digital-library/statutory-form">Statutory Form</a></li>
                                    <li class="nav-item py-1"><a class="nav-link"
                                            href="/digital-library/minimum-wage">Minimum Wage</a></li>
                                    <li class="nav-item py-1"><a class="nav-link" href="/digital-library/p-tax-rates">P.
                                            Tax Rates</a></li>
                                    <li class="nav-item py-1"><a class="nav-link" href="/digital-library/LWF-rates">LWF
                                            Rates</a></li>
                                    <li class="nav-item py-1"><a class="nav-link"
                                            href="/digital-library/holiday-list">Holiday List</a></li>
                                    <li class="nav-item py-1"><a class="nav-link"
                                            href="/digital-library/leave-working-hours">Leave &amp; Working Hours</a>
                                    </li>
                                    <li class="nav-item py-1"><a class="nav-link"
                                            href="/digital-library/govt-notifications">Govt. Notifications</a></li>
                                    <li class="nav-item py-1"><a class="nav-link"
                                            href="/digital-library/compliance-calendar">Compliance Calendar</a></li>
                                </ul>
                            </li>
                            <li class="nav-item position-relative py-3 ms-4"><a class="nav-link" href="/#">Solutions</a>
                                <ul
                                    class="list-unstyled shadow rounded-4 rounded-top-0 p-2 bg-white header_subDropdown__AF_W9">
                                    <li class="nav-item py-1"><a class="nav-link"
                                            href="./labour-comp-software.php">Labour law compliance software</a>
                                    </li>
                                    <li class="nav-item py-1"><a class="nav-link"
                                            href="./comp-checklist.php">Compliance Checklist</a></li>
                                    <li class="nav-item py-1"><a class="nav-link"
                                            href="./license-management.php">License Management</a></li>
                                    <li class="nav-item py-1"><a class="nav-link"
                                            href="./notice-management.php">Notice Management</a></li>
                                    <li class="nav-item py-1"><a class="nav-link"
                                            href="./government-notification.php">Government Notifications</a></li>
                                    <li class="nav-item py-1"><a class="nav-link"
                                            href="./register-generator.php">Register Generator</a></li>
                                    <li class="nav-item py-1"><a class="nav-link"
                                            href="./labour-compliance-audit.php">Labour Compliance Audit</a></li>
                                </ul>
                            </li>
                            <li class="nav-item position-relative py-3 show-desktop ms-4 "><a class="nav-link"
                                    href="/#">Services</a>
                                <div
                                    class="list-unstyled shadow rounded-4 rounded-top-0 bg-white header_megaSubMenu__LR5iZ">
                                    <div
                                        class="d-flex flex-wrap col-9 m-auto justify-content-center p-4 header_megaSubMenuWrapper__Cjxa7">
                                        <div class="w-100 text-center pb-5">
                                            <h3 class="m-0">Spectra Service</h3>
                                            <p class="col-12 m-auto py-3">Spectra offers specialized compliance
                                                solutions, payroll &amp; HRMS services, and expert HR and finance
                                                solutions. With a focus on efficiency and compliance, we tailor our
                                                services to meet the unique needs of each client, ensuring smooth
                                                operations and regulatory adherence</p>
                                            <div><a class="btn btn-outline-primary py-2 me-4 bg-white text-primary"
                                                    style="color:#0d6efd !important" href="https://sos.net.in">Know
                                                    more<img alt="img"
                                                        srcset="/_next/image?url=%2Fimages%2Fright_arrow.png&amp;w=32&amp;q=75 1x, /_next/image?url=%2Fimages%2Fright_arrow.png&amp;w=48&amp;q=75 2x"
                                                        src="/_next/image?url=%2Fimages%2Fright_arrow.png&amp;w=48&amp;q=75"
                                                        width="22" height="20" decoding="async" data-nimg="1"
                                                        loading="lazy" style="color:transparent;margin-left:5px"></a>
                                            </div>
                                        </div>
                                        <div class="col-4 px-3">
                                            <h4 class="border-bottom fw-lighter m-0 mb-3 p-0 pb-2">Compliance Services
                                            </h4>
                                            <ul class="p-0 m-0 list-unstyled">
                                                <li class="w-100 py-2"><span class="d-flex text-primary">Establishment
                                                        Compliance</span></li>
                                                <li class="w-100 py-2"><span class="d-flex text-primary">Factory
                                                        Compliance</span></li>
                                                <li class="w-100 py-2"><span class="d-flex text-primary">Contractor
                                                        Compliance</span></li>
                                                <li class="w-100 py-2"><span class="d-flex text-primary">Registration
                                                        and Licensing</span></li>
                                                <li class="w-100 py-2"><span class="d-flex text-primary">Audit &amp;
                                                        Consulting</span></li>
                                                <li class="w-100 py-2"><span class="d-flex text-primary">PoSH
                                                        Compliance</span></li>
                                            </ul>
                                        </div>
                                        <div class="col-4 px-4">
                                            <h4 class="border-bottom fw-lighter m-0 mb-3 p-0 pb-2">HR Services</h4>
                                            <ul class="p-0 m-0 list-unstyled">
                                                <li class="w-100 py-2"><span class="d-flex text-primary">Payroll &amp;
                                                        HRMS</span></li>
                                                <li class="w-100 py-2"><span class="d-flex text-primary">Recruitment
                                                        Services</span></li>
                                                <li class="w-100 py-2"><span class="d-flex text-primary">Staffing
                                                        Services</span></li>
                                                <li class="w-100 py-2"><span class="d-flex text-primary">HR Audit</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-4 px-3">
                                            <h4 class="border-bottom fw-lighter m-0 mb-3 p-0 pb-2">Finance Services</h4>
                                            <ul class="p-0 m-0 list-unstyled">
                                                <li class="w-100 py-2"><span class="d-flex text-primary">Accounting
                                                        Services</span></li>
                                                <li class="w-100 py-2"><span class="d-flex text-primary">Business
                                                        Registration Services</span></li>
                                                <li class="w-100 py-2"><span class="d-flex text-primary">Tax
                                                        Compliance</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item position-relative py-3 ms-4 show-mobile"><a class="nav-link"
                                    href="/#">Services</a>
                                <ul
                                    class="list-unstyled shadow rounded-4 rounded-top-0 p-2 bg-white header_subDropdown__AF_W9">
                                    <li class="nav-item py-1"><a class="nav-link"
                                            href="https://sos.net.in/compliance-services/establishment-compliance">Compliance
                                            Services</a></li>
                                    <li class="nav-item py-1"><a class="nav-link"
                                            href="https://sos.net.in/hr-services/payroll-and-hrms">HR Solutions</a></li>
                                    <li class="nav-item py-1"><a class="nav-link"
                                            href="https://sos.net.in/finance-services/accounting-services">Finance
                                            Solutions</a></li>
                                </ul>
                            </li>
                            <li class="nav-item position-relative py-3 active"><a class="nav-link"
                                    href="/blogs">Blog</a></li>
                            <li class="position-relative py-3 ms-4 header_loginNav__fCXlh"><button type="button"
                                    class="btn btn-primary">Sign In</button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" rel="_noref" target="_blank"
                                            href="https://app.digiliance.in/">Application Users Login</a></li>
                                    <li><span class="dropdown-item" role="button">e-Library Login</span></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><button type="button" class="btn btn-warning header_contactLink__Nezdl">Contact us</button>
  
</body>

</html>

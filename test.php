<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
   
.mega-submenu-wrapper {
    display: flex;
    flex-wrap: wrap;
    max-width: 1000px;
    margin: auto;
    padding: 2rem;
    gap: 1rem;
    justify-content: center;
    background-color: #f9f9f9;
    border-radius: 8px;
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

/* Service column styling */
.service-column {
    flex: 1 1 30%;
    padding: 1rem;
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
}

.service-column ul li {
    padding: 0.5rem 0;
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
<div class="mega-submenu-wrapper">
                    <div class="text-center header-section">
                        <h3>Spectra Service</h3>
                        <p>Spectra offers specialized compliance solutions, payroll &amp; HRMS services, and expert HR and finance solutions. With a focus on efficiency and compliance, we tailor our services to meet the unique needs of each client, ensuring smooth operations and regulatory adherence.</p>
                        <a class="cta-button" href="https://sos.net.in">
                        Know more
                        <img src="/images/right_arrow.png" alt="Arrow icon" width="22" height="20">
                        </a>
                    </div>
                    <div class="service-column">
                        <h4>Compliance Services</h4>
                        <ul>
                            <li>Establishment Compliance</li>
                            <li>Factory Compliance</li>
                            <li>Contractor Compliance</li>
                            <li>Registration and Licensing</li>
                            <li>Audit &amp; Consulting</li>
                            <li>PoSH Compliance</li>
                        </ul>
                    </div>
                    <div class="service-column">
                        <h4>HR Services</h4>
                        <ul>
                            <li>Payroll &amp; HRMS</li>
                            <li>Recruitment Services</li>
                            <li>Staffing Services</li>
                            <li>HR Audit</li>
                        </ul>
                    </div>
                    <div class="service-column">
                        <h4>Finance Services</h4>
                        <ul>
                            <li>Accounting Services</li>
                            <li>Business Registration Services</li>
                            <li>Tax Compliance</li>
                        </ul>
                    </div>
                
</div>
<?php
include './implementation.php';
?>
</body>
</html>
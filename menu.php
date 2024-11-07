<!DOCTYPE html>
<html lang="en">
<head>
   
   <link rel="stylesheet" href="./menu.css">
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
    height: 80vh;
    top: 48px;
    left: 0;
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
    <div class="menu">
        <div class="logo">
        
            <img src="https://digiliance.in/_next/image?url=%2Fimages%2Flogo_2.png&w=128&q=75" style="object-fit: contain;" alt="Logo" width="100">
            <div class="logo_break"></div>
            <img src="https://digiliance.in/_next/image?url=%2Fimages%2Fdigi_logo.png&w=256&q=75" style="object-fit: contain;" alt="Logo" width="100">
           
        </div>
        <div class="" style="display: flex; margin: 1rem;">
            <ul>
            <li class="menu-list"><a href="#" class="menu-anchor">About</a></li>
                <li class="menu-list">
                    <a href="#" class="menu-anchor">New Labour Codes</a>
                    <div class="dropdown-content">
                        <a href="./implementation.php" class="menu-anchor">Implementation</a>
                        <a href="./new-labour-codes.php" class="menu-anchor">Key Highlights</a>
                        <a href="./new-labour-codes.php" class="menu-anchor">Statutory Changes</a>
                        <a href="./new-labour-codes.php" class="menu-anchor">Consequences</a>
                        <a href="./new-labour-codes.php" class="menu-anchor">FAQs</a>
                    </div>
                </li>
                <li class="menu-list"><a href="#" class="menu-anchor">Digital Library</a>
                    <div class="dropdown-content">
                        <a href="#" class="menu-anchor">Acts & Rules</a>
                        <a href="#" class="menu-anchor">Statutory Form</a>
                        <a href="#" class="menu-anchor">Minimum Wage</a>
                        <a href="#" class="menu-anchor">P. Tax Rates</a>
                        <a href="#" class="menu-anchor">LWF Rates</a>
                        <a href="#" class="menu-anchor">Holiday List</a>
                        <a href="#" class="menu-anchor">Leave and Working Hours</a>
                        <a href="#" class="menu-anchor">Govt. Notifications</a>
                        <a href="#" class="menu-anchor">Compliance Calendar</a>
                    </div>
                </li>
                <li class="menu-list"><a href="#" class="menu-anchor">Solutions</a>
                <div class="dropdown-content">
                        <a href="#" class="menu-anchor">Labour law  compliance software</a>
                        <a href="#" class="menu-anchor">Compliance Checklist</a>
                        <a href="#" class="menu-anchor">License Management</a>
                        <a href="#" class="menu-anchor">Notice Management</a>
                        <a href="#" class="menu-anchor">Govt Notifications</a>
                        <a href="#" class="menu-anchor">Register Generator</a>
                        <a href="#" class="menu-anchor">Labour Compliance Audit</a>
                        <a href="#" class="menu-anchor">Govt. Notifications</a>
                        <a href="#" class="menu-anchor">Compliance Calendar</a>
                    </div>
                </li>
          
                <li class="service-list">
                <a href="#" class="menu-anchor">Services</a>
                <div class="mega-submenu-wrapper">
                    <div class="text-center header-section">
                        <h3>Spectra Service</h3>
                        <p>Spectra offers specialized compliance solutions, payroll &amp; HRMS services, and expert HR and finance solutions. With a focus on efficiency and compliance, we tailor our services to meet the unique needs of each client, ensuring smooth operations and regulatory adherence.</p>
                        <a class="cta-button" href="https://sos.net.in">
                        Know more
                        <img src="./images/arrow-right.webp" alt="Arrow icon" width="22" height="20">
                        </a>
                    </div>
                    <div class="service-column-container">
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
                    
                </div>
                
</li>


                <li><a href="#" class="menu-anchor">Blog</a></li>
                <li><a class="sign-in-btn">Sign In</a></li>
            </ul>
        </div>
      
    </div>


    <script>
        const service = document.querySelector(".service-list");
        const submenu = document.querySelector(".mega-submenu-wrapper");
    
        // Show submenu when mouse is over the "Services" item
        service.addEventListener("mouseover", () => {
            submenu.style.display = "flex";
        });
    
        // Hide submenu when mouse leaves the "Services" item or the submenu itself
        service.addEventListener("mouseout", (event) => {
            if (!submenu.contains(event.relatedTarget)) {
                submenu.style.display = "none";
            }
        });
    
        submenu.addEventListener("mouseout", (event) => {
            if (!service.contains(event.relatedTarget)) {
                submenu.style.display = "none";
            }
        });
    </script>
</body>

</html>

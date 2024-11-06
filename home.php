<html>

<head>

    <style>
        *{
            margin: 0;padding: 0;box-sizing: border-box;
        }
.main-container{
    align-self: center;
    width: 85%;
    background: white;
    padding: 1% 0%;
    color: black;
    margin: 0 auto;
}
.heading{
    font-size: 40px;
    text-align: center;
}
.hero-container{
    padding: 5% 20%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;


}


.content-list{
    display: flex;
    align-items: center;
    font-size: 13px;
    color: #212529;
    margin: 1.5rem 0rem;
  

}
.content-container{
  display: flex;
    margin: 0 2%;
    /* flex-direction:row; */
    align-items:center;
    justify-content: space-between;
    padding: 1.25rem 0;
    /* row align-items-center py-5 aos-init aos-animate */
}
.content-para{
      font-size: 14px;
}
.content-first-word{
 font-weight: bold;
 color: black;
 margin: 0  0.4rem;
 font-size: 13px;
}
.content-content{
    width: 50%;
    height: 100%;
    font-size: 1.1rem;  
    margin-right: 5%;
}

.content-img{
    width: 50%;
    height: 100%;
}
.content-img img{
    text-align: right;
    width: 100%;
    height: 100%;
}
.content-tagging{
    /* background-color: #E6F2FF;
    color: #5096f1; 
   
    border-radius: 5px;
    font-size: 1rem;  */
    background: rgba(10, 128, 255, .1);
    text-transform: uppercase;
    color: #0a80ff;
    letter-spacing: 1px;
    font-size: 1rem;  
    border-radius: 20px;
    width: fit-content;
    padding: 1% 2%;
    margin: 0 0 7px;
   
}

.content-heading{
    text-transform: uppercase;
    /* letter-spacing: 1px; */
    font-size: 26px;  
    font-weight: 500;

}
.content-para{
    margin-bottom: 1.5rem;
    line-height: 1.8;
}
.list-item {
            display: flex;
            align-items: start;
            justify-content: start;
            margin-bottom: 16px;
            width: 100%;
        }
        
        .icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-right: 8px;
            width: 20px;
            height: 20px;
            background-color: #E6F2FF; 
            
        }

        .icon img {
            width: 12px;
            height: 12px;
        }

        .list-content {
            font-size: 16px;
            color: #333;
        }

        .list-content strong {
            font-weight: 600;
        }
        .btn-link {
            background: none;
            border: none;
            padding: 0;
            color: #007bff; /* Customize text color */
            cursor: pointer;
            display: flex;
            align-items: center;
            text-decoration: none;
            font-size: 16px;
        }

        .btn-link:hover {
            text-decoration: underline;
        }

        .arrow-icon {
            margin-left: 8px;
            width: 18px;
            height: 15px;
        }
        .feature-wrap {
            background-color: #303E5E;
            width: 100%;
            padding-bottom: 40px;
            animation: fade-up 1s ease-in-out;
            border-radius: 1rem;
            margin: 5% 0;
            color: white;
        }

        .container-wrap {
            max-width: 90%;
            margin: 0 auto;
            padding: 0 15px;
        }

        .feature-list {
            list-style: none;
            margin: 0;
            padding: 20px;
            padding-top: 40px;
            padding-bottom: 40px;
            border-radius: 10px;
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }

        .feature-item {
            flex: 1 1 calc(33.33% - 30px);
            max-width: calc(33.33% - 30px);
            text-align: left;
            padding: 20px;
            box-sizing: border-box;
        }

        .feature-item img {
            width: 35px;
            height: 35px;
            display: block;
            margin-bottom: 10px;
        }

        .feature-item h6 {
            font-size: 18px;
            margin: 0;
            color: white;
        }

        .feature-item p {
            margin: 8px 0 0;
            color: #555;
            font-size: 14px;
            color: #869ab8;
        }
        /* General Styles */
.compliance-wrapper {
  width: 100%;
  padding: 40px 0;
  background-color: #007aff;
  color: #007aff;
}

.compliance-container {
  max-width: 1200px;
  margin: 0 auto;
  text-align: center;
  
}

/* Header Section */
.compliance-header .header-image img {
  display: inline-block;
  margin-bottom: 15px;
  
}
.section-title{

    margin: 0 auto;
    max-width: 850px;
    /* align-self: center; */
}
.section-title h3 {
  font-weight: 600;
  color: #ffffff;
  margin-bottom: 15px;
  font-size: 40px;
  line-height: 1.3;
 
}

.compliance-header p {
  max-width: 600px;
  margin: 0 auto;
  font-size: 1rem;
  color: #ffffff;
}

/* Options Section */
.compliance-options {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  margin-top: 30px;
  justify-content: center;
  
}

.compliance-card {
  background-color: #ffffff;
  color: #000000;
  border-radius: 10px;
  padding: 20px;
  width: 100%;
  height: 110vh;
  max-width: 550px;
  text-align: left;
  position: relative;
  padding: 4% 2%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.compliance-card h4 {
  font-size: 2.2rem;
  font-weight: 500;
  margin-bottom: 15px;
}

.compliance-card p {
  font-size: 14px;
  margin-bottom: 20px;
  
}

.compliance-card ul {
  list-style: none;
  padding: 0;
  margin: 0;
  z-index: 2;
}

.compliance-card li {
  display: flex;
  align-items: center;
  margin-bottom: 15px;
  padding-left: 10px;
  font-size: 1rem;
  line-height: 1.5;
  position: relative;
  z-index: 2;
}

/* List Icon */
.compliance-card li::before {
  content: "✔";
  color: green;
  font-weight: bold;
  margin-right: 10px;
  margin-bottom: 1  5px;
  font-size: 0.8rem;
}

/* Buttons */
.demo-btn,
.contact-btn {
  background-color: #157347;
  color: #ffffff;
  border: none;
  border-radius: 50px;
  
  padding: 10px 20px;
  font-size: 1rem;
  cursor: pointer;
  text-decoration: none;
  text-align: center;
  padding-top: 1rem;
  display: block;
  width: 100%;
  z-index: 2;
  height: 50px;
  /* border: 2px solid black; */
  /* max-width: 150px; */
  margin: 20px auto 0;
  font-weight: 500;
}

.demo-btn:hover,
.contact-btn:hover {
  background-color: #218838;
}
.header_contactLink__Nezdl{
    position: fixed;
    top: 50%;
    right: -50px;
    z-index: 10;
    text-transform: uppercase;
    transform: rotate(-90deg);
    width: 130px;
    height: 50px;
    border-radius: 10px 10px 0 0;
    background-color: #ffc107;
    border: none;
}
/* CSS for Get Started Section */
.get-started-wrapper {
    width: 100%;
    padding: 3rem 0;
    background-color: #ADD5FF; /* Example background color */
}

.container-wrap {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.text-center {
    text-align: center;
}

.get-started-title {
    margin: 0;
    font-size: 1.75rem;
    font-weight: bold;
    color: white;
}

.get-started-title span {
    font-size: 1.75rem;
    font-weight: bold;
    color: #00d13b; /* Adjust color as needed */
}

.get-started-subtitle {
    margin: 1rem 0;
    font-size: 1.75rem;
    /* font-weight: bold; */
    color: #333;
}

.button-container {
    margin-top: 1rem;
}
.self_img{
    object-fit: contain;
    position: absolute;
    bottom: 0px;
    right: 0px;
    height: 35%;
    width: 30%;
    border-radius: 10px;
}
.consult_img{
    position: absolute;
    bottom: 0px;
    right: 0px;
    height: 35%;
    width: 35%;
    border-radius: 10px;
}
.book-demo-btn {
    display: inline-block;
    padding: 0.75rem 2rem;
    background-color: #007bff;
    color: #fff;
    border-radius: 5px;
    font-size: 1rem;
    text-decoration: none;
    transition: background-color 0.3s;
}

.book-demo-btn:hover {
    background-color: #0056b3;
}

/* .compliance-card{
    background: url("https://digiliance.in/images/self_file.png")
} */

        @keyframes fade-up {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .feature-item {
                flex: 1 1 calc(50% - 30px);
                max-width: calc(50% - 30px);
            }
        }

        @media (max-width: 576px) {
            .feature-item {
                flex: 1 1 100%;
                max-width: 100%;
            }
        }

        
      .close-btn {
        position: absolute;
       
        top: 5px;
        right: 5px;
        cursor: pointer;
        font-size: 3.5rem;
        color: black;
        font-size: 40px;
      }

  
      /* Contact form styles */
      #contactForm {
        width: 32vw;
        height: 90vh;
        margin: 1rem auto;
        
        padding: 1rem;
        color: black;
        border: 1px solid black ;
         background-color: white;
        border-radius: 5px;
      }
  
      /* Form inputs and textarea */
      #contactForm input[type="text"],
      #contactForm input[type="email"],
      #contactForm textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: none; /* Remove border */
        border-bottom: 1px solid black; /* Bottom border */
        background-color: transparent; /* Transparent background */
        font-size: 16px;
        transition: border-color 0.3s;
      }
  
      /* Bottom border highlight on focus */
      #contactForm input[type="text"]:focus,
      #contactForm input[type="email"]:focus,
      #contactForm textarea:focus {
        border-bottom: 2px solid #bca890; /* Highlight bottom border on focus */
        outline: none; /* Remove default outline */
        color: black;   
      }
  
      /* Placeholder styling */
      #contactForm input::placeholder,
      #contactForm textarea::placeholder {
        color: gray;    
      }
  
      /* Form submit button */
      .btn-submit {
        background-color: gray; /* Elegant button color */
        color: #ffffff;
        border: none;
        padding: 12px;
        cursor: pointer;
        /* border-radius: 5px; */
        font-size: 16px;
        transition: background-color 0.3s;
      }
  
      .btn-submit:hover {
        background-color: #d2ab90; /* Lighter shade on hover */
      }
  
      /* Adjust textarea height */
      #contactForm textarea {
        height: auto; /* Let CSS determine height */
        min-height: 80px; /* Minimum height */
        max-height: 200px; /* Maximum height */
      }
      #contactForm p{
        font-size: 1.5rem;
        text-align: center;
      }
      /* Responsive Design */
      @media (max-width: 768px) {
        #contactForm {
          padding: 20px;
        }
      }
 
 
        .floating-form {
    transform: scale(0); 
    position: fixed;
    top:0;
    left:0;
    /* top: 1rem;
    left: 32rem; */
    /* border: 2px solid red; */
    /* background: rgba(255, 255, 255, 0.95); */
    background-color: rgba(0, 0, 0, 0.6); 
    height: 100vh;
    width: 100vw;
   
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    /* padding: 20px; */
    
    z-index: 10;
    color: black;
    transition: transform 0.3s ease; 
    border-radius: 5px;
}


.form-header{
    position: relative;
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid gray;
    padding: 10px 10px;
}
.form-header p{
      /* font-weight: bold; */
      font-size: 1.2rem;
}
    </style>
</head>
<body>
    <main class="main-container">
        <div class='hero-container'>
            <img src="./images/setting_icon-1.png" alt="" width="80">
            <p class="heading">The labour law compliance management software you`ll enjoy using</p>
        </div>
        <div class="content-container">
            <div class="content-content">
                <p class="content-tagging">LIVE PROGRESS TRACKING</p>
                <P class="content-heading">Easily track your labour compliances, licenses and documents</P>
                <p  class="content-para">View your compliance progress over time - across all your establishments, contractors and sites all over India - along with your pending compliances. Digiliance is the best labour law compliance management software..</p>
                <ul>
                <li class="list-item">
            <span class="icon">
                <img src="./images/arrow-right.webp" alt="logo" width="10">
                    </span>
                    <div class="list-content">
                        <p><strong>Compliance Overview:</strong>  showing due, upcoming, completed, overdue and pending compliances</p>
                    </div>
                </li>  
                <li class="list-item">
            <span class="icon">
                <img src="./images/arrow-right.webp" alt="logo" width="10">
                    </span>
                    <div class="list-content">
                        <p><strong>Downloadable compliance progress</strong>  report over time</p>
                    </div>
                </li>
                    <li class="list-item">
            <span class="icon">
                <img src="./images/arrow-right.webp" alt="logo" width="10">
                    </span>
                    <div class="list-content">
                        <p><strong>
                        Location wise compliance</strong> progress in a map</p>
                    </div>
                </li>    
               <li>
               <button class="btn-link" onclick="window.location.href='#';">
        Book a Demo
        <img src="./images/arrow-right.webp" alt="icon" class="arrow-icon">
    </button>
               </li>
            </ul>
                
            </div>
            <div class="content-img"><img src="./images/digi_feature_banner.png" alt=""></div>
        </div>

    </main>
 <div class="main-container">
 <div class="content-container">
            <div class="content-content">
                <p class="content-tagging">SUBMIT ALL COMPLIANCES</p>
                <P class="content-heading">All your labour compliances in one place</P>
                <p  class="content-para">No more going back and forth between different records. Easily track your establishments, contractors and sites with Digiliance and get a complete picture of all your labour compliances. .</p>
                <ul>
                <li class="list-item">
            <span class="icon">
                <img src="./images/arrow-right.webp" alt="logo" width="10">
                    </span>
                    <div class="list-content">
                        <p><strong>Establishments:</strong>  Track multiple branches & units and gives a bird eye view of what`s compliant and which others are at risk</p>
                    </div>
                </li>  
                <li class="list-item">
            <span class="icon">
                <img src="./images/arrow-right.webp" alt="logo" width="10">
                    </span>
                    <div class="list-content">
                        <p><strong>Contractors:</strong>  Populates state specific compliances & facilitates contractors to submit all compliance documents to principal employer</p>
                    </div>
                </li>
                    <li class="list-item">
            <span class="icon">
                <img src="./images/arrow-right.webp" alt="logo" width="10">
                    </span>
                    <div class="list-content">
                        <p><strong>
                        
Sites</strong> Manage at the site level and be in full control the unified platform keeps you informed about what`s happening at the site level.</p>
                    </div>
                </li>    
               <li>
               <button class="btn-link" onclick="window.location.href='#';">
        Book a Demo
        <img src="./images/arrow-right.webp" alt="icon" class="arrow-icon">
    </button>
               </li>
            </ul>
                
            </div>
            <div class="content-img"><img src="./images/digiliance_home-1.jpg" alt=""></div>
        </div>

        <div class="feature-wrap">
    <div class="container-wrap">
        <ul class="feature-list">
            <li class="feature-item">
                <img src="./icon/labour_rules_icon1-1.png" alt="icon">
                <h6>83 Acts</h6>
                <p>Acts regulating various aspects of labour such as resolution of industrial disputes, working conditions, social security, and wages</p>
            </li>
            <li class="feature-item">
                <img src="./icon/labour_rules_icon2-1.png" alt="icon">
                <h6>416 Rules</h6>
                <p>Rules specifying responsibilities and rights in employment, particularly the responsibilities of the employer and the rights of the employee.</p>
            </li>
            <li class="feature-item">
                <img src="./icon/labour_rules_icon3-1.png" alt="icon">
                <h6>7000 Compliances</h6>
                <p>Compliances are the mandatory rules & regulations that set conditions for employment which the companies have to follow.</p>
            </li>
            <li class="feature-item">
                <img src="./icon/labour_rules_icon4-1.png" alt="icon">
                <h6>17+ Years of Expertise</h6>
                <p>Digiliance is powered by Spectra, started in 2006 with a small team of two and is now one of the leading outsourcing & consulting firms.</p>
            </li>
            <li class="feature-item">
                <img src="./icon/labour_rules_icon5-1.png" alt="icon">
                <h6>50+ Clients</h6>
                <p>We are serving across 8 industry verticals to some of the biggest multinational corporations on a PAN India basis.</p>
            </li>
            <li class="feature-item">
                <img src="./icon/labour_rules_icon6-1.png" alt="icon">
                <h6>20+ States - Associates Partner</h6>
                <p>Contact us to visit our Associates Partner nearest to your location to get the service support you need from our experts.</p>
            </li>
        </ul>
    </div>
</div>

<div class="content-container">
            <div class="content-content">
                <p class="content-tagging">RISK ASSESMENT</p>
                <P class="content-heading">Easily asses risk areas and fix immediately</P>
                <p  class="content-para">Say goodbye to absurd compliance risk assestment and inaccurate compliance reports. Digiliance is packed with tools to help you find problems with labour compliance management.</p>
                <ul>
                <li class="list-item">
            <span class="icon">
                <img src="./images/arrow-right.webp" alt="logo" width="10">
                    </span>
                    <div class="list-content">
                        <p><strong>Overall compliance score:</strong>   Every change in compliances is updated in real time to show your overall compliance health</p>
                    </div>
                </li>  
                <li class="list-item">
            <span class="icon">
                <img src="./images/arrow-right.webp" alt="logo" width="10">
                    </span>
                    <div class="list-content">
                        <p><strong>Compliance risk score:</strong>  Digiliance highlights your risk score over different time periods with the intensity of risk</p>
                    </div>
                </li>
                    <li class="list-item">
            <span class="icon">
                <img src="./images/arrow-right.webp" alt="logo" width="10">
                    </span>
                    <div class="list-content">
                        <p><strong>
                        Need to Act:</strong> No more wondering if you missed on dates. Digiliance automatically shows your due renewals and upcoming hearings</p>
                    </div>
                </li>  
                <li class="list-item">
            <span class="icon">
                <img src="./images/arrow-right.webp" alt="logo" width="10">
                    </span>
                    <div class="list-content">
                        <p><strong>Pending compliances: </strong>  Digiliance can track all your pending tasks be it registers, return, remittances, license, notices, etc. and keeps track of what pending</p>
                    </div>
                </li>  
               <li>
               <button class="btn-link" onclick="window.location.href='#';">
        Book a Demo
        <img src="./images/arrow-right.webp" alt="icon" class="arrow-icon">
    </button>
               </li>
            </ul>
                
            </div>
            <div class="content-img"><img src="./images/risk_area_img-1.jpg" alt=""></div>
        </div>
 </div>
 <button type="button" class="btn-contact header_contactLink__Nezdl" id="contactBtn">Contact us</button>
<!-- <button class="btn-contact" id="contactBtn">
        <img src="https://img.icons8.com/ios-filled/50/ffffff/mail.png" alt="Call"/>
</button> -->
 <!-- Hidden Contact Form -->
 <div class="floating-form" id="floatingForm">
  

  <form id="contactForm">
  <div class="form-header">
      <p>Contact Us </p>
      <span class="close-btn" id="closeForm">&times;</span>
  </div>
      <input type="text" id="name" name="name" placeholder="Your name" required>
      <input type="email" id="email" name="email" placeholder="Your Email address" required>
      <input type="text" id="phone" name="phone" placeholder="Your Mobile no" required>
      <textarea id="message" name="message" placeholder="Message" rows="4"></textarea>
      
      <button type="submit" class="btn-submit">Send Message</button>
  </form>
</div>
 <div class="compliance-wrapper">
  <div class="compliance-container">
    <div class="compliance-header">
      <div class="header-image">
        <img src="https://wp.digiliance.in/wp-content/uploads/2023/02/note_shield-1.png" alt="img" width="60" height="60">
      </div>
      <div class="section-title">
        <h3>File your labour compliances the way you want with Digiliance</h3>
      </div>
      <p>Pull a chair in our office or stay put on your couch. We have all the labour compliance management options you need</p>
    </div>

    <div class="compliance-options">
      <!-- Self Implementation Card -->
      <div class="compliance-card">
        <div>
        <h4>Self Implementation</h4>
        <p>Labour Law Compliance Management Software</p>
        <ul>
          <li>Customised compliance checklist based on your industry, state, and head count</li>
          <li>Detailed compliance description & consequences against each compliance item</li>
          <li>Classification according to compliance nature</li>
          <li>Assignment of due date against each compliance</li>
          <li>Access to the latest statutory forms, registers, and abstracts</li>
          <li>Periodic compliance based on recurrence and event types</li>
          <li>Automatic alerts and monthly compliance calendar</li>
        </ul>
        </div>
        <a href="/contact-us" class="contact-btn">Book a Demo</a>
        <!-- <div class="button-container">
           
             <button class="demo-btn">Book a Demo</button>
        </div> -->
        <img src="./images/self_file.png" alt="" class="self_img">
      </div>

      <!-- Consulting Services Card -->
      <div class="compliance-card">
        <div>
        <h4>Consulting Services</h4>
        <p>Expert Support</p>
        <ul>
          <li>Customized compliance checklist based on your industry, state, and headcount</li>
          <li>Access the latest statutory forms, returns, and abstracts</li>
          <li>Detailed compliance description & consequences against each compliance item</li>
          <li>Classification according to compliance nature and due dates</li>
          <li>Salary structuring as per the new labour code</li>
          <li>Calculation of bonuses and gratuities</li>
          <li>Guidance on the Full & Final Settlement timeline</li>
          <li>PF & ESI contribution impact assessment</li>
          <li>Advice on HR policy and employment contracts adjustments</li>
        </ul>
        </div>
       
      
        <a href="/contact-us" class="contact-btn">Contact Us</a>
        <img src="./images/consult_file.png" alt="" class="consult_img" >
      </div>
    </div>
  </div>
</div>
<div class="main-container">
       
        <div class="content-container">
            <div class="content-content">
                <p class="content-tagging">LICENSE AND DOCUMENT MANAGEMENT</p>
                <P class="content-heading">Reliable and safe space for all your licenses and documents</P>
                <p  class="content-para">Too many licenses and documents? missing on renewal dates and hearings? no record of anything? We`ve been there too and that`s why we built Digiliance!</p>
                <ul>
                <li class="list-item">
            <span class="icon">
                <img src="./images/arrow-right.webp" alt="logo" width="10">
                    </span>
                    <div class="list-content">
                        <p><strong>Add licenses compliance score:</strong>  Track multiple branches & units and gives a bird eye view of what`s compliant and which others are at risk</p>
                    </div>
                </li>  
                <li class="list-item">
            <span class="icon">
                <img src="./images/arrow-right.webp" alt="logo" width="10">
                    </span>
                    <div class="list-content">
                        <p><strong>
                        License Tracker</strong>   Populates state specific compliances & facilitates contractors to submit all compliance documents to principal employer</p>
                    </div>
                </li>
                    <li class="list-item">
            <span class="icon">
                <img src="./images/arrow-right.webp" alt="logo" width="10">
                    </span>
                    <div class="list-content">
                        <p><strong>
                        Document Tracker</strong>  Manage at the site level and be in full control, the unified platform keeps you informed about what`s happening at the site level.</p>
                    </div>
                </li>  
                <li class="list-item">
            <span class="icon">
                <img src="./images/arrow-right.webp" alt="logo" width="10">
                    </span>
                    <div class="list-content">
                        <p><strong>
                        Upload Challan/Reports</strong>  Manage at the site level and be in full control, the unified platform keeps you informed about what`s happening at the site level.</p>
                    </div>
                </li>    
               <li>
               <button class="btn-link" onclick="window.location.href='#';">
                    Book a Demo
                    <img src="./images/arrow-right.webp" alt="icon" class="arrow-icon">
               </button>
               </li>
            </ul>
                
            </div>
            <div class="content-img"><img src="./images/license_document-1.png" alt="" ></div>
        </div>

    </div>
    <div class="get-started-wrapper" data-aos="fade-up">
    <div class="container-wrap">
        <div class="text-center">
            <h5 class="get-started-title">GET STARTED for <span>"FREE"</span></h5>
            <h4 class="get-started-subtitle">Become labour law compliant with Digiliance</h4>
            <div class="button-container">
                <a class="btn-primary book-demo-btn" href="/new-labour-codes/implementation">Book a Demo</a>
            </div>
        </div>
    </div>
</div>
<script>
    // Get elements
const floatingMsgBtn = document.getElementById("contactBtn");
const buttonGroup = document.querySelector(".button-group");
const contactBtn = document.getElementById("contactBtn");
const floatingForm = document.getElementById("floatingForm"); // Reference form element
const closeFormBtn = document.getElementById("closeForm");

// Track the button visibility state
let buttonsVisible = false; // Set initial state to hidden

// Toggle WhatsApp and Contact buttons when floating message button is clicked
floatingMsgBtn.addEventListener('click', () => {
    buttonsVisible = !buttonsVisible;
    
    // Show or hide the button group based on the state
    if (buttonsVisible) {
        buttonGroup.style.transform = "scale(1)"; // Show the button group
    } else {
        buttonGroup.style.transform = "scale(0)"; // Hide the button group
    }
});

// Show the contact form when the contact button is clicked
contactBtn.addEventListener('click', () => {
    floatingForm.style.transform = "scale(1)"; // Show the contact form
    buttonGroup.style.transform = "scale(0)"; // Hide the button group when form opens
    buttonsVisible = false; // Reset button visibility state
});

// Close the form when the close button is clicked
closeFormBtn.addEventListener('click', () => {
    floatingForm.style.transform = "scale(0)"; // Hide the contact form
});

</script>
</body>
</html>
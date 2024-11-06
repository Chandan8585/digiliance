<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
             /* Floating form styling */
    
  
      
  
      .close-btn {
        position: absolute;
       
        top: 10px;
        right: 15px;
        cursor: pointer;
        font-size: 3.5rem;
        color: black;
        font-size: 50px;
      }

  
      /* Contact form styles */
      #contactForm {
        width: 80%;
        height: 90vh;
        margin: 1rem;
        
        padding: 1rem;
        color: #C9802F; 
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
        font-size: 2.5rem;
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
    top: 1rem;
    left: 32rem;
    border: 2px solid red;
    background: rgba(255, 255, 255, 0.95);
    height: 90vh;
    width: 32vw;
    background-color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    /* padding: 20px; */
    z-index: 10;
    color: black;
    transition: transform 0.3s ease; 
    border-radius: 5px;
}


.form-header{
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid gray;
    padding: 0px 20px;
}
.form-header p{
      /* font-weight: bold; */
      font-size: 1.2rem;
}
    </style>
</head>
<body>
<button class="btn-contact" id="contactBtn">
        <img src="https://img.icons8.com/ios-filled/50/ffffff/mail.png" alt="Call"/>
    </button>
<div class="floating-form" id="floatingForm">
  
  <div class="form-header">
      <p>Contact Us </p>
      <span class="close-btn" id="closeForm">&times;</span>
     
  </div>
  <form id="contactForm">
     
      <input type="text" id="name" name="name" placeholder="Your name" required>
      <input type="email" id="email" name="email" placeholder="Your Email address" required>
      <input type="text" id="phone" name="phone" placeholder="Your Mobile no" required>
      <textarea id="message" name="message" placeholder="Message" rows="4"></textarea>
      
      <button type="submit" class="btn-submit">Send Message</button>
  </form>
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
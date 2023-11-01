<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset    = "utf-8">
    <meta http-equiv = "X-UA-Compatible"
		  content	 = "IE=edge">
    <meta name	  = "viewport"
		  content = "width=device-width, initial-scale=1">

    <title></title>
          <?php include "header.php"; ?> 
          <style>
            


    body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

.top-banner {
    position: relative;
    width: 100%;
    height: 500px;
    overflow: hidden;
}

.top-banner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.banner-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s;
    transform: translateY(100%);
}

.banner-content {
    text-align: center;
    color: #fff;
}

.banner-content h1 {
    font-size: 2.5em;
    color: #fff;
    margin: 0;
}

.banner-content p {
    font-size: 1.5em;
    margin-top: 10px;
}

.top-banner:hover .banner-overlay {
    opacity: 1;
    transform: translateY(0);
}

/* Base styles for the container and topics */
.container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 2000px;
            margin: 0 auto;
            background-color: #fff; /* Background color for the container */
            padding: 20px; /* Add some padding */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Box shadow for a card-like effect */
            margin-top: 20px; /* Add some space between the banner and the container */
        }

        .topic {
            width: calc(45% - 20px); /* Adjust the width and add some spacing between topics */
            background-color: #f5f5f5;
            padding: 20px;
            margin-bottom: 20px;
            position: relative;
            cursor: pointer;
            border-radius: 8px; /* Rounded corners for topics */
            transition: transform 0.3s ease; /* Add a subtle hover effect */
        }

        /* Hover effect to lift the topic */
        .topic:hover {
            transform: translateY(-5px);
        }

        .tick-icon {
            font-size: 24px;
            margin-right: 10px;
            display: inline-block;
            transform: translateY(2px);
            transition: transform 0.3s ease;
        }

        .topic-title {
            display: inline-block;
            font-weight: bold;
        }

        .topic-notes {
            display: none;
            position: absolute;
            right: -20px;
            top: 0;
            background-color: #333;
            color: #fff;
            padding: 10px;
            border-radius: 4px;
            width: 290px;
            transition: opacity 0.3s ease;
        }

        /* Hover effect to show notes */
        .topic:hover .tick-icon {
            transform: translateY(-2px);
        }

        .topic:hover .topic-notes {
            display: block;
        }



/* Base styles for the location container */
.location-container {
display: flex;
justify-content: space-between;
align-items: center;
}

/* Styles for the location details on the left */


.location-details h1 {
font-size: 38px;
margin-bottom: 20px;
text-align: center;
font-weight: bold;
color: #600;
}

.location-details address {
font-size: 16px;
text-align: center;
}

/* Styles for the location map on the right */
.location-map {
width: 75%;
position: relative;
overflow: hidden;
border-radius: 4px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.location-map iframe {
width: 100%;
height: 400px;
border: none;
}

/* Base styles for the branches container */
.branches-container {
display: flex;
flex-wrap: wrap;
justify-content: space-between;
}

.branches-container h1 {
  font-weight: bold; 
}
/* Styles for each branch subsection */
.branch {
width: calc(30% - 20px); /* Two columns with a small gap between them */
height: 200px;
background-color: #f5f5f5;
padding: 10px -5px;
border-radius: 4px;
margin-bottom: 20px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
align-items: center;
}

.branch h2 {
font-size: 24px;
margin-bottom: 10px;

color: #333; /* Customize the font color */
text-align: center;
}

.branch p {
font-size: 16px;
margin: 5px 0;
text-align: center;
font-style: italic;
}

/* Styles for the "Our Branches" heading */
.branches-heading {
width: 100%;
font-size: 40px;
margin-top: 55px;
margin-bottom: 20px;
color: #851212; /* Customize the font color */
text-align: center; /* Center the heading */
}
            </style>
            </head>
<body>
<br>
<br>
<br>
<br>
<div class="top-banner">
        <img src="images/con3.jfif" alt="Top Banner Photo">
        <div class="banner-overlay">
            <div class="banner-content">
                <h1>Contact Us</h1>
                <p>Let's Make a Difference Together</p>
            </div>
        </div>
    </div>
    <script>
      // Add smooth scroll animation to anchor links
document.addEventListener("DOMContentLoaded", function () {
  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  
  for (let link of anchorLinks) {
    link.addEventListener("click", smoothScroll);
  }
});

function smoothScroll(e) {
  e.preventDefault();
  
  const targetId = this.getAttribute("href").substring(1);
  const targetElement = document.getElementById(targetId);
  
  if (!targetElement) return;
  
  const targetPosition = targetElement.getBoundingClientRect().top;
  const startPosition = window.pageYOffset;
  const distance = targetPosition - startPosition;
  const duration = 1000; // Adjust the duration as needed
  
  let startTime = null;
  
  function animation(currentTime) {
    if (startTime === null) startTime = currentTime;
    const timeElapsed = currentTime - startTime;
    const progress = Math.min(timeElapsed / duration, 1);
    window.scrollTo(0, startPosition + distance * ease(progress));
    
    if (timeElapsed < duration) requestAnimationFrame(animation);
  }
  
  function ease(t) {
    return t < 0.5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;
  }
  
  requestAnimationFrame(animation);
}

      </script>

    <div class="container">
        <div class="topic">
          <div class="tick-icon">✓</div>
          <div class="topic-title">We are here to help</div>
          <div class="topic-notes">
            If you are struggling, please know that you are not alone. Sumithrayo is here to <br/> support you.
          </div>
        </div>
        <div class="topic">
          <div class="tick-icon">✓</div>
          <div class="topic-title">We are confidential</div>
          <div class="topic-notes">
            Everything you share with us will be kept confidential.
          </div>
        </div>
        <div class="topic">
          <div class="tick-icon">✓</div>
          <div class="topic-title">We are responsive</div>
          <div class="topic-notes">
            We will do our best to respond to your inquiries as soon as possible.
          </div>
        </div>
        <div class="topic">
          <div class="tick-icon">✓</div>
          <div class="topic-title">We are grateful for your support</div>
          <div class="topic-notes">
            Your donation will help us continue to provide essential services to those in need.
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
     

      
      <div class="location-container">
        <div class="location-details">
          <h1>Head Office</h1>
          <address>
            Address: 60/7, Horton Place, Colombo, Sri Lanka<br>
            Hours: Mon-Fri 9:00AM - 5:00PM<br>
            Phone: +94 11 2 682535<br>
            Email: slmindcare@gmail.com
          </address>
        </div>
        <div class="location-map">
          <iframe frameborder="0" scrolling="no" marginheight="10" marginwidth="50"
                  src="https://maps.google.com/maps?q=Sri%20Lanka%20Sumithrayo%2C%20Horton%20Place%2C%20Colombo&#038;t=m&#038;z=16&#038;output=embed&#038;iwloc=near"
                  title="Sri Lanka Sumithrayo, Horton Place, Colombo"
                  aria-label="Sri Lanka Sumithrayo, Horton Place, Colombo">
          </iframe>
        </div>
      </div>
     
      <div class="branches-container">
  <h1 class="branches-heading">Our Branches</h1>
      <!-- Branch Subsections -->

<div class="branch">
    <h2>Outreach Unit</h2>
    <p>60/7 Horton Place, Colombo 7</p>
    <p>Phone: 011 2682570 / 011 2674436</p>
    <p>Mobile: 0767 520 620 / 0777 723 696</p>
    <p>Email: info.slsumithrayo@gmail.com</p>
    <p>Hours: Weekdays 9am-4pm, Sat & Sun 9am-1pm</p>
    <p>WhatsApp: 4pm-10pm</p>
  </div>
  
  <div class="branch">
    <h2>Colombo South</h2>
    <p>176 Wickramasinharamaya, Nawala Road, Nugegoda</p>
    <p>Phone: 011 281 8860</p>
    <p>Email: slscolombosouth@gmail.com</p>
    <p>Hours: Daily 9am-1pm</p>
  </div>
  
  <div class="branch">
    <h2>Panadura</h2>
    <p>578/3, Galle Rd, Panadura</p>
    <p>Phone: 038-223 5291</p>
    <p>Email: sumithrayopond@gmail.com</p>
    <p>Hours: Daily 9am-2pm</p>
  </div>
  
  <div class="branch">
    <h2>Negombo</h2>
    <p>43 Wijepala Mendis Mawatha, Negombo</p>
    <p>Phone: 031 - 222 3322</p>
    <p>Hours: Wed, Thur, Sat: 9:30am-1:30pm</p>
  </div>
  
  <div class="branch">
    <h2>Kandy</h2>
    <p>693/4, Peradeniya Rd, Mulgampola, Kandy</p>
    <p>Phone: 081 223 4806</p>
    <p>Email: sumithrayo.kandy@gmail.com</p>
    <p>Hours: Daily 9am-1pm</p>
  </div>
  
  <div class="branch">
    <h2>Matale</h2>
    <p>803/C, Mandandawela, Matale</p>
    <p>Phone: 066-222 3521</p>
    <p>Hours: Mon, Tues, Thur, Fri: 9am-1pm</p>
  </div>
  
  <div class="branch">
    <h2>Mawanella</h2>
    <p>C/O Gamage Hospital, 121, Pallegoda Rd, Medirigama, Mawanella</p>
    <p>Phone: 035 - 578 8330</p>
    <p>Email: sls.mawanella@gmail.com</p>
    <p>Hours: Tues, Sat, Sun: 9am-2pm</p>
  </div>
  
  <div class="branch">
    <h2>Kurunegala</h2>
    <p>36A Vishramika Piyasa, Pubudu Mawatha, Negombo Rd, Kurunegala.</p>
    <p>Phone: 037 - 493 1731</p>
    <p>Hours: Daily 9am-1pm</p>
  </div>
  
  <div class="branch">
    <h2>Jaffna</h2>
    <p>12 Behind Veerasingam Hall, K.K.S Rd, Jaffna</p>
    <p>Phone: 0779 008 776</p>
    <p>Hours: Daily 9am-1pm (except Wed)</p>
  </div>
  
  <div class="branch">
    <h2>Bandarawela</h2>
    <p>44/2, Badulla Road, Bindunuweva, Bandarawela</p>
    <p>Phone: 057-222 2662</p>
    <p>Hours: Mon, Wed, Fri: 9am-1pm</p>
  </div>
  
  <?php include "footer.php"; ?>

  </body>

</html>
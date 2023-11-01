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



.slideshow {
  width: 100%;
  height: 550px;
  overflow: hidden;
  position: relative;
}

.slideshow img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
  transition: opacity 0.5s ease;
}

.slide-img.active {
opacity: 1;
}

#welcome {
text-align: center;
padding: 30px;
}

#welcome h2 {
    font-size: 58px;
    margin-top: 0px;
    margin-bottom: 0px;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color:rgb(65, 42, 2);
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

#promise {
text-align: center;
padding: 30px;
}

#promise h2 {
font-size: 40px;
margin-top: 0px;
margin-bottom: 0px;
font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
color:#600;
text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
  z-index: 1;
}


.blue {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
}

.text-blue {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0; /* Initially hidden */
    transition: opacity 0.5s;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)); /* Use a linear gradient for a smoother transition with reduced top transparency */
    color: #fff; /* Text color */
    padding: 10px 20px; /* Adjust the padding to control the size of the transparency shadow */
    width: 100%;
    box-sizing: border-box; /* Include padding in the width */
}


.text-blue p {
    font-size: 22px;
    margin-top: 920px;
    margin-bottom: 50px;
}

.LearnMore-button {
    display: flex;
    justify-content: center;
}

.LearnMore-button a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ff8000;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}

.LearnMore-button a:hover {
    background-color: #b34500;
}

.image-blue {
    display: flex;
    justify-content: center;
    position: relative;
    overflow: hidden;
    height: 100%; /* Add this line */
    
}

.image-full-width {
     /* Make the image cover the full width of the container */
     width: 5000px;
    height: 55Vh;
}


.show-text {
    opacity: 1; /* Display the text when this class is applied */
}

img {
max-width: 100%;
height: auto;
margin-right: 10px; /* Add some spacing between images */
}

/* Center the video container using flexbox */
.video-container {
display: flex;
justify-content: center;
align-items: center;
height: 100vh; /* Center vertically within the viewport */

}

p {
font-size: 20px;
margin-top: -130px;
text-align: center;
}



/* Style the video element */
video {
/* Your existing styles */
width: 75%;
max-width: 1000px;
margin-top: -170px;
}

/* Center the button using flexbox */
.centered-button {
display: flex;
justify-content: center;
align-items: center;
margin-top: 20px; /* Add margin for spacing */
}

/* Style the button */
.centered-button a {
display: inline-block;
padding: 10px 20px;
background-color: #ff8000;
color: #fff;
text-decoration: none;
border-radius: 5px;
}

.centered-button a:hover {
background-color: #b34500;
}

.events-images {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }

        .event {
            text-align: center;
            margin-bottom: 20px;
            overflow: hidden;
            position: relative;
        }

        .event img {
            width: 300px;
            height: 500px;
            margin-right: 20px;
            margin-left: 20px;
            transition: transform 0.3s, opacity 0.3s;
        }

        .event h3 {
            margin-top: 10px;
        }

        .event .button-container {
            margin: 10px 0;
        }

        .event input[type="button"] {
            padding: 5px 10px;
            font-size: 1em;
            font-family: Arial, sans-serif;
            text-decoration: none;
            color: white;
            background-color: orange;
            border: 2px solid;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            cursor: pointer;
        }

        .event:hover img {
            transform: scale(1.1);
            opacity: 0.7;
        }

        .event:hover input[type="button"] {
            background-color: #ff7f50;
        }


.text-container {
background-color: rgba(255, 165, 0, 0.5);
padding: 70px;
text-align: center;
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
height: 16vh;
}

.text-container p {
margin-top: 0px;
font-weight: bold;
}

.contact-button {
background-color: #FFA500;
color: white;
border: none;
border-radius: 50%;
padding: 15px 30px;
font-size: 18px;
font-weight: bold;
cursor: pointer;
}

.contact-button:hover {
background-color: #b34500;
}


.widget-google_maps 
.widget-container{overflow:hidden}
.widget-google_maps
 iframe{height:500px; width:100%; margin-top: 20px;}	


</style>
</head>
<body>

         

    <!--Slide show begins here-->
    <br>
    <br>
    <br>
    <br>
   <div class="slideshow">
        <img src="images/WhatsApp Image 2023-10-01 at 12.58.12 PM.jpeg" alt="Slideshow Image 1" width="1030" height="687" class="slide-img">
        <img src="images/WhatsApp Image 2023-10-01 at 12.58.13 PM (1).jpeg" alt="Slideshow Image 2" width="1200" height="628" class="slide-img">
        <img src="images/guilherme-stecanella-375176-unsplash.jpg" alt="Slideshow Image 3" width="500" height="454" class="slide-img">
        <img src="images/315444-photography-children-happy.jpg" alt="Slideshow Image 4" width="500" height="500" class="slide-img">
        
      </div>  
<!--SlideShow Ends  here-->

    <!--About us section-->

      <section id="welcome">
        <h2>Find Balance, Find Peace: Welcome to Mind Care</h2>
      </section>



      <div class="blue">
    <div class="image-blue">
        <img src="images/istockphoto-1476769267-612x612.jpg" alt="Image 1" class="image-full-width">
    </div>
    <div class="text-blue">
        <p>We are a government-approved charity that provides emotional support to help those at risk of suicide. We offer a variety of services, including a 24-hour hotline, befriending programs, and awareness programs. We know that reaching out for help can be difficult, but we want to assure you that you are not alone. We are here to support you through whatever challenges you are facing. Whether you are feeling overwhelmed, hopeless, or suicidal, we are here to listen and to offer support. If you or someone you know is struggling emotionally, please don't hesitate to reach out to us. We are here for you.</p>
        <div class="LearnMore-button">
            <a href="About-us.php">Learn More</a>
        </div>
    </div>
</div>


<script>
    // Add a scroll event listener to show/hide text based on scroll position
    window.addEventListener("scroll", function () {
        var textblue = document.querySelector(".text-blue");
        var imageblue = document.querySelector(".image-blue");

        // Calculate the position at which to show the text
        var showTextPosition = imageblue.offsetTop - window.innerHeight + 200;

        if (window.pageYOffset >= showTextPosition) {
            textblue.classList.add("show-text");
        } else {
            textblue.classList.remove("show-text");
        }
    });
</script>


    <section id="promise">
        <h2>Our Promises</h2>
      </section>
<br>
<br>
<br>
<br>
      <div>
    <p>At MindCare, there is Help, there is Hope. Preventing Suicides and Providing Emotional support to those going through difficult times are our goals. 
    </br> We assure 100% Confidentiality, Anonymity, and Acceptance with respect and care.</p>
</div>
    <div class="centered-button">
        <a href="ContactUs.php">Join Our Team</a>
    </div>

    <div class="events-images">
        <div class="event">
            <img src="images/newsandeventimage.jpg" alt="events 1">
            <h3>News and Events</h3>
            <div class="button-container">
                <input type="button" name="" value="Learn More" onclick="document.location='htmls/newsandevents.html'">
            </div>
        </div>
        <div class="event">
            <img src="images/workshops.jpg" alt="events 2">
            <h3>Awareness Workshops</h3>
            <div class="button-container">
                <input type="button" name="" value="Learn More" onclick="document.location='htmls/awarenessworkshops.html'">
            </div>
        </div>
        <div class="event">
            <img src="images/WhatsApp Image 2023-10-01 at 3.40.36 PM.jpeg" alt="events 3">
            <h3>Webinars</h3>
            <div class="button-container">
                <input type="button" name="" value="Learn More" onclick="document.location='htmls/webinars.html'">
            </div>
        </div>
        <div class="event">
            <img src="images/Rural Programmes.png" alt="events 4">
            <h3>Rural Programmes</h3>
            <div class="button-container">
                <input type="button" name="" value="Learn More" onclick="document.location='htmls/ruralprogramme.html'">
            </div>
        </div>
    </div>
    
    <div class="text-container">
        <p>Providing Emotional support for people to develop coping skills and deal with everyday stress and strains of life</p>
        <button class="contact-button" ><a href="ContactUs.php">Contact Us</a></button>
    </div>
    

    <!--Map Begins here-->
    <div class="widget-google_maps" data-id="330e76e"  data-widget_type="google_maps.default">
        <div class="widget-container">	
    <div class="custom-embed">
    <iframe frameborder="0" scrolling="no" marginheight="10" marginwidth="50"
            src="https://maps.google.com/maps?q=Sri%20Lanka%20Sumithrayo%2C%20Horton%20Place%2C%20Colombo&#038;t=m&#038;z=16&#038;output=embed&#038;iwloc=near"
            title="Sri Lanka Sumithrayo, Horton Place, Colombo"
            aria-label="Sri Lanka Sumithrayo, Horton Place, Colombo">
    </iframe>
    </div>
        </div>
<!--Map Ends  here-->
     <!--Javascript file-->
        <script src="Assets/js/slider.js"></script>


      
        <?php include "footer.php" ; ?>
      
</body>

</html>
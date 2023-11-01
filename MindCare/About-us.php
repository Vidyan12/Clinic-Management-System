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
            /* Resetting default margin and padding for the entire page */

            body {
      height: 300vh;
      margin: 0;
      padding: 0;
      background-color: white;
      font-family: AvenirNextLTPro-Regular;
      max-width: 2000px;
      margin: auto;
    }
    .banner {
    position: relative;
    overflow: hidden;
}

.banner img {
    width: 100%;
    height: 100vh;
    object-fit: cover; /* Ensure the image covers the entire viewport */
}

.banner::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background: rgba(0, 0, 0, 0.5); /* Adjust the alpha value for the transparency you want */
}


.elevator {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: rgb(255, 255, 255);
    font-family: AvenirNextLTPro-Bold;
    font-size: 3em;
    display: grid;
    grid-template-columns: auto auto;
    grid-gap: 10px;
}



    .elevatorL {
      text-align: right;
      left: 9em;
    }

    .elevatorR {
      left: 10em;
    }

    .elevator-transition {
      animation: repeat 1s forwards;
      animation-delay: 1s;
    }


@keyframes repeat{
  100%{
    filter: drop-shadow(0 1em 0 rgb(255, 255, 255)) drop-shadow(0 1em 0 rgb(255, 255, 255)) drop-shadow(0 1em 0 rgb(255, 255, 255)) drop-shadow(0 1em 0 rgb(255, 255, 255)) drop-shadow(0 1em 0 rgb(255, 255, 255)) drop-shadow(0 1em 0 rgb(255, 255, 255));
  }
  
}
.elevatorL-transition{
    animation: moveLeft .7s forwards;
/*   animation-delay:2s; */
      animation-play-state: paused ;
  animation-delay:  calc(var(--scroll) * -1s);

}
.elevatorR-transition{
    animation: moveRight .7s forwards;
/*     animation-delay:2s; */
      animation-play-state: paused ;
  animation-delay:  calc(var(--scroll) * -1s);
}

@keyframes moveLeft {
      0% {
        transform: translateX(0px) rotate(0);
  }
  100%{
      transform: translateX(-10em);
  } 
}
@keyframes moveRight {
      0% {
        transform: translateX(0px) rotate(0);
  }
  100%{
      transform: translateX(10em);
  } 
}
  

/* About section styles */
.About {
    text-align: center; /* Center align text */
    margin-top: 40px; /* Add spacing from the title image */
}

.About h1 {
    font-size: 36px;
    color: rgb(224, 133, 6);
    margin: 20px 0; /* Add spacing above and below the heading */
}

p {
    font-size: 20px;
    color: #000;
    margin: 20px 0; /* Add spacing above and below the paragraphs */
    text-align: center;
}

/* Vision and Mission section styles */
.vision-mission-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 40px; /* Add spacing from the About section */
    background-color: #f7f7f7; /* Background color for the container */
    padding: 40px; /* Add padding to create separation */
}

.section {
    width: 80%;
    margin-bottom: 40px;
    text-align: center;
}

.section h2 {
    font-size: 40px;
    margin: 20px 0;
    font-family: Arial, sans-serif;
    color: rgb(226, 101, 18); /* Adjust the color of the heading text */
}



.split-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    text-align: center;
}

.left {
    width: 48%;
    text-align: center;
}

.left p {
    font-size: 18px;
    line-height: 1.6;
    margin: 20px 0;
    text-align: center;
    color: #555; /* Adjust the color of the paragraph text */
}

.right {
    width: 50%;
    height: 15vh;
    display: flex;
    align-items: center;
}

.right img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    margin-top: 45px;
}

/* Services section styles */
.Services {
    margin-top: 40px;
    text-align: center;
    font-family: 'Your-Professional-Font', sans-serif; /* Replace 'Your-Professional-Font' with the desired font family */
    background-color: #f7f7f7; /* Background color for the section */
    padding: 40px; /* Add padding for separation */
}

.Services h3 {
    font-size: 36px;
    color: rgb(226, 101, 18);
    margin: 20px 0;
}

.Service-items {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    margin-top: 40px;
}

.Service-item {
    text-align: center;
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle shadow to the service items */
}

.Service-item img {
    width: 200px;
    height: 150px;
    max-width: 100%;
    height: auto;
}

/* Style the service item titles */
.Service-item h4 {
    font-size: 24px;
    color: #333;
    margin-top: 20px;
}

/* Style the service item descriptions */
.Service-item p {
    font-size: 16px;
    color: #666;
    margin-top: 20px;
}

.animated {
      opacity: 0;
      transform: translateY(50px);
      transition: all 0.5s;
    }

    .inView {
      opacity: 1;
      transform: translateY(0);
    }


            </style>
            </head>
<body>
<br>
<br>
<br>
<br>
  

<div class="banner">
    <img src="images/ab1.jpg" alt="Banner Image">
    <div class="elevator">
        <div class="elevatorL">GET TO KNOW</div>
        <div class="elevatorR">ABOUT US</div>
    </div>
</div>
    <br>
    <br>
    <p>MindCare is a leading mental health organization dedicated to providing compassionate and comprehensive mental health treatment and intervention services. 
          Founded on the belief that every individual deserves the opportunity to lead a fulfilling and emotionally balanced life, MindCare has been a beacon of hope and healing in the field of mental health for over a decade. 
          Our team of experienced mental health professionals is committed to empowering individuals to overcome challenges and achieve optimal mental well-being
        </p>
</div>

    <div class="vision-mission-container">
        <div class="section">   
        <ul class="scroll-wrap">
            <li class="animated">
            <h2>VISION</h2>
            <br>
            <br>
            <br>
            <div class="split-content">
                <div class="left">
                    <p>Our Vision for a Better Sri Lanka</p>
                    <p>A Sri Lanka where everyone has the hope and support they need to live a happy and fulfilling life.</p>
                </div> 
                <div class="right">
                <img src="images/ab2.jpg">
</li>
</ul>
                </div>        
            </div>
        </div>
        <br>

        <div class="section">
        <ul class="scroll-wrap">
            <li class="animated">
            <h2>MISSION</h2>
            <br>
            <br>
            
            <div class="split-content">
                <div class="left">
                    <p>Our Mission to Help and Heal</p>
                    <p>To provide emotional support and guidance to those in need, and to advocate for policies and practices that promote mental health and well-being.</p>
                </div>
                <div class="right">
                <img src="images/ab3.jpg">
                </li>
                </ul>
                </div> 
            </div>
        </div>
    </div>

    
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
      function updateAnimations() {
        var winMid = $(window).height() / 2 + $(window).scrollTop();
        $(".scroll-wrap li").each(function () {
          var liTop = $(this).offset().top;
          if (liTop <= winMid) {
            $(this).addClass("inView");
          } else {
            $(this).removeClass("inView");
          }
        });
      }

      $(window).scroll(function () {
        updateAnimations();
      });

      // Initial animation state
      updateAnimations();
    });
  </script>

 
<br>
<br>
    <div class="Services">
        <h3>Mind Care's Comprehensive Services</h3>
        <div class="Service-items">
            <div class="Service-item">
                <img src="images/0_2UU8oQwss0WVhQd4.jpg" alt="Counselling Image">
                <h4>Counselling</h4>
                <p>We offer free and confidential counseling to individuals and families who are struggling with a variety of issues, including mental health, family problems, and financial difficulties.</p>
            </div>
            <div class="Service-item">
                <img src="images/shutterstock_1464234134-1024x684.jpg" alt="Support Groups Image">
                <h4>Support Groups</h4>
                <p>We provide a safe and supportive environment for people to come together and share their experiences.</p>
            </div>
            <div class="Service-item">
                <img src="images/istockphoto-1415765557-612x612.jpg" alt="Training Image">
                <h4>Training</h4>
                <p>We offer training to professionals and volunteers on a variety of topics related to mental health, social work, and crisis intervention.</p>
            </div>
            <div class="Service-item">
                <img src="images/istockphoto-1386525645-612x612.jpg" alt="Advocacy Image">
                <h4>Advocacy</h4>
                <p>We work to raise awareness of important social issues and advocate for policies that support vulnerable populations.</p>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>

 <script>
    window.addEventListener('scroll', () => {
      document.body.style.setProperty('--scroll', window.pageYOffset / (document.body.offsetHeight - window.innerHeight));
    }, false);

    const elevator = document.querySelector('.elevator');
    const elevatorL = document.querySelector('.elevatorL');
    const elevatorR = document.querySelector('.elevatorR');

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          elevator.classList.add('elevator-transition');
          elevatorL.classList.add('elevatorL-transition');
          elevatorR.classList.add('elevatorR-transition');

          return;
        }

        elevator.classList.remove('elevator-transition');
        elevatorL.classList.remove('elevatorL-transition');
        elevatorR.classList.remove('elevatorR-transition');
      });
    });

    observer.observe(elevator);
    observer.observe(elevatorL);
    observer.observe(elevatorR);
  </script>
</body>
</html>
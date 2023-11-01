<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include "header.php"; ?> 
  
  <style>



.band {
  width: 90%;
  max-width: 1240px;
  margin: 0 auto;
  
  display: grid;
  
  grid-template-columns: 1fr;
  grid-template-rows: auto;
  grid-gap: 20px;
  
  @media (min-width: 30em) {
    grid-template-columns: 1fr 1fr;
  }
  
  @media (min-width: 60em) {
    grid-template-columns: repeat(4, 1fr);
  }
}

.card {
  background: rgb(250, 250, 250);
  text-decoration: none;
  color: #444;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  display: flex;
  flex-direction: column;
  min-height: 100%;
  position: relative;
  top: 0;
  transition: all .1s ease-in;
}
    
  &:hover {
    top: -2px;
    box-shadow: 0 4px 5px rgba(0,0,0,0.2);
  }
  
  article {
    padding: 20px;
    flex: 1;
    
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  
  h1 {
    font-size: 20px;
    margin: 0;
    color: #333;
  }

  h2 {
    font-size: 45px;
    margin: 0;
    color: #5c1313;
    font-style: oblique;
    margin-bottom: 20px;
  }
  
  p {
    flex: 1;
    line-height: 1.4;
  }
  
  .creator {
    font-size: 12px;
    font-weight: bold;
    color: #999;
    text-transform: uppercase;
    letter-spacing: .05em;
    margin: 2em 0 0 0;
  }
  
  .thumb {
    padding-bottom: 60%;
    background-size: cover;
    background-position: center center;
  }


.item-1 {
  @media (min-width: 60em) {
    grid-column: 1 / span 2;
    
    h1 {
      font-size: 24px;
    }
  }
}

.faq-title {
  font-size: 2em;
  margin: 0.4em 0;
}

div.seperator {
  width: 7.5em;
  background-color: #e31b1b;
  height: 0.17em;
  margin-left: -1.8em;
}

.faq-list > div {
  border-bottom: 0.07em solid #ededed;
  padding: 1.5em 0em;
} 

.faq-list > div:last-child {
  border: unset;
}

details > summary {
  list-style: none;
}
details > summary::-webkit-details-marker {
  display: none;
}

summary {
  font-size: 1.4em;
  font-weight: bold;
  cursor: pointer;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none; 
  user-select: none;
  transition: all 0.3s ease;
}

summary:hover {
  color: #e31b1b;
}

details[open] summary ~ * {
  animation: sweep .5s ease-in-out;
}

@keyframes sweep {
  0%    {opacity: 0; margin-left: -10px}
  100%  {opacity: 1; margin-left: 55px}
}

details[open] summary {
  color: #e31b1b;
}

details[open] p {
  border-left: 2px solid #e31b1b;
  margin-left: 55px;
  padding-left: 25px;
  opacity: 100;
  transition: all 3s ease;
}

details[open] summary:after {
  content: "-";
  font-size: 3.2em;
  margin: -33px 0.35em 0 0;
  font-weight: 200;
}

.faq-body {
width: 83.5%;
  margin: 4em auto;
  box-shadow: 0px 0px 16px #5b5b5b;
  border-radius: 0.2em;
  padding: 5em;
  background-color: #fff;
}

.faq-list {
  width: 55em;
  margin: 1em auto;
  padding: 2em 0;
}

summary::-webkit-details-marker {
  display: none;
}

summary:after {
  background: transparent;
  border-radius: 0.3em;
  content: "+";
  color: #e31b1b;
  float: left;
  font-size: 1.8em;
  font-weight: bold;
  margin: -0.3em 0.65em 0 0;
  padding: 0;
  text-align: center;
  width: 25px;
}





/* CSS for the video section */
#videos {
  width: 83.5%;
  margin: 4em auto;
  box-shadow: 0px 0px 16px #5b5b5b;
  border-radius: 0.2em;
  padding: 3em;
  background-color: #fff;
  
}

.video-list {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  margin-top: 20px;
}

.video {
  width: calc(33.33% - 20px); /* Adjust the width for the number of videos you have */
}

video {
  width: 100%;
}

h4 {
  margin: 1em 0;
  font-size: 1.4em;
  color: #333;
}



/* CSS for the Downloadable Resources section */
#downloadable-resources {
  width: 83.5%;
  margin: 4em auto;
  box-shadow: 0px 0px 16px #5b5b5b;
  border-radius: 0.2em;
  padding: 3em;
  background-color: #fff;
}

.resource-list {
  list-style: none;
  padding: 0;
}

.resource-list li {
  margin-bottom: 1em;
}

.download-link {
  display: block;
  text-decoration: none;
  background-color: #e31b1b;
  color: #fff;
  padding: 10px 20px;
  border-radius: 5px;
  text-align: center;
  cursor: pointer;
  transition: background-color 0.3s;
}

.download-link:hover {
  background-color: #101010;
}
h5 {
  margin: 1em 0;
  font-size: 17px;
  color: #333;
}
</style>    
</head>
<body>
  <br>
  <br>
  <br>
  <br>
  <br>
<header>
    <h2>Navigating Mental Wellness
      <br>Your Comprehensive Resource Library</h2>
</header>
  <div class="band">
    <div class="item-1">
      <a href="https://medshadow.org/videos/managing-anxiety-borderline-personality-disorder-bpd-and-mental-health-chris-patient-story/?gclid=Cj0KCQjwhfipBhCqARIsAH9msbmzTSEsSF47PCTeOIUNrsPgoFMKVTFrOWhUr5GRzWm17jmlvRU7HtEaAo32EALw_wcB" class="card">
        <div class="thumb" style="background-image: url(images/resources/mental_health-1024x576.jpg.optimal.jpg);"></div>
        <article>
          <h1>Managing Anxiety, Borderline Personality Disorder (BPD), and Mental Health | Chris’s Patient Story</h1>
          <creator> Dante Steward, MBA</creator>
        </article>
      </a>
    </div>
    <div class="item-2">
      <a href="https://www.breaktime.org/post/the-crushing-cycle-of-homelessness-and-mental-illness?gclid=Cj0KCQjwhfipBhCqARIsAH9msbnBE2Sc_NNfBHuPmM_erc_4-T5UxLs8dTMkbzMkSSPTzVzjAz8q7RcaAmXxEALw_wcB" class="card">
        <div class="thumb" style="background-image: url(images/resources/e38564_08e4732eeea2451d99ed92af27e84e2d~mv2.webp);"></div>
        <article>
          <h1>The ‘Crushing’ Cycle of Homelessness and Mental Illness</h1>
          <creator>Aaron Lai</creator>
        </article>
      </a>
    </div>
    <div class="item-3">
      <a href="https://www.pinerest.org/newsroom/articles/mental-health-awareness-blog/" class="card">
        <div class="thumb" style="background-image: url(images/resources/mental-health-related-free-vector.jpg);"></div>
        <article>
          <h1>The importance of mental health awareness</h1>
          <creator>Jean Holthaus</creator>
        </article>
      </a>
    </div>
    <div class="item-4">
      <a href="https://www.lepra.org.uk/what-we-do/person-centred-care/mental-health/?gclid=Cj0KCQjwhfipBhCqARIsAH9msbnY5VsoxUf2B836KR9KcTt7qRd4gVvs3DJlbTsnHvBUTLpGVwM4308aAsHAEALw_wcB" class="card">
        <div class="thumb" style="background-image: url(images/resources/8-5e91d66a43005-1221-1687362123.jpg);"></div>
        <article>
          <h1>WHAT WE DO Mental Health</h1>
          <creator>The Duke of Gloucester</creator>
        </article>
      </a>
    </div>
    <div class="item-5">
      <a href="https://strongminds.org/the-need/?gclid=Cj0KCQjwhfipBhCqARIsAH9msblT9G9rQOjvtYhplApSw0R2s4O9e8zZxuLeNFXKwSqqrHX8SAyW-lcaAlgTEALw_wcB" class="card">
        <div class="thumb" style="background-image: url(images/resources/images.jpg);"></div>
        <article>
          <h1>THE NEED
            <br> 
            Ending the Depression Epidemic in Africa</h1>
          <creator>StrongMinds US</creator>
        </article>
      </a>
    </div>
    <div class="item-6">
      <a href="https://sharingwisdoms.org/problem-solving-suggestions/" class="card">
        <div class="thumb" style="background-image: url(images/resources/CA_womanyogaposelaptop_iStock-1365669010.webp);"></div>
        <article>
          <h1>Mental health problem solving suggestions</h1>
          <creator>Marie Gardiner</creator>
        </article>
      </a>
    </div>
    <div class="item-7">
      
        <div class="thumb" >
        <?php
      include "connect.php";
    $result = $con->query("SELECT * FROM blogs ORDER BY created_at DESC");

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='blog-container'>";
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<p>" . $row['content'] . "</p>";
            echo "<img src='" . $row['image'] . "' alt='Blog Image'>";
            echo "</div>";
        }
    } else {
        echo "No blogs available.";
    }

    $con->close();
    ?>
        </div>
        <article>
          
        </article>
      </a>
    </div>
  </div>

  <section id="videos">
    <h3 class="faq-title">Got 60 seconts : Take a mental health minute to watch a video</h3>
    <div class="seperator"></div>
    <div class="video-list">
     

    <div class="video">
      <a href="https://www.youtube.com/watch?v=lQhpetkwWnM" class="card">
        <div class="thumb" style="background-image: url(images/resources/Screenshot.png);"></div>
        <article>
          <h1>Mental Health Minute: Depression</h1>
        </article>
      </a>
    </div>

    <div class="video">
      <a href="https://www.youtube.com/watch?v=_yM7_hbpRXc&list=PLV9WJDAawyhbQb_DSKe3rjc9j_dOykynB&index=2" class="card">
        <div class="thumb" style="background-image: url(images/resources/Screenshot.png);"></div>
        <article>
          <h1>Mental Health Minute: Eating Disorders</h1>
        </article>
      </a>
    </div>

    <div class="video">
      <a href="https://www.youtube.com/watch?v=-j2PqoFCzX0&list=PLV9WJDAawyhbQb_DSKe3rjc9j_dOykynB&index=3" class="card">
        <div class="thumb" style="background-image: url(images/resources/Screenshot.png);"></div>
        <article>
          <h1>Mental Health Minute: Attention-Deficit/Hyperactivity Disorder</h1>
        </article>
      </a>
    </div>

    <div class="video">
      <a href="https://www.youtube.com/watch?v=wr4N-SdekqY&list=PLV9WJDAawyhbQb_DSKe3rjc9j_dOykynB&index=4" class="card">
        <div class="thumb" style="background-image: url(images/resources/Screenshot.png);"></div>
        <article>
          <h1>Mental Health Minute: Stress and Anxiety in Adolescents</h1>
        </article>
      </a>
    </div>

    <div class="video">
      <a href="https://www.youtube.com/watch?v=lOhelfEDAzs&list=PLV9WJDAawyhbQb_DSKe3rjc9j_dOykynB&index=5" class="card">
        <div class="thumb" style="background-image: url(images/resources/Screenshot.png);"></div>
        <article>
          <h1>Mental Health Minute: Bipolar Disorder in Adults</h1>
        </article>
      </a>
    </div>

    <div class="video">
      <a href="https://www.youtube.com/watch?v=UjPRVKS4OBg&list=PLV9WJDAawyhbQb_DSKe3rjc9j_dOykynB&index=6" class="card">
        <div class="thumb" style="background-image: url(images/resources/Screenshot.png);"></div>
        <article>
          <h1>Mental Health Minute: Anxiety Disorders in Adults</h1>
        </article>
      </a>
    </div>

    
         
      </section>
      
    
    
    <section>
    
      <section id="downloadable-resources">
        <h3 class="faq-title">Downloadable Resources</h3>
        
        <div class="seperator"></div>
        <ul class="resource-list">
          <li>
            <h5>Mental Health is for Everyone
              <br>
              Author: The Durham Community Collective</h5>
            <a href="images/pdfs/1. Mental Health is for Everyone Author The Durham Community Collective.pdf" target="_blank" class="download-link">Download</a>
          </li>
      
      
          <li>
            <h5>Look After your Mental Health Using Exercise
              <br>
              Author: Mental Health Foundation</h5>
            <a href="images/pdfs/3. Look After your Mental Health Using Exercise Author Mental Health Foundation.pdf" target="_blank"  class="download-link">Download</a>
          </li>
      
      
          <li>
            <h5>Mental Health Problems Among Adolescents
              <br>
              Author:  Marie Dahlen Granrud</h5>
            <a href="images/pdfs/4. Mental Health Problems Among Adolescents Author Marie Dahlen Granrud.pdf" target="_blank"  class="download-link">Download</a>
          </li>
      
         
         
          <li>
            <h5>Adolescent Mental Health Matters
              <br>
              Author:United Nations International Childrens Emergency Fund </h5>
            <a href="images/pdfs/5. Adolescent Mental Health Matters Author United Nations International Childrens Emergency Fund.pdf" target="_blank"  class="download-link">Download</a>
          </li>
      
          
          
          <li>
            <h5>  Junior High Mental Health Kit Manual
              <br>
              Author:Alberta Health Services
            </h5>
            <a href="images/pdfs/7. Junior High Mental Health Kit Manual Author Alberta Health Services.pdf" target="_blank"  class="download-link">Download</a>
          </li>
        
          
          <li>
            <h5>Mental Wellness in Asia
              <br>
              Author:Gerard Bodeker</h5>
            <a href="images/pdfs/11. Mental Wellness in Asia Author Gerard Bodeker.pdf" target="_blank"  class="download-link">Download</a>
          </li>
      
          
        </ul>
      </section>  


<section>

  <div id="faq" class="faq-body">
    <div class="faq-header">
      <h3 class="faq-title">FAQ's</h3>
      <div class="seperator"></div>
    </div>
    <div class="faq-list">
        <div>
          <details open>
            <summary title="What are the clinic's opening hours?">What are the clinic's opening hours?</summary>
            <p class="faq-content">The clinic is open from 9.00AM to 8.00PM on every days including public holidays also</p>
          </details>
          </div>
        <div>
          <details>
            <summary title="How can I book an appointment with a doctor/psychiatrist?">How can I book an appointment with a doctor/psychiatrist?</summary>
            <p class="faq-content">You can book an appointment through our website. Simply log in, choose your preferred doctor, select a suitable time slot, and confirm your appointment.</p>
          </details>
          </div>
        <div>
          <details>
            <summary title="Do you accept insurance for payment?">Do you accept insurance for payment?</summary>
            <p class="faq-content">Yes, we accept a variety of insurance providers. Please provide your insurance details during the payment process, and we will verify coverage.</p>
          </details>
          </div>
        <div>
          <details>
            <summary title="What payment methods do you accept for self-pay patients?">What payment methods do you accept for self-pay patients?</summary>
            <p class="faq-content">We accept payment through major credit and debit cards. You can also pay using cash at the clinic.</p>
          </details>
          </div>
        <div>
          <details>
            <summary title="How early should I arrive for my appointment?">How early should I arrive for my appointment?</summary>
            <p class="faq-content">We recommend arriving at least 15 minutes before your scheduled appointment time to complete any necessary paperwork and ensure a timely consultation.</p>
          </details>
          </div>
        <div>
              <details>
                  <summary title="Is there a waiting room at the clinic?">Is there a waiting room at the clinic?</summary>
                  <p class="faq-content">Yes, we have a comfortable waiting area where you can relax before your appointment.</p>
                  </p>
              </details>
          </div>
          <div>
            <details>
                <summary title="How can I contact the clinic for additional questions or support?">How can I contact the clinic for additional questions or support?</summary>
                <p class="faq-content">You can reach out to our clinic's support team through 011236785. We are available 24hours.</p>
                </p>
            </details>
        </div>
    </div>
  </div>
</section>





<script>
  document.addEventListener('DOMContentLoaded', function() {
    const downloadLinks = document.querySelectorAll('.download-link');
  
    downloadLinks.forEach(link => {
      link.addEventListener('click', function(event) {
        event.preventDefault();
        const href = this.getAttribute('href');
        const confirmation = confirm('Do you want to download this resource?');
  
        if (confirmation) {
          const a = document.createElement('a');
          a.href = href;
          a.download = '';
          document.body.appendChild(a);
          a.click();
          document.body.removeChild(a);
        }
      });
    });
  });
  </script>
  



  <?php include "footer.php"; ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Mental Health Assessment Tool</title>
    <style>
        /* styles.css */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.background {
    background-image: url('images/girlsmiling.jpeg');
    background-size: cover;
    background-position: center;
    height: 100vh;
}

.overlay {
    background: rgba(0, 0, 0, 0.5);
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.content {
    text-align: center;
    color: white;
    padding: 20px;
}

.quote {
    font-size: 40px;
    font-weight: bold;
    font-family: 'Times New Roman', serif;
    position: relative;
    padding-left: 20px;
    margin-top: -100px;
    transition: background-color 0.3s; /* Added hover transition */
}

.quote:hover {
    background-color: rgba(255, 255, 255, 0.1); /* Hover background color */
}

.intro {
    font-size: 18px;
    margin: 20px 0;
}

.assessment-guidelines {
    font-size: 30px;
    font-family:'Times New Roman', serif;
    transition: background-color 0.3s; /* Added hover transition */
}

.assessment-guidelines:hover {
    background-color: rgba(255, 255, 255, 0.1); 
}

.guidelines-text {
    font-size: 18px;
    padding: 10px; /* Added padding */
    background: rgba(255, 255, 255, 0.3); /* Added transparency with background color */
    border-radius: 10px; /* Added border-radius for rounded corners */
}

.start-button {
    background: orange;
    color: white;
    text-decoration: none;
    font-size: 18px;
    padding: 10px 20px;
    border-radius: 5px;
    margin-top: 20px;
    display: inline-block;
}

.start-button:hover {
    background: #ff7700; /* Hover color */
}
        </style>
</head>
<body>
    <div class="background">
        <div class="overlay">
            <div class="content">
                <p class="quote">“Your mental health is important. This self-assessment is just the first step. Seek help if needed”</p>
                <p class="intro">Our Mental Health Assessment Tool is a quick and confidential way to gauge your emotional well-being. Using the DASS 21 Scale, it helps you self-assess your levels of depression, anxiety, and stress. Remember, this tool is not a substitute for professional help but serves as an initial step towards understanding your mental health.
                    <br> 
                    <br> Severe scores? We're here for you. Book an appointment with a mental health pro right from the tool. Your well-being matters to us.
                </p>
                <br>
                <h2 class="assessment-guidelines">Assessment Guidelines</h2>
                <p class="guidelines-text">Please read each statement and choose an answer (Not at all, A little, Moderately, or Yes, definitely) which indicates how much the statement applied to you over the past week.<br> There are no right or wrong answers. Do not spend too much time on any statement.</p>
                <a class="start-button" href="tool/questions1.html">Start the Test</a>
            </div>
        </div>
    </div>
</body>
</html>

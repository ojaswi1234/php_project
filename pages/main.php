<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheets/mainsheet.css">
    <title>Document</title>
</head>


<body>
    <header>
        <div id="logo">
        <img src="../public/modern_circular_icon_for_SleepSense_with_black__gray__and_white_colors-removebg-preview.png" width="40" height="40" id="hero-img" alt="">
            <a> SLEEPSENSE</a>
        </div>
        <nav id="main-nav">
            <a href="#" id="button-1">About Sleep</a>
            <a href="#" id="button-2">Contact</a>
            <a href="../pages/tracker.php" id="button-3">Track My Sleep</a>
            <a href="#" id="button-4">Resources</a>
            <a href="#" id="button-5">Contact Us</a>
        </nav>
        <nav id="mobile-nav">
            <button>MENU<svg aria-hidden="true" data-prefix="fal" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-bars fa-w-14 fa-7x"><path fill="currentColor" d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z" class=""></path></svg></button>
        </nav>
        <div id="auth-div">
        <a href="../pages/login.php">Login</a>
        </div>

    </header>
    <main>
            <video autoplay muted loop>
                <source src="../public/12676882_3840_2160_30fps.mp4" type="video/mp4">
            </video>
        <div class="container">
            <div id="div-1">
                <aside><img src="../public/pngtree-room-model-cute-three-dimensional-cartoon-pattern-png-image_6671841-removebg-preview.png" alt="sleep" id="cover-img"></aside>
                
                    <h1 id="main-title">
                        <b>Track, Improve, Sleep</b> Better with SleepSense <br />
                        Transform your Nights with <b id="boldy-3">SleepSense</b>
                    </h1>
                
            </div>
            <div id="div-2">
                <h1 id="h-2">Why Use SleepSense ?</h1>
                <p id="p-1">SleepSense is a comprehensive sleep tracking system that helps you understand your sleep patterns<br/> and improve your sleep quality. With SleepSense, you can track your sleep duration, sleep quality, and sleep stages.<br />SleepSense also provides personalized recommendations to help you improve your sleep quality.</p>
                <div id="div-2-1">
            <canvas id="myChart" width="500" height="300"></canvas>
            <canvas id="myChart2" width="500" height="300"></canvas>
            </div>
            </div>
            <hr id="hr1" aria-label="hidden"/>
        </div>

        <div id="div-3">
           
        </div>
        <footer>

          <p>Copyright 2022 SleepSense</p>
    </footer>
    </main>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <script>
        const mainTitle = document.getElementById("main-title");
        const coverImg = document.getElementById("cover-img");

        
        const chartDiv = document.getElementById("div-2-1");
        gsap.from(chartDiv, {
            scrollTrigger: {
                trigger: chartDiv,
                start: "top 80%",
                end: "bottom 20%",
                markers: false,
                stagger: 0.1,
            },
            duration: 1,
            opacity: 0,
            y: 200,
            
        });

        const xAxis = [2019, 2020, 2021, 2022, 2023, 2024];
        const Colors = ["#3498db", "#f1c40f", "#2ecc71", "#e74c3c", "#9b59b6"];
        const yAxis = [7.5, 7.3, 7.1, 6.9, 6.7, 6.5];

        const myChart = new Chart("myChart", {
          type: "line",
          data: {
            labels: xAxis,
            datasets: [{
              backgroundColor: "rgba(52, 152, 219, 0.2)",
              borderColor: "#3498db",
              pointBackgroundColor: "#3498db",
              pointBorderColor: "#3498db",
              pointHoverBackgroundColor: "#3498db",
              pointHoverBorderColor: "#3498db",
              data: yAxis,
              label: "Sleep Hours",
              fill: true,
            }]
          },
          options: {
            title: {
              display: true,
              text: "Average Sleep Hours per Night",
              fontSize: 24,
              fontColor: "#333",
            },
            legend: {
              display: false,
            },
            scales: {
              yAxes: [{
            ticks: {
              beginAtZero: false,
              min: 6,
              max: 8,
              stepSize: 0.5,
              fontColor: "#666",
              fontSize: 14,
            },
            gridLines: {
              display: true,
              color: "#ddd",
            },
              }],
              xAxes: [{
            ticks: {
              fontColor: "#666",
              fontSize: 14,
            },
            gridLines: {
              display: false,
            },
              }],
            },
          },
        });

        const myChart2 = new Chart("myChart2", {
          type: "bar",
          data: {
            labels: xAxis,
            datasets: [{
              label: "Sleep Hours",
              data: yAxis,
              backgroundColor: [
            "#3498db",
            "#f1c40f",
            "#2ecc71",
            "#e74c3c",
            "#9b59b6",
            "#1abc9c",
              ],
              borderColor: [
            "#3498db",
            "#f1c40f",
            "#2ecc71",
            "#e74c3c",
            "#9b59b6",
            "#1abc9c",
              ],
              borderWidth: 1,
            }]
          },
          options: {
            title: {
              display: true,
              text: "Average Sleep Hours per Night",
              fontSize: 24,
              fontColor: "#333",
            },
            legend: {
              display: false,
            },
            scales: {
              yAxes: [{
            ticks: {
              beginAtZero: false,
              min: 6,
              max: 8,
              stepSize: 0.5,
              fontColor: "#666",
              fontSize: 14,
            },
            gridLines: {
              display: true,
              color: "#ddd",
            },
              }],
              xAxes: [{
            ticks: {
              fontColor: "#666",
              fontSize: 14,
            },
            gridLines: {
              display: false,
            },
              }],
            },
          },
        });

    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    @vite('resources/css/projects.css')

</head>
<body>
    <x-navigation></x-navigation>
    <div id="main">
        <div id="hero">
            <div id="hero-img"></div>
                <div id="hero-text-container">
                    <h1>We build companies that <span>Perform Beautifully</span> at any scale</h1>
                    <button>Reach Out To Us<i class="ri-arrow-right-up-line"></i></button>
                </div>  
        </div>
        <div id="projects">
          <div id="projects-gallery">
            <div class="project">
              <div class="project-img" style="background-image: url('https://images.pexels.com/photos/4511649/pexels-photo-4511649.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"></div>
              <div class="project-tag">
                <p>Rural Development</p>
                <p>Policy Implementation</p>
              </div>
              <div class="project-details">
                <h4>Project ROPAN</h4>
                <p>Project ROPAN offers subsidized, disease-specific healthcare through tailored insurance, enabled by a payments bank. It also upskills Front-Line Health Workers (FLHWs) via a digital platform.</p>
              </div>
              <button>Know More<i class="ri-arrow-right-line"></i></i></button>
            </div>
            <div class="project">
              <div class="project-img" style="background-image: url('https://www.stalwartcareers.com/wp-content/uploads/IIM-Nagpur-1.jpg')"></div>
              <div class="project-tag">
                <p>Education</p>
              </div>
              <div class="project-details">
                <h4>IIM Nagpur & MSME</h4>
                <p>IIM students tackle MSME issues in a 3-credit program, guided by professors and industry experts. Let me know if you need a version for a brochure, pitch deck, or website.</p>
              </div>
              <button>Know More<i class="ri-arrow-right-line"></i></button>
            </div>
            <div class="project">
              <div class="project-img" style="background-image: url('https://images.pexels.com/photos/31000573/pexels-photo-31000573/free-photo-of-professional-eye-surgery-in-new-delhi-hospital.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"></div>
              <div class="project-tag">
                <p>Healthcare</p>
                <p>Innovation</p>
              </div>
              <div class="project-details">
                <h4>Digital Chikitsa</h4>
                <p>A strong, accessible healthcare system is essential. Automated diagnostic technology can reduce errors by 97% and cut costs, making accurate and affordable care possible even at the periphery.</p>
              </div>
              <button>Know More<i class="ri-arrow-right-line"></i></button>
            </div>
            <div class="project">
              <div class="project-img" style="background-image: url('https://images.pexels.com/photos/12188470/pexels-photo-12188470.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"></div>
              <div class="project-tag">
                <p>Rural Development</p>
                <p>Policy Implementation</p>
              </div>
              <div class="project-details">
                <h4>Non-Fungible Tokens for GI Tagged Artist and Artisans of India</h4>
                <p>Handicrafts are fading in India, with a 30% drop in artisans over three decades. Most earn just ₹2000 per family, facing exploitation, low demand, and limited market access.</p>
              </div>
              <button>Know More<i class="ri-arrow-right-line"></i></button>
            </div>
          </div>
        </div>
    </div>
</body>
</html>
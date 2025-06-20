<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    @vite('resources/css/home.css')
    @vite('resources/js/navbar.js')


</head>
<body>
    
    <div id="main">
        <x-navigation></x-navigation>
        <div id="hero">
            <div id="video-container">
                <video autoplay muted loop playsinline id="hero-video">
                    <source src="https://videos.pexels.com/video-files/2098988/2098988-uhd_2560_1440_30fps.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="video-overlay"></div>
                <div id="hero-text-container">
                    <h1>Transforming <span>Challenges</span> Into <span>Opportunities</span> For Real Impact</h1>
                    <button>Explore Our Work<i class="ri-arrow-right-up-line"></i></button>
                </div>
            </div>
        </div>
        <div id="about">
            <div id="about-us-text-content">
                <div id="heading">
                    <h4>About Us</h4>
                    <h2>Empowering Change Through Strategy and Evidence</h2>
                </div>
                <div id="secondary-text">
                    <p>Enira is a strategy consulting firm working at the intersection of policy, innovation, and impact. We collaborate with organizations to design evidence-based solutions and drive meaningful, sustainable change through research, strategy, and on-ground implementation.</p>
                    <button>About Us<i class="ri-arrow-right-up-line"></i></button>
                </div>
            </div>
            <div id="metrics">
                <div class="metric">
                    <h3 data-target="94">94%</h3>
                    <p>Increase in client revenue after implementing our strategic solutions.</p>
                </div>
                <div class="metric">
                    <h3 data-target="9976">9,976</h3>
                    <p>Hours spent solving complex business challenges with measurable results.</p>
                </div>
                <div class="metric">
                    <h3 data-target="500000">$500K</h3>
                    <p>Average client savings through operational and financial optimization.</p>
                </div>
                <div class="metric">
                    <h3 data-target="1000">1000+</h3>
                    <p>Clients guided through transformation journeys with results-driven consulting support.</p>
                </div>
            </div>
        </div>
        <div id="testimonials">
            <div id="testimonial-container">
                <i class="ri-double-quotes-l"></i>
                <h4>“Working with Enira was a transformative experience. Their eye for detail and ability to create mesmerizing visual patterns is unmatched. Every piece bought new depth and fascination.”</h4>
                <div id="testimonial-bottom">
                    <div id="author">
                        <div id="author-img"></div>
                        <div id="author-text">
                            <h5>Amara Collins</h5>
                            <p>Creative Director of Urban Nest</p>
                        </div>
                    </div>
                    <div id="buttons">
                        <button><i class="ri-arrow-left-line"></i></button>
                        <button><i class="ri-arrow-right-line"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div id="sectors">
          <div id="sectors-text-content">
                <div id="heading">
                    <h4>Sectors We Serve</h4>
                    <h2>Empowering Transformation in Every Sector</h2>
                </div>
                <div id="secondary-text">
                    <button>View Sectors<i class="ri-arrow-right-up-line"></i></button>
                </div>
          </div>
          <div id="gallery-container">
            <div class="gallery-track">
              <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Doctor in his blue scrubs">
                <div class="gallery-overlay">
                  <p>Healthcare</p>
                </div>
              </div>
              <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1582719298818-904ce0e5cd87?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="A female pharmacist">
                <div class="gallery-overlay">
                  <p>Pharma & Diagnostics</p>
                </div>
              </div>
              <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1578496479531-32e296d5c6e1?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="a group of plastic cups sitting on top of a machine">
                <div class="gallery-overlay">
                  <p>Biotech</p>
                </div>
              </div>
              <div class="gallery-item">
                <img src="https://plus.unsplash.com/premium_photo-1668383207188-f5474588d674?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="a man and a woman sitting at a table writing">
                <div class="gallery-overlay">
                  <p>Development</p>
                </div>
              </div>
              <div class="gallery-item">
                <img src="https://plus.unsplash.com/premium_photo-1683535508501-03d9271c3b09?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="a woman holding a stack of books in a library">
                <div class="gallery-overlay">
                  <p>Education</p>
                </div>
              </div>
              <div class="gallery-item">
                <img src="https://images.pexels.com/photos/6771665/pexels-photo-6771665.jpeg" alt="Free Close-up of a smartphone showing cryptocurrency trends with coins in the background. Stock Photo">
                <div class="gallery-overlay">
                  <p>Fintech</p>
                </div>
              </div>
              <div class="gallery-item">
                <img src="https://images.pexels.com/photos/6927546/pexels-photo-6927546.jpeg" alt="Free Close-up of a professional examining tax documents on a wooden desk indoors. Stock Photo">
                <div class="gallery-overlay">
                  <p>Insurtech</p>
                </div>
              </div>
              <!-- Duplicated items for seamless loop -->
              <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Doctor in his blue scrubs">
                <div class="gallery-overlay">
                  <p>Healthcare</p>
                </div>
              </div>
              <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1582719298818-904ce0e5cd87?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="A female pharmacist">
                <div class="gallery-overlay">
                  <p>Pharma & Diagnostics</p>
                </div>
              </div>
              <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1578496479531-32e296d5c6e1?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="a group of plastic cups sitting on top of a machine">
                <div class="gallery-overlay">
                  <p>Biotech</p>
                </div>
              </div>
              <div class="gallery-item">
                <img src="https://plus.unsplash.com/premium_photo-1668383207188-f5474588d674?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="a man and a woman sitting at a table writing">
                <div class="gallery-overlay">
                  <p>Development</p>
                </div>
              </div>
              <div class="gallery-item">
                <img src="https://plus.unsplash.com/premium_photo-1683535508501-03d9271c3b09?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="a woman holding a stack of books in a library">
                <div class="gallery-overlay">
                  <p>Education</p>
                </div>
              </div>
              <div class="gallery-item">
                <img src="https://images.pexels.com/photos/6771665/pexels-photo-6771665.jpeg" alt="Free Close-up of a smartphone showing cryptocurrency trends with coins in the background. Stock Photo">
                <div class="gallery-overlay">
                  <p>Fintech</p>
                </div>
              </div>
              <div class="gallery-item">
                <img src="https://images.pexels.com/photos/6927546/pexels-photo-6927546.jpeg" alt="Free Close-up of a professional examining tax documents on a wooden desk indoors. Stock Photo">
                <div class="gallery-overlay">
                  <p>Insurtech</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="projects">
          <div id="projects-text-content">
            <div id="secondary-text">
              <p>At Enira, we transform bold ideas into real-world solutions through innovation, strategy, and design. Each project reflects our commitment to solving problems that matter and delivering meaningful impact. Explore how our vision comes to life across diverse industries and challenges.</p>
              <button>View Projects<i class="ri-arrow-right-up-line"></i></button>
            </div>
            <div id="heading">
              <h4>Projects</h4>
              <h2>Discover How Enira Turns Vision Into Reality Through Our Projects</h2>
            </div>
          </div>
          <div id="projects-gallery">
            <div class="project">
              <div class="project-img" style="background-image: url('https://images.unsplash.com/photo-1664902273556-600a6e50beda?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')"></div>
              <div class="project-tag">
                <p>Healthcare</p>
                <p>Development</p>
              </div>
              <div class="project-details">
                <h4>Scaling Clinics in the GCC: A Capital Strategy Project</h4>
                <p>We helped a regional healthcare group develop a fundraising strategy, investor materials, and a market-backed expansion plan—driving growth in IVF and integrated care across underserved areas in the UAE and GCC.</p>
              </div>
              <button>Know More<i class="ri-arrow-right-line"></i></button>
            </div>
            <div class="project">
              <div class="project-img" style="background-image: url('https://images.unsplash.com/photo-1538108149393-fbbd81895907?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')"></div>
              <div class="project-tag">
                <p>Healthcare</p>
              </div>
              <div class="project-details">
                <h4>Strategic Imperatives: Dynamic Pricing, Supply Chain Optimization, and Capital Fundraising</h4>
                <p>We delivered a strategic solution to optimize hospital operations, implement dynamic pricing, streamline procurement, and prepare for capital raise—enhancing both financial resilience and investor appeal for future expansion.</p>
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
                <h4>Integrated NCD Screening & Referral Strategy for GCC Healthcare System</h4>
                <p>ENIRA developed a targeted outreach model, referral network, and PMU to drive early NCD detection and integration into Oman’s healthcare system.</p>
              </div>
              <button>Know More<i class="ri-arrow-right-line"></i></button>
            </div>
            <div class="project">
              <div class="project-img" style="background-image: url('https://images.pexels.com/photos/1181406/pexels-photo-1181406.jpeg')"></div>
              <div class="project-tag">
                <p>Healthcare</p>
                <p>Biotech</p>
              </div>
              <div class="project-details">
                <h4>Strategic Market Entry for AI Digital Twin in Hospitals & Insurers</h4>
                <p>ENIRA crafted a GTM strategy for AI digital twin tech targeting hospitals, insurers, and wellness programs to drive claim reduction, cost savings, and preventive care integration.</p>
              </div>
              <button>Know More<i class="ri-arrow-right-line"></i></button>
            </div>
          </div>
        </div>
        <div id="services">
          <div id="services-text-content">
            <div id="heading">
              <h4>Our Services</h4>
              <h2>Expert Care For Your <br>Specific Needs</h2>
            </div>
            <div id="secondary-text">
              <p>We deliver world-class consulting services across strategy, new market entry, financial advisory, and technology. Our solutions are designed to help businesses navigate challenges, unlock growth opportunities, and achieve long-term success in a dynamic global market.</p>
            </div>
            <div id="services-list">
              <h5 class="active" data-index="0">Strategic Planning & Advisory</h5>
              <h5 data-index="1">Government & Public Sector Support</h5>
              <h5 data-index="2">Program Evaluation & Systems Improvement</h5>
              <h5 data-index="3">Digital Transformation & Tech Strategy</h5>
              <h5 data-index="4">Market Entry & Compliance Navigation</h5>
              <h5 data-index="5">Financial Consulting & Capital Strategy</h5>
            </div>
          </div>
          <div id="serive-card">
            <div id="service-card-img"></div>
            <div id="service-card-text">
              <h5 id="service-title">Strategy Consulting</h5>
              <p id="service-description">We focus on and assist with a company's long-term vision. Our goal is to see the bigger picture, and to identify ways in which we can help our client to increase their overall profitability and competitiveness. We form strategies to reach long-term goals and oversee the implementation of these, ensuring they are cost effective and bring in results.</p>
            </div>
            <div id="service-card-buttons">
              <button id="detailed-services">Detailed Services</button>
              <button>Contact Us<i class="ri-arrow-right-up-line"></i></button>
            </div>
          </div>
        </div>
        <div id="blogs">
          <div id="blogs-text-content">
            <div id="heading">
              <h4>Latest Blogs</h4>
              <h2>We Share The Knowledge That Actually Matters</h2>
            </div>
            <div id="blogs-secondary-text">
              <p>Explore the Enira blog — your source for knowledge, industry trends, tech insights, and practical tips to keep you informed and ahead.</p>
              <button>Read Blogs<i class="ri-arrow-right-up-line"></i></button>
            </div>
          </div>
          <div id="blogs-container">
            <div class="blog">
              <div class="blog-img" style="background-image: url('https://images.pexels.com/photos/8413294/pexels-photo-8413294.jpeg')"></div>
              <div class="blog-tags">
                <p>Healthcare</p>
                <p>Digital Transformation</p>
              </div>
              <div class="blog-details">
                <h5>Transforming Healthcare: India's Journey Towards a Functional Health Insurance Claims Exchange</h5>
                <p>India is revolutionizing healthcare with a unified digital claims exchange, aiming for faster, transparent, and efficient insurance settlements.</p>
              </div>
              <button>Read More<i class="ri-arrow-right-up-line"></i></button>
            </div>
            <div class="blog">
              <div class="blog-img" style="background-image: url('https://images.pexels.com/photos/259968/pexels-photo-259968.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"></div>
              <div class="blog-tags">
                <p>Infrastructure</p>
                <p>Public Policy</p>
              </div>
              <div class="blog-details">
                <h5>Leveraging Digital Public Infrastructure for Transforming Justice Delivery in India</h5>
                <p>India is transforming its justice delivery system by leveraging Digital Public Infrastructure (DPI). Through integrated platforms, digital court services, and data-driven systems, the goal is to make justice more accessible, transparent, and efficient—enabling faster, fairer, and more inclusive legal outcomes for all citizens./p>
              </div>
              <button>Read More<i class="ri-arrow-right-up-line"></i></button>
            </div>
          </div>
        </div>
        <div id="reports">
          <div id="reports-text-content">
          <div id="secondary-text">
              <p>Explore our newest reports on industry trends, strategic analysis, and market shifts. Enira delivers data-driven insights to help you stay ahead and make informed decisions.</p>
            </div>
            <div id="heading">
              <h4>Reports</h4>
              <h2>Insights and updates on market trends from Enira.</h2>
            </div>
            
          </div>
          <div id="reports-container">
            <div class="reports-track">
              <div class="report">
                <div class="report-img" style="background-image: url('https://images.pexels.com/photos/3183172/pexels-photo-3183172.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"></div>
                <div id="report-details">
                  <h5>Market Research • 20 Oct 2025</h5>
                  <h4>Emerging Markets: Opportunities and Challenges in 2025</h4>
                </div>
                <button>Download<i class="ri-arrow-down-line"></i></button>
              </div>
              <div class="report">
                <div class="report-img" style="background-image: url('https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"></div>
                <div id="report-details">
                  <h5>Policy Analysis • 15 Oct 2025</h5>
                  <h4>Sustainable Development Goals: Progress and Roadblocks</h4>
                </div>
                <button>Download<i class="ri-arrow-down-line"></i></button>
              </div>
              <div class="report">
                <div class="report-img" style="background-image: url('https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"></div>
                <div id="report-details">
                  <h5>Technology • 10 Oct 2025</h5>
                  <h4>AI in Business: Transforming Industries in 2025</h4>
                </div>
                <button>Download<i class="ri-arrow-down-line"></i></button>
              </div>
              <div class="report">
                <div class="report-img" style="background-image: url('https://images.pexels.com/photos/3183172/pexels-photo-3183172.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"></div>
                <div id="report-details">
                  <h5>Market Research • 20 Oct 2025</h5>
                  <h4>Emerging Markets: Opportunities and Challenges in 2025</h4>
                </div>
                <button>Download<i class="ri-arrow-down-line"></i></button>
              </div>
              <div class="report">
                <div class="report-img" style="background-image: url('https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"></div>
                <div id="report-details">
                  <h5>Policy Analysis • 15 Oct 2025</h5>
                  <h4>Sustainable Development Goals: Progress and Roadblocks</h4>
                </div>
                <button>Download<i class="ri-arrow-down-line"></i></button>
              </div>
              <div class="report">
                <div class="report-img" style="background-image: url('https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"></div>
                <div id="report-details">
                  <h5>Technology • 10 Oct 2025</h5>
                  <h4>AI in Business: Transforming Industries in 2025</h4>
                </div>
                <button>Download<i class="ri-arrow-down-line"></i></button>
              </div>
            </div>
          </div>
        </div>
        <div id="banner">
            <div id="banner-container">
                <div id="banner-content">
                    <h2><span>Still Not Convinced?</span><br>Connect with Our Experts</h2>
                    <button>Get In Touch<i class="ri-phone-line"></i></button>
                </div>
            </div>
        </div>
    </div>  
    

        <script>
document.addEventListener("DOMContentLoaded", function () {
  // Service card content
  const serviceData = [
    {
      title: "Strategic Planning & Advisory",
      description: "We help organizations develop comprehensive strategic plans that align with their vision and mission. Our advisory services provide the insights and guidance needed to navigate complex business landscapes and achieve sustainable growth.",
      image: "https://images.pexels.com/photos/1181355/pexels-photo-1181355.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
    },
    {
      title: "Government & Public Sector Support",
      description: "We provide specialized consulting services to government and public sector organizations, helping them improve efficiency, implement policies effectively, and deliver better public services through strategic planning and operational improvements.",
      image: "https://images.pexels.com/photos/3184338/pexels-photo-3184338.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
    },
    {
      title: "Program Evaluation & Systems Improvement",
      description: "Our experts evaluate program effectiveness and identify opportunities for systems improvement. We help organizations enhance their operations, optimize processes, and achieve better outcomes through data-driven analysis and strategic recommendations.",
      image: "https://images.pexels.com/photos/2582937/pexels-photo-2582937.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
    },
    {
      title: "Digital Transformation & Tech Strategy",
      description: "We guide organizations through digital transformation journeys, helping them leverage technology to drive innovation and competitive advantage. Our tech strategy services ensure alignment between technology initiatives and business objectives.",
      image: "https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
    },
    {
      title: "Market Entry & Compliance Navigation",
      description: "Our experts help businesses successfully enter new markets while navigating complex regulatory requirements. We provide comprehensive market analysis, compliance strategies, and implementation support to ensure smooth market entry and operations.",
      image: "https://images.pexels.com/photos/3184339/pexels-photo-3184339.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
    },
    {
      title: "Financial Consulting & Capital Strategy",
      description: "We provide expert financial consulting services, helping organizations optimize their capital structure, secure funding, and make informed financial decisions that drive growth and long-term sustainability.",
      image: "https://images.pexels.com/photos/259027/pexels-photo-259027.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
    },
    {
      title: "Product Development",
      description: "We assist businesses in developing innovative products from concept to market launch. Our comprehensive approach includes market research, concept validation, prototyping, testing, and go-to-market strategy development to ensure your products meet customer needs and business objectives.",
      image: "https://images.pexels.com/photos/3183165/pexels-photo-3183165.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
    },
    {
      title: "Financial Consulting",
      description: "Our financial consulting services provide strategic guidance on financial planning, investment analysis, risk management, and performance optimization. We help businesses make informed financial decisions that drive growth, enhance profitability, and create long-term value.",
      image: "https://images.pexels.com/photos/7567443/pexels-photo-7567443.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
    },
    {
      title: "Financial Consulting to The Funds",
      description: "We provide specialized financial consulting services to investment funds, helping optimize portfolio performance, enhance risk management strategies, and improve operational efficiency. Our experts deliver tailored solutions that address the unique challenges and opportunities in fund management.",
      image: "https://images.pexels.com/photos/8370752/pexels-photo-8370752.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
    }
  ];

  // Elements
  const serviceItems = document.querySelectorAll('#services-list h5');
  const serviceImage = document.querySelector('#service-card-img');
  const serviceTitle = document.querySelector('#service-title');
  const serviceDescription = document.querySelector('#service-description');
  
  let currentIndex = 0;
  let intervalId;
  
  // Function to update service card
  function updateServiceCard(index) {
    // Update active class
    serviceItems.forEach(item => item.classList.remove('active'));
    serviceItems[index].classList.add('active');
    
    // Update content with animation
    serviceCard = document.querySelector('#serive-card');
    serviceCard.style.opacity = '0';
    
    setTimeout(() => {
      // Update content
      serviceTitle.textContent = serviceData[index].title;
      serviceDescription.textContent = serviceData[index].description;
      serviceImage.style.backgroundImage = `url('${serviceData[index].image}')`;
      
      // Fade back in
      serviceCard.style.opacity = '1';
    }, 300);
    
    currentIndex = index;
  }
  
  // Click event for service items
  serviceItems.forEach(item => {
    item.addEventListener('click', function() {
      const index = parseInt(this.getAttribute('data-index'));
      updateServiceCard(index);
      
      // Reset the interval when clicking
      clearInterval(intervalId);
      startAutoRotation();
    });
  });
  
  // Function to start auto rotation
  function startAutoRotation() {
    intervalId = setInterval(() => {
      currentIndex = (currentIndex + 1) % serviceData.length;
      updateServiceCard(currentIndex);
    }, 5000);
  }
  
  // Initialize with first service and start auto rotation
  updateServiceCard(0);
  startAutoRotation();
  
  // Add transition for smooth animation
  const styleSheet = document.createElement('style');
  styleSheet.textContent = `
    #serive-card {
      transition: opacity 0.3s ease;
    }
  `;
  document.head.appendChild(styleSheet);
  const counters = document.querySelectorAll("#about .metric h3");
  let hasAnimated = false;

  const animateCount = (el, target) => {
    const duration = 2000; // in ms
    const startTime = performance.now();
    const isCurrency = el.textContent.includes('$');
    const isPercent = el.textContent.includes('%');
    const isPlus = el.textContent.includes('+');

    const formatNumber = (num) => {
      let str = Math.floor(num).toLocaleString();
      if (isCurrency) str = '$' + str;
      if (isPercent) str += '%';
      if (isPlus) str += '+';
      return str;
    };

    function update(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const current = target * progress;
      el.textContent = formatNumber(current);
      if (progress < 1) {
        requestAnimationFrame(update);
      }
    }

    requestAnimationFrame(update);
  };

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !hasAnimated) {
          counters.forEach(counter => {
            const target = parseInt(counter.getAttribute("data-target"));
            animateCount(counter, target);
          });
          hasAnimated = true;
          observer.disconnect();
        }
      });
    },
    { threshold: 0.3 }
  );

  const aboutSection = document.querySelector("#about");
  if (aboutSection) {
    observer.observe(aboutSection);
  }
});

const testimonials = [
  {
    text: "“Working with Enira was a transformative experience. Their eye for detail and ability to create mesmerizing visual patterns is unmatched. Every piece bought new depth and fascination.”",
    name: "Amara Collins",
    title: "Creative Director of Urban Nest",
    image: "url('https://images.pexels.com/photos/1036623/pexels-photo-1036623.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"
  },
  {
    text: "“Enira's artistry is nothing short of captivating. The textures, colors, and composition they bring to life create an immersive experience that elevates any space. Truly an unparalleled talent in the visual arts.”",
    name: "Leo Ramirez",
    title: "Founder of PixelCraft",
    image: "url('https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"
  },
  {
    text: "“There’s an almost meditative quality to Enira’s creations. The harmony of shapes and colors draws you in, making you pause, reflect, and appreciate the beauty of fine detail.”",
    name: "Sasha Patel",
    title: "Marketing Head at Brightside Co.",
    image: "url('https://images.pexels.com/photos/1102341/pexels-photo-1102341.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"
  }
];

let current = 0;

const quoteEl = document.querySelector("#testimonial-container h4");
const nameEl = document.querySelector("#author-text h5");
const titleEl = document.querySelector("#author-text p");
const imgEl = document.querySelector("#author-img");

function showTestimonial(index) {
  [quoteEl, nameEl, titleEl, imgEl].forEach(el => el.classList.add("fade-out"));

  setTimeout(() => {
    const t = testimonials[index];
    quoteEl.textContent = t.text;
    nameEl.textContent = t.name;
    titleEl.textContent = t.title;
    imgEl.style.backgroundImage = t.image;

    [quoteEl, nameEl, titleEl, imgEl].forEach(el => {
      el.classList.remove("fade-out");
      el.classList.add("fade-in");
      setTimeout(() => el.classList.remove("fade-in"), 400);
    });
  }, 400);
}

// Button navigation
document.querySelector("#buttons button:first-child").addEventListener("click", () => {
  current = (current - 1 + testimonials.length) % testimonials.length;
  showTestimonial(current);
});
document.querySelector("#buttons button:last-child").addEventListener("click", () => {
  current = (current + 1) % testimonials.length;
  showTestimonial(current);
});

// Auto-rotate every 5 seconds
setInterval(() => {
  current = (current + 1) % testimonials.length;
  showTestimonial(current);
}, 5000);

// Initial load
showTestimonial(current);

// Reports infinite scroll
const reportsTrack = document.querySelector('.reports-track');
const reports = document.querySelectorAll('.report');
let reportWidth = reports[0].offsetWidth + 96; // width + gap (matching the 6rem gap)

// Make container full viewport width (now handled in CSS)
const reportsContainer = document.querySelector('#reports-container');
const windowWidth = window.innerWidth;

// Clone reports for infinite scroll - ensure we have enough to fill viewport width multiple times
const totalReports = reports.length;
const cardsNeededForViewport = Math.ceil((windowWidth * 2) / reportWidth);

// Create enough clones to fill the viewport at least twice (for smooth looping)
const clonesNeeded = Math.max(cardsNeededForViewport, totalReports * 2);

// Add clones at the end
for (let i = 0; i < clonesNeeded; i++) {
    const clone = reports[i % totalReports].cloneNode(true);
    reportsTrack.appendChild(clone);
}

// Add clones at the beginning 
for (let i = 0; i < clonesNeeded; i++) {
    const clone = reports[totalReports - 1 - (i % totalReports)].cloneNode(true);
    reportsTrack.insertBefore(clone, reportsTrack.firstChild);
}

// Set initial position
const totalCardsWidth = (totalReports + (clonesNeeded * 2)) * reportWidth;
reportsTrack.style.width = `${totalCardsWidth}px`;

// Start with cards positioned at the beginning of the cloned section
const initialOffset = clonesNeeded * reportWidth;
reportsTrack.style.transform = `translateX(-${initialOffset}px)`;

// Animation
let position = initialOffset;
const speed = 0.3; // Reduced speed for smoother animation
let animationId;

function initAnimation() {
    cancelAnimationFrame(animationId);
    
    function animate() {
        position -= speed;
        
        // Reset position when we've scrolled through the original set
        if (position <= 0) {
            position = totalReports * reportWidth;
        }
        
        // If we've scrolled too far, reset to the beginning of the clone section
        if (position >= totalCardsWidth - windowWidth) {
            position = initialOffset;
        }
        
        reportsTrack.style.transform = `translateX(-${position}px)`;
        animationId = requestAnimationFrame(animate);
    }
    
    animationId = requestAnimationFrame(animate);
}

// Start animation
initAnimation();

// Pause on hover
reportsTrack.addEventListener('mouseenter', () => {
    cancelAnimationFrame(animationId);
});

// Resume on mouse leave
reportsTrack.addEventListener('mouseleave', () => {
    initAnimation();
});

// Handle window resize
let resizeTimeout;
window.addEventListener('resize', () => {
    cancelAnimationFrame(animationId);
    
    // Debounce resize
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
        // Update all measurements based on new window size
        reportWidth = reports[0].offsetWidth + 96; // match the 6rem gap
        const newWindowWidth = window.innerWidth;
        
        // Recalculate position based on new window size
        position = initialOffset;
        initAnimation();
    }, 100);
});
</script>

</body>
</html>
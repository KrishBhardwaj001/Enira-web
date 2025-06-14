<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    @vite('resources/css/blogs.css')
</head>
<body>
    <x-navigation></x-navigation>
    <div id="main">
        <div id="hero">
            <div id="hero-slider">
                <!-- Slide 1 -->
                <div class="slide active">
                    <div class="hero-blog-details">
                        <div class="tag">
                            <p>Healthcare</p>
                        </div>
                        <h2>Driving Transformative Impact Through Strategy & Innovation</h2>
                        <p>Enira is a strategy consulting firm working at the intersection of policy, innovation, and impact. We collaborate with organizations to design evidence-based solutions and drive meaningful change.</p>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                <div class="slide">
                    <div class="hero-blog-details">
                        <div class="tag">
                            <p>Technology</p>
                        </div>
                        <h2>Innovating for a Better Tomorrow</h2>
                        <p>Discover how technology is transforming industries and creating new opportunities for growth and development in the modern business landscape.</p>
                    </div>
                </div>
                
                <!-- Slide 3 -->
                <div class="slide">
                    <div class="hero-blog-details">
                        <div class="tag">
                            <p>Sustainability</p>
                        </div>
                        <h2>Building a Sustainable Future</h2>
                        <p>Learn about our initiatives and strategies for creating sustainable business practices that benefit both the environment and society.</p>
                    </div>
                </div>
                
                <!-- Navigation Arrows -->
                <button class="slider-nav prev"><i class="ri-arrow-left-line"></i></button>
                <button class="slider-nav next"><i class="ri-arrow-right-line"></i></button>
                
                <!-- Dots Navigation -->
                <div class="slider-dots">
                    <span class="dot active" data-slide="0"></span>
                    <span class="dot" data-slide="1"></span>
                    <span class="dot" data-slide="2"></span>
                </div>
            </div>
        </div>
        <div id="title">
            <h3>Blogs</h3>
        </div>
        <div id="blogs-gallery">
            <div class="blog">
                <div class="blog-img"></div>
                <div class="blog-tags">
                    <p>Policymaking</p>
                    <p>Rural Development</p>
                </div>
                <div class="blog-details">
                    <h4>Project Ropan</h4>
                    <p>Project ROPAN offers subsidized, disease-specific healthcare through tailored insurance, enabled by a payments bank. It also upskills Front-Line Health Workers (FLHWs) via a digital platform.</p>
                </div>
                <div class="blog-card-bottom">
                    <div class="author">
                        <div class="author-img"></div>
                        <h5>Amara Collins</h5>
                    </div>
                    <h5>Read Full<i class="ri-arrow-right-line"></i></h5>
                </div>
            </div>
            <div class="blog">
                <div class="blog-img"></div>
                <div class="blog-tags">
                    <p>Policymaking</p>
                    <p>Rural Development</p>
                </div>
                <div class="blog-details">
                    <h4>Project Ropan</h4>
                    <p>Project ROPAN offers subsidized, disease-specific healthcare through tailored insurance, enabled by a payments bank. It also upskills Front-Line Health Workers (FLHWs) via a digital platform.</p>
                </div>
                <div class="blog-card-bottom">
                    <div class="author">
                        <div class="author-img"></div>
                        <h5>Amara Collins</h5>
                    </div>
                    <h5>Read Full<i class="ri-arrow-right-line"></i></h5>
                </div>
            </div>
            <div class="blog">
                <div class="blog-img"></div>
                <div class="blog-tags">
                    <p>Policymaking</p>
                    <p>Rural Development</p>
                </div>
                <div class="blog-details">
                    <h4>Project Ropan</h4>
                    <p>Project ROPAN offers subsidized, disease-specific healthcare through tailored insurance, enabled by a payments bank. It also upskills Front-Line Health Workers (FLHWs) via a digital platform.</p>
                </div>
                <div class="blog-card-bottom">
                    <div class="author">
                        <div class="author-img"></div>
                        <h5>Amara Collins</h5>
                    </div>
                    <h5>Read Full<i class="ri-arrow-right-line"></i></h5>
                </div>
            </div>
            <div class="blog">
                <div class="blog-img"></div>
                <div class="blog-tags">
                    <p>Policymaking</p>
                    <p>Rural Development</p>
                </div>
                <div class="blog-details">
                    <h4>Project Ropan</h4>
                    <p>Project ROPAN offers subsidized, disease-specific healthcare through tailored insurance, enabled by a payments bank. It also upskills Front-Line Health Workers (FLHWs) via a digital platform.</p>
                </div>
                <div class="blog-card-bottom">
                    <div class="author">
                        <div class="author-img"></div>
                        <h5>Amara Collins</h5>
                    </div>
                    <h5>Read Full<i class="ri-arrow-right-line"></i></h5>
                </div>
            </div>
        </div>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const slides = document.querySelectorAll('.slide');
                const dots = document.querySelectorAll('.dot');
                const prevBtn = document.querySelector('.prev');
                const nextBtn = document.querySelector('.next');
                let currentSlide = 0;
                
                // Show current slide
                function showSlide(index) {
                    // Hide all slides and remove active class from dots
                    slides.forEach(slide => slide.classList.remove('active'));
                    dots.forEach(dot => dot.classList.remove('active'));
                    
                    // Show current slide and update dot
                    slides[index].classList.add('active');
                    dots[index].classList.add('active');
                    currentSlide = index;
                }
                
                // Next slide
                function nextSlide() {
                    currentSlide = (currentSlide + 1) % slides.length;
                    showSlide(currentSlide);
                }
                
                // Previous slide
                function prevSlide() {
                    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                    showSlide(currentSlide);
                }
                
                // Event listeners
                nextBtn.addEventListener('click', nextSlide);
                prevBtn.addEventListener('click', prevSlide);
                
                // Dot navigation
                dots.forEach((dot, index) => {
                    dot.addEventListener('click', () => {
                        showSlide(index);
                    });
                });
                
                // Auto slide
                let slideInterval = setInterval(nextSlide, 5000);
                
                // Pause on hover
                const slider = document.getElementById('hero-slider');
                slider.addEventListener('mouseenter', () => {
                    clearInterval(slideInterval);
                });
                
                slider.addEventListener('mouseleave', () => {
                    slideInterval = setInterval(nextSlide, 5000);
                });
                
                // Keyboard navigation
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'ArrowLeft') {
                        prevSlide();
                    } else if (e.key === 'ArrowRight') {
                        nextSlide();
                    }
                });
            });
        </script>
    </div>
</body>
</html>
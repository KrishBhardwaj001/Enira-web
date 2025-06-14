<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    @vite('resources/css/contact.css')
</head>
<body>
    <x-navigation></x-navigation>
    <div id="main">
        <div id="banner">
            <div id="banner-container">
                <div id="banner-content">
                    <h2><span>Wanna Give Us A Try?</span><br>Connect with Our Experts</h2>
                    <button>Get In Touch<i class="ri-phone-line"></i></i></button>
                </div>
            </div>
        </div>
        <div id="grid-container">
            <div class="cell"></div>
            <div class="cell" id="map-container">
                <h3>FIND US HERE</h3>
                <div id="map">
                <iframe src="https://www.google.com/maps?q=28.627052093377763,77.22151088954278&hl=en&z=16&output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                </div>
            </div>
            <div class="cell" id="form-container">
                <form id="contact-form">
                    <div class="form-group">
                        <label for="name">Your Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="company">Company Name</label>
                        <input type="text" id="company" name="company">
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="industry">Your Industry</label>
                        <select id="industry" name="industry" class="form-select">
                            <option value="" disabled selected>Select your industry</option>
                            <option value="technology">Technology</option>
                            <option value="healthcare">Healthcare</option>
                            <option value="finance">Finance</option>
                            <option value="education">Education</option>
                            <option value="manufacturing">Manufacturing</option>
                            <option value="retail">Retail</option>
                            <option value="hospitality">Hospitality</option>
                            <option value="real-estate">Real Estate</option>
                            <option value="entertainment">Entertainment</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message *</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Message <i class="ri-arrow-right-line"></i></button>
                </form>
            </div>
            <div class="cell" class="empty"></div>
            <div class="cell" class="empty"></div>
            <div class="cell" class="empty"></div>
            <div class="cell" class="empty"></div>
        </div>
        <div id="faq">
            <div id="text-content">
                <div id="heading">
                    <h4>Frequently Asked Questions</h4>
                    <h2>Quick and clear answers to your key questions</h2>
                </div>
                <button>Contact Us<i class="ri-arrow-right-up-line"></i></button>
            </div>
            <div id="faq-content">
                <div id="faq-list">
                    <div class="faq-item">
                        <div class="faq-question">
                            <h5>What can I expect from you?</h5>
                            <i class="ri-add-line"></i>
                        </div>
                        <div class="faq-answer">
                            <p>At Enira, we provide comprehensive consulting services including strategy development, market research, and implementation support. Our team works closely with you to understand your needs and deliver tailored solutions that drive real impact.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <h5>How do you guys work?</h5>
                            <i class="ri-add-line"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Our process begins with understanding your unique challenges and goals. We then develop a customized approach, combining our expertise with your industry knowledge to create effective solutions. We maintain transparent communication throughout the project lifecycle.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <h5>How do I get started?</h5>
                            <i class="ri-add-line"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Getting started is easy! Simply reach out to us through our contact form or schedule a consultation. Our team will get in touch to discuss your needs and explore how we can help you achieve your objectives.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <h5>What makes you different?</h5>
                            <i class="ri-add-line"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Our unique approach combines deep industry expertise with innovative thinking. We don't just provide solutions – we partner with you to create sustainable, long-term value. Our commitment to excellence and client satisfaction sets us apart in the industry.</p>
                        </div>
                    </div>
                </div>
                <div id="faq-card">
                    <div id="card-img"></div>
                    <h5>Still lookng for answers or need a good chat?</h5>
                    <p>Our team will guide you through our design process, project specifications and cost estimate.</p>
                </div>
            </div>          
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                const icon = question.querySelector('i');
                const answer = item.querySelector('.faq-answer');
                
                // Close all answers initially
                answer.style.maxHeight = '0';
                answer.style.overflow = 'hidden';
                answer.style.transition = 'max-height 0.3s ease, padding 0.3s ease';
                
                question.addEventListener('click', () => {
                    // Toggle active class on the clicked item
                    const isOpen = item.classList.contains('active');
                    
                    // Close all items
                    faqItems.forEach(faqItem => {
                        faqItem.classList.remove('active');
                        const faqAnswer = faqItem.querySelector('.faq-answer');
                        const faqIcon = faqItem.querySelector('i');
                        faqAnswer.style.maxHeight = '0';
                        faqAnswer.style.paddingTop = '0';
                        faqIcon.className = 'ri-add-line';
                    });
                    
                    // Open clicked item if it was closed
                    if (!isOpen) {
                        item.classList.add('active');
                        answer.style.maxHeight = answer.scrollHeight + 'px';
                        answer.style.paddingTop = '1.5rem';
                        icon.className = 'ri-subtract-line';
                    }
                });
            });
        });
    </script>
</body>
</html>
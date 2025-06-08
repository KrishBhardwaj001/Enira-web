<style>
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        padding: 15px 0;
        transition: all 0.3s ease-in-out;
        z-index: 1000;
        border-bottom: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    .navbar-container {
        display: flex;
        justify-content: center;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .navbar.hide {
        transform: translateY(-100%);
    }

    .nav-links {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 30px;
        transition: all 0.3s ease-in-out;
        width: 100%;
    }

    .hamburger {
        position: absolute;
        right: 2rem;
        display: none;
        flex-direction: column;
        justify-content: space-between;
        width: 30px;
        height: 21px;
        cursor: pointer;
        z-index: 1001;
    }
    
    .hamburger span {
        display: block;
        width: 100%;
        height: 3px;
        background-color: #333;
        transition: all 0.3s ease;
    }
    
    .hamburger.active span:nth-child(1) {
        transform: translateY(9px) rotate(45deg);
    }
    
    .hamburger.active span:nth-child(2) {
        opacity: 0;
    }
    
    .hamburger.active span:nth-child(3) {
        transform: translateY(-9px) rotate(-45deg);
    }
    
    .nav-links a {
        color: #333;
        text-decoration: none;
        font-weight: 500;
        padding: 8px 15px 12px;
        transition: all 0.3s ease;
        position: relative;
        white-space: nowrap;
        letter-spacing: 0.3px;
    }

    .nav-links a:hover {
        color: #000000;
    }
    
    .nav-links a::after {
        content: '';
        position: absolute;
        bottom: 4px;
        left: 50%;
        width: 4px;
        height: 4px;
        background: #000000;
        border-radius: 50%;
        opacity: 0;
        transform: translateX(-50%) scale(0);
        transition: all 0.3s ease;
    }
    
    .nav-links a:hover::after,
    .nav-links a.active::after {
        opacity: 1;
        transform: translateX(-50%) scale(1);
    }
    
    .nav-links a.active {
        color: #000000;
        font-weight: 600;
    }
    
    .nav-links a.active::after {
        background: #000000;
    }
    
    @media (max-width: 1350px) {

        .navbar {
            padding: 2rem 0;
        }
        .hamburger {
            display: flex;
        }
        
        .nav-links {
            position: fixed;
            top: 0;
            right: -100%;
            height: 100vh;
            width: 100%;
            max-width: 400px;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 30px 20px;
            box-shadow: -5px 0 25px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            gap: 20px;
            text-align: center;
        }
        
        .nav-links.active {
            right: 0;
            display: flex;
        }
        
        .nav-links a {
            padding: 16px 25px;
            font-size: 1.2rem;
            width: 100%;
            max-width: 220px;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .nav-links a.active {
            background: rgba(0, 0, 0, 0.03);
            font-weight: 600;
            color: #000;
        }
        
        .nav-links a::after {
            bottom: 6px;
            height: 2px;
            width: 40%;
            border-radius: 2px;
            background: #000;
            opacity: 0;
            transform: translateX(-50%) scaleX(0);
            transition: all 0.3s ease;
        }
        
        .nav-links a:hover::after,
        .nav-links a.active::after {
            opacity: 1;
            transform: translateX(-50%) scaleX(1);
        }
        
        .nav-links a:hover {
            background: rgba(0, 0, 0, 0.02);
            transform: translateY(-2px);
        }
    }
    
    @media (max-width: 480px) {
        .nav-links {
            padding: 30px 15px;
            gap: 15px;
        }
        
        .nav-links a {
            font-size: 1.1rem;
            padding: 14px 20px;
            max-width: 100%;
        }
    }
</style>

<nav class="navbar" id="navbar">
    <div class="navbar-container">
        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="nav-links" id="navLinks">
            <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="/about" class="{{ request()->is('about*') ? 'active' : '' }}">About</a>
            <a href="/sectors" class="{{ request()->is('sectors*') ? 'active' : '' }}">Sectors</a>
            <a href="/services" class="{{ request()->is('services*') ? 'active' : '' }}">Services</a>
            <a href="/careers" class="{{ request()->is('careers*') ? 'active' : '' }}">Careers</a>
            <a href="/projects" class="{{ request()->is('projects*') ? 'active' : '' }}">Projects</a>
            <a href="/blogs" class="{{ request()->is('blogs*') ? 'active' : '' }}">Blogs</a>
            <a href="/contact" class="{{ request()->is('contact*') ? 'active' : '' }}">Contact</a>
        </div>
    </div>
</nav>

<script>
    let lastScroll = 0;
    let isScrolling;
    const navbar = document.getElementById('navbar');
    const navLinks = document.getElementById('navLinks');
    const hamburger = document.getElementById('hamburger');
    const scrollThreshold = 50;
    let isMenuOpen = false;
    
    // Toggle mobile menu
    hamburger.addEventListener('click', () => {
        isMenuOpen = !isMenuOpen;
        hamburger.classList.toggle('active');
        navLinks.classList.toggle('active');
        
        // Prevent background scrolling when menu is open
        if (isMenuOpen) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
    });
    
    // Close menu when clicking on a link
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 1350) {
                isMenuOpen = false;
                hamburger.classList.remove('active');
                navLinks.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    });
    
    // Handle scroll behavior
    window.addEventListener('scroll', () => {
        if (window.innerWidth > 1350) { // Only run for desktop
            const currentScroll = window.pageYOffset;
            
            window.clearTimeout(isScrolling);
            
            if (currentScroll <= 0) {
                navbar.classList.remove('hide');
                return;
            }
            
            if (currentScroll > lastScroll && currentScroll > scrollThreshold) {
                navbar.classList.add('hide');
            } else {
                navbar.classList.remove('hide');
            }
            
            isScrolling = setTimeout(() => {
                navbar.classList.add('hide');
            }, 1000);
            
            lastScroll = currentScroll;
        }
    });
    
    // Handle window resize
    window.addEventListener('resize', () => {
        if (window.innerWidth > 1350) {
            // Reset mobile menu state if resizing to desktop
            if (isMenuOpen) {
                isMenuOpen = false;
                hamburger.classList.remove('active');
                navLinks.classList.remove('active');
                document.body.style.overflow = '';
            }
        }
    });
</script>
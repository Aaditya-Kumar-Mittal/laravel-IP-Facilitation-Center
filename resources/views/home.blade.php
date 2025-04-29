<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intellectual Property Facilitation Centre</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --accent: #4cc9f0;
            --light: #f8f9fa;
            --dark: #212529;
            --success: #4bb543;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--light);
            color: var(--dark);
            overflow-x: hidden;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.05)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
            background-size: cover;
            z-index: -1;
        }
        
        header h1 {
            margin: 0;
            font-size: 2.5rem;
            font-weight: 700;
            letter-spacing: -0.5px;
            animation: fadeInDown 0.8s ease-out;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 1.5rem;
            text-align: center;
        }
        
        .hero-image {
            position: relative;
            max-width: 800px;
            margin: 0 auto 2.5rem;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            transform: translateY(20px);
            opacity: 0;
            animation: fadeInUp 0.8s 0.3s ease-out forwards;
        }
        
        .hero-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }
        
        .hero-image:hover img {
            transform: scale(1.03);
        }
        
        .hero-image::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.3), transparent 40%);
            z-index: 1;
        }
        
        .intro {
            font-size: 1.1rem;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto 3rem;
            color: #555;
            opacity: 0;
            animation: fadeIn 1s 0.6s ease-out forwards;
        }
        
        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
            margin: 3rem 0;
            opacity: 0;
            animation: fadeIn 1s 0.9s ease-out forwards;
        }
        
        .feature-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            width: 280px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            text-align: center;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1.5rem;
        }
        
        .feature-card h3 {
            margin-bottom: 1rem;
            color: var(--dark);
        }
        
        .feature-card p {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
        }
        
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-top: 2rem;
            flex-wrap: wrap;
            opacity: 0;
            animation: fadeIn 1s 1.2s ease-out forwards;
        }
        
        .btn {
            padding: 0.9rem 2rem;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            border-radius: 50px;
            color: white;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 180px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .btn i {
            margin-right: 8px;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--accent));
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.3);
        }
        
        .btn-secondary {
            background: white;
            color: var(--primary);
            border: 2px solid var(--primary);
        }
        
        .btn-secondary:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.3);
        }
        
        .footer {
            background: var(--dark);
            color: white;
            text-align: center;
            padding: 1.5rem;
            position: relative;
        }
        
        .footer p {
            margin: 0;
            font-size: 0.9rem;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin: 1rem 0;
        }
        
        .social-links a {
            color: white;
            font-size: 1.2rem;
            transition: transform 0.3s ease, color 0.3s ease;
        }
        
        .social-links a:hover {
            color: var(--accent);
            transform: translateY(-3px);
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes fadeInUp {
            from { 
                opacity: 0;
                transform: translateY(20px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInDown {
            from { 
                opacity: 0;
                transform: translateY(-20px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            header h1 {
                font-size: 2.2rem;
            }
            
            .feature-card {
                width: 240px;
            }
        }
        
        @media (max-width: 768px) {
            header h1 {
                font-size: 1.8rem;
            }
            
            .container {
                padding: 2rem 1.5rem;
            }
            
            .intro {
                font-size: 1rem;
            }
            
            .btn-container {
                flex-direction: column;
                align-items: center;
            }
            
            .btn {
                width: 100%;
                max-width: 280px;
            }
            
            .features {
                gap: 1.5rem;
            }
            
            .feature-card {
                width: 100%;
                max-width: 350px;
            }
        }
        
        @media (max-width: 480px) {
            header h1 {
                font-size: 1.6rem;
            }
            
            .container {
                padding: 1.5rem 1rem;
            }
            
            .intro {
                font-size: 0.95rem;
            }
            
            .btn {
                padding: 0.8rem 1.5rem;
                font-size: 0.9rem;
                min-width: 160px;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Intellectual Property Facilitation Centre</h1>
</header>

<div class="container">
    <div class="hero-image">
        <img src="{{ asset('images/a.jpg') }}" alt="Protecting Your Innovations">
    </div>
    
    <div class="intro">
        <p>Welcome to the Intellectual Property Facilitation Centre, your premier destination for comprehensive IP protection solutions. We empower innovators, creators, and businesses to secure their intellectual assets through streamlined services and expert guidance.</p>
        <p>Our platform simplifies the complex process of patent, trademark, and copyright registration, offering end-to-end support to help you navigate the IP landscape with confidence.</p>
    </div>
    
    <div class="features">
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-lightbulb"></i>
            </div>
            <h3>Patent Protection</h3>
            <p>Safeguard your inventions with our expert patent registration services, ensuring your innovations remain exclusively yours.</p>
        </div>
        
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-trademark"></i>
            </div>
            <h3>Trademark Registration</h3>
            <p>Protect your brand identity with comprehensive trademark solutions tailored to your business needs.</p>
        </div>
        
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-copyright"></i>
            </div>
            <h3>Copyright Services</h3>
            <p>Secure your creative works with our efficient copyright registration and protection services.</p>
        </div>
    </div>
    
    <div class="btn-container">
        <a href="{{ route('register') }}" class="btn btn-primary">
            <i class="fas fa-user-plus"></i> Get Started
        </a>
        <a href="{{ route('login') }}" class="btn btn-secondary">
            <i class="fas fa-sign-in-alt"></i> Login
        </a>
    </div>
</div>

<footer class="footer">
    <div class="social-links">
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
    <p>&copy; 2025 Intellectual Property Facilitation Centre. All rights reserved.</p>
</footer>

</body>
</html>
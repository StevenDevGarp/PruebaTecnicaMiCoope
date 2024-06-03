<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Design Example</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

a {
    text-decoration: none;
    color: inherit;
}

ul {
    list-style: none;
    padding: 0;
}

/* Header Styles */
header {
    background-color: #333;
    color: white;
    padding: 10px 0;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.logo img {
    height: 50px;
}

.nav-links {
    display: flex;
    gap: 20px;
}

.nav-links li {
    display: inline;
}

.nav-links a {
    color: white;
    padding: 10px 15px;
}

/* Hero Section Styles */
.hero {
    position: relative;
    background-image: url('background.webp');
    background-size: cover;
    background-position: center;
    color: white;
    text-align: center;
    padding: 100px 20px;
}

.hero::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Oscurece la imagen */
    z-index: 1;
}

.hero-content {
    position: relative;
    z-index: 2; /* Asegura que el texto esté encima del pseudo-elemento */
}

.hero-content {
    max-width: 800px;
    margin: 0 auto;
}

.hero h1 {
    font-size: 48px;
    margin: 0 0 20px;
}

.hero p {
    font-size: 24px;
    margin: 0 0 40px;
}

.cta-button {
    background-color: #f04a24;
    color: white;
    padding: 15px 30px;
    border: none;
    border-radius: 5px;
    font-size: 18px;
}

/* Services Section Styles */
.services {
    display: flex;
    justify-content: space-around;
    padding: 50px 20px;
    background-color: #f4f4f4;
}

.service {
    text-align: center;
    max-width: 300px;
}

.service h2 {
    font-size: 28px;
    margin: 0 0 20px;
}

.service p {
    font-size: 18px;
    color: #666;
}

/* Footer Styles */
footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px 0;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .nav-links {
        flex-direction: column;
        gap: 10px;
    }

    .services {
        flex-direction: column;
        gap: 20px;
    }

    .hero h1 {
        font-size: 36px;
    }

    .hero p {
        font-size: 20px;
    }

    .cta-button {
        padding: 10px 20px;
        font-size: 16px;
    }
}

    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="logo1.png" alt="Logo">
            </div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Computer Repair Services</h1>
            <p>Mi Coope Computer</p>
            <!-- <a href="#" class="cta-button">Get Started</a> -->
        </div>
    </section>

    <section class="services">
        <div class="service">
            <h2>Servicios realizados</h2>
            <p>Se detallan todos los servicios Realizados</p>
        </div>
        <div class="service">
            <h2>Servicios Pendientes</h2>
            <p>Se detallan todos los servicios pendientes.</p>
        </div>
        <div class="service">
            <h2>Nuevo ingreso</h2>
            <p>Para Realizar un nuevo ingreso.</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Computer Repair Services</p>
    </footer>
</body>
</html>

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

.form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        .form-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-group textarea {
            resize: vertical;
        }

        .form-group button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #218838;
        }

    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="/CRUD_tallerReparaciones/resources/views/services/logo1.png" alt="Logo">
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
            <h2>Clientes Registrados</h2>
            <p>Se detallan todos los clientes Registrados</p>
        </div>
        <!-- <div class="service">
            <h2>Servicios Pendientes</h2>
            <p>Se detallan todos los servicios pendientes.</p>
        </div>
        <div class="service">
            <h2>Nuevo ingreso</h2>
            <p>Para Realizar un nuevo ingreso.</p>
        </div> -->
    </section>
    <div class="form-container">
        <h2>Crear Servicio</h2>
        <form action="{{ route('servicios.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="cliente_id">Cliente:</label>
                <select name="cliente_id" id="cliente_id" required>
                    <option value="">Seleccione un cliente</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->cliente_id }}">{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="equipo_id">Equipo:</label>
                <select name="equipo_id" id="equipo_id" required>
                    <option value="">Seleccione un equipo</option>
                    @foreach($equipos as $equipo)
                        <option value="{{ $equipo->equipo_id }}">{{ $equipo->tipo }} - {{ $equipo->modelo }} ({{ $equipo->marca->nombre }})</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tecnico_id">Técnico:</label>
                <select name="tecnico_id" id="tecnico_id" required>
                    <option value="">Seleccione un técnico</option>
                    @foreach($tecnicos as $tecnico)
                        <option value="{{ $tecnico->tecnico_id }}">{{ $tecnico->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="fecha_recepcion">Fecha de Recepción:</label>
                <input type="date" name="fecha_recepcion" id="fecha_recepcion" required>
            </div>
            <div class="form-group">
                <label for="problema">Problema:</label>
                <textarea name="problema" id="problema" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="diagnostico">Diagnóstico:</label>
                <textarea name="diagnostico" id="diagnostico" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="solucion">Solución:</label>
                <textarea name="solucion" id="solucion" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <select name="estado" id="estado" required>
                    <option value="recibido">Recibido</option>
                    <option value="reparando">Reparando</option>
                    <option value="finalizado">Finalizado</option>
                    <option value="entregado">Entregado</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Crear Servicio</button>
            </div>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Computer Repair Services</p>
    </footer>
</body>
</html>

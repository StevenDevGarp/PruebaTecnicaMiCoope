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

/* Card Styles */
.contenido {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }

        .card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            margin: 10px;
            padding: 20px;
            text-align: left;
        }

        .card strong {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .card p {
            margin: 0 0 10px;
        }

        .card .actions {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .card .actions a,
        .card .actions form {
            display: inline-block;
            margin-right: 10px;
        }

        .card .actions form {
            margin: 0;
        }

        .card .actions button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }

        .card .actions button:hover {
            background-color: #c82333;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

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
    <div class="contenido">
            @if($services->isEmpty())
                <p>No hay servicios registrados.</p>
            @else
                @foreach($services as $service)
                    <div class="card">
                        <strong>Cliente:</strong> {{ $service->cliente->nombre }} <br>
                        <strong>Teléfono:</strong> {{ $service->cliente->telefono }} <br>
                        <strong>Correo electrónico:</strong> {{ $service->cliente->email }} <br>
                        <hr>
                        <strong>Equipo:</strong> {{ $service->equipo->tipo }} - {{ $service->equipo->modelo }} <br>
                        <strong>Marca:</strong> {{ $service->equipo->marca->nombre }} <br>
                        <hr>
                        <strong>Técnico:</strong> {{ $service->tecnico->nombre }} <br>
                        <strong>Teléfono:</strong> {{ $service->tecnico->telefono }} <br>
                        <strong>Correo electrónico:</strong> {{ $service->tecnico->email }} <br>
                        <hr>
                        <strong>Fecha de Recepción:</strong> {{ $service->fecha_recepcion }} <br>
                        <strong>Problema:</strong> {{ $service->problema }} <br>
                        <strong>Diagnóstico:</strong> {{ $service->diagnostico }} <br>
                        <strong>Solución:</strong> {{ $service->solucion }} <br>
                        <strong>Estado:</strong> {{ $service->estado }} <br>
                        <div class="actions">
                            <a href="{{ route('servicios.edit', $service->servicio_id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('servicios.destroy', $service->servicio_id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este servicio?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

    <footer>
        <p>&copy; 2024 Computer Repair Services</p>
    </footer>
</body>
</html>

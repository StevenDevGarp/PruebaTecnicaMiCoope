<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Servicio</title>
    <link rel="stylesheet" href="/styles.css">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

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

    <div class="form-container">
        <h2>Editar Servicio</h2>
        <form action="{{ route('servicios.update', $servicio->servicio_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="cliente_id">Cliente:</label>
                <select name="cliente_id" id="cliente_id" required>
                    <option value="">Seleccione un cliente</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->cliente_id }}" {{ $servicio->cliente_id == $cliente->cliente_id ? 'selected' : '' }}>{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="equipo_id">Equipo:</label>
                <select name="equipo_id" id="equipo_id" required>
                    <option value="">Seleccione un equipo</option>
                    @foreach($equipos as $equipo)
                        <option value="{{ $equipo->equipo_id }}" {{ $servicio->equipo_id == $equipo->equipo_id ? 'selected' : '' }}>{{ $equipo->tipo }} - {{ $equipo->modelo }} ({{ $equipo->marca->nombre }})</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tecnico_id">Técnico:</label>
                <select name="tecnico_id" id="tecnico_id" required>
                    <option value="">Seleccione un técnico</option>
                    @foreach($tecnicos as $tecnico)
                        <option value="{{ $tecnico->tecnico_id }}" {{ $servicio->tecnico_id == $tecnico->tecnico_id ? 'selected' : '' }}>{{ $tecnico->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="fecha_recepcion">Fecha de Recepción:</label>
                <input type="date" name="fecha_recepcion" id="fecha_recepcion" value="{{ $servicio->fecha_recepcion }}" required>
            </div>
            <div class="form-group">
                <label for="problema">Problema:</label>
                <textarea name="problema" id="problema" rows="4" required>{{ $servicio->problema }}</textarea>
            </div>
            <div class="form-group">
                <label for="diagnostico">Diagnóstico:</label>
                <textarea name="diagnostico" id="diagnostico" rows="4">{{ $servicio->diagnostico }}</textarea>
            </div>
            <div class="form-group">
                <label for="solucion">Solución:</label>
                <textarea name="solucion" id="solucion" rows="4">{{ $servicio->solucion }}</textarea>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <select name="estado" id="estado" required>
                    <option value="recibido" {{ $servicio->estado == 'recibido' ? 'selected' : '' }}>Recibido</option>
                    <option value="reparando" {{ $servicio->estado == 'reparando' ? 'selected' : '' }}>Reparando</option>
                    <option value="finalizado" {{ $servicio->estado == 'finalizado' ? 'selected' : '' }}>Finalizado</option>
                    <option value="entregado" {{ $servicio->estado == 'entregado' ? 'selected' : '' }}>Entregado</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Actualizar Servicio</button>
            </div>
        </form>
    </div>
</body>
</html>

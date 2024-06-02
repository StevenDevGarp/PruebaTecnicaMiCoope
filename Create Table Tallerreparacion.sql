USE TallerReparacion;
CREATE TABLE Cliente (
    cliente_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    telefono VARCHAR(20),
    email VARCHAR(100)
);

CREATE TABLE Tecnico (
    tecnico_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    telefono VARCHAR(20),
    email VARCHAR(100)
);

CREATE TABLE Marca (
    marca_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL
);

CREATE TABLE Equipo (
    equipo_id INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(50) NOT NULL,
    modelo VARCHAR(50),
    marca_id INT,
    FOREIGN KEY (marca_id) REFERENCES Marca(marca_id)
);

CREATE TABLE Servicio (
    servicio_id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT,
    equipo_id INT,
    tecnico_id INT,
    fecha_recepcion DATE NOT NULL,
    problema VARCHAR(255) NOT NULL,
    diagnostico TEXT,
    solucion TEXT,
    estado ENUM('recibido', 'reparando', 'finalizado', 'entregado') NOT NULL DEFAULT 'recibido',
    FOREIGN KEY (cliente_id) REFERENCES Cliente(cliente_id),
    FOREIGN KEY (equipo_id) REFERENCES Equipo(equipo_id),
    FOREIGN KEY (tecnico_id) REFERENCES Tecnico(tecnico_id)
);


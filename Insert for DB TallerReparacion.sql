USE TallerReparacion;

INSERT INTO Cliente (nombre, telefono, email) VALUES
('Juan Pérez', '555-1234', 'juan.perez@example.com'),
('María López', '555-5678', 'maria.lopez@example.com'),
('Carlos García', '555-8765', 'carlos.garcia@example.com');


INSERT INTO Tecnico (nombre, telefono, email) VALUES
('Pedro Sánchez', '555-3456', 'pedro.sanchez@example.com'),
('Ana Fernández', '555-7890', 'ana.fernandez@example.com'),
('Luis Martínez', '555-4321', 'luis.martinez@example.com');


INSERT INTO Marca (nombre) VALUES
('HP'),
('Dell'),
('Samsung'),
('Apple'),
('Lenovo');


INSERT INTO Equipo (tipo, modelo, marca_id) VALUES
('Laptop', 'Pavilion', 1),  -- HP
('Smartphone', 'Galaxy S21', 3),  -- Samsung
('Desktop', 'OptiPlex', 2),  -- Dell
('Printer', 'LaserJet', 1),  -- HP
('Laptop', 'MacBook Pro', 4);  -- Apple


INSERT INTO Servicio (cliente_id, equipo_id, tecnico_id, fecha_recepcion, problema, diagnostico, solucion, estado) VALUES
(1, 1, 1, '2024-06-01', 'No enciende', 'Problema en la fuente de poder', 'Reemplazo de la fuente de poder', 'finalizado'),
(2, 2, 2, '2024-06-02', 'Pantalla rota', 'Pantalla LCD dañada', 'Reemplazo de la pantalla', 'reparando'),
(3, 3, 3, '2024-06-03', 'No arranca el sistema operativo', 'Disco duro dañado', 'Reemplazo de disco duro', 'recibido'),
(1, 4, 1, '2024-06-04', 'Impresiones borrosas', 'Problema con el toner', 'Reemplazo de toner', 'entregado'),
(2, 5, 2, '2024-06-05', 'Batería no carga', 'Batería agotada', 'Reemplazo de batería', 'finalizado');

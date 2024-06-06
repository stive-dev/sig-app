-- SIG DATABASE SCRIPT
CREATE DATABASE IF NOT EXISTS sig_app;
USE sig_app;

-- USUARIO TABLE
CREATE TABLE IF NOT EXISTS usuario(
       dui VARCHAR(10) PRIMARY KEY,
       nombres VARCHAR(60),
       apellido VARCHAR(60),
       email VARCHAR(50),
       contrasena VARCHAR(100)
);

-- VEHICULO TABLE
CREATE TABLE IF NOT EXISTS vehiculo(
       placa VARCHAR(10) PRIMARY KEY,
       tipo VARCHAR(10),
       activo BOOLEAN,
       capacidad DOUBLE
);

-- MOTORISTA TABLE
CREATE TABLE IF NOT EXISTS motorista(
       dui VARCHAR(10) PRIMARY KEY,
       nombres VARCHAR(60),
       apellidos VARCHAR(60)
);

-- MOTIVO TABLE
CREATE TABLE IF NOT EXISTS motivo(
       id INT PRIMARY KEY AUTO_INCREMENT,
       motivo VARCHAR(60)
);

-- CONTROL TABLE
CREATE TABLE IF NOT EXISTS control(
       id INT PRIMARY KEY AUTO_INCREMENT,
       id_materia_prima INT,
       placa_vehiculo VARCHAR(10),
       dui_motorista VARCHAR(10),
       numero_pesa INT,
       numero_orden INT,
       peso_salida INT,
       id_motivo_salida INT,
       fecha_salida date,
       peso_entrada INT,
       id_motivo_entrada INT,
       fecha_entrada date
);

-- MATERIA_PRIMA TABLE
CREATE TABLE IF NOT EXISTS materia_prima(
       id INT PRIMARY KEY,
       tipo VARCHAR(10),
       proveedor VARCHAR(60),
       descripcion VARCHAR(100)
);

ALTER TABLE control ADD CONSTRAINT `materia_prima_control_fk` FOREIGN KEY(id_materia_prima) REFERENCES materia_prima(id);
ALTER TABLE control ADD CONSTRAINT `vehiculo_control_fk` FOREIGN KEY(placa_vehiculo) REFERENCES vehiculo(placa);
ALTER TABLE control ADD CONSTRAINT `motorista_control_fk` FOREIGN KEY(dui_motorista) REFERENCES motorista(dui);
ALTER TABLE control ADD CONSTRAINT `motivo_salida_control_fk` FOREIGN KEY(id_motivo_salida) REFERENCES motivo(id);
ALTER TABLE control ADD CONSTRAINT `motivo_entrada_control_fk` FOREIGN KEY(id_motivo_entrada) REFERENCES motivo(id);

-- MATERIA_PRIMA_ANALISIS TABLE
CREATE TABLE IF NOT EXISTS materia_prima_analisis(
       id INT PRIMARY KEY,
       lote INT,
       id_materia_prima INT,
       cantida_muestra INT,
       humedad DOUBLE,
       impureza DOUBLE,
       numero_pesa INT,
       tamiz_1 VARCHAR(10),
       tamiz_2 VARCHAR(10),
       tamiz_3 VARCHAR(10),
       tamiz_4 VARCHAR(10),
       estado VARCHAR(10)
);

ALTER TABLE materia_prima_analisis ADD CONSTRAINT `materia_prima_analisis_materia_prima_fk` FOREIGN KEY(id_materia_prima) REFERENCES materia_prima(id);

-- SIG DATABASE SCRIPT
CREATE DATABASE IF NOT EXISTS sig_app;
USE sig_app;

-- USUARIO TABLE
CREATE TABLE IF NOT EXISTS usuario(
       dui VARCHAR(10) PRIMARY KEY,
       nombres VARCHAR(60),
       apellido VARCHAR(60),
       email VARCHAR(50),
       contrasena VARCHAR(100),
       rol VARCHAR(50)
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

INSERT INTO vehiculo (placa,tipo,activo, capacidad)VALUES('C-98456','Plataforma','1','280'),
INSERT INTO vehiculo (placa,tipo,activo, capacidad)VALUES('C-98326','Plataforma','1','280'),
INSERT INTO vehiculo (placa,tipo,activo, capacidad)VALUES('C-92346','pickat','1','20'),
INSERT INTO vehiculo (placa,tipo,activo, capacidad)VALUES('C-91236','Plataforma','1','150'),
INSERT INTO vehiculo (placa,tipo,activo, capacidad)VALUES('C-91234','Plataforma','1','100'),
INSERT INTO vehiculo (placa,tipo,activo, capacidad)VALUES('C-92346','Sedan','1','5'),
INSERT INTO MOTORISTA(dui, nombres, apellidoos)VALUES('04789878-0','Juan Carlos','Perez Galan'),
INSERT INTO MOTORISTA(dui, nombres, apellidoos)VALUES('04523278-3','Humberto Alejandro','Rodriguez'),
INSERT INTO MOTORISTA(dui, nombres, apellidoos)VALUES('05235278-2','Eduardo Carlos','Cardona, Pacheco'),
INSERT INTO MOTORISTA(dui, nombres, apellidoos)VALUES('05653878-3','Efrain Ernesto','Mendoza Avila'),
INSERT INTO MOTORISTA(dui, nombres, apellidoos)VALUES('04782378-1','Antonio Eduardo','Payes Mendoza'),
INSERT INTO materia_prima(tipo,proveedor,descripcion)VALUES('Maiz Amarrillo perla de oro','Impor S.A de C.V',"Grano de maiz amarillo"),
INSERT INTO materia_prima(tipo,proveedor,descripcion)VALUES('Maiz Amarrillo americano','texas S.A de C.V',"Grano de maiz americano grande"),
INSERT INTO materia_prima(tipo,proveedor,descripcion)VALUES('Soja Amarrilla','jgs S.A de C.V',"Grano de soja amarillo"),
INSERT INTO materia_prima(tipo,proveedor,descripcion)VALUES('Soja verde','indesa S.A de C.V',"Grano de soja verde"),
INSERT INTO materia_prima(tipo,proveedor,descripcion)VALUES('Maiz Amarrillo nacional','travelmac S.A de C.V',"Grano de maiz nacional"),
INSERT INTO materia_prima_analisis(lote, id_materia_prima,cantida_muestra,humedad,impureza,numero_pesa,tamiz_1,tamiz_2,tamiz_3,tamiz_4, estado)VALUES('150','1','1','0.10','o,03','65435','0.94','0.03','0.02','0,01','Aprovado'),
INSERT INTO materia_prima_analisis(lote, id_materia_prima,cantida_muestra,humedad,impureza,numero_pesa,tamiz_1,tamiz_2,tamiz_3,tamiz_4, estado)VALUES('152','2','1','0.10','o,03','65436','0.97','0.03','0.00','0,00','Aprovado'),
INSERT INTO materia_prima_analisis(lote, id_materia_prima,cantida_muestra,humedad,impureza,numero_pesa,tamiz_1,tamiz_2,tamiz_3,tamiz_4, estado)VALUES('153','2','1','0.10','o,02','65437','0.94','0.03','0.03','0,00','Aprovado'),
INSERT INTO materia_prima_analisis(lote, id_materia_prima,cantida_muestra,humedad,impureza,numero_pesa,tamiz_1,tamiz_2,tamiz_3,tamiz_4, estado)VALUES('154','3','1','0.10','o,02','65438','0.93','0.03','0.03','0,01','Aprovado'),
INSERT INTO materia_prima_analisis(lote, id_materia_prima,cantida_muestra,humedad,impureza,numero_pesa,tamiz_1,tamiz_2,tamiz_3,tamiz_4, estado)VALUES('155','3','1','0.10','o,05','65439','0.99','0.01','0.00','0,00','Aprovado'),
INSERT INTO materia_prima_analisis(lote, id_materia_prima,cantida_muestra,humedad,impureza,numero_pesa,tamiz_1,tamiz_2,tamiz_3,tamiz_4, estado)VALUES('156','5','1','0.10','o,06','65440','0.90','0.05','0.04','0,01','Aprovado')



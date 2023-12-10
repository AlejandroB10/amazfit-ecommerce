CREATE DATABASE amazfit;
USE amazfit;
CREATE TABLE UsuVen (
    emailVen VARCHAR(100) PRIMARY KEY,
    password VARCHAR(50) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    telefono INT(12) NOT NULL,
    cif VARCHAR(9) NOT NULL,
    direccion VARCHAR(255) NOT NULL
);

CREATE TABLE UsuCli (
    emailCli VARCHAR(100) PRIMARY KEY,
    password VARCHAR(50) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    telefono INT(12) NULL,
    fechaNacimiento DATE NULL
);

CREATE TABLE UsuCon (
    emailCon VARCHAR(100) PRIMARY KEY,
    password VARCHAR(50) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50)
);

CREATE TABLE Zona (
    idZona INT(11) PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    emailCon VARCHAR(100) NOT NULL,
    FOREIGN KEY (emailCon) REFERENCES UsuCon(emailCon)
);

CREATE TABLE Distribuidora (
    cif VARCHAR(9) PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);

CREATE TABLE Categoria (nombreCat VARCHAR(100) PRIMARY KEY);

CREATE TABLE Direccion (
    idDireccion INT(11) PRIMARY KEY AUTO_INCREMENT,
    calle VARCHAR(255) NOT NULL,
    poblacion VARCHAR(255) NOT NULL,
    provincia VARCHAR(255) NOT NULL,
    codigoPostal VARCHAR(5) NOT NULL,
    pais VARCHAR(100),
    emailCli VARCHAR(100) NOT NULL,
    idZona INT(11) NOT NULL,
    FOREIGN KEY (emailCli) REFERENCES UsuCli(emailCli),
    FOREIGN KEY (idZona) REFERENCES Zona(idZona)
);

CREATE TABLE Carrito (
    idCarrito INT(11) PRIMARY KEY AUTO_INCREMENT,
    fecha DATE NOT NULL,
    hora TIME NOT NULL,
    totalPagar DECIMAL(10, 2) NOT NULL,
    transaccion VARCHAR(100),
    fechaEnvio DATE,
    fechaEntrega DATE,
    estadoPedido VARCHAR(255) NOT NULL,
    emailCli VARCHAR(100) NOT NULL,
    idDireccion INT(11) NOT NULL,
    FOREIGN KEY (emailCli) REFERENCES UsuCli (emailCli),
    FOREIGN KEY (idDireccion) REFERENCES Direccion (idDireccion)
);

CREATE TABLE Incidencia (
    idIncidencia INT(11) PRIMARY KEY AUTO_INCREMENT,
    fecha DATE,
    hora TIME,
    motivo VARCHAR(255) NOT NULL,
    cif VARCHAR(9) NOT NULL,
    FOREIGN KEY (cif) REFERENCES Distribuidora(cif)
);

CREATE TABLE Producto (
    idProducto INT (11) PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    descripcion VARCHAR(255) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    descuento INT(3),
    stock INT NOT NULL,
    activo BOOLEAN NOT NULL,
    nombreCat VARCHAR(100) NOT NULL,
    FOREIGN KEY (nombreCat) REFERENCES Categoria(nombreCat)
);

CREATE TABLE DistribuidoraZona (
    cif VARCHAR(9) NOT NULL,
    idZona INT NOT NULL,
    PRIMARY KEY (cif, idZona),
    FOREIGN KEY (idZona) REFERENCES Zona(idZona),
    FOREIGN KEY (cif) REFERENCES Distribuidora(cif)
);

CREATE TABLE Caracteristica (
    idCaracteristica INT (11) PRIMARY KEY AUTO_INCREMENT,
    color VARCHAR(50) NULL,
    talla VARCHAR(50) NULL,
    emailVen VARCHAR(100) NOT NULL,
    idProducto INT(11) NOT NULL,
    FOREIGN KEY (emailVen) REFERENCES UsuVen(emailVen),
    FOREIGN KEY (idProducto) REFERENCES Producto(idProducto)
);

CREATE TABLE Cantidad (
    cantidad INT(4) NOT NULL,
    idCaracteristica INT (11) NOT NULL,
    idCarrito INT(11) NOT NULL,
    emailCon VARCHAR(100) NOT NULL,
    PRIMARY KEY (idCaracteristica, idCarrito, emailCon),
    FOREIGN KEY (idCarrito) REFERENCES Carrito(idCarrito),
    FOREIGN KEY (idCaracteristica) REFERENCES Caracteristica(idCaracteristica),
    FOREIGN KEY (emailCon) REFERENCES UsuCon(emailCon)
);
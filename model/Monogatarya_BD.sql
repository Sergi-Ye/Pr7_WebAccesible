/*
Sergi Ye
Akashdeep Singh
Jinnan Chen
Eric Huang
1/12/2025 
Generamos una Base de datos de nuestro proyecto transversal

18/03/2026 
Actualizamos la base de datos con las tablas necesarias para el proyecto, incluyendo las relaciones entre ellas.
*/

-- CREACION BD -- 
create database if not exists monogatarya;
use monogatarya;

-- Crear tabla Usuarios --
create table if not exists Users
(
    email varchar(50),
    status boolean default false,
    name varchar(50),
    surname varchar(50),
    password varchar(100),
    profile_picture longblob,

    
    constraint PK_Usuarios primary key (email)
);

-- Crear tabla Eventos --
create table if not exists Eventos
(
    ID_Eventos varchar(25),
    Nombre varchar(50),
    Descripcion varchar(100),
    Fecha DATE,
    Lugar varchar(100),

    constraint PK_Eventos primary key (ID_Eventos)
);

-- Crear tabla CrearVer (M-M Usuarios <-> Eventos) --
create table if not exists CrearVer
(
    email varchar(50),
    ID_Eventos varchar(25),

    constraint PK_CrearVer primary key (email, ID_Eventos),
    constraint FK_CV_Usuarios foreign key (email) references Users(email) on delete cascade,
    constraint FK_CV_Eventos foreign key (ID_Eventos) references Eventos(ID_Eventos) on delete cascade
);

-- Crear tabla Animes --
create table if not exists Animes
(
    IDAnimes varchar(20),
    Nombre varchar(25),
    NumEpisodio int,
    Descripcion varchar(100),
    ID_User varchar(50),  -- FK --

    constraint PK_Animes primary key (IDAnimes),
    constraint FK_Usuarios_Animes foreign key (ID_User) references Users(email) on delete set null
);
-- Crear tabla Episodios --
create table if not exists Episodios
(
    IDEpisodios varchar(25),
    NombreAnime varchar(25),
    Titulo varchar(50),
    NumEpisodios int,
    IDAnimes varchar(20), -- FK -- 

    constraint PK_Episodios primary key (IDEpisodios),
    constraint FK_Animes_Episodios foreign key (IDAnimes) references Animes(IDAnimes) on delete cascade
);

-- Crear tabla BD_Mangas --
create table if not exists BD_Mangas
(
    ID_Mangas varchar(20),
    Nombre varchar(25),
    Num_Capitulo int,
    Descripcion varchar(100),
    ID_User varchar(50), -- FK --

    constraint PK_Mangas primary key (ID_Mangas),
    constraint FK_Usuarios_Mangas foreign key (ID_User) references Users(email) on delete set null
);

-- Crear tabla Capitulos --
create table if not exists Capitulos
(
    ID_Capitulos varchar(25),
    NombreManga varchar(50),
    Titulo varchar(50),
    NumCapitulo int,
    NumPaginas int,
    ID_Mangas varchar(20), -- FK --

    constraint PK_Capitulos primary key (ID_Capitulos),
    constraint FK_Mangas_Capitulos foreign key (ID_Mangas) references BD_Mangas(ID_Mangas) on delete cascade
);

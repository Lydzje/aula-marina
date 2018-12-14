drop schema if exists aulamarina;

create schema aulamarina;
use aulamarina;

drop table if exists users;
CREATE TABLE users(
	id int(11) Primary Key auto_increment,
	username varchar(10) unique,
	password varchar(20)
);

drop table if exists contact;
CREATE TABLE contact(
	id int(11) Primary Key auto_increment,
	phone varchar(20),
	email varchar(20),
    hour varchar(40),
    address TEXT(100),
    description TEXT
);

/* DATA */
INSERT INTO users VALUES (1, "admin", "admin");

INSERT INTO contact VALUES (1, "950 21 47 71", "aulamar@ual.es", "9:00 - 14:00 de Lunes a Viernes", "Carretera de Sacramento s/n 04120 La Cañada de San Urbano (Almería, España). Edificio Científico Técnico V (CITE-V) 2ª planta, despacho 2-08", "");
DROP schema IF EXISTS aulamarina;

CREATE schema aulamarina;
USE aulamarina;

DROP TABLE IF EXISTS users;
CREATE TABLE users(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(20) UNIQUE,
	password VARCHAR(30)
);

DROP TABLE IF EXISTS featureds;
CREATE TABLE featureds(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	text VARCHAR(80),
	link VARCHAR(2083),
    img VARCHAR(2083)
);

DROP TABLE IF EXISTS species;
CREATE TABLE species(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	sci_name VARCHAR(80),
	comm_name VARCHAR(80),
    description TEXT,
    month VARCHAR(20),
    year VARCHAR(5),
    img VARCHAR(2083)
);

DROP TABLE IF EXISTS activities;
CREATE TABLE activities(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(200),
    description TEXT,
    date VARCHAR(11),
    ubication TEXT,
    img VARCHAR(2083),
    past BIT /* past == 1 -> actividad pasada, past == 0 -> actividad programada*/
);

DROP TABLE IF EXISTS proyects;
CREATE TABLE proyects(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(80)
);

DROP TABLE IF EXISTS people;
CREATE TABLE people(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(80),
    charge VARCHAR(300),
	main BIT,
    img VARCHAR(2083),
    description TEXT

);

DROP TABLE IF EXISTS colabsPhoto;
CREATE TABLE colabsPhoto(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	img VARCHAR(2083)
);

DROP TABLE IF EXISTS facilities;
CREATE TABLE facilities(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
    img1 VARCHAR(2083),
    img2 VARCHAR(2083),
    img3 VARCHAR(2083),
    img4 VARCHAR(2083),
    description TEXT
);

DROP TABLE IF EXISTS aboutUs;
CREATE TABLE aboutUs(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	img1 VARCHAR(2083),
    img2 VARCHAR(2083),
    img3 VARCHAR(2083),
    img4 VARCHAR(2083),
	description TEXT
);

DROP TABLE IF EXISTS news;
CREATE TABLE news(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(200),
    date VARCHAR(11),
	description TEXT,
    link VARCHAR(2083),
    img VARCHAR(2083)
);

DROP TABLE IF EXISTS contact;
CREATE TABLE contact(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	phone VARCHAR(20),
	email VARCHAR(255),
    hour TEXT,
    address TEXT,
    description TEXT
);

/* DATA */
INSERT INTO users VALUES (1, "admin", "admin");

INSERT INTO featureds VALUES (1, "CONOCE EL MAR ALMERIENSE", "https://google.com", "https://i.imgur.com/YeUOTLz.png");
INSERT INTO featureds VALUES (2, "CONOCE NUESTRA ESPECIE DEL MES", "https://google.com", "https://i.imgur.com/olw4ZIu.png");
INSERT INTO featureds VALUES (3, "APÚNTATE A NUESTRAS ACTIVIDADES", "https://google.com", "https://i.imgur.com/qtw1YpA.jpg");
INSERT INTO featureds VALUES (4, "ECHA UN VISTAZO A NUESTRO LABORATORIO", "https://google.com", "https://i.imgur.com/rNNymSH.jpg");

INSERT INTO species VALUES (1, "Octopus vulgaris", "Pulpo", "descripción", "Noviembre", "2018", "https://i.imgur.com/4RaUdNJ.png");
INSERT INTO species VALUES (2, "Aristeus antenmatus", "Gamba Roja", "descripción", "Diciembre", "2018", "https://i.imgur.com/QUaa9ao.png");
INSERT INTO species VALUES (3, "Diplodus sargus", "Sargo Blanco", "descripción", "Enero", "2019", "https://i.imgur.com/t1Fi4jG.png");

INSERT INTO activities VALUES (1, "Almería te pesca (Día Marítimo Europeo)", "El sábado 19 de mayo estuvimos celebrando en el Mercado Central de Almería el Día Marítimo Europeo. Allí conocimos diferentes aspectos de la pesca, gastronomía, valores nutricionales y biología de los productos pesqueros que nos ofrecen nuestros mares.", "2018-05-19", "Mercado Central de Almería", "https://previews.123rf.com/images/torwai/torwai1608/torwai160800233/64055464-juego-en-el-mar-las-vacaciones-de-verano-de-la-actividad-tur%C3%ADstica-en-la-playa-las-personas-y-un-barco.jpg", 1);
INSERT INTO activities VALUES (2, "Actividad de Voluntariado Ambiental Parque Natural Cabo de Gata Nijar", "El pasado sábado 12 de mayo estuvimos en la playa de Torregarcía, dentro de los límites del Parque Natural Cabo de Gata-Nijar, ayudando en una limpieza de la playas junto con nuestros amigos de Ecocampus.", "2018-05-12", "Playa de Torregarcía", "https://www.javea.com/wp-content/uploads/2014/05/Actividad-de-deporte-acu%C3%A1tico-en-la-celebraci%C3%B3n-del-Festival-del-Mar-el-pasado-a%C3%B1o.jpg", 1);
INSERT INTO activities VALUES (3, "Visita a las instalaciones del Aula Marina", "Visita a las instalaciones del Aula Marina.", "2019-04-30", "UAL", "https://sadaendigital.files.wordpress.com/2015/01/cofradias.jpg", 0);

INSERT INTO proyects VALUES (1, "Maqueta de las Salinas de Cabo de Gata");
INSERT INTO proyects VALUES (2, "Especie del Mes");

INSERT INTO colabsPhoto VALUES (1, "https://i.imgur.com/NotW8Sw.jpg");
INSERT INTO people VALUES (1, "Pedro Aguilera Aguilera", "Director del Aula Marina", 1, "../res/nino.png", "Profesor Titular de Universidad.
Departamento: Biología y Geología 
Área de conocimiento: Ecología
Correo electrónico: aguilera@ual.es
Tlf.: +34 950 01 59 33");
INSERT INTO people VALUES (2, "Rosa María Fernández Ropero", "Técnico Superior de Apoyo del Aula Marina", 1, "../res/nina.png", "Categoría: Técnico superior de apoyo a la gestión y la I+D+i
Correo electrónico: aulamar@ual.es
Tlf.: +34 950 21 47 71");
INSERT INTO people VALUES (3, "John Doe", "Cargo", 0, "null", "null");
INSERT INTO people VALUES (4, "John Doe", "Cargo", 0, "null", "null");
INSERT INTO people VALUES (5, "John Doe", "Cargo", 0, "null", "null");
INSERT INTO people VALUES (6, "John Doe", "Cargo", 0, "null", "null");
INSERT INTO people VALUES (7, "John Doe", "Cargo", 0, "null", "null");

INSERT INTO facilities VALUES (1, "https://i.imgur.com/1FaNaNO.jpg", "https://i.imgur.com/nzYC33n.png", "https://i.imgur.com/zkANP1z.png", "https://i.imgur.com/K3b3i62.png", "El Aula Marina es una entidad que persigue desarrollar actividades de carácter divulgativo y de formación relacionadas con el mar.

Su creación se aprobó en Consejo extraordinario de Gobierno, el día 24 de julio de 2017, a partir de una iniciativa llevada a cabo por el Centro de Excelencia Internacional del Mar (CEIMAR) de la Universidad de Almería.

El objetivo del Aula Marina es ser motor de divulgación y formación sobre aspectos relacionados del medio marino almeriense. Su fin no es competir con otras entidades privadas o colectivos sino intentar ser agente de unión de todas aquellas iniciativas que actúen en pro del mar, los océanos y sus gentes.");

INSERT INTO aboutUs VALUES (1, "https://i.imgur.com/HVhEZzU.jpg", "https://i.imgur.com/XUnLOWc.png", "https://i.imgur.com/PTjCWVN.png", "https://i.imgur.com/lhCPBC1.jpg", "El Aula Marina está ubicada dentro del Campus Universitario de la Universidad de Almería. El Campus de la Universidad de Almería disfruta de una ubicación privilegiada junto al mar y además de albergar modernos edificios e infraestructuras destinados a docencia e investigación, está dotado de una excelente biblioteca, cafeterías, zonas verdes, etc. que amplían de manera significativa la acogida que el Aula Marina pueda brindar a sus visitantes con el fin de apoyar las actividades que se desarrollen en la misma.

Dentro de dicho campus los espacios destinados al Aula Marina se sitúan dentro del Edificio Científico Técnico V (CITE V) de la Universidad. Concretamente el Aula Marina se ubica en el despacho D2-08, segunda planta del edificio, donde dispone de una oficina para su gestión y en el aula-laboratorio del semisótano donde dispone de un espacio tematizado para el desarrollo de sus actividades.");

INSERT INTO news VALUES (1, "Las 34 mareas negras de la joya ecológica del Mar de Alborán", "2018-05-14", "Un informe del Senado revela la amenaza de vertidos y fugas en la costa de Almería", "https://www.lavozdealmeria.com/noticia/12/almeria/151771/las-34-mareas-negras-de-la-joya-ecologica-del-mar-de-alboran", "https://lh3.googleusercontent.com/U6haXPpRroJn7JtwdUZkJG_N4wGvhQwiQaiu6ICNKnv8xWunfYy5RihaAb52hnH35XjfgH8_louDLcEePOvWwCk8RMErkTsAEQ=w840-h473-n-e365");
INSERT INTO news VALUES (2, "Un protocolo para las carabelas portuguesas", "2018-04-24", "IU propone en Roquetas un procedimiento de información y recogida de estas falsas medusas", "https://www.lavozdealmeria.com/noticia/3/provincia/150566/un-protocolo-para-las-carabelas-portuguesas", "https://lh3.googleusercontent.com/VM40BQ5S_3dNgoEeRPIquInQcFLHPOHWWXIMfU7kQsT9H_o3duXr_ReT5T_2WBfFDEVEs8IyDM9gFL95IbOzKqgFw1L1op3Yj5g=w840-h473-n-e365");
INSERT INTO news VALUES (3, "Desenterrando grandes especies marinas de cinco millones de años", "2017-09-04", "Vacas marinas, focas y ballenas del son algunos de los ejemplares hallados en la excavación", "https://www.lavozdealmeria.com/noticia/3/provincia/137134/desenterrando-grandes-especies-marinas-de-cinco-millones-de-anos", "https://lh3.googleusercontent.com/MlF0MfOvdmhHIHz7rVISHKsJArY6kUootn2-VgKiV6wYo32U_zdK9wHcSdS3hCtcNbsaY6oZqg66VTbGRO6y5xbu5ihyQvcO2Q=w840-h473-n-e365");
INSERT INTO news VALUES (4, "El futuro de la pesca en el Mediterráneo andaluz se ha decidido en Almería", "2017-08-31", "Logran un acuerdo mejor que la propuesta inicial aunque se reducen los topes, horarios y número de días anuales", "https://www.ideal.es/almeria/provincia-almeria/futuro-pesca-mediterraneo-20170831093708-nt.html", "https://static.ideal.es/www/multimedia/201708/31/media/cortadas/pesca-acuerdo-kYZG-U40674808356YZC-624x385@Ideal.jpeg");

INSERT INTO contact VALUES (1, "950 21 47 71", "aulamar@ual.es", "9:00 - 14:00 de Lunes a Viernes", "Carretera de Sacramento s/n 04120
La Cañada de San Urbano (Almería, España)

Edificio Científico Técnico V (CITE-V) 
2ª planta, despacho 2-08", "Si tienes alguna pregunta o duda, por favor, no dudes en contactar con nosotros por teléfono o correo electrónico y nos pondremos en contacto contigo tan pronto como sea posible.");
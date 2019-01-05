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
	link VARCHAR(2083)
);

DROP TABLE IF EXISTS species;
CREATE TABLE species(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	sci_name VARCHAR(80),
	comm_name VARCHAR(80),
    description TEXT,
    month VARCHAR(20),
    year VARCHAR(5)
);

DROP TABLE IF EXISTS activities;
CREATE TABLE activities(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(200),
    description TEXT,
    date VARCHAR(11),
    ubication TEXT,
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
    description TEXT

);

DROP TABLE IF EXISTS facilities;
CREATE TABLE facilities(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	description TEXT
);

DROP TABLE IF EXISTS aboutUs;
CREATE TABLE aboutUs(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	description TEXT
);

DROP TABLE IF EXISTS news;
CREATE TABLE news(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(200),
    date VARCHAR(11),
	description TEXT,
    link VARCHAR(2083)
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

INSERT INTO featureds VALUES (1, "CONOCE EL MAR ALMERIENSE", "https://google.com");
INSERT INTO featureds VALUES (2, "CONOCE NUESTRA ESPECIE DEL MES", "https://google.com");
INSERT INTO featureds VALUES (3, "APÚNTATE A NUESTRAS ACTIVIDADES", "https://google.com");
INSERT INTO featureds VALUES (4, "ECHA UN VISTAZO A NUESTRO LABORATORIO", "https://google.com");

INSERT INTO species VALUES (1, "Octopus vulgaris", "Pulpo", "descripción", "Noviembre", "2018");
INSERT INTO species VALUES (2, "Octopus vulgaris", "Gamba Roja", "descripción", "Diciembre", "2018");
INSERT INTO species VALUES (3, "Diplodus sargus", "Sargo Blanco", "descripción", "Enero", "2019");

INSERT INTO activities VALUES (1, "Almería te pesca (Día Marítimo Europeo)", "El sábado 19 de mayo estuvimos celebrando en el Mercado Central de Almería el Día Marítimo Europeo. Allí conocimos diferentes aspectos de la pesca, gastronomía, valores nutricionales y biología de los productos pesqueros que nos ofrecen nuestros mares.", "19/05/2018", "Mercado Central de Almería", 1);
INSERT INTO activities VALUES (2, "Actividad de Voluntariado Ambiental Parque Natural Cabo de Gata Nijar", "El pasado sábado 12 de mayo estuvimos en la playa de Torregarcía, dentro de los límites del Parque Natural Cabo de Gata-Nijar, ayudando en una limpieza de la playas junto con nuestros amigos de Ecocampus.", "12/05/2018", "Playa de Torregarcía", 1);
INSERT INTO activities VALUES (3, "Visita a las instalaciones del Aula Marina", "Visita a las instalaciones del Aula Marina.", "30/04/2019", "UAL", 0);

INSERT INTO proyects VALUES (1, "Maqueta de las Salinas de Cabo de Gata");
INSERT INTO proyects VALUES (2, "Especie del Mes");

INSERT INTO people VALUES (1, "Pedro Aguilera Aguilera", "Director del Aula Marina", 1, "Profesor Titular de Universidad.
Departamento: Biología y Geología 
Área de conocimiento: Ecología
Correo electrónico: aguilera@ual.es
Tlf.: +34 950 01 59 33");
INSERT INTO people VALUES (2, "Rosa María Fernández Ropero", "Técnico Superior de Apoyo del Aula Marina", 1, "Categoría: Técnico superior de apoyo a la gestión y la I+D+i
Correo electrónico: aulamar@ual.es
Tlf.: +34 950 21 47 71");
INSERT INTO people VALUES (3, "John Doe", "Cargo", 0, "Descripción");

INSERT INTO facilities VALUES (1, "El Aula Marina es una entidad que persigue desarrollar actividades de carácter divulgativo y de formación relacionadas con el mar.

Su creación se aprobó en Consejo extraordinario de Gobierno, el día 24 de julio de 2017, a partir de una iniciativa llevada a cabo por el Centro de Excelencia Internacional del Mar (CEIMAR) de la Universidad de Almería.

El objetivo del Aula Marina es ser motor de divulgación y formación sobre aspectos relacionados del medio marino almeriense. Su fin no es competir con otras entidades privadas o colectivos sino intentar ser agente de unión de todas aquellas iniciativas que actúen en pro del mar, los océanos y sus gentes.");

INSERT INTO aboutUs VALUES (1, "El Aula Marina está ubicada dentro del Campus Universitario de la Universidad de Almería. El Campus de la Universidad de Almería disfruta de una ubicación privilegiada junto al mar y además de albergar modernos edificios e infraestructuras destinados a docencia e investigación, está dotado de una excelente biblioteca, cafeterías, zonas verdes, etc. que amplían de manera significativa la acogida que el Aula Marina pueda brindar a sus visitantes con el fin de apoyar las actividades que se desarrollen en la misma.

Dentro de dicho campus los espacios destinados al Aula Marina se sitúan dentro del Edificio Científico Técnico V (CITE V) de la Universidad. Concretamente el Aula Marina se ubica en el despacho D2-08, segunda planta del edificio, donde dispone de una oficina para su gestión y en el aula-laboratorio del semisótano donde dispone de un espacio tematizado para el desarrollo de sus actividades.");

INSERT INTO news VALUES (1, "Las 34 mareas negras de la joya ecológica del Mar de Alborán", "14/05/2018", "Un informe del Senado revela la amenaza de vertidos y fugas en la costa de Almería", "https://www.lavozdealmeria.com/noticia/12/almeria/151771/las-34-mareas-negras-de-la-joya-ecologica-del-mar-de-alboran");
INSERT INTO news VALUES (2, "Un protocolo para las carabelas portuguesas", "24/04/2018", "IU propone en Roquetas un procedimiento de información y recogida de estas falsas medusas", "https://www.lavozdealmeria.com/noticia/3/provincia/150566/un-protocolo-para-las-carabelas-portuguesas");
INSERT INTO news VALUES (3, "Desenterrando grandes especies marinas de cinco millones de años", "04/09/2017", "Vacas marinas, focas y ballenas del son algunos de los ejemplares hallados en la excavación", "https://www.lavozdealmeria.com/noticia/3/provincia/137134/desenterrando-grandes-especies-marinas-de-cinco-millones-de-anos");
INSERT INTO news VALUES (4, "El futuro de la pesca en el Mediterráneo andaluz se ha decidido en Almería", "31/08/2017", "Logran un acuerdo mejor que la propuesta inicial aunque se reducen los topes, horarios y número de días anuales", "https://www.ideal.es/almeria/provincia-almeria/futuro-pesca-mediterraneo-20170831093708-nt.html");

INSERT INTO contact VALUES (1, "950 21 47 71", "aulamar@ual.es", "9:00 - 14:00 de Lunes a Viernes", "Carretera de Sacramento s/n 04120 La Cañada de San Urbano (Almería, España). Edificio Científico Técnico V (CITE-V) 2ª planta, despacho 2-08", "");
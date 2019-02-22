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
    en_text VARCHAR(80),
	link VARCHAR(2083),
    img VARCHAR(2083)
);

DROP TABLE IF EXISTS species;
CREATE TABLE species(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	sci_name VARCHAR(80),
	comm_name VARCHAR(80),
	en_comm_name VARCHAR(80),
    description TEXT,
    en_description TEXT,
    month VARCHAR(20),
    en_month VARCHAR(20),
    month_number INT(2),
    year VARCHAR(5),
    img VARCHAR(2083)
);

DROP TABLE IF EXISTS activities;
CREATE TABLE activities(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(200),
    en_title VARCHAR(200),
    description TEXT,
    en_description TEXT,
    date VARCHAR(11),
    ubication TEXT,
    en_ubication TEXT,
    img1 VARCHAR(2083),
    img2 VARCHAR(2083),
    img3 VARCHAR(2083),
    img4 VARCHAR(2083),
    past BIT /* past == 1 -> actividad pasada, past == 0 -> actividad programada*/,
    featured BIT
);

DROP TABLE IF EXISTS projects;
CREATE TABLE projects(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(80),
    en_name VARCHAR(80),
    description TEXT,
    en_description TEXT,
    img VARCHAR(2083),
    bg VARCHAR(2083)
);

DROP TABLE IF EXISTS sections;
CREATE TABLE sections(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
    id_proj INT(11),
	title VARCHAR(80),
    en_title VARCHAR(80),
    description TEXT,
    en_description TEXT,
    img1 VARCHAR(2083),
    img2 VARCHAR(2083),
    img3 VARCHAR(2083),
    img4 VARCHAR(2083)
);

DROP TABLE IF EXISTS people;
CREATE TABLE people(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(80),
    charge VARCHAR(300),
    en_charge VARCHAR(300),
	main BIT,
    img VARCHAR(2083),
    description TEXT,
    en_description TEXT

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
    description TEXT,
    en_description TEXT
);

DROP TABLE IF EXISTS aboutUs;
CREATE TABLE aboutUs(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	img1 VARCHAR(2083),
    img2 VARCHAR(2083),
    img3 VARCHAR(2083),
    img4 VARCHAR(2083),
	description TEXT,
	en_description TEXT
);

DROP TABLE IF EXISTS news;
CREATE TABLE news(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(200),
    date VARCHAR(11),
	description TEXT,
    link VARCHAR(2083),
    img VARCHAR(2083),
    featured BIT
);

DROP TABLE IF EXISTS contact;
CREATE TABLE contact(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	phone VARCHAR(20),
	email VARCHAR(255),
    hour TEXT,
    address TEXT,
    description TEXT,
    en_description TEXT
);

DROP TABLE IF EXISTS rrss;
CREATE TABLE rrss(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(20),
    link VARCHAR(2083)
);

DROP TABLE IF EXISTS bgs;
CREATE TABLE bgs(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
    link VARCHAR(2083)
);


/* DATA */
INSERT INTO users VALUES (1, "admin", "admin");

INSERT INTO featureds VALUES (1, "CONOCE EL MAR ALMERIENSE", "DISCOVER THE SEA OF ALMERIA", "projects.php", "https://i.imgur.com/YeUOTLz.png");
INSERT INTO featureds VALUES (2, "CONOCE NUESTRA ESPECIE DEL MES", "DISCOVER OUR SPECIES OF THE MONTH", "species-of-the-month.php", "https://i.imgur.com/olw4ZIu.png");
INSERT INTO featureds VALUES (3, "APÚNTATE A NUESTRAS ACTIVIDADES", "SIGN UP TO OUR ACTIVITIES", "activities.php", "https://i.imgur.com/qtw1YpA.jpg");
INSERT INTO featureds VALUES (4, "ECHA UN VISTAZO A NUESTRO LABORATORIO", "TAKE A LOOK TO OUR LABORATORY", "facilities.php", "https://i.imgur.com/rNNymSH.jpg");

INSERT INTO species VALUES (1, "Octopus vulgaris", "Pulpo", "Octopus", '<div align="justify">Muy conocida por sus usos culinarios, se trata de una especie carnívora principalmente nocturna, que se alimenta de crustáceos, bivalvos y peces. Es, por lo general, una especie solitaria y territorial con una gran capacidad de adaptación, llegando a cambiar su coloración en función del ambiente en el que se encuentre.<br></div><div align="justify"><br></div><div align="justify">Ha sido ampliamente utilizado con fines investigativos por poseer una gran inteligencia con capacidad de resolver problemas. Son capaces de distinguir el brillo, las formas y el tamaño entre los objetos, y tienen muy buena memoria.</div>', '<div align="justify">Muy conocida por sus usos culinarios, se trata de una especie carnívora principalmente nocturna, que se alimenta de crustáceos, bivalvos y peces. Es, por lo general, una especie solitaria y territorial con una gran capacidad de adaptación, llegando a cambiar su coloración en función del ambiente en el que se encuentre.<br></div><div align="justify"><br></div><div align="justify">Ha sido ampliamente utilizado con fines investigativos por poseer una gran inteligencia con capacidad de resolver problemas. Son capaces de distinguir el brillo, las formas y el tamaño entre los objetos, y tienen muy buena memoria.</div>', "Noviembre", "November", 11, "2018", "https://i.imgur.com/4RaUdNJ.png");
INSERT INTO species VALUES (2, "Aristeus antenmatus", "Gamba Roja", "Red Prawn", '<div align="justify">Se trata de un crustáceo decápodo y macruro nadador de la familia Penaeidae. Habita en el talud continental desde los 200 a los 1000 metros de profundidad. Se alimenta de moluscos bivalvos así como de otros crustáceos. <br></div><div align="justify"><br></div><div align="justify">Se distribuye por todo el Mediterráneo y se pesca mediante técnicas de arrastre de fondo. <br></div><div align="justify"><br></div><div align="justify">
 Aunque se pesca en numerosos puertos a lo largo de las costas mediterráneas, es en los puertos de Garrucha y Roquetas donde se utiliza la denominación de Gamba roja de Garrucha como un distintivo de calidad, que hace de este un producto muy apreciado que puede alcanzar elevados precios de venta.</div>', '<div align="justify">Se trata de un crustáceo decápodo y macruro nadador de la familia Penaeidae. Habita en el talud continental desde los 200 a los 1000 metros de profundidad. Se alimenta de moluscos bivalvos así como de otros crustáceos. <br></div><div align="justify"><br></div><div align="justify">Se distribuye por todo el Mediterráneo y se pesca mediante técnicas de arrastre de fondo. <br></div><div align="justify"><br></div><div align="justify">
 Aunque se pesca en numerosos puertos a lo largo de las costas mediterráneas, es en los puertos de Garrucha y Roquetas donde se utiliza la denominación de Gamba roja de Garrucha como un distintivo de calidad, que hace de este un producto muy apreciado que puede alcanzar elevados precios de venta.</div>', "Diciembre", "December", 12, "2018", "https://i.imgur.com/QUaa9ao.png");
INSERT INTO species VALUES (3, "Diplodus sargus", "Sargo Blanco", "White Sargus", '<div align="justify">Pez plateado de cuerpo ovalado con entre 7 y 9 finas líneas transversales oscuras a lo largo de todo el cuerpo y una pequeña mancha tanto en la base de la cola como en la cara. <br></div><div align="justify"><br></div><div align="justify">Lo encontramos en zonas del litoral rocosas, arrecifes y praderas de Posidonia. De jóvenes viven en bancos cerca de la orilla y de adultos son solitarios. Son omnívoros y tienen una fuerte boca, armada con sólidos molares, con la que machacan la concha de moluscos, crustáceos e incluso erizos de mar.
 
 <b><br></b></div><div align="justify"><b><br></b></div><div align="justify"><b>Curiosidad:</b>
 Son hermafroditas proterándricos, es decir, pueden ser machos o hembras en distintas fases de su vida mediante un proceso de inversión sexual. La época reproductora se da en primavera.</div>', '<div align="justify">Pez plateado de cuerpo ovalado con entre 7 y 9 finas líneas transversales oscuras a lo largo de todo el cuerpo y una pequeña mancha tanto en la base de la cola como en la cara. <br></div><div align="justify"><br></div><div align="justify">Lo encontramos en zonas del litoral rocosas, arrecifes y praderas de Posidonia. De jóvenes viven en bancos cerca de la orilla y de adultos son solitarios. Son omnívoros y tienen una fuerte boca, armada con sólidos molares, con la que machacan la concha de moluscos, crustáceos e incluso erizos de mar.
 
 <b><br></b></div><div align="justify"><b><br></b></div><div align="justify"><b>Curiosidad:</b>
 Son hermafroditas proterándricos, es decir, pueden ser machos o hembras en distintas fases de su vida mediante un proceso de inversión sexual. La época reproductora se da en primavera.</div>', "Enero", "January", 1, "2019", "https://i.imgur.com/t1Fi4jG.png");

INSERT INTO activities VALUES (1, "Almería te pesca (Día Marítimo Europeo)", "Almería te pesca (Día Marítimo Europeo)", "El sábado 19 de mayo estuvimos celebrando en el Mercado Central de Almería el Día Marítimo Europeo. Allí conocimos diferentes aspectos de la pesca, gastronomía, valores nutricionales y biología de los productos pesqueros que nos ofrecen nuestros mares.", "El sábado 19 de mayo estuvimos celebrando en el Mercado Central de Almería el Día Marítimo Europeo. Allí conocimos diferentes aspectos de la pesca, gastronomía, valores nutricionales y biología de los productos pesqueros que nos ofrecen nuestros mares.", "2018-05-19", "Mercado Central de Almería", "Mercado Central de Almería", "https://previews.123rf.com/images/torwai/torwai1608/torwai160800233/64055464-juego-en-el-mar-las-vacaciones-de-verano-de-la-actividad-tur%C3%ADstica-en-la-playa-las-personas-y-un-barco.jpg", "https://sadaendigital.files.wordpress.com/2015/01/cofradias.jpg", "https://sadaendigital.files.wordpress.com/2015/01/cofradias.jpg", "https://sadaendigital.files.wordpress.com/2015/01/cofradias.jpg", 1, 1);
INSERT INTO activities VALUES (2, "Actividad de Voluntariado Ambiental Parque Natural Cabo de Gata Nijar", "Actividad de Voluntariado Ambiental Parque Natural Cabo de Gata Nijar", "El pasado sábado 12 de mayo estuvimos en la playa de Torregarcía, dentro de los límites del Parque Natural Cabo de Gata-Nijar, ayudando en una limpieza de la playas junto con nuestros amigos de Ecocampus.", "El pasado sábado 12 de mayo estuvimos en la playa de Torregarcía, dentro de los límites del Parque Natural Cabo de Gata-Nijar, ayudando en una limpieza de la playas junto con nuestros amigos de Ecocampus.", "2018-05-12", "Playa de Torregarcía", "Playa de Torregarcía", "https://www.javea.com/wp-content/uploads/2014/05/Actividad-de-deporte-acu%C3%A1tico-en-la-celebraci%C3%B3n-del-Festival-del-Mar-el-pasado-a%C3%B1o.jpg", "https://sadaendigital.files.wordpress.com/2015/01/cofradias.jpg", "https://sadaendigital.files.wordpress.com/2015/01/cofradias.jpg", "https://sadaendigital.files.wordpress.com/2015/01/cofradias.jpg", 1, 0);
INSERT INTO activities VALUES (3, "Visita a las instalaciones del Aula Marina", "Visita a las instalaciones del Aula Marina", "Visita a las instalaciones del Aula Marina.", "Visita a las instalaciones del Aula Marina.", "2019-04-30", "UAL", "UAL", "https://sadaendigital.files.wordpress.com/2015/01/cofradias.jpg", "https://sadaendigital.files.wordpress.com/2015/01/cofradias.jpg", "https://sadaendigital.files.wordpress.com/2015/01/cofradias.jpg", "https://sadaendigital.files.wordpress.com/2015/01/cofradias.jpg", 0, 0);

INSERT INTO projects VALUES (1, "Maqueta de Las Salinas de Cabo de Gata", "Model from Las Salinas de Cabo de Gata", '<div align="justify"> Aliquam id gravida lectus, eget vehicula metus. Etiam porttitor enim ac viverra congue. Maecenas ultricies metus sed augue tristique fringilla. Maecenas ut dolor at orci cursus venenatis. Etiam cursus libero ut ante consequat tincidunt. Quisque viverra placerat mauris et mattis. Nunc efficitur euismod purus, at porta quam lobortis eget. Nulla at malesuada nisi. Donec tristique velit ante, at cursus diam condimentum a. Phasellus eleifend aliquam tempor. Cras lobortis porta magna vitae imperdiet. <br></div><div align="justify"><br></div><div align="justify">Etiam aliquam finibus leo ac dictum. Fusce at libero et sem sodales ornare. Vivamus egestas turpis eget pharetra luctus. Duis nunc arcu, faucibus at nisi tincidunt, eleifend tempor enim. Phasellus malesuada ante a metus molestie luctus. Donec lobortis luctus lectus, ut volutpat eros ornare quis. Aenean in ligula vitae enim dictum dignissim. </div>', '<div align="justify"> Aliquam id gravida lectus, eget vehicula metus. Etiam porttitor enim ac viverra congue. Maecenas ultricies metus sed augue tristique fringilla. Maecenas ut dolor at orci cursus venenatis. Etiam cursus libero ut ante consequat tincidunt. Quisque viverra placerat mauris et mattis. Nunc efficitur euismod purus, at porta quam lobortis eget. Nulla at malesuada nisi. Donec tristique velit ante, at cursus diam condimentum a. Phasellus eleifend aliquam tempor. Cras lobortis porta magna vitae imperdiet. <br></div><div align="justify"><br></div><div align="justify">Etiam aliquam finibus leo ac dictum. Fusce at libero et sem sodales ornare. Vivamus egestas turpis eget pharetra luctus. Duis nunc arcu, faucibus at nisi tincidunt, eleifend tempor enim. Phasellus malesuada ante a metus molestie luctus. Donec lobortis luctus lectus, ut volutpat eros ornare quis. Aenean in ligula vitae enim dictum dignissim. </div>', "https://i.imgur.com/TI99g47.png", "");
INSERT INTO projects VALUES (2, "Especie del Mes", "Species of the Month", '<div align="justify"><font size="4"><b>Especie del Mes</b> es un proyecto mensual del Aula Marina que tiene como finalidad dar a conocer las especies, tanto de flora como de fauna, que podemos encontrar en nuestro litoral. A principio de cada mes se subirá una ficha completa con la información básica de la especie, nombre científico, distribución, hábitat, etc. <br></font></div><div align="justify"><font size="4"><br></font></div><div align="justify"><font size="4">Si quieres conocer más sobre nuestras especies <b>¡apúntalo en tu agenda!</b> Tienes una cita con nosotros todos los meses.</font></div>', '<div align="justify"><font size="4"><b>Especie del Mes</b> es un proyecto mensual del Aula Marina que tiene como finalidad dar a conocer las especies, tanto de flora como de fauna, que podemos encontrar en nuestro litoral. A principio de cada mes se subirá una ficha completa con la información básica de la especie, nombre científico, distribución, hábitat, etc. <br></font></div><div align="justify"><font size="4"><br></font></div><div align="justify"><font size="4">Si quieres conocer más sobre nuestras especies <b>¡apúntalo en tu agenda!</b> Tienes una cita con nosotros todos los meses.</font></div>', "https://i.imgur.com/gH3bLkX.jpg", "https://i.imgur.com/gH3bLkX.jpg");

INSERT INTO sections VALUES (1, 1, "Sección de ejemplo", "Example section", '<div align="justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec consectetur leo. Vestibulum imperdiet quam ut efficitur sagittis. Ut purus ligula, suscipit varius nisi pharetra, maximus gravida dolor. Curabitur fringilla ante et ultrices condimentum. Praesent nisl leo, posuere vel ex ac, hendrerit congue ex. Morbi convallis et dui quis rhoncus. Praesent finibus suscipit arcu, a ultrices mauris varius et. Nullam id odio mi. Sed lacinia neque in turpis varius, nec iaculis tellus condimentum. <br></div><div align="justify"><br></div><div align="justify">Duis pulvinar quam a urna fringilla vulputate. Etiam erat sapien, congue nec facilisis eget, efficitur ac massa. Fusce laoreet malesuada aliquam. Vivamus eleifend, massa at consectetur aliquam, risus erat condimentum neque, ut vulputate tortor risus nec erat. Aenean luctus ipsum et tempor posuere. In sapien arcu, mollis sit amet ullamcorper vel, pellentesque non neque. Etiam in odio in magna rutrum egestas sed in massa. Quisque pulvinar massa est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin nec massa vel mi rutrum aliquam fermentum eget enim. Nam viverra in nibh at accumsan. Praesent sit amet interdum sapien. Phasellus mattis, risus at pharetra pellentesque, nulla urna molestie mauris, at malesuada est magna aliquam sapien. Integer at pretium arcu. Sed eget vestibulum est. Nam gravida nunc et velit porta, eu placerat mauris rhoncus. </div>', '<div align="justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec consectetur leo. Vestibulum imperdiet quam ut efficitur sagittis. Ut purus ligula, suscipit varius nisi pharetra, maximus gravida dolor. Curabitur fringilla ante et ultrices condimentum. Praesent nisl leo, posuere vel ex ac, hendrerit congue ex. Morbi convallis et dui quis rhoncus. Praesent finibus suscipit arcu, a ultrices mauris varius et. Nullam id odio mi. Sed lacinia neque in turpis varius, nec iaculis tellus condimentum. <br></div><div align="justify"><br></div><div align="justify">Duis pulvinar quam a urna fringilla vulputate. Etiam erat sapien, congue nec facilisis eget, efficitur ac massa. Fusce laoreet malesuada aliquam. Vivamus eleifend, massa at consectetur aliquam, risus erat condimentum neque, ut vulputate tortor risus nec erat. Aenean luctus ipsum et tempor posuere. In sapien arcu, mollis sit amet ullamcorper vel, pellentesque non neque. Etiam in odio in magna rutrum egestas sed in massa. Quisque pulvinar massa est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin nec massa vel mi rutrum aliquam fermentum eget enim. Nam viverra in nibh at accumsan. Praesent sit amet interdum sapien. Phasellus mattis, risus at pharetra pellentesque, nulla urna molestie mauris, at malesuada est magna aliquam sapien. Integer at pretium arcu. Sed eget vestibulum est. Nam gravida nunc et velit porta, eu placerat mauris rhoncus. </div>', "https://cdn.theatlantic.com/assets/media/img/mt/2018/01/07/lead_720_405.jpg?mod=1533691921", "https://cdn.theatlantic.com/assets/media/img/mt/2018/01/07/lead_720_405.jpg?mod=1533691921", "https://cdn.theatlantic.com/assets/media/img/mt/2018/01/07/lead_720_405.jpg?mod=1533691921", "https://cdn.theatlantic.com/assets/media/img/mt/2018/01/07/lead_720_405.jpg?mod=1533691921");
INSERT INTO sections VALUES (2, 1, "Sección de ejemplo2", "Example2 section", '<div align="justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec consectetur leo. Vestibulum imperdiet quam ut efficitur sagittis. Ut purus ligula, suscipit varius nisi pharetra, maximus gravida dolor. Curabitur fringilla ante et ultrices condimentum. Praesent nisl leo, posuere vel ex ac, hendrerit congue ex. Morbi convallis et dui quis rhoncus. Praesent finibus suscipit arcu, a ultrices mauris varius et. Nullam id odio mi. Sed lacinia neque in turpis varius, nec iaculis tellus condimentum. <br></div><div align="justify"><br></div><div align="justify">Duis pulvinar quam a urna fringilla vulputate. Etiam erat sapien, congue nec facilisis eget, efficitur ac massa. Fusce laoreet malesuada aliquam. Vivamus eleifend, massa at consectetur aliquam, risus erat condimentum neque, ut vulputate tortor risus nec erat. Aenean luctus ipsum et tempor posuere. In sapien arcu, mollis sit amet ullamcorper vel, pellentesque non neque. Etiam in odio in magna rutrum egestas sed in massa. Quisque pulvinar massa est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin nec massa vel mi rutrum aliquam fermentum eget enim. Nam viverra in nibh at accumsan. Praesent sit amet interdum sapien. Phasellus mattis, risus at pharetra pellentesque, nulla urna molestie mauris, at malesuada est magna aliquam sapien. Integer at pretium arcu. Sed eget vestibulum est. Nam gravida nunc et velit porta, eu placerat mauris rhoncus. </div>', '<div align="justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec consectetur leo. Vestibulum imperdiet quam ut efficitur sagittis. Ut purus ligula, suscipit varius nisi pharetra, maximus gravida dolor. Curabitur fringilla ante et ultrices condimentum. Praesent nisl leo, posuere vel ex ac, hendrerit congue ex. Morbi convallis et dui quis rhoncus. Praesent finibus suscipit arcu, a ultrices mauris varius et. Nullam id odio mi. Sed lacinia neque in turpis varius, nec iaculis tellus condimentum. <br></div><div align="justify"><br></div><div align="justify">Duis pulvinar quam a urna fringilla vulputate. Etiam erat sapien, congue nec facilisis eget, efficitur ac massa. Fusce laoreet malesuada aliquam. Vivamus eleifend, massa at consectetur aliquam, risus erat condimentum neque, ut vulputate tortor risus nec erat. Aenean luctus ipsum et tempor posuere. In sapien arcu, mollis sit amet ullamcorper vel, pellentesque non neque. Etiam in odio in magna rutrum egestas sed in massa. Quisque pulvinar massa est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin nec massa vel mi rutrum aliquam fermentum eget enim. Nam viverra in nibh at accumsan. Praesent sit amet interdum sapien. Phasellus mattis, risus at pharetra pellentesque, nulla urna molestie mauris, at malesuada est magna aliquam sapien. Integer at pretium arcu. Sed eget vestibulum est. Nam gravida nunc et velit porta, eu placerat mauris rhoncus. </div>', "https://cdn.theatlantic.com/assets/media/img/mt/2018/01/07/lead_720_405.jpg?mod=1533691921", "https://cdn.theatlantic.com/assets/media/img/mt/2018/01/07/lead_720_405.jpg?mod=1533691921", "https://cdn.theatlantic.com/assets/media/img/mt/2018/01/07/lead_720_405.jpg?mod=1533691921", "https://cdn.theatlantic.com/assets/media/img/mt/2018/01/07/lead_720_405.jpg?mod=1533691921");
INSERT INTO sections VALUES (3, 2, "Sección de ejemplo", "Example section", '<div align="justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec consectetur leo. Vestibulum imperdiet quam ut efficitur sagittis. Ut purus ligula, suscipit varius nisi pharetra, maximus gravida dolor. Curabitur fringilla ante et ultrices condimentum. Praesent nisl leo, posuere vel ex ac, hendrerit congue ex. Morbi convallis et dui quis rhoncus. Praesent finibus suscipit arcu, a ultrices mauris varius et. Nullam id odio mi. Sed lacinia neque in turpis varius, nec iaculis tellus condimentum. <br></div><div align="justify"><br></div><div align="justify">Duis pulvinar quam a urna fringilla vulputate. Etiam erat sapien, congue nec facilisis eget, efficitur ac massa. Fusce laoreet malesuada aliquam. Vivamus eleifend, massa at consectetur aliquam, risus erat condimentum neque, ut vulputate tortor risus nec erat. Aenean luctus ipsum et tempor posuere. In sapien arcu, mollis sit amet ullamcorper vel, pellentesque non neque. Etiam in odio in magna rutrum egestas sed in massa. Quisque pulvinar massa est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin nec massa vel mi rutrum aliquam fermentum eget enim. Nam viverra in nibh at accumsan. Praesent sit amet interdum sapien. Phasellus mattis, risus at pharetra pellentesque, nulla urna molestie mauris, at malesuada est magna aliquam sapien. Integer at pretium arcu. Sed eget vestibulum est. Nam gravida nunc et velit porta, eu placerat mauris rhoncus. </div>', '<div align="justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec consectetur leo. Vestibulum imperdiet quam ut efficitur sagittis. Ut purus ligula, suscipit varius nisi pharetra, maximus gravida dolor. Curabitur fringilla ante et ultrices condimentum. Praesent nisl leo, posuere vel ex ac, hendrerit congue ex. Morbi convallis et dui quis rhoncus. Praesent finibus suscipit arcu, a ultrices mauris varius et. Nullam id odio mi. Sed lacinia neque in turpis varius, nec iaculis tellus condimentum. <br></div><div align="justify"><br></div><div align="justify">Duis pulvinar quam a urna fringilla vulputate. Etiam erat sapien, congue nec facilisis eget, efficitur ac massa. Fusce laoreet malesuada aliquam. Vivamus eleifend, massa at consectetur aliquam, risus erat condimentum neque, ut vulputate tortor risus nec erat. Aenean luctus ipsum et tempor posuere. In sapien arcu, mollis sit amet ullamcorper vel, pellentesque non neque. Etiam in odio in magna rutrum egestas sed in massa. Quisque pulvinar massa est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin nec massa vel mi rutrum aliquam fermentum eget enim. Nam viverra in nibh at accumsan. Praesent sit amet interdum sapien. Phasellus mattis, risus at pharetra pellentesque, nulla urna molestie mauris, at malesuada est magna aliquam sapien. Integer at pretium arcu. Sed eget vestibulum est. Nam gravida nunc et velit porta, eu placerat mauris rhoncus. </div>', "https://cdn.theatlantic.com/assets/media/img/mt/2018/01/07/lead_720_405.jpg?mod=1533691921", "https://cdn.theatlantic.com/assets/media/img/mt/2018/01/07/lead_720_405.jpg?mod=1533691921", "https://cdn.theatlantic.com/assets/media/img/mt/2018/01/07/lead_720_405.jpg?mod=1533691921", "https://cdn.theatlantic.com/assets/media/img/mt/2018/01/07/lead_720_405.jpg?mod=1533691921");
INSERT INTO sections VALUES (4, 2, "Sección de ejemplo2", "Example2 section", '<div align="justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec consectetur leo. Vestibulum imperdiet quam ut efficitur sagittis. Ut purus ligula, suscipit varius nisi pharetra, maximus gravida dolor. Curabitur fringilla ante et ultrices condimentum. Praesent nisl leo, posuere vel ex ac, hendrerit congue ex. Morbi convallis et dui quis rhoncus. Praesent finibus suscipit arcu, a ultrices mauris varius et. Nullam id odio mi. Sed lacinia neque in turpis varius, nec iaculis tellus condimentum. <br></div><div align="justify"><br></div><div align="justify">Duis pulvinar quam a urna fringilla vulputate. Etiam erat sapien, congue nec facilisis eget, efficitur ac massa. Fusce laoreet malesuada aliquam. Vivamus eleifend, massa at consectetur aliquam, risus erat condimentum neque, ut vulputate tortor risus nec erat. Aenean luctus ipsum et tempor posuere. In sapien arcu, mollis sit amet ullamcorper vel, pellentesque non neque. Etiam in odio in magna rutrum egestas sed in massa. Quisque pulvinar massa est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin nec massa vel mi rutrum aliquam fermentum eget enim. Nam viverra in nibh at accumsan. Praesent sit amet interdum sapien. Phasellus mattis, risus at pharetra pellentesque, nulla urna molestie mauris, at malesuada est magna aliquam sapien. Integer at pretium arcu. Sed eget vestibulum est. Nam gravida nunc et velit porta, eu placerat mauris rhoncus. </div>', '<div align="justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec consectetur leo. Vestibulum imperdiet quam ut efficitur sagittis. Ut purus ligula, suscipit varius nisi pharetra, maximus gravida dolor. Curabitur fringilla ante et ultrices condimentum. Praesent nisl leo, posuere vel ex ac, hendrerit congue ex. Morbi convallis et dui quis rhoncus. Praesent finibus suscipit arcu, a ultrices mauris varius et. Nullam id odio mi. Sed lacinia neque in turpis varius, nec iaculis tellus condimentum. <br></div><div align="justify"><br></div><div align="justify">Duis pulvinar quam a urna fringilla vulputate. Etiam erat sapien, congue nec facilisis eget, efficitur ac massa. Fusce laoreet malesuada aliquam. Vivamus eleifend, massa at consectetur aliquam, risus erat condimentum neque, ut vulputate tortor risus nec erat. Aenean luctus ipsum et tempor posuere. In sapien arcu, mollis sit amet ullamcorper vel, pellentesque non neque. Etiam in odio in magna rutrum egestas sed in massa. Quisque pulvinar massa est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin nec massa vel mi rutrum aliquam fermentum eget enim. Nam viverra in nibh at accumsan. Praesent sit amet interdum sapien. Phasellus mattis, risus at pharetra pellentesque, nulla urna molestie mauris, at malesuada est magna aliquam sapien. Integer at pretium arcu. Sed eget vestibulum est. Nam gravida nunc et velit porta, eu placerat mauris rhoncus. </div>', "https://cdn.theatlantic.com/assets/media/img/mt/2018/01/07/lead_720_405.jpg?mod=1533691921", "https://cdn.theatlantic.com/assets/media/img/mt/2018/01/07/lead_720_405.jpg?mod=1533691921", "https://cdn.theatlantic.com/assets/media/img/mt/2018/01/07/lead_720_405.jpg?mod=1533691921", "https://cdn.theatlantic.com/assets/media/img/mt/2018/01/07/lead_720_405.jpg?mod=1533691921");

INSERT INTO colabsPhoto VALUES (1, "https://i.imgur.com/NotW8Sw.jpg");
INSERT INTO people VALUES (1, "Pedro Aguilera Aguilera", "Director del Aula Marina", "Director of Aula Marina", 1, "https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Gatto_europeo4.jpg/250px-Gatto_europeo4.jpg", "<div>Profesor Titular de Universidad. <br></div><div>Departamento: Biología y Geología <br></div><div>


Área de conocimiento: Ecología <br></div><div>

Correo electrónico: aguilera@ual.es <br></div><div>Tlf.: +34 950 01 59 33</div>", "<div>Profesor Titular de Universidad. <br></div><div>Departamento: Biología y Geología <br></div><div>


Área de conocimiento: Ecología <br></div><div>

Correo electrónico: aguilera@ual.es <br></div><div>Tlf.: +34 950 01 59 33</div>");
INSERT INTO people VALUES (2, "Rosa María Fernández Ropero", "Técnico Superior de Apoyo del Aula Marina", "Support Senior Technician of Aula Marina", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUR946RRGfx_qQQ5B5PKPqyIqTxx6MkNfcUluxZmAa38RfN1TQ_w", "<div>Categoría: Técnico superior de apoyo a la gestión y la I+D+i <br></div><div>Correo electrónico: aulamar@ual.es <br></div><div>Tlf.: +34 950 21 47 71</div>", "<div>Categoría: Técnico superior de apoyo a la gestión y la I+D+i <br></div><div>Correo electrónico: aulamar@ual.es <br></div><div>Tlf.: +34 950 21 47 71</div>");
INSERT INTO people VALUES (3, "John Doe", "Cargo", "Charge", 0, "", "", "");
INSERT INTO people VALUES (4, "John Doe", "Cargo", "Charge", 0, "", "", "");
INSERT INTO people VALUES (5, "John Doe", "Cargo", "Charge", 0, "", "", "");
INSERT INTO people VALUES (6, "John Doe", "Cargo", "Charge", 0, "", "", "");
INSERT INTO people VALUES (7, "John Doe", "Cargo", "Charge", 0, "", "", "");

INSERT INTO facilities VALUES (1, "https://i.imgur.com/WfRzl7o.jpg", "https://i.imgur.com/uZWSCOY.jpg", "https://i.imgur.com/OKiRCAB.png", "https://i.imgur.com/UcyGZZF.jpg", '<div align="justify"><div class="oKdM2c"><div id="h.p_Xzwai6beeycf" class="hJDwNd-AhqUyc-EehZO jXK9ad D2fZ2 OjCsFc GNzUNc"><div class="jXK9ad-SmKAyb jXK9ad-SmKAyb-c4YZDc"><div class="tyJCtd mGzaTb baZpAe"><p id="h.p_tPgxf4Ioeyc4" class="zfr3Q" style="text-align: justify; white-space: normal;">El Aula Marina está ubicada dentro del Campus Universitario de la Universidad de Almería. El Campus de la Universidad de Almería disfruta de una ubicación privilegiada junto al mar y además de albergar modernos edificios e infraestructuras destinados a docencia e investigación, está dotado de una excelente biblioteca, cafeterías, zonas verdes, etc. que amplían de manera significativa la acogida que el Aula Marina pueda brindar a sus visitantes con el fin de apoyar las actividades que se desarrollen en la misma. </p><p id="h.p_Knisjbi5nLsY" class="zfr3Q" style="text-align: justify; white-space: normal;">Dentro de dicho campus los espacios destinados al Aula Marina se sitúan dentro del Edificio Científico Técnico V (CITE V) de la Universidad. Concretamente el Aula Marina se ubica en el despacho D2-08, segunda planta del edificio, donde dispone de una oficina para su gestión y en el aula-laboratorio del semisótano donde dispone de un espacio tematizado para el desarrollo de sus actividades.</p></div></div></div></div></div>', '<div align="justify"><div class="oKdM2c"><div id="h.p_Xzwai6beeycf" class="hJDwNd-AhqUyc-EehZO jXK9ad D2fZ2 OjCsFc GNzUNc"><div class="jXK9ad-SmKAyb jXK9ad-SmKAyb-c4YZDc"><div class="tyJCtd mGzaTb baZpAe"><p id="h.p_tPgxf4Ioeyc4" class="zfr3Q" style="text-align: justify; white-space: normal;">El Aula Marina está ubicada dentro del Campus Universitario de la Universidad de Almería. El Campus de la Universidad de Almería disfruta de una ubicación privilegiada junto al mar y además de albergar modernos edificios e infraestructuras destinados a docencia e investigación, está dotado de una excelente biblioteca, cafeterías, zonas verdes, etc. que amplían de manera significativa la acogida que el Aula Marina pueda brindar a sus visitantes con el fin de apoyar las actividades que se desarrollen en la misma. </p><p id="h.p_Knisjbi5nLsY" class="zfr3Q" style="text-align: justify; white-space: normal;">Dentro de dicho campus los espacios destinados al Aula Marina se sitúan dentro del Edificio Científico Técnico V (CITE V) de la Universidad. Concretamente el Aula Marina se ubica en el despacho D2-08, segunda planta del edificio, donde dispone de una oficina para su gestión y en el aula-laboratorio del semisótano donde dispone de un espacio tematizado para el desarrollo de sus actividades.</p></div></div></div></div></div>');

INSERT INTO aboutUs VALUES (1,"https://i.imgur.com/9baVONI.jpg", "https://i.imgur.com/00gZVBf.jpg", "https://i.imgur.com/wwxpPO9.jpg", "https://i.imgur.com/WNKhRrR.png", '<div class="mYVXT" align="justify"><div class="LS81yb VICjCf" tabindex="-1"><div class="hJDwNd-AhqUyc-uQSCkd purZT-AhqUyc-II5mzb pSzOP-AhqUyc-qWD73c JNdkSc"><div class="oKdM2c"><div id="h.p_it5ljVNQxV1U" class="hJDwNd-AhqUyc-uQSCkd jXK9ad D2fZ2 OjCsFc wHaque GNzUNc"><div class="jXK9ad-SmKAyb jXK9ad-SmKAyb-c4YZDc"><div class="tyJCtd mGzaTb baZpAe"><p id="h.p_uX1SvGeSxV19" class="zfr3Q" style="text-align: justify; white-space: normal;">El Aula Marina es una entidad que persigue desarrollar actividades de carácter divulgativo y de formación relacionadas con el mar.</p><p id="h.p_7IuQW_IkVnvq" class="zfr3Q" style="text-align: justify; white-space: normal;">Su creación se aprobó en Consejo extraordinario de Gobierno, el día 24 de julio de 2017, a partir de una iniciativa llevada a cabo por el Centro de Excelencia Internacional del Mar (CEIMAR) de la Universidad de Almería.</p><p id="h.p_Ev5dOc_euOwu" class="zfr3Q" style="text-align: justify; white-space: normal;">El objetivo del Aula Marina es ser motor de divulgación y formación sobre aspectos relacionados del medio marino almeriense. Su fin no es competir con otras entidades privadas o colectivos sino intentar ser agente de unión de todas aquellas iniciativas que actúen en pro del mar, los océanos y sus gentes.</p></div></div></div></div></div></div></div>', '<div class="mYVXT" align="justify"><div class="LS81yb VICjCf" tabindex="-1"><div class="hJDwNd-AhqUyc-uQSCkd purZT-AhqUyc-II5mzb pSzOP-AhqUyc-qWD73c JNdkSc"><div class="oKdM2c"><div id="h.p_it5ljVNQxV1U" class="hJDwNd-AhqUyc-uQSCkd jXK9ad D2fZ2 OjCsFc wHaque GNzUNc"><div class="jXK9ad-SmKAyb jXK9ad-SmKAyb-c4YZDc"><div class="tyJCtd mGzaTb baZpAe"><p id="h.p_uX1SvGeSxV19" class="zfr3Q" style="text-align: justify; white-space: normal;">El Aula Marina es una entidad que persigue desarrollar actividades de carácter divulgativo y de formación relacionadas con el mar.</p><p id="h.p_7IuQW_IkVnvq" class="zfr3Q" style="text-align: justify; white-space: normal;">Su creación se aprobó en Consejo extraordinario de Gobierno, el día 24 de julio de 2017, a partir de una iniciativa llevada a cabo por el Centro de Excelencia Internacional del Mar (CEIMAR) de la Universidad de Almería.</p><p id="h.p_Ev5dOc_euOwu" class="zfr3Q" style="text-align: justify; white-space: normal;">El objetivo del Aula Marina es ser motor de divulgación y formación sobre aspectos relacionados del medio marino almeriense. Su fin no es competir con otras entidades privadas o colectivos sino intentar ser agente de unión de todas aquellas iniciativas que actúen en pro del mar, los océanos y sus gentes.</p></div></div></div></div></div></div></div>');

INSERT INTO news VALUES (1, "Las 34 mareas negras de la joya ecológica del Mar de Alborán", "2018-05-14", "Un informe del Senado revela la amenaza de vertidos y fugas en la costa de Almería", "https://www.lavozdealmeria.com/noticia/12/almeria/151771/las-34-mareas-negras-de-la-joya-ecologica-del-mar-de-alboran", "https://lh3.googleusercontent.com/U6haXPpRroJn7JtwdUZkJG_N4wGvhQwiQaiu6ICNKnv8xWunfYy5RihaAb52hnH35XjfgH8_louDLcEePOvWwCk8RMErkTsAEQ=w840-h473-n-e365", 1);
INSERT INTO news VALUES (2, "Un protocolo para las carabelas portuguesas", "2018-04-24", "IU propone en Roquetas un procedimiento de información y recogida de estas falsas medusas", "https://www.lavozdealmeria.com/noticia/3/provincia/150566/un-protocolo-para-las-carabelas-portuguesas", "https://lh3.googleusercontent.com/VM40BQ5S_3dNgoEeRPIquInQcFLHPOHWWXIMfU7kQsT9H_o3duXr_ReT5T_2WBfFDEVEs8IyDM9gFL95IbOzKqgFw1L1op3Yj5g=w840-h473-n-e365", 0);
INSERT INTO news VALUES (3, "Desenterrando grandes especies marinas de cinco millones de años", "2017-09-04", "Vacas marinas, focas y ballenas del son algunos de los ejemplares hallados en la excavación", "https://www.lavozdealmeria.com/noticia/3/provincia/137134/desenterrando-grandes-especies-marinas-de-cinco-millones-de-anos", "https://lh3.googleusercontent.com/MlF0MfOvdmhHIHz7rVISHKsJArY6kUootn2-VgKiV6wYo32U_zdK9wHcSdS3hCtcNbsaY6oZqg66VTbGRO6y5xbu5ihyQvcO2Q=w840-h473-n-e365", 0);
INSERT INTO news VALUES (4, "El futuro de la pesca en el Mediterráneo andaluz se ha decidido en Almería", "2017-08-31", "Logran un acuerdo mejor que la propuesta inicial aunque se reducen los topes, horarios y número de días anuales", "https://www.ideal.es/almeria/provincia-almeria/futuro-pesca-mediterraneo-20170831093708-nt.html", "https://static.ideal.es/www/multimedia/201708/31/media/cortadas/pesca-acuerdo-kYZG-U40674808356YZC-624x385@Ideal.jpeg", 0);

INSERT INTO contact VALUES (1, "950 21 47 71", "aulamar@ual.es", "9:00 - 14:00 de Lunes a Viernes", "Carretera de Sacramento s/n 04120
La Cañada de San Urbano (Almería, España)

Edificio Científico Técnico V (CITE-V) 
2ª planta, despacho 2-08", "Si tienes alguna pregunta o duda, por favor, no dudes en contactar con nosotros por teléfono o correo electrónico y nos pondremos en contacto contigo tan pronto como sea posible.", "If you have any question, please do not hesitate to contact with us through phone or email and we'll get in touch with you as soon as possible.");

INSERT INTO rrss VALUES (1, "Facebook", "https://www.facebook.com/AulaMarinaUnvAlm");
INSERT INTO rrss VALUES (2, "Twitter", "https://twitter.com/aulamarinaual");
INSERT INTO rrss VALUES (3, "YouTube", "");
INSERT INTO rrss VALUES (4, "Instragram", "https://www.instagram.com/aula_marina/");

INSERT INTO bgs VALUES (1, "");
INSERT INTO bgs VALUES (2, "");
INSERT INTO bgs VALUES (3, "");
INSERT INTO bgs VALUES (4, "");
INSERT INTO bgs VALUES (5, "");
INSERT INTO bgs VALUES (6, "");
INSERT INTO bgs VALUES (7, "");
INSERT INTO bgs VALUES (8, "");
INSERT INTO bgs VALUES (9, "");
INSERT INTO bgs VALUES (10, "");
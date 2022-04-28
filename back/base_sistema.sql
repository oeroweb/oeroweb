CREATE DATABASE oedb2020;
use oedb2020;

CREATE TABLE oedb_categorias(
	id int(5) not null auto_increment,	
	nombre varchar(250) not null,	
	fechacreacion DATE NOT NULL,
	fechamodificacion DATETIME NULL,
	estado int(1) default 1,
	CONSTRAINT pk_categoria PRIMARY KEY(id)	
)ENGINE=InnoDb;

-- TABLA BLOG 
CREATE TABLE oedb_blog(
	id int(5) not null auto_increment,
	categoria_id int(5) null,
	titulo varchar(250) null,	
	parrafo text(2500) null,
	link_url varchar(200) null,
	imagen varchar(250) null,
	archivo varchar(250) null,
	meta_url varchar(250) null,
	meta_title varchar(200) null,
	meta_description varchar(250) null,
	fechacreacion DATE NOT NULL,
	fechamodificacion DATETIME NULL,
	estado int(1) default 1,
	CONSTRAINT pk_blog PRIMARY KEY(id),
	CONSTRAINT fk_categoria_blog FOREIGN KEY (categoria_id) REFERENCES oedb_categorias(id)
)ENGINE=InnoDb;
-----
ALTER TABLE oedb_blog ADD categoria_id int(5) null AFTER id;
ALTER TABLE oedb_blog ADD CONSTRAINT fk_categoria_blog FOREIGN KEY (categoria_id) REFERENCES oedb_categorias(id);


INSERT INTO oedb_blog (id, titulo, parrafo, link_url, imagen, fechacreacion, estado) values
(null, 'OeroWeb', 'Texto de prueba en la descripcion del blog','http://oeroweb.com/index.php','logo.png', CURDATE(), 1);
------

CREATE TABLE oedb_postredes(
	id int(5) not null auto_increment,	
	parrafo text(500) null,	
	meta_url varchar(250) null,
	meta_title varchar(200) null,
	meta_description varchar(250) null,
	fechacreacion DATE NOT NULL,
	fechamodificacion DATETIME NULL,
	estado int(1) default 1,
	CONSTRAINT pk_redes PRIMARY KEY(id)	
)ENGINE=InnoDb;


CREATE TABLE oedb_webmail(
	id int(10) not null auto_increment,	
	nombres varchar(200) not null,	
	asunto varchar(250) not null,	
	email varchar(120) not null,	
	telefono varchar(20) null,	
	plan varchar(60) null,	
	mensaje text(2500) null,	
	fechacreacion DATETIME NOT NULL,
	estado int(1) default 1,
	CONSTRAINT pk_webmail PRIMARY KEY(id)	
)ENGINE=InnoDb;
CREATE DATABASE db_turismo;
USE db_turismo;

CREATE TABLE usuarios(
id              int(11) auto_increment not null,
nombre          varchar(100) not null,
apellidos       varchar(255),
email           varchar(255) not null,
password        varchar(255) not null,
rol             varchar(20),
estado          boolean not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE categorias(
  id            int(11) auto_increment not null,
  nombre        varchar(100) not null,
  estado        boolean not null,
  CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE lugares_turisticos(
id              int(11) auto_increment not null,
usuario_id      int(11) not null,
nombre          varchar(100) not null,
direccion       varchar(100) not null,
descripcion_corta     text not null,
descripcion_larga     text not null,
ubicacion       varchar(200) not null,
imagen          varchar(100) not null,
token           varchar (100) not null,
fecha           date not null,
estado          boolean not null,
CONSTRAINT pk_lugares_turisticos PRIMARY KEY(id),
CONSTRAINT pk_lugares_turisticos_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
CONSTRAINT uq_token UNIQUE(token)
)ENGINE=InnoDb;

CREATE TABLE comentarios_lugares_turisticos(
  id            int(11) auto_increment not null,
  usuario_id    int(11) not null,
  lugares_turisticos_id   int(11) not null,
  comentario    text not null,
  fecha         date not null,
  estado        boolean not null,
  CONSTRAINT pk_comentarios_lugares_turisticos PRIMARY KEY(id),
  CONSTRAINT pk_comentarios_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
  CONSTRAINT pk_coemntario_lugar_turistico FOREIGN KEY(lugares_turisticos_id) REFERENCES lugares_turisticos(id)
)ENGINE=InnoDb;


CREATE TABLE blog(
id              int(11) auto_increment not null,
usuario_id      int(11) not null,
categoria_id    int(11) not null,
titulo          varchar(100) not null,
descripcion     text not null,
imagen          varchar(100) not null,
token           varchar (100) not null,
fecha           date not null,
estado          boolean not null,
CONSTRAINT pk_blog PRIMARY KEY(id),
CONSTRAINT pk_blog_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
CONSTRAINT pk_blog_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id),
CONSTRAINT uq_token UNIQUE(token)
)ENGINE=InnoDb;

CREATE TABLE comentarios_blog(
  id            int(11) auto_increment not null,
  usuario_id    int(11) not null,
  blog_id       int(11) not null,
  comentario    text not null,
  fecha         date not null,
  estado        boolean not null,
  CONSTRAINT pk_comentarios_blog PRIMARY KEY(id),
  CONSTRAINT pk_comentarios_blog_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
  CONSTRAINT pk_coemntario_posts FOREIGN KEY(blog_id) REFERENCES blog(id)
)ENGINE=InnoDb;

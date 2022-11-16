create database cms;

CREATE TABLE seiten (
  id INT not null auto_increment primary KEY,
  titel varchar(255) NOT NULL,
  inhalt text NOT NULL
);

 
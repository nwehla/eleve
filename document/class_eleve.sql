--
-- base de données: 'class_eleve'
--
create database if not exists class_eleve default character set utf8 collate utf8_general_ci;
use class_eleve;
-- --------------------------------------------------------
-- creation des tables



-- table eleve
drop table if exists eleve;
create table eleve (
	ele_id int not null auto_increment primary key,
	ele_nom varchar(20) unique ,
	ele_prenom varchar(10),
	ele_adresse varchar(100),
	ele_codepostal  varchar (20),
    ele_ville varchar (20),
    ele_promotion varchar(20)
)engine=innodb;


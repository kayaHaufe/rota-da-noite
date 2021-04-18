create database db_rotadanoite;

use db_rotadanoite;

create table tb_cliente(
cd_cliente int(5) not null auto_increment,
nm_fantasia varchar(45),
nm_email varchar(60),
cd_senha varchar(45),
nm_responsavel varchar(45),
ic_tipo char(1),
	primary key(cd_cliente)
);

create table tb_contato(
cd_contato int(5) not null auto_increment,
cd_telefone varchar(15),
cd_celular varchar(15),
	primary key (cd_contato),
	constraint fk_contato_cliente foreign key(cd_contato) references tb_cliente(cd_cliente)
 );
 
 alter table tb_contato add cd_cliente int(5);
 
 create table tb_pessoa_fisica(
 cd_pessoa_fisica int(5) not null auto_increment,
 cd_cpf varchar(12),
	primary key(cd_pessoa_fisica)
 );
 
 create table tb_situacao(
 cd_situacao int(5) not null auto_increment,
 nm_situacao varchar(25),
	primary key(cd_situacao)
 );
 
 create table tb_pessoa_juridica(
 cd_pessoa_juridica int(5) not null auto_increment,
 cd_cnpj varchar(18),
 cd_inscricao_estadual varchar(15),
 nm_razao_social varchar(30),
	primary key(cd_pessoa_juridica),
    constraint fk_pessoa_juridica_situacao foreign key(cd_pessoa_juridica) references tb_situacao(cd_situacao)
 );
 
 alter table tb_pessoa_juridica add cd_situacao int(5);
 
 alter table tb_cliente add constraint fk_cliente_pessoa_fisica
 foreign key(cd_cliente) references tb_pessoa_fisica(cd_pessoa_fisica);
 
 alter table tb_cliente add constraint fk_cliente_pessoa_juridica
 foreign key(cd_cliente) references tb_pessoa_juridica(cd_pessoa_juridica);
 
 create table tb_segmento(
 cd_segmento int(5) not null auto_increment,
 nm_segmento varchar(45),
	primary key(cd_segmento)
 );
 
 create table tb_uf(
 cd_uf int(5) not null auto_increment,
 sg_uf char(2),
 nm_uf varchar(45),
	primary key(cd_uf)
 );
 
 create table tb_cidade(
 cd_cidade int(5) not null auto_increment,
 nm_cidade varchar(45),
	primary key(cd_cidade),
    constraint fk_cidade_uf foreign key(cd_cidade) references tb_uf(cd_uf)
 );
 
 alter table tb_cidade add cd_uf int(5);
 
 create table tb_bairro(
 cd_bairro int(5) not null auto_increment,
 nm_bairro varchar(45),
	primary key(cd_bairro),
    constraint fk_bairro_cidade foreign key(cd_bairro) references tb_cidade(cd_cidade)
 );
 
 alter table tb_bairro add cd_cidade int(5);
 
 create table tb_logradouro(
cd_logradouro int(5) not null auto_increment,
cd_cep varchar(9),
cd_numero int(6),
	primary key(cd_logradouro),
    constraint fk_logradouro_bairro foreign key(cd_logradouro) references tb_bairro(cd_bairro)
 );
 
 alter table tb_logradouro add cd_bairro int(5);
 
 create table tb_evento(
 cd_evento int(5) not null auto_increment,
 nm_evento varchar(45),
 dt_evento DATE,
 vl_evento decimal(16,2),
 cd_faixa_etaria int(2),
 ds_evento varchar(30),
 cd_logradouro int(5),
 cd_segmento int(5),
 cd_cliente int(5),
	primary key(cd_evento),
    constraint fk_evento_logradouro foreign key(cd_evento) references tb_logradouro(cd_logradouro),
    constraint fk_evento_segmento foreign key(cd_evento) references tb_segmento(cd_segmento),
    constraint fk_evento_cliente foreign key(cd_evento) references tb_cliente(cd_cliente)
 );

 show tables;
show tables;

insert into tb_contato (cd_telefone, cd_celular)
values (131234567890, 110987654321),
(132233445, 113344556),
(116677889, 117788990),
(138899001, 139900112),
(112345678, 112345234);

select * from tb_contato;

insert into tb_cliente (nm_fantasia, nm_email, cd_senha, nm_responsavel, ic_tipo)
values ('Empresa 2', 'empresa2ltda@gmail.com', 'senhadaempresa2', 'João', 'j'),
('Empresa 3', 'empresa3ltda@gmail.com', 'senhadaempresa3', 'Gabriel', 'j'),
('Empresa 4', 'empresa4ltda@gmail.com', 'senhadaempresa4', 'Pedro', 'p'),
('Empresa 5', 'empresa5ltda@gmail.com', 'senhadaempresa5', 'Leonardo', 'p');

select * from tb_cliente;

insert into tb_pessoa_fisica (cd_cpf)
values (50316561827),
(12345678901),
(22334455667),
(87665544321),
(52345645368);

select * from tb_pessoa_fisica;

insert into tb_pessoa_juridica (cd_cnpj, cd_inscricao_estadual, nm_razao_social)
values ('38.024.655.0001-94', '847.831.699.982', 'Empresa 2'),
('48.964.524/0001-29', '245.893.006.991', 'Empresa 3'),
('92.251.846/0001-12', '844.265.735.150', 'Empresa 4'),
('58.078.679/0001-11', '220.357.077.762', 'Empresa 5');

select * from tb_pessoa_juridica;

insert into tb_situacao (nm_situacao)
values ('ativa'),
('passiva'),
('inapta'),
('suspensa'),
('baixada'),
('nula'),
('ativa');

select * from tb_situacao;

insert into tb_segmento (nm_segmento)
values ('Bar'),
('Restaurante'),
('Tabacaria'),
('Buffet'),
('Pizzaria');

select * from tb_segmento;

insert into tb_uf (sg_uf, nm_uf)
values ('SP', 'São Paulo'),
('SP', 'São Paulo'),
('MT', 'Mato Grosso'),
('MG', 'Minas Gerais'),
('SP', 'São Paulo');

select * from tb_uf;

insert into tb_cidade (nm_cidade)
values ('Praia Grande'),
('Santos'),
('Guarujá'),
('São Vicente'),
('São Paulo');

select * from tb_cidade;

insert into tb_bairro (nm_bairro)
values ('Guilhermina'),
('Ocian'),
('Tupi'),
('Tude Bastos'),
('Balneário Maracanã');

select * from tb_bairro;

insert into tb_logradouro (nm_rua, cd_numero, cd_cep)
values ('João Sampaio', '22', '117020-010'),
('Pedro Álvarez Cabral', '143', '76900032'),
('Avenida Beira Rio', '736', '85705-7598'),
('Sul Alameda', '15', '69905-406'),
('Rua Alaor Garcia Pereira', '9323', '77019-066');

select * from tb_logradouro;

insert into tb_evento (nm_evento, dt_evento, vl_evento, cd_faixa_etaria, ds_evento)
values ('Rodízio de Pizza', '2020-04-22', '15.00', 'Livre', 'Pizzas a cada 2 minutos!!'),
('Dia da bebedeira', '2018-05-11', '10.00', 18, 'Cansado do trabalho? Descontraia'),
('Buffet', '2018-02-02', '1000.00', 1, 'Faça seu orçamento já: (13) 982084062'),
('Festival', '2019-12-16', '60.00', 18, 'Chame todos os seus amigos, AGORA!');

select * from tb_evento;
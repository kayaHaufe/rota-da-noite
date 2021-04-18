/*Mostrar nome do responsável, email, nome do evento, data do evento, faixa etária dos que são para maior de idade*/
select c.nm_responsavel, c.nm_email, e.nm_evento, e.dt_evento, e.cd_faixa_etaria
	from tb_cliente as c
		join tb_evento as e
			on c.cd_cliente = e.cd_cliente
				where cd_faixa_etaria >= 18;
 
/*Mostrar nome do evento, data, valor, rua, número, cep, bairro, nome do segmento que contenham bar*/
select e.nm_evento, e.dt_evento, e.vl_evento, l.nm_rua, l.cd_numero, l.cd_cep, b.nm_bairro, s.nm_segmento
	from tb_evento as e
		join tb_logradouro as l
			on e.cd_logradouro = l.cd_logradouro
		join tb_bairro as b
			on l.cd_bairro = b.cd_bairro
		join tb_segmento as s
			on e.cd_segmento = s.cd_segmento
				where s.nm_segmento = 'bar';
                                
/*Mostrar nome do evento, data, valor, faixa etária e descrição dos eventos na Tupi*/
select e.nm_evento, e.dt_evento, e.vl_evento, e.cd_faixa_etaria, e.ds_evento, b.nm_bairro
	from tb_evento as e
		join tb_logradouro as l
			on l.cd_logradouro = e.cd_logradouro
		join tb_bairro as b
			on l.cd_bairro = b.cd_bairro
				where b.nm_bairro = 'tupi';
                
/*Mostrar nome fantasia, tipo de cliente, telefone, cpf, cnpj, cidade dos que moram na cidade de SP*/
select c.nm_fantasia, c.ic_tipo, ct.cd_telefone, f.cd_cpf, j.cd_cnpj, cd.nm_cidade
	from tb_cliente as c
		join tb_contato as ct
			on ct.cd_cliente = c.cd_cliente
		join tb_pessoa_fisica as f
			on c.cd_pessoa_fisica = f.cd_pessoa_fisica
		join tb_pessoa_juridica as j
			on c.cd_pessoa_juridica = j.cd_pessoa_juridica
		join tb_evento as e
			on c.cd_cliente = e.cd_cliente
		join tb_logradouro as l
			on e.cd_logradouro = l.cd_logradouro
		join tb_bairro as b
			on l.cd_bairro = b.cd_bairro
		join tb_cidade as cd
			on b.cd_cidade = cd.cd_cidade
				where cd.nm_cidade = 'sao paulo';
                
/*View com + de 5 tabelas*/
select c.nm_responsavel, c.nm_email, ct.cd_celular, e.nm_evento, l.cd_cep, b.nm_bairro, cd.nm_cidade, uf.sg_uf
	from tb_cliente as c
		join tb_contato as ct
			on c.cd_cliente = ct.cd_cliente
		join tb_evento as e
			on c.cd_cliente = e.cd_cliente
		join tb_logradouro as l
			on l.cd_logradouro = e.cd_logradouro
		join tb_bairro as b
			on l.cd_bairro = b.cd_bairro
		join tb_cidade as cd
			on b.cd_cidade = cd.cd_cidade
		join tb_uf as uf
			on cd.cd_uf = uf.cd_uf;

/*VIEWS*/
select * from vw_evento_maior;

select * from vw_evento_bar;

select * from vw_evento_tupi;

select * from vw_cliente_sp;

select * from vw_five_views;
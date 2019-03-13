select * from funcionario order by id;

#1-Qual é o número médio de filhos por funcionário da empresa?

select avg(filhos) from funcionario;





#2-Qual é o valor de salários pagos aos funcionários do departamento 4?
select salario from funcionario where departamento = 4;



#3-3Quantos funcionários estão no departamento 5?
select count(*) from funcionario where departamento = 5;





#4-Quantos funcionários no departamento 5 ganham mais de R$ 2.000,00?
select count(*) from funcionario where departamento = 5 and salario > 2000;





#5-Quantos funcionários do departamento 4 ganham entre R$ 1.000,00 e R$ 2.000,00?
select count(*) from funcionario where departamento = 4 and salario
between 1000 and 2000;






#6-Quantos funcionários da empresa possuem o sobrenome Santos?
select count(*) from funcionario where nome like '%Santos';




#7-Listar os nomes de todos os funcionários admitidos no dia 10 de qualquer mês.
select nome from funcionario where day(admissao) = 10; 




#8-Listar os nomes e as datas de admissão de todos os funcionários admitidos entre o dia 5 e o dia 10 de qualquer mês ordenado 
#de forma ascendente por data.
select nome, admissao from funcionario where day(admissao) between 5 and 10 order by month(admissao) asc;







#9-Listar os nomes e os departamentos de todos os funcionários em letras minúsculas que pertençam aos departamentos 4 e 5.
select upper(nome) from funcionario where departamento = 4 and departamento = 5;





#10-Quantos funcionários foram admitidos no mês de julho?
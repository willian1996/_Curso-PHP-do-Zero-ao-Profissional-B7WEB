create database empresa;

use empresa;
drop table empregado_projeto;
drop table projeto;
drop table empregado;



create table empregado(
id int unsigned not null primary key auto_increment,
matricula int unique,
nome varchar(50) not null,
endereco varchar(200) not null,
salario decimal(6,2),
sexo enum('F','M'),
data_de_nascimento date,

supervisor_id int unsigned not null ,

index fk_empregado_supervisor_idx (supervisor_id asc),

constraint fk_empregado_supervisor
foreign key (supervisor_id)
references empregado(id)

);

#------------------------------------------------------

create table projeto(
id int unsigned not null primary key, 
nome varchar(50) not null,
localidade varchar(50) 
);

#------------------------------------------------------

create table empregado_projeto(
empregado_id int unsigned not null,
projeto_id int unsigned not null,

primary key(empregado_id, projeto_id),

index fk_empregado_projeto_empregado_idx (empregado_id ASC),
index fk_projeto_empregato_projeto_idx (projeto_id ASC),

constraint fk_empregado_projeto_empregado
foreign key (empregado_id)
references empregado(id),

constraint fk_projeto_empregato_projeto
foreign key (projeto_id)
references projeto(id)
);

#----------------------------------------------------------
alter table empregado ADD altura decimal(3,2);

describe empregado;

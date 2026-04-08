create table
    enderecos (
        id serial primary key,
        rua varchar(100) not null,
        numero varchar(15) not null,
        complemento varchar(15),
        bairro varchar(30) not null,
        cidade varchar(30) not null,
        estado char(2) not null,
        cep char(8) not null
    );

create table
    usuarios (
        id serial primary key,
        nome varchar(50) not null,
        sobrenome varchar(150) not null,
        email varchar(100) not null unique,
        cpf varchar(11) not null unique,
        senha text not null,
        id_endereco int references enderecos (id) on delete set null
    );
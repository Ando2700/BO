create table users(
    id serial primary key not null,
    name varchar(50),
    email varchar(50),
    email_verified_at timestamp,
    password varchar(50),
    rememberToken varchar(255),
    updated_at timestamp,
    created_at timestamp
)

create table posts(
    id serial primary key not null,
    titre varchar(50),
    description text,
    detail text,
    updated_at timestamp,
    created_at timestamp
);

create table images(
    id serial primary key not null,
    post_id integer,
    path varchar(100),
    foreign key (post_id) references posts(id) on delete cascade,
    updated_at timestamp,
    created_at timestamp
);
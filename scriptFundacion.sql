 CREATE TABLE afiliados(
    id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
	nombre varchar(200) not null,
	correo text not null,
    created_at timestamp NULL DEFAULT NULL,
    updated_at timestamp NULL DEFAULT NULL,
    PRIMARY KEY (id)
);

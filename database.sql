/**
    COMANDOS SQL NECESARIOS PARA LA CREACION DE LA BASE DE DATOS (ESTRUCTURA SOLAMENTE)
 */


CREATE TABLE `nutrik`.`user` (
        `id_user` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
        `id_gender` INT(10) UNSIGNED NOT NULL,
        `age` INT(10),
        `firstname` VARCHAR(32) NOT NULL,
        `lastname` VARCHAR(32) NOT NULL,
        `email` VARCHAR(128) NOT NULL,
        `password` VARCHAR(32) NOT NULL,
        `last_password_gen` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        `birthday` DATE, `sms` TINYINT(1) DEFAULT 1,
        `active` TINYINT(1) DEFAULT 1,
        `deleted` TINYINT(1) DEFAULT 0,
        `date_add` DATETIME,
        `date_upd` DATETIME,
    PRIMARY KEY (`id_user`)
);

CREATE TABLE `nutrik`.`category` (
        `id_category` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
        `name` TEXT,
        `title_seo` TEXT,
        `description_short` TEXT,
        `description` TEXT,
        `link_rewrite` VARCHAR(128) NOT NULL,
        `date_add` DATETIME,
        `date_upd` DATETIME,
    PRIMARY KEY (`id_category`)
);

CREATE TABLE `nutrik`.`tag` (
        `id_tag` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
        `name` TEXT,
        `description` TEXT,
        `visible` TINYINT(1) NOT NULL DEFAULT 1,
    PRIMARY KEY (`id_tag`)
);

CREATE TABLE `nutrik`.`entry` (
        `id_entry` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
        `id_user` INT(10) UNSIGNED NOT NULL,
        `id_category` INT(10) UNSIGNED NOT NULL,
        `title` TEXT NOT NULL,
        `description` TEXT NOT NULL,
        `content` TEXT NOT NULL,
        `active` TINYINT(1) NOT NULL DEFAULT 1,
        `date_add` DATETIME,
        `date_upd` DATETIME,
    PRIMARY KEY (`id_entry`)
);

ALTER TABLE `nutrik`.`entry`
    ADD CONSTRAINT `fk_entry_user` FOREIGN KEY (`id_user`) REFERENCES `nutrik`.`user`(`id_user`),
    ADD CONSTRAINT `fk_entry_category` FOREIGN KEY (`id_category`) REFERENCES `nutrik`.`category`(`id_category`);


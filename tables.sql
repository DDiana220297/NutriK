CREATE TABLE `user` (
  `id_user` int PRIMARY KEY AUTO_INCREMENT,
  `id_gender` varchar(255),
  `age` int,
  `firstname` varchar(255),
  `lastname` varchar(255),
  `email` varchar(255),
  `password` varchar(255),
  `role` varchar(255),
  `last_password_gen` datetime,
  `birthday` date,
  `sms` tinyint,
  `active` tinyint,
  `collegiate_number` int,
  `studies` varchar(255),
  `description` text,
  `deleted` tinyint,
  `date_add` datetime,
  `date_upd` datetime
);

CREATE TABLE `tag` (
  `id_tag` int PRIMARY KEY AUTO_INCREMENT,
  `name` text,
  `description` text,
  `visible` tinyint
);

CREATE TABLE `logs` (
  `id_log` int PRIMARY KEY AUTO_INCREMENT,
  `id_user` int,
  `source` varchar(255),
  `context` text,
  `date_add` datetime
);

CREATE TABLE `meal` (
  `id_meal` int,
  `id_plan` int,
  `meal_sort` varchar(255),
  `day` varchar(255),
  `hour` varchar(255),
  `meal` text,
  `meal_shopping_list` text,
  `meal_notes` text,
  `date_add` datetime
);

CREATE TABLE `weekly_plan` (
  `id_plan` int PRIMARY KEY AUTO_INCREMENT,
  `id_user` int,
  `id_tag` int,
  `title` varchar(255),
  `description` text,
  `date_add` datetime,
  `date_upd` datetime
);

CREATE TABLE `entry` (
  `id_entry` int,
  `id_user` int,
  `id_category` int,
  `title` text,
  `description` text,
  `image` text,
  `content` text,
  `active` tinyint,
  `date_add` datetime,
  `date_upd` datetime
);

CREATE TABLE `event` (
  `id_event` int,
  `id_user` int,
  `id_category` int,
  `id_tag` int,
  `title` varchar(255),
  `description` text,
  `event_link` varchar(255),
  `date` datetime,
  `frecuency` varchar(255),
  `duration` int,
  `date_add` datetime,
  `date_upd` datetime
);

CREATE TABLE `recipes` (
  `id_recipe` int,
  `id_user` int,
  `name` varchar(255),
  `description` text,
  `image` text,
  `date_add` datetime,
  `date_upd` datetime
);

CREATE TABLE `workout` (
  `id_workout` int,
  `id_plan` int,
  `workout_sort` varchar(255),
  `day` varchar(255),
  `hour` time,
  `workout` text,
  `workout_exercises` text,
  `workout_notes` text,
  `date_add` datetime
);

CREATE TABLE `category` (
  `id_category` int,
  `name` text,
  `title_seo` text,
  `description_short` text,
  `description` text,
  `link_rewrite` varchar(255),
  `date_add` datetime,
  `date_upd` datetime
);

CREATE TABLE `exercise` (
  `id_exercise` int,
  `title` varchar(255),
  `description` text,
  `muscles` text,
  `date_add` datetime
);

CREATE TABLE `appointment` (
  `id_appointment` int,
  `id_nutritionist` int,
  `id_customer` int,
  `date` datetime,
  `duration` int,
  `description` text,
  `appointment_type` varchar(255),
  `appointment_link` varchar(255),
  `date_add` datetime,
  `date_upd` datetime
);

CREATE TABLE `diary_pages` (
  `id_diary_page` int,
  `id_user` int,
  `date` date,
  `tasks` text,
  `events` text,
  `memos_and_notes` text,
  `date_add` datetime,
  `date_upd` datetime
);

CREATE TABLE `ingredients` (
  `id_ingredient` int,
  `name` varchar(255),
  `carbohydrates` float,
  `fats` float,
  `protein` float,
  `date_add` datetime,
  `date_upd` datetime
);

CREATE TABLE `customer_metrics` (
  `id_customer_metrics` int,
  `id_customer` int,
  `weight` float,
  `height` float,
  `age` int,
  `fat_percentage` float,
  `muscle_percentage` float,
  `liquid_percentage` float,
  `movement` varchar(255),
  `goals` text,
  `date_add` datetime
);

CREATE TABLE `ingredients_recipes` (
  `id_ingredient_recipe` int,
  `id_ingredient` int,
  `id_recipe` int,
  `date_add` datetime
);

CREATE TABLE `nutritionist_receipt` (
  `id_receipt` int,
  `id_user` int,
  `id_customer` int,
  `id_transaction` int,
  `id_invoice` int,
  `amount` float,
  `status` varchar(255),
  `description` text,
  `date_add` datetime,
  `date_upd` datetime
);

CREATE TABLE `customer_nutritionist` (
  `id_customer_nutritionist` int,
  `id_nutritionist` int,
  `id_customer` int,
  `date_add` datetime
);

CREATE TABLE `nutritionist_customer_card` (
  `id_card` int,
  `id_user` int,
  `name` varchar(255),
  `nc_digits` varchar(255),
  `nc_last_digits` int,
  `nc_exp_month` int,
  `nc_exp_year` int,
  `active` tinyint,
  `brand` varchar(255),
  `date_add` datetime,
  `date_upd` datetime
);

ALTER TABLE `logs` ADD FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

ALTER TABLE `meal` ADD FOREIGN KEY (`id_plan`) REFERENCES `weekly_plan` (`id_plan`);

ALTER TABLE `weekly_plan` ADD FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

ALTER TABLE `weekly_plan` ADD FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`);

ALTER TABLE `entry` ADD FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

ALTER TABLE `entry` ADD FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);

ALTER TABLE `event` ADD FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

ALTER TABLE `event` ADD FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);

ALTER TABLE `event` ADD FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`);

ALTER TABLE `recipes` ADD FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

ALTER TABLE `workout` ADD FOREIGN KEY (`id_plan`) REFERENCES `weekly_plan` (`id_plan`);

ALTER TABLE `workout` ADD FOREIGN KEY (`workout_exercises`) REFERENCES `exercise` (`id_exercise`);

ALTER TABLE `appointment` ADD FOREIGN KEY (`id_nutritionist`) REFERENCES `user` (`id_user`);

ALTER TABLE `appointment` ADD FOREIGN KEY (`id_customer`) REFERENCES `user` (`id_user`);

ALTER TABLE `diary_pages` ADD FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

ALTER TABLE `customer_metrics` ADD FOREIGN KEY (`id_customer`) REFERENCES `user` (`id_user`);

ALTER TABLE `ingredients_recipes` ADD FOREIGN KEY (`id_ingredient`) REFERENCES `ingredients` (`id_ingredient`);

ALTER TABLE `ingredients_recipes` ADD FOREIGN KEY (`id_recipe`) REFERENCES `recipes` (`id_recipe`);

ALTER TABLE `nutritionist_receipt` ADD FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

ALTER TABLE `nutritionist_receipt` ADD FOREIGN KEY (`id_customer`) REFERENCES `user` (`id_user`);

ALTER TABLE `customer_nutritionist` ADD FOREIGN KEY (`id_nutritionist`) REFERENCES `user` (`id_user`);

ALTER TABLE `customer_nutritionist` ADD FOREIGN KEY (`id_customer`) REFERENCES `user` (`id_user`);

ALTER TABLE `nutritionist_customer_card` ADD FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

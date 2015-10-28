CREATE TABLE country (
  country_id SERIAL,
  iso        CHAR(2),
  name       VARCHAR(255) NOT NULL
);

CREATE TABLE gender (
  gender_id SERIAL,
  name      VARCHAR(255) NOT NULL
);

CREATE TABLE author (
  author_id        SERIAL,
  name             VARCHAR(255) NOT NULL,
  begin_date_year  SMALLINT,
  begin_date_month SMALLINT,
  begin_date_day   SMALLINT,
  end_date_year    SMALLINT,
  end_date_month   SMALLINT,
  end_date_day     SMALLINT,
  country_id       BIGINT UNSIGNED,
  gender_id        BIGINT UNSIGNED,
  disambiguation   VARCHAR(255) NOT NULL DEFAULT '',
  FOREIGN KEY (country_id) REFERENCES country (country_id),
  FOREIGN KEY (gender_id) REFERENCES gender (gender_id)
);

CREATE TABLE film (
  film_id        SERIAL,
  name           VARCHAR(255) NOT NULL,
  year           SMALLINT,
  country_id     BIGINT UNSIGNED,
  disambiguation VARCHAR(255) NOT NULL DEFAULT '',
  FOREIGN KEY (country_id) REFERENCES country (country_id)
);

CREATE TABLE genre (
  genre_id SERIAL,
  name     VARCHAR(255) NOT NULL
);

CREATE TABLE link_type (
  type_id SERIAL,
  name    VARCHAR(255) NOT NULL
);

CREATE TABLE l_author_film (
  id        SERIAL,
  author_id BIGINT UNSIGNED,
  film_id   BIGINT UNSIGNED,
  type_id   BIGINT UNSIGNED,
  FOREIGN KEY (author_id) REFERENCES author (author_id),
  FOREIGN KEY (film_id) REFERENCES film (film_id),
  FOREIGN KEY (type_id) REFERENCES link_type (type_id)
);

CREATE TABLE l_film_genre (
  id       SERIAL,
  genre_id BIGINT UNSIGNED,
  film_id  BIGINT UNSIGNED,
  FOREIGN KEY (genre_id) REFERENCES genre (genre_id),
  FOREIGN KEY (film_id) REFERENCES film (film_id)
);

INSERT INTO country VALUES (1, 'EE', 'Estonia'), (2, 'LV', 'Latvia'), (3, 'LT', 'Lithuania'), (4, 'SU', 'Soviet Union');
INSERT INTO gender VALUES (1, 'Male'), (2, 'Female'), (3, 'Other');
INSERT INTO film VALUES (1, 'Viimne reliikvia', 1969, 4, '');
INSERT INTO author VALUES (1, 'Grigori Kromanov', 1926, 3, 8, 1984, 7, 18, 1, 1, '');
INSERT INTO genre VALUES (1, 'Adventure');
INSERT INTO link_type VALUES (1, 'Director');
INSERT INTO l_author_film VALUES (1, 1, 1, 1);
INSERT INTO l_film_genre VALUES (1, 1, 1);
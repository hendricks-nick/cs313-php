 
CREATE TABLE note (
    note_id serial   NOT NULL,
    contact_id int   NOT NULL,
    title varchar(120)   NOT NULL,
    details varchar(800)   NULL,
    CONSTRAINT pk_note PRIMARY KEY (
        note_id
     )
);

CREATE TABLE contact (
    contact_id serial   NOT NULL,
    title varchar(30)   NULL,
    company varchar(50)   NULL,
    first_name varchar(30)   NULL,
    middle_name varchar(30)   NULL,
    last_name varchar(30)   NULL,
    phone varchar(15)   NULL,
    email varchar(50)   NULL,
    fup_date date   NULL,
    address_id int   NOT NULL,
    social_id int   NOT NULL,
    linked_id int   NOT NULL,
    CONSTRAINT pk_contact PRIMARY KEY (
        contact_id
     )
);


CREATE TABLE address (
    address_id serial   NOT NULL,
    contact_id int   NOT NULL,
    street varchar(50)   NULL,
    city varchar(30)   NULL,
    state varchar(30)   NULL,
    zip varchar(12)   NULL,
    country varchar(30)   NULL,
    CONSTRAINT pk_address PRIMARY KEY (
        address_id
     )
);

CREATE TABLE social (
    social_id serial   NOT NULL,
    contact_id int   NOT NULL,
    facebook varchar(100)   NULL,
    twitter varchar(100)   NULL,
    instagram varchar(100)   NULL,
    youtube varchar(100)   NULL,
    linkedin varchar(100)   NULL,
    CONSTRAINT pk_social PRIMARY KEY (
        social_id
     )
);

CREATE TABLE linkedcontact (
    linked_id serial   NOT NULL,
    contact_id int   NOT NULL,
    relationship varchar(30)   NOT NULL,
    CONSTRAINT pk_linkedcontact PRIMARY KEY (
        linked_id
     )
);

ALTER TABLE note ADD CONSTRAINT fk_note_contact_id FOREIGN KEY(contact_id)
REFERENCES contact (contact_id);


ALTER TABLE contact ADD CONSTRAINT fk_contact_address_id FOREIGN KEY(address_id)
REFERENCES address (address_id);

ALTER TABLE contact ADD CONSTRAINT fk_contact_social_id FOREIGN KEY(social_id)
REFERENCES social (social_id);

ALTER TABLE contact ADD CONSTRAINT fk_contact_linked_id FOREIGN KEY(linked_id)
REFERENCES linkedcontact (linked_id);

ALTER TABLE address ADD CONSTRAINT fk_address_contact_id FOREIGN KEY(contact_id)
REFERENCES contact (contact_id);

ALTER TABLE social ADD CONSTRAINT fk_social_contact_id FOREIGN KEY(contact_id)
REFERENCES contact (contact_id);

ALTER TABLE linkedcontact ADD CONSTRAINT fk_linkedcontact_contact_id FOREIGN KEY(contact_id)
REFERENCES contact (contact_id);


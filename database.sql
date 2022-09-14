CREATE TABLE students (
    cpf TEXT PRIMARY KEY,
    name TEXT,
    email TEXT
);

CREATE TABLE phones (
    ddd TEXT,
    number TEXT,
    cpf_student TEXT,
    PRIMARY KEY (ddd, number),
    FOREING KEY(cpf_student) REFERENCES students (cpf) 
);

CREATE TABLE indications (
    cpf_indicate TEXT,
    cpf_indicated TEXT,
    date_indicate TEXT,
    PRIMARY KEY (cpf_indicate, cpf_indicated),
    FOREING KEY (cpf_indicated) REFERENCES students(cpf)
);
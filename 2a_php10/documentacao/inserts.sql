INSERT INTO usuario (email, senha) VALUES ("teste@teste.com", "123321");

INSERT INTO paciente (nome, cpf, telefone) VALUES ("PacienteA", "111.222.333-58", "987654321");
INSERT INTO paciente (nome, cpf, telefone) VALUES ("PacienteB", "222.555.333-26", "932124763");
INSERT INTO paciente (nome, cpf, telefone) VALUES ("PacienteC", "547.265.489-71", "953282733");

INSERT INTO medico (nome, crm, area) VALUES ("MedicoA", "66768", "Clínica Geral");
INSERT INTO medico (nome, crm, area) VALUES ("MedicoB", "4554", "Pediatria");
INSERT INTO medico (nome, crm, area) VALUES ("MedicoC", "87454", "Ortopedia");

INSERT INTO consulta (data, local, paciente_idpaciente, medico_idmedico) VALUES ("2024-12-31", "Sala X", 2, 1);
INSERT INTO consulta (data, local, paciente_idpaciente, medico_idmedico) VALUES ("2024-11-25", "Sala Y", 1, 3);
INSERT INTO consulta (data, local, paciente_idpaciente, medico_idmedico) VALUES ("2024-08-29", "Sala Y", 1, 2);
INSERT INTO consulta (data, local, paciente_idpaciente, medico_idmedico) VALUES ("2024-05-17", "Sala W", 3, 1);
%Crear estrucutra para definir la estrucutra de estudiante que esten cursando materias con sus respectivos
%creditos con las materias , 3 materias, 3 creditos, consultar las materias por estudiante, los estudiantes
%por materia y los creditos por estudiantes.
%definir materias despues la cursando

% Definición de materias con sus respectivos créditos
materia(matematicas, 3).
materia(fisica, 4).
materia(quimica, 3).

% Definición de estudiantes
estudiante(juan).
estudiante(ana).
estudiante(alicia).

% Asignación de materias a estudiantes con los créditos correspondientes
% estudiante(Identificador, Materia, Credito)
cursando(juan, matematicas, 3).
cursando(juan, fisica, 4).
cursando(ana, matematicas, 3).
cursando(ana, quimica, 3).
cursando(alicia, fisica, 4).
cursando(alicia, quimica, 3).
    
% Materias cursadas por un estudiante
materias_por_estudiante(Estudiante, Materia) :-
    cursando(Estudiante, Materia, _).


% Estudiantes que cursan una materia
estudiantes_por_materia(Materia, Estudiante) :-
    cursando(Estudiante, Materia, _).


% Créditos totales de un estudiante
creditos_por_estudiante(Estudiante, TotalCreditos) :-
    findall(Credito, cursando(Estudiante, _, Credito), Creditos),
    sum_list(Creditos, TotalCreditos).




%actividad 1.
par(X) :- 
    X mod 2 =:= 0.

%actividad 2.
tiene(juan, bicicleta).
tiene(juan, coche).
tiene(ana, coche).
tiene(pedro, patineta).

%actividad 3.
cuadrado(X,R):-
    R is X*X.

%actividad 4.
media(A,B,M) :-
    M is (A+B)/2.

%actividad 5.
factorial(0,1).
factorial(N,R):-
    N1 is N - 1,
    factorial(N1,R1),
    R is N * R1.

%activida 6.
fibonacci(0,1).
fibonacci(1,1).
fibonacci(N,R):-
    N1 is N-1,
    N2 is N-2,
    fibonacci(N1,R1),
    fibonacci(N2,R2),
    R is R1 + R2.

%actividad7.
mcd(X,0,X).
mcd(X,Y,M):-
    X1 is X mod Y,
    mcd(Y,X1,M).

%actividad 8.
population('Ecuador',18000000).
population('Colombia',52000000).
area('Ecuador',280000).
area('Colombia',1142000).

densidad(Pais,D):-
    population(Pais,P),
    area(Pais,A),
    D is P / A.




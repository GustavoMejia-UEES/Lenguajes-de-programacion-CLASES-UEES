population('Ecuador',18000000).
population('Colombia',52000000).
area('Ecuador',280000).
area('Colombia',1142000).

densidad(Pais,D):-
    population(Pais,P),
    area(Pais,A),
    D is P / A.




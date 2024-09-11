mcd(X,0,X).
mcd(X,Y,M):-
    X1 is X mod Y,
    mcd(Y,X1,M).


% Definicion de los tiempos verbales.
tiempo(presente).
tiempo(pasado).
tiempo(futuro).

% Definicion de las personas gramaticales
persona(primera).
persona(segunda).
persona(tercera).

% Definicion de los numeros gramaticales
numero(singular).
numero(plural).

% Definicion de la conjugacion del verbo "to be"
ser(presente, primera, singular, "am").
ser(presente, segunda, singular, "are").
ser(presente, tercera, singular, "is").
ser(presente, primera, plural, "are").
ser(presente, segunda, plural, "are").
ser(presente, tercera, plural, "are").

ser(pasado, primera, singular, "was").
ser(pasado, segunda, singular, "were").
ser(pasado, tercera, singular, "was").
ser(pasado, primera, plural, "were").
ser(pasado, segunda, plural, "were").
ser(pasado, tercera, plural, "were").

ser(futuro, primera, singular, "will be").
ser(futuro, segunda, singular, "will be").
ser(futuro, tercera, singular, "will be").
ser(futuro, primera, plural, "will be").
ser(futuro, segunda, plural, "will be").
ser(futuro, tercera, plural, "will be").

% Definicion de la conjugacion del verbo "to play"
play(presente, primera, singular, "play").
play(presente, segunda, singular, "play").
play(presente, tercera, singular, "plays").
play(presente, primera, plural, "play").
play(presente, segunda, plural, "play").
play(presente, tercera, plural, "play").

play(pasado, primera, singular, "played").
play(pasado, segunda, singular, "played").
play(pasado, tercera, singular, "played").
play(pasado, primera, plural, "played").
play(pasado, segunda, plural, "played").
play(pasado, tercera, plural, "played").

play(futuro, primera, singular, "will play").
play(futuro, segunda, singular, "will play").
play(futuro, tercera, singular, "will play").
play(futuro, primera, plural, "will play").
play(futuro, segunda, plural, "will play").
play(futuro, tercera, plural, "will play").

% Definicion de la conjugacion del verbo "to have"
tener(presente, primera, singular, "have").
tener(presente, segunda, singular, "have").
tener(presente, tercera, singular, "has").
tener(presente, primera, plural, "have").
tener(presente, segunda, plural, "have").
tener(presente, tercera, plural, "have").

tener(pasado, primera, singular, "had").
tener(pasado, segunda, singular, "had").
tener(pasado, tercera, singular, "had").
tener(pasado, primera, plural, "had").
tener(pasado, segunda, plural, "had").
tener(pasado, tercera, plural, "had").

tener(futuro, primera, singular, "will have").
tener(futuro, segunda, singular, "will have").
tener(futuro, tercera, singular, "will have").
tener(futuro, primera, plural, "will have").
tener(futuro, segunda, plural, "will have").
tener(futuro, tercera, plural, "will have").


conjugar_verbo(Verbo, Tiempo, Persona, Numero, Conjugacion):-
    tiempo(Tiempo),
    persona(Persona),
    numero(Numero),
    (
        Verbo = "to be" -> ser(Tiempo, Persona, Numero, R), Conjugacion = R ;
        Verbo = "to play" -> play(Tiempo, Persona, Numero, R), Conjugacion = R  ;
        Verbo = "to have" -> tener(Tiempo, Persona, Numero, R), Conjugacion = R ;
        Conjugacion = Verbo
    ).


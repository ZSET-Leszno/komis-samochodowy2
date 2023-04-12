ZAPYTANIE DO SQL'A

SELECT marki.Nazwa_marki, modele.Nazwa_modelu FROM samochody JOIN modele ON samochody.Id_model = modele.Id JOIN marki ON modele.Id_marki = marki.Id;

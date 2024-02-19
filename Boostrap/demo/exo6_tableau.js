let filmsNanards = [{titre:"Kung fu Panda",annee:2002, genre:"SF"}, {titre:"Bad Boys",annee:2003,genre:"Anime"}, {titre:"One love",annee:2024, genre:"Romance"}, {titre:"Army Jungle Soldiers",annee:2005,genre:"Policier"},{titre:"Vice versa 2",annee:2003,genre:"Romance"}];
console.log(filmsNanards);
filmsNanards.forEach(film => {
console.log(`${film.titre} (${film.annee})`)
   });
console.log(filmsNanards);
console.table(filmsNanards);
//ici j'ai filtré par le genre et afficher les films qui ont le genre Romance.
let genreRechercher = "Romance"
let filmsGenre = filmsNanards.filter(function(film){return film.genre == genreRechercher})
console.table(filmsGenre);

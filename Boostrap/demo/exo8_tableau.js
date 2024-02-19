let filmsNanards = [{ titre: "Kung fu Panda", annee: 2002, genre: "SF", note:7 }, { titre: "Bad Boys", annee: 2003,
 genre: "Anime", note:8 }, { titre: "One love", annee: 2024, genre: "Romance" , note:6}, { titre: "Army Jungle Soldiers",
  annee: 2005, genre: "Policier" , note:9}, { titre: "Vice versa 2", annee: 2003, genre: "Romance" , note:8}];
  
let somme =0;
let notes = [];
filmsNanards.forEach(film => {
    console.log(film);
    notes.push(film.note)
    somme += film.note;
});
console.log(notes);
console.log(`la moyenne des notes est ${somme/filmsNanards.length}`);
//après avoir extraire les différentes notes, je fais la somme et calculer la moyenne de toutes les notes
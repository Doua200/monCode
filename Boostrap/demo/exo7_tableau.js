let filmsNanards = [{ titre: "Kung fu Panda", annee: 2002, genre: "SF" }, { titre: "Bad Boys", annee: 2003, genre: "Anime" }, { titre: "One love", annee: 2024, genre: "Romance" }, { titre: "Army Jungle Soldiers", annee: 2005, genre: "Policier" }, { titre: "Vice versa 2", annee: 2003, genre: "Romance" }];

filmsNanards.sort((filmA, filmB) => {
   if(filmA.genre < filmB.genre) return -1; //Le contraire du commmentaire en dessous
   if (filmA.genre > filmB.genre) return 1; //affiche le premier filmA si l'initial de son genre vient avant de celui de filmB
   return 0; // pour tout autre cas affiche 0
}); 
console.table(filmsNanards);    
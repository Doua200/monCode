let filmsNanards = [{ titre: "Kung fu Panda", annee: 2002, genre: "SF", note:7 }, { titre: "Bad Boys", annee: 2003,
 genre: "Anime", note:8 }, { titre: "One love", annee: 2024, genre: "Romance" , note:6}, { titre: "Army Jungle Soldiers",
  annee: 2005, genre: "Policier" , note:9}, { titre: "Vice versa 2", annee: 2003, genre: "Romance" , note:8}];
  

  filmsNanards.sort((filmA, filmB) => {
    if(filmA.note < filmB.note) return -1; 
    if (filmA.note > filmB.note) return 1; 
    return 0;
 }); 
 console.table(filmsNanards);    
 console.log(`Le titre du meilleur film est ${filmsNanards.titre}`);
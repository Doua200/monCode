function egalite(pTableau) {
    
    
for(let i=0; i< pTableau.length/2;i++) {
    if (pTableau[i] !== pTableau[pTableau.length - 1 - i]){
        return false;
    }
}
return true;
        
}


const tableau = ['k','a','y','a','k']; 
console.log(egalite(tableau));







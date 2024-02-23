<?php declare(strict_types=1);
/**
 * FICHIER A COMPLETER DANS LES ESPACES INDIQUES (ET PAS AILLEURS ! ! !)
 */
 
function routingPage(Array $pGetRecieved):String
{
 
 if (isset($pGetRecieved['page'])) {
   switch ($pGetRecieved['page']) {
      case 'list':
                return 'list';
      case 'details':
                return 'details';
      case 'default':
                  return 'home';
            // Ajoutez d'autres cas pour chaque route supplémentaire
            // Si vous souhaitez définir une valeur par défaut pour une route inconnue, vous pouvez le faire dans le cas par défaut (default)
            // Par exemple, si une route inconnue doit renvoyer 'home':
            // default:
            //     return 'home';
        }
    }
    // Si la clé 'page' n'est pas définie ou si elle ne correspond à aucun cas dans le switch, retournez la valeur par défaut ('home' dans ce cas)
    return 'home';
}

if (isset($pGetRecieved['page']) && $pGetRecieved['page'] === 'list') {
   return 'list';
} else {
   return 'home';
}


function getParamSearch($pGetRecieved)
{
 
    // Vérifier si la clé 'nom' existe dans le tableau $pGetRecieved
   if (isset($pGetRecieved['nom'])) {
       // Si oui, retourner la valeur associée à la clé 'nom'
       return strtoupper($pGetRecieved['nom']);
   } else {
       // Si non, retourner une chaîne vide
       return '';
   }
}

function getParamDetail($pGetRecieved)
{
       if (isset($pGetRecieved['id'])) {
       return $pGetRecieved['id'];
    } else {
              return '';
    }
}


function showPage(String $pTemplate,$data = [])
{
    /**
 * NE PAS TOUCHER LE CODE ICI
 */
    if (!file_exists($pTemplate))
        throw new ParseError('file not found');
    ob_start();
    include $pTemplate;
    return  ob_get_clean();
        /**
     * NE PAS TOUCHER LE CODE ICI
     */
}

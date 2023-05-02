<?php 
function get($pdo){
    $sql = 'SELECT text, name, id FROM texte'; 
    $statement_requete = $pdo->query($sql); 
    $statement_result = $statement_requete->fetchAll(PDO::FETCH_ASSOC); 
    return $statement_result;
}

function get_element_by_name($statement_result, $name) {
    foreach ($statement_result as $element) {
      if ($element['name'] === $name) {
        return $element['text'];
      }
    }
    return null;
  }
?>
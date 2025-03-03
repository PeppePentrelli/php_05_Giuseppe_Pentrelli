<?php 

require ("class.php");

class Post  {
    
    public $Titolo;
    public $Categoria;
    public $Tag;
    
    public function __construct($titolo,Category $categoria,$tag) { 
        
        $this->Titolo = $titolo;
        $this->Categoria = $categoria;
        $this->Tag = $tag;
    }
    
    
    public function visualizzaArticolo() { 
        
        echo "Titolo: " . $this->Titolo . "\n" . $this->Categoria->getMyCategory() . $this->Tag . "\n";
        
    }
    
}


// Post di attualità

$postAttualita = new Post("Scoperta rivoluzionaria nel campo dell'energia rinnovabile.", new Attualita(), "#Attualita,#Scienza,#Tecnologia") ;
$postAttualita->visualizzaArticolo();

$postAttualita2 = new Post("Svolta storica nell'intelligenza artificiale.", new Attualita(), "#Attualita,#Intelligenza Artificiale,#Tecnologia") ;
$postAttualita2->visualizzaArticolo();


// Post di Sport 

$postSport = new Post(" Record mondiale infranto", new Sport(), "#Sport,#GuinnessWorldRecords,#Champions") ;
$postSport->visualizzaArticolo();

$postSport2 = new Post("Gara di Ballo con Twist Finale.", new Sport(), "#Sport,#Danza,#JohnTravolta, #PulpFiction") ;
$postSport2->visualizzaArticolo();

// Post di Gossip 

$postGossip = new Post("Scandalo a Hollywood", new Gossip(), "#Gossip,#Vip,#Celebrità") ;
$postGossip->visualizzaArticolo();

$postGossip2 = new Post("Il re del pop lancia una linea di cosmetici rivoluzionaria", new Gossip(), "#Gossip,#HairCare,#SkinCare") ;
$postGossip2->visualizzaArticolo();


// Post di Storia 

$postStoria = new Post("svelato il manoscritto perduto di Leonardo da Vinci", new Storia(),"#Storia, #Rinascimento, #manoscritto,") ;
$postStoria->visualizzaArticolo();

$postStoria2 = new Post("Ritrovato il diario segreto di Cleopatra", new Storia(), "#Storia,#Archeologia,#AnticoEgitto") ;
$postStoria2->visualizzaArticolo();
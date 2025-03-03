<?php 

// Classe Genitore

abstract class Category { 
    
    public abstract function getMyCategory();
    
}

//!  Classi Figlie

class Attualita extends Category{ 
    
    public function getMyCategory() { 
        
        return "Categoria: Attualità\n";
        
    }
    
}

class Sport extends Category{ 
    
    public function getMyCategory() { 
        
        return "Categoria: Sport\n";
        
    }
    
}

class Gossip extends Category{ 
    
    public function getMyCategory() { 
        
        return "Categoria: Gossip\n";
        
    }
    
}

class Storia extends Category{ 
    
    public function getMyCategory() { 
        
        return "Categoria: Storia\n";
        
    }
    
}

// ! Attualita
// $attualita = new Attualita();
// $attualita->getMyCategory();
// echo $attualita->getMyCategory();

// ! Sport
// $sport = new Sport();
// $sport->getMyCategory();
// echo $sport->getMyCategory();

// ! Gossip
// $gossip = new Gossip();
// $gossip->getMyCategory();
// echo $gossip->getMyCategory();

// ! Storia
// $storia = new Storia();
// $storia->getMyCategory();
// echo $storia->getMyCategory();

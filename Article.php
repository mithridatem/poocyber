<?php
class Article{
    //attributs 
    private ?int $id_article;
    private ?string $titre_article;
    private ?string $contenu_article;
    private Utilisateur $utilisateur;
    private array $categories;

    //constructeur
    public function __construct(){
        $this->utilisateur = new Utilisateur();
        $this->categories = [];
    }

    //getters and setters
    public function getId():?int{
        return $this->id_article;
    }
    public function setId(int $id):void{
        $this->id_article = $id;
    }
    public function getTitre():string{
        return $this->titre_article;
    }
    public function setTitre(string $titre):void{
        $this->titre_article = $titre;
    }
    public function getUtilisateur():Utilisateur{
        return $this->utilisateur;
    }
    public function setUtilisateur(Utilisateur $utilisateur){
        $this->utilisateur = $utilisateur;
    }
    public function getCategories():array{
        return $this->categories;
    }
    public function addCategorie(Categorie $categorie):void{
        $this->categories[] = $categorie;
    }

    public function delCategorie(Categorie $categorie){
        foreach ($this->categories as $value) {
            if($value === $categorie){
                unset($value);
            }
        }
    }
    public function delCategorieV2(Categorie $categorie):void{
        unset($this->categories[array_search($categorie, $this->categories)]);
    }
}

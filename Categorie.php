<?php
class Categorie{
    private ?int $id_categorie;
    private ?string $nom_categorie;
    private array $articles;

    public function __construct(){
        $this->articles = [];
    }

    public function getId():?int{
        return $this->id_categorie;
    }
    public function setId(?int $id):void{
        $this->id_categorie = $id;
    }
    public function getNom():?string{
        return $this->nom_categorie;
    }
    public function setNom(?string $nom):void{
        $this->nom_categorie = $nom;
    }
    public function getArticles():array{
        return $this->articles;
    }
    public function addArticle(Article $article):void{
        $this->articles[] = $article;
    }

    public function delArticle(Article $article){
        foreach ($this->articles as $key => $value) {
            if($value === $article){
                unset($this->articles[$key]);
            }
        }
    }
}

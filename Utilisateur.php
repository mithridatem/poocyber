<?php
class Utilisateur{
    //Attributs
    private ?int $id_utilisateur;
    private ?string $nom_utilisateur;
    private ?string $prenom_utilisateur;
    private ?string $mail_utilisateur;
    private ?string $password_utilisateur;
    //contructeur
    //getters and setters
    public function getId():?int{
        return $this->id_utilisateur;
    }
    public function setId(int $id):void{
        $this->id_utilisateur = $id;
    }
    public function getNom():string{
        return $this->nom_utilisateur;
    }
    public function setNom(string $nom):void{
        $this->nom_utilisateur = $nom;
    }
    public function getPrenom():string{
        return $this->prenom_utilisateur;
    }
    public function setPrenom(string $prenom):void{
        $this->prenom_utilisateur = $prenom;
    }
    public function getMail():string{
        return $this->mail_utilisateur;
    }
    public function setMail(string $mail):void{
        $this->mail_utilisateur = $mail;
    }
    public function getPassword():string{
        return $this->password_utilisateur;
    }
    public function setPassword(string $password):void{
        $this->password_utilisateur = $password;
    }
}

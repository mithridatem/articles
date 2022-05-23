<?php
    class Article{
        //attributs
        private $id_art;
        private $nom_art;
        private $content_art;
        //constructeur
        public function __construct(){
        }
        //getter and setter
        public function getIdArt():int{
            return $this->id_article;
        }
        public function getNomArt():string{
            return $this->nom_article;
        }
        public function getContentArt():string{
            return $this->content_article;
        }
        public function setIdArt($id){
            $this->id_article = $id;
        }
        public function setNomArt($nom){
            $this->nom_article = $nom;
        }
        public function setContentArt($content){
            $this->content_article = $content;
        }
        //fonctions
        public function showAllArticle($bdd):array{
            try{
                $req = $bdd->prepare('SELECT * FROM article');
                $req->execute();
                $data = $req->fetchAll(PDO::FETCH_OBJ);
                return $data;
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
    }
?>
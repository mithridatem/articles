<?php
    //imports
    include './utils/connectBdd.php';
    include './model/model_article.php';
    include './view/view_show_all_article.php';
    //instance objet
    $article = new Article();
    //méthode
    $tab = $article->showAllArticle($bdd);
    foreach($tab as $value){
        echo '<div><p>'.$value->nom_art.'</p>
        <textarea rows="5" cols="33">
        '.$value->content_art.'
        </textarea></div>';
    }
?>
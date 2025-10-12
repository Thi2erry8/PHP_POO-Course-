<?php

    use \App\Table\Categorie;
    use App\Table\Article;

     $categorie = Categorie::find($_GET['id']);
     $categories = Categorie::all();
     $articles = Article::LastByCategory($_GET['id']);
?>
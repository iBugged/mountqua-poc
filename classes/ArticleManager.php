<?php
// Required class
require 'Article.php';

class ArticleManager
{
  private $articleList = [];

  public function __construct(){
    // Generate some example articles
    $this->seedArticles();
  }

  public function seedArticles(){
    // Empty the article list first
    $this->resetArticleList();

    // Add some articles to the list
    $this->addArticle(new Article("MNT-001", "MountQua 1 Liter plat", "1 liter MountQua water zonder toegevoegd koolzuurgas", 1.29, 10));
    $this->addArticle(new Article("MNT-002", "MountQua 1 Liter bruisend", "1 liter MountQua water met toegevoegd koolzuurgas", 1.34, 20));
    $this->addArticle(new Article("MNT-003", "MountQua 1 Liter plat met citroen", "1 liter MountQua water zonder toegevoegd koolzuurgas, maar met citroensmaak!", 1.33, 15));
    $this->addArticle(new Article("MNT-004", "MountQua 1 Liter bruisend met citroen", "1 liter MountQua water met toegevoegd koolzuurgas en citroensmaak!", 1.39, 0));
    $this->addArticle(new Article("MNT-005", "MountQua 5 liter bruisend", "5 liter MountQua water met toegevoegd koolzuurgas", 3.39, 5));
  }

  public function getArticles(){
    return $this->articleList;
  }

  public function addArticle(Article $article){
    $this->articleList[] = $article;
  }

  public function resetArticleList(){
    $this->articleList = [];
  }
}
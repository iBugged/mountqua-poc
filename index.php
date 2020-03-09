<?php
// Require class
require 'classes/ArticleManager.php';

// Create manager and get articles
$manager = new ArticleManager();
$articles = $manager->getArticles();
?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <title>MountQua - Proof of Concept</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
  </head>
  <body>
    
    <div class="limiter">
      <div class="container-table100">
        <div class="wrap-table100">
          <div class="table100">
            <table>
              <thead>
                <tr class="table100-head">
                  <th class="column1">Article ID</th>
                  <th class="column2">Name</th>
                  <th class="column3">Description</th>
                  <th class="column4">Price</th>
                  <th class="column5">Stock</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach($articles as $article){
                  ?>
                  <tr>
                    <td class="column1"><?=$article->getId() ?></td>
                    <td class="column2"><?=$article->getName() ?></td>
                    <td class="column3"><?=$article->getDescription() ?></td>
                    <td class="column4">&euro; <?=$article->getPrice() ?></td>
                    <td class="column5"><?=$article->getStock() ?></td>
                  </tr>		
                  <?php
                }
                ?>							
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
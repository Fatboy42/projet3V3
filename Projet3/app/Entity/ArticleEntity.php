<?php

namespace App\Entity;

class ArticleEntity extends \Core\Entity\Entity
{
  public function getUrl()
  {
    return 'index.php?p=article&id=' . $this->id;
  }

  public function getExtrait()
  {
    return '<p>' . substr($this->contenu, 0, 142) . '...</p>';
  }

}

 ?>

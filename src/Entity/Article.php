<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
     
    /**
     * @ORM\Column(type="text", length=100)
     */
    private $title;

        /**
     * @ORM\Column(type="text")
     */
    private $body;

    //Getters & Setters
    public function getId(){
        return $this->id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getbody(){
        return $body->body;
    }

    public function setId(){
         $this->id = $id;
    }
    public function setTitle(){
        $this->title = $title;
    }
    public function setbody(){
        $this->body = $body;
    }
    
}

<?php

namespace Projet3\Model;

/**
 * Post Table
 */

class Post {

    /**
     * @var int auto increment
     */

    private $id;

    /**
     * @var string
     */

    private $title;

    /**
     * @var string
     */

    private $author;

    /**
     * @var string
     */

    private $content;

    /**
     * @var /DateTime
     */

    private $date;

    public function __construct() {

        $this->date = new \DateTime('d/m/Y');

    }

    /**
    * @var int
    */

    private $reported;

    /**
     * Get id
     *
     * @return int
     */

    public function getId() {

        return $this->id;

    }

    /**
     * Get title
     *
     * @return string
     */

    public function getTitle() {

        return $this->title;

    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Post
     */

    public function setTitle($title) {

        $this->title = $title;

        return $this;

    }

    /**
     * Get author
     *
     * @return string
     */

    public function getAuthor() {

        return $this->author;

    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Post
     */

    public function setAuthor($author) {

        $this->author = $author;

        return $this;

    }

    /**
     * Get content
     *
     * @return string
     */

    public function getContent() {

        return $this->content;

    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Post
     */

    public function setContent($content) {

        $this->content = $content;

        return $this;

    }

    /**
     * Get date
     *
     * @return \DateTime
     */

    public function getDate() {

        return $this->date;

    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Post
     */

    public function setDate($date) {

        $this->date = $date;

        return $this;

    }

    /**
     * Get reported
     *
     * @return int
     */

    public function getReported() {

        return $this->reported;

    }

    /**
     * Set reported
     *
     * @param int $reported
     *
     * @return Post
     */

    public function setReported($reported) {

        $this->reported = $reported;

        return $this;

    }

}

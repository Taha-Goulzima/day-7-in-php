<?php
class Article {
    public $title;
    public $content;
    private $published = false;

    public function __construct($title,$content){
        $this->title = $title;
        $this->content = $content;

    }

    public function publish(){
        $this->published = true;
    }
    public function isPublished(){
        return $this->published;
    }
}
$artical1 = new Article('my first post ','thisis the second post');
$artical2 = new Article('my second post ','thisis the second post');

$artical1->publish();
var_dump($artical1);

?>
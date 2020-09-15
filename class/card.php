<?php
class Card{
    private $title;
    private $content;
    private $image;

    function __construct($title, $content, $image = null)
    {
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
    }

    public function getHTML(){
        echo "<div class='card' onmouseover='card_hover(this)' onmouseout='card_mouse_out(this)' >
                    <div class='card-image' style='background-image:url(\"/public/images/$this->image\"'></div>
                    <span class='card-title'>$this->title</span>
                    <span class='card-content'>$this->content</span>
                </div>";
    }
}
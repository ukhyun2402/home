<?php
    class Slider{
        private $path;
        private $images;
        private $baseClassName;
        private $dir;
        private $height;

        public function __construct(string $dir = null, string $baseClassName = "slider",$height= "30%") {
            if (!is_null($dir)){
                $this->dir = $dir;
                $this->path = $_SERVER["DOCUMENT_ROOT"]."/public/images/".$dir;
                $images = scandir($this->path);
                $this->images = array_filter($images, function($value){
                    return preg_match("/\w{1,}\.{1}(jpg|png|jpeg|gif)/i",$value);
                });
            }
            $this->baseClassName = $baseClassName;
        }
        
        public function getHTML(){
            $html = "<div class='$this->baseClassName-container'>
                        <div class='swiper-wrapper'>";
            foreach ($this->images as $key => $value) {
                $html .= "<div class='swiper-slide' style='background-image:url(\"/public/images/$this->dir/$value\");' ></div>";
            }
            $html .= "</div><div class='swiper-pagination'></div>";
            $html .= "<div class='swiper-button-next'></div>";
            $html .= "<div class='swiper-button-prev'></div></div>";
            $html .= "<script src='https://unpkg.com/swiper/swiper-bundle.min.js'></script>";
            $html .= "<script>
                        var swiper = new Swiper('.$this->baseClassName-container', {
                        spaceBetween: 30,
                        centeredSlides: true,
                        autoplay: {
                            delay: 4000,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        });
                </script>";

            return $html;
        }

        public function loadCSS(){
            $style = "
            <style>
            html,
            body {
              position: relative;
              height: 100%;
            }
        
            body {
              background: #eee;
              font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
              font-size: 14px;
              color: #000;
              margin: 0;
              padding: 0;
            }
        
            .$this->baseClassName-container {
              width: 100%;
              height: $this->height;
              overflow-x: hidden;
            }
        
            .swiper-slide {
              text-align: center;
              font-size: 18px;
              background: #fff;
        
              /* Center slide text vertically */
              display: -webkit-box;
              display: -ms-flexbox;
              display: -webkit-flex;
              display: flex;
              -webkit-box-pack: center;
              -ms-flex-pack: center;
              -webkit-justify-content: center;
              justify-content: center;
              -webkit-box-align: center;
              -ms-flex-align: center;
              -webkit-align-items: center;
              align-items: center;
        
              background-size: 100% auto;
              background-repeat: no-repeat;
              background-position: center;
            }
          </style>";
          return $style;
        }
    }
<!DOCTYPE html>
<html>
    <head>
        <title>Начало || TrueCars</title>

        <!-- Стилове за плейъра-->
        <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/skin/minimalist.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="<?=base_url();?>assets/js/flowplayer.min.js"></script>
        <script src="http://heartcode-canvasloader.googlecode.com/files/heartcode-canvasloader-min-0.9.1.js"></script>
        
        <script src="<?=base_url();?>assets/js/revuta.js"></script>
        <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/revuta.css">
        <link href='http://fonts.googleapis.com/css?family=Noto+Sans&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Play&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Comfortaa:400,300&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="<?=base_url();?>assets/js/main.js">
        </script>
        <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/reset.css">

        <script src="<?=base_url();?>assets/js/jquery-1.7.2.min.js"></script>
        <script src="<?=base_url();?>assets/js/lightbox.js"></script>
        <link rel="stylesheet" href="<?=base_url();?>assets/css/lightbox.css" type="text/css" media="screen" charset="utf-8" />

        <script src="<?=base_url();?>assets/js/jquery.prettySociable.js" type="text/javascript" charset="utf-8"></script>
        <link rel="stylesheet" href="<?=base_url();?>assets/css/prettySociable.css" type="text/css" media="screen" charset="utf-8" />

        <script src="<?=base_url();?>assets/js/review-custom-js.js"></script>
        <script src="<?=base_url();?>assets/js/lightzap.js"></script>
        <script src="<?=base_url();?>assets/js/carousel.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.tipsy.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.tweet.js"></script>
            <script type='text/javascript'>
            jQuery(function($){
                $(".tweet").tweet({
                    username: "TrueCars2",
                    join_text: "auto",
                    avatar_size: 32,
                    count: 3,
                    auto_join_text_default: "", 
                    auto_join_text_ed: "",
                    auto_join_text_ing: "",
                    auto_join_text_reply: "",
                    auto_join_text_url: "",
                    loading_text: "Зареждане на tweet-овете..."
                });
             });
</script>
    </head>
    <script type="text/javascript">
        $(document).ready(function(){
            var menu_selected = "<?=$this->router->fetch_method();?>";
            $('.'+menu_selected+'_m').attr('id', 'ed');
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
        $("#theloader").fadeOut(1000);
        $("#container").fadeIn('fast');
         });
        </script>
    <body<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <!-- Готините сенки -->
        <div id="left-shadow"></div>
        <div id="right-shadow"></div>
        
        <div id="theloader">
                <div id="canvasloader-container" class="wrapper"></div>
        
    <!-- This script creates a new CanvasLoader instance and places it in the wrapper div -->
    <script type="text/javascript">
        var cl = new CanvasLoader('canvasloader-container');
        cl.setColor('#ffffff'); // default is '#000000'
        cl.setDiameter(35); // default is 40
        cl.setDensity(62); // default is 40
        cl.show(); // Hidden by default
        
        // This bit is only for positioning - not necessary
          var loaderObj = document.getElementById("canvasLoader");
        loaderObj.style.position = "absolute";
        loaderObj.style["top"] = cl.getDiameter() * -0.5 + "px";
        loaderObj.style["left"] = cl.getDiameter() * -0.5 + "px";
    </script>
        </div>
        <div id="container">
            
            
            <!-- Хедър - меню, лого, социални линкове(бутони) -->
               <div id="header">
                   
                    <div id="header-cont">
                    <a href="<?=base_url();?>"><div id="logo"><img id="logo-hover" src="<?=base_url();?>assets/images/logo-hover.png"/></div></a>
                    
                    <div id="menu">
                        <ul>
                            <li class="select index_m"><a href="<?=base_url();?>">Начало</a></li>
                            <li class="select reviews_m review_m" ><a href="<?=base_url('home/reviews');?>">Ревюта</a></li>
                            <li class="select news_m" ><a href="<?=base_url('home/news');?>">Новини</a></li>
                            <li class="select contacts_m" ><a href="<?=base_url('home/contacts');?>">Контакти</a></li>
                        </ul>
                    </div>
                    
                    <div id="socialmarks">
                        <ul>
                            <li><a href="http://www.facebook.com/TrueCars" target="_blank"><img src="<?=base_url();?>assets/images/facebook.png"/></a></li>
                            <li><a href="https://twitter.com/TrueCars2" taget="_blank"><img src="<?=base_url();?>assets/images/twitter.png"/></a></li>
                        </ul>
                        <p id="join">Присъедини се към нас !</p>
                    </div>
                    </div>
          
              </div> 
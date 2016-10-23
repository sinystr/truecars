
              <div id="slider-module">
                <div id="slider-container">
<div id="CU3ER">          
<!-- modify this content to provide users without Flash or enabled Javascript with alternative content information -->          
<p>Click to get Flash Player<br />
<a href="http://www.adobe.com/go/getflashplayer">
<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
</a>
</p>          
<p>or try to enable JavaScript and reload the page</p>
<!-- generated SEO content starts here -->      
<div style="position:absolute;left:-50000px;">  <ul>
    <li>
      <img src='<?=base_url();?>assets/images/slider-pic-1.png' alt=''/>
      <a href="<?=base_url();?>home/review/5" target="_blank">
      <h2>Ford Mustang 1967</h2>
      <p>a.k.a. Eleonor - Една от най-забележителните коли на миналия век, само сега пълно нейно ревю!</p>
      </a>
      <p></p>
    </li>
    <li>
      <img src='<?=base_url();?>assets/images/kocka-s-leve-strane2.jpg' alt=''/>
      <a href="http://getcu3er.com/javascript" target="_blank">
      <h2>It works beautifully on all devices!</h2>
      <p>From now on your visitors can enjoy great looking slideshows on PCs, iPads, iPhones, Android and other phones and tablet devices. We are very proud of our commitment to bring you the best image slider on the web.</p>
      </a>
      <p></p>
    </li>
    <li>
      <img src='<?=base_url();?>assets/images/kocka-s-leve-strane3.jpg' alt=''/>
      <a href="http://getcu3er.com/features/wpcu3er" target="_blank">
      <h2>wpCU3ER, slick Wordpress plugin!</h2>
      <p>wpCU3ER is a WordPress plugin designed to provide easy CU3ER integration into WordPress powered websites while offering lots of advanced CU3ER content editing & managing features. With simple embedding option and easy content management through familiar WordPress user interface you get full control over whole CU3ER content, slides & transitions.</p>
      </a>
      <p></p>
    </li>
  </ul></div>
<!-- generated SEO content ends here -->  
</div>      
        
<script type="text/javascript" src="<?=base_url();?>assets/js/swfobject.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/CU3ER.js"></script>
<script type="text/javascript">
// add your FlashVars
var vars = { xml_location : '<?=base_url();?>assets/CU3ER-config.xml', width:'961', height:'561' };
// add Flash embedding parameters, etc. wmode, bgcolor...
var params = { wmode: 'transparent' };
params.allowScriptAccess = "always";
// Flash object attributes id and name
var attributes = { id:'CU3ER', name:'CU3ER' };
// dynamic embed of Flash, set the location of expressInstall if needed
swfobject.embedSWF('<?=base_url();?>assets/CU3ER.swf', "CU3ER", 961, 561, "10.0.0", 
"<?=base_url();?>assets/js/expressinstall.swf", vars, params, attributes );
// initialize CU3ER class containing Javascript controls and events for CU3ER
var CU3ER_object = new CU3ER("CU3ER");
</script>
</div>
              </div>
            
            <!--Новини-->
              <div id="news">
                <div id="news-cont">
                    <ul id="news-text">
                        <li>
                            <?php foreach($news as $item): ?>
                            <div class="news-pic"><img src="<?=base_url().$item['img'];?>" width="299" height="187"/></div>
                            <div class="rightside">
                            <h2 class="news-title"><?=$item['title'];?></h2>
                            <p class="news-text"><?=$item['content'];?></p>
                            </div>
                          <?php endforeach;?>
                        </li>
                    </ul>
                       <div id="news-nav">
                    <?=$pagination;?>
                       </div>
                </div>
            </div>
            
            <!-- Частта отредена за избрано ревю -->
            <div id="video">
                <a href="http://truecars.gimn-popovo.com/home/review/5">
                <div id="video-review">
                </div>
                </a>
                <div id="video-actual">
                  <div class="flowplayer" data-swf="flowplayer.swf" data-ratio="0.417">
                        <video>
                            <source type="video/mp4" src="http://ndpsystem.com/truecars/assets/tc.mp4"/>
                        </video>
                  </div>
                </div>
            </div>
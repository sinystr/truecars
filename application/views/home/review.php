<div id="nav-menu">
    <div id="nav-menu-c">
    <ul>
        <li><a href="#logo"><img id="nn1" title="Върни се в началото" src='<?=base_url();?>assets/images/nav/0.png'</a></li>
        <li><a href="#video-revu"><img id="nn2"  title="Видео"  src='<?=base_url();?>assets/images/nav/1.png'</a></li>
        <li><a href="#harakteristiki"><img id="nn3" title="Характеристики"  src='<?=base_url();?>assets/images/nav/2.png'</a></li>
        <li><a href="#rate"><img id="nn4" title="Рейтинг"  src='<?=base_url();?>assets/images/nav/3.png'</a></li>
        <li><a href="#gallery"><img id="nn5" title="Галерия"  src='<?=base_url();?>assets/images/nav/4.png'</a></li>
        <li><a href="#facebook-comments"><img id="nn6" title="Коментари"  src='<?=base_url();?>assets/images/nav/5.png'/></a></li>
    </ul>
    </div>
</div>

            <div id="title-part">
                <center><h2><?=$review['title'];?></h2></center>
            </div>
            
            <div id="review-v">
                <div id="review-v-cont">
                        <?php
                            if(!empty($review['video'])) :
                        ?>
                    <div id="video-revu">
                        <?php echo $review['video']; ?>
                    </div><?php else:?>
                        <div style="width: 1024; height: 286px; background: url(<?=base_url();?>assets/images/no-clip.png) center center no-repeat;"></div>
                <?php endif;?>
                    <div id="review-share" >
                        <a href="#"  class="review-share" rel="prettySociable" alt="Сподели с приятели">сподели</a>
                    </div>
                </div>
                
            </div>
            
            <div id="harakt-bg">
            <div id="harakteristiki">
                
                <h2 id="harakt-title" style=> <img src="<?=base_url();?>assets/images/harakt-icon.png"/>  Характеристики</h2>
                <div class="clear"></div>

                <table style="width: 350px;">
                    <br />
                <?php
                    $features = unserialize($review['features']);
                    foreach($features as $feature)
                    {
                        $process = explode(':',$feature);
                        echo '<tr><td id="harakteristiki-list">'.$process[0].'</td>';
                        echo '<td id="harakteristiki-list-o">'.$process[1].'</td></tr>';
                    }
                ?>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                   
                    
                <div style="clear: both;"></div>
                                            <?php 
                        if($review['content'] != '')
                        { 

                        ?>
                    <div id="text-cont">

                        <p class="tc-text">
                            <?php echo $review['content'];?>
                        </p>

                    </div> 
                                            <?php } ?>
                <div class="clear"></div>
                <div id="rate">
                    <h2><?=$review['votes'];?>.00</h2>
                </div>
                <div class="clear"></div>
                <div id="rate-options">
                    <a href="<?=base_url('home/voteup/'.end($this->uri->segments));?>"><img src="<?=base_url();?>assets/images/like.png"/> Харесва ми</a>
                    <a href="<?=base_url('home/votedown/'.end($this->uri->segments));?>"><img src="<?=base_url();?>assets/images/dislike.png"/> Не ми харесва</a>
                </div>
            </div>  
            </div>
            <div class="clear"></div>
            <div id="gallery">
                <div id="gallery-top"></div>
                <div id="gallery-cont">
                    <div id="gallery-cont-c">
                        <ul id="gallery-ul">
                            <?php
                            $imgs = unserialize($review['imgs']);
                            if(!empty($imgs)):
                            foreach($imgs as $img):
                            ?>
                            <li class="gallery-item">
                                <div class="gallery-image">
                                    <a href="<?=base_url();?>uploads/pictures/<?=$img;?>" rel="lightbox[]" title="<?=$review['title'];?>">
                                    <img src="<?=base_url();?>uploads/pictures/thumbs/<?=$img;?>"/>
                                    <div class="g-img-hover">
                                        
                                    </div>
                                    </a>     
                                </div>
                            </li>
                            <?php  endforeach; endif;?>
                        </ul>
                        
                    </div>
                    <div id="g-bott"><div id="g-bott-c"><h2>Галерия</h2></div></div>
                </div>
                <div id="gallery-bottom"></div>
                 
            </div>
            <div id="facebook-comments"><div id="f-c-cont">
            <div class="fb-comments" data-href="<?=current_url();?>" data-width="800" data-num-posts="10" data-colorscheme="dark"></div>
                </div></div>
                <div id="ffffb"
                    <script type="text/javascript" src="<?=base_url();?>assets/js/skrollr.min.js"></script>

                        <script type="text/javascript" src="<?=base_url();?>assets/js/skrollr.menu.min.js"></script>

                        <script type="text/javascript">
                        //http://detectmobilebrowsers.com/
                        (function(a) {
                            if(/android|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(ad|hone|od)|iris|kindle|lge |maemo|meego.+mobile|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino|playbook|silk/i.test(a)
                            ||
                            /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))
                            {
                                //Add skrollr mobile on mobile devices.
                                document.write('<script type="text/javascript" src="../dist/skrollr.mobile.min.js"><\/script>');
                            }
                        })(navigator.userAgent||navigator.vendor||window.opera);
                        </script>

                        <script type="text/javascript">
                        window.onload = function() {
                            var s = skrollr.init({
                                forceHeight: false
                            });

                            skrollr.menu.init(s);
                        }
                    </script>


                <script type="text/javascript" charset="utf-8">

            $(document).ready(function(){
                $.prettySociable({     
                        animationSpeed: 'slow',
                        share_label: 'Сподели',
                        share_on_label: 'Сподели в ',
                        websites: {
                            facebook : {
                                'active': true,
                                'encode':true, // If sharing is not working, try to turn to false
                                'title': 'Facebook',
                                'url': 'http://www.facebook.com/share.php?u=',
                                'icon':'<?=base_url();?>assets/images/prettySociable/large_icons/facebook.png',
                                'sizes':{'width':70,'height':70}
                            },
                            twitter : {
                                'active': true,
                                'encode':true, // If sharing is not working, try to turn to false
                                'title': 'Twitter',
                                'url': 'http://twitter.com/home?status=',
                                'icon':'<?=base_url();?>assets/images/prettySociable/large_icons/twitter.png',
                                'sizes':{'width':70,'height':70}
                            },
                            delicious : {
                                'active': true,
                                'encode':true, // If sharing is not working, try to turn to false
                                'title': 'Delicious',
                                'url': 'http://del.icio.us/post?url=',
                                'icon':'<?=base_url();?>assets/images/prettySociable/large_icons/delicious.png',
                                'sizes':{'width':70,'height':70}
                            },
                            digg : {
                                'active': true,
                                'encode':true, // If sharing is not working, try to turn to false
                                'title': 'Digg',
                                'url': 'http://digg.com/submit?phase=2&url=',
                                'icon':'<?=base_url();?>assets/images/prettySociable/large_icons/digg.png',
                                'sizes':{'width':70,'height':70}
                            },
                            linkedin : {
                                'active': true,
                                'encode':true, // If sharing is not working, try to turn to false
                                'title': 'LinkedIn',
                                'url': 'http://www.linkedin.com/shareArticle?mini=true&ro=true&url=',
                                'icon':'<?=base_url();?>assets/images/prettySociable/large_icons/linkedin.png',
                                'sizes':{'width':70,'height':70}
                            },
                            reddit : {
                                'active': true,
                                'encode':true, // If sharing is not working, try to turn to false
                                'title': 'Reddit',
                                'url': 'http://reddit.com/submit?url=',
                                'icon':'<?=base_url();?>assets/images/prettySociable/large_icons/reddit.png',
                                'sizes':{'width':70,'height':70}
                            },
                            stumbleupon : {
                                'active': true,
                                'encode':false, // If sharing is not working, try to turn to false
                                'title': 'StumbleUpon',
                                'url': 'http://stumbleupon.com/submit?url=',
                                'icon':'<?=base_url();?>assets/images/prettySociable/large_icons/stumbleupon.png',
                                'sizes':{'width':70,'height':70}
                            },
                            tumblr : {
                                'active': true,
                                'encode':true, // If sharing is not working, try to turn to false
                                'title': 'tumblr',
                                'url': 'http://www.tumblr.com/share?v=3&u=',
                                'icon':'<?=base_url();?>assets/images/prettySociable/large_icons/tumblr.png',
                                'sizes':{'width':70,'height':70}
                            } 
                        }  
                });
            });
        </script>

        <script type="text/javascript">
        $('#nn1').tipsy({gravity: 's'}); 
          $('#nn2').tipsy({gravity: 's'});
          $('#nn3').tipsy({gravity: 's'});
          $('#nn4').tipsy({gravity: 's'});
          $('#nn5').tipsy({gravity: 's'});
          $('#nn6').tipsy({gravity: 's'});
        </script>
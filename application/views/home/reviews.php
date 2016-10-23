<div id="title-part">
</div>
<div id="revuta">
    <div id="revuta-cont">
        <h2 id="revuta-title">Ревюта</h2><div class="clear"></div>
        <?php if(!empty($reviews)):
            foreach($reviews as $review):
        ?>
        <div class="revu-option-main">
        <div class="holder"> <a href="<?=base_url('home/review/'.$review['id']);?>">
                <div class="r-caption"><p id="r-caption"><?=$review['title'];?></p></div>
                <img src="<?=base_url().'uploads/pictures/'.$review['main'];?>"/>
            </a>
        </div>
        </div>
        <?php
            endforeach;
            endif;
        ?>
    </div>
</div>

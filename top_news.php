<?php 

$CI = get_instance();
$CI->load->database();
$limit = 1;
$CI->db->order_by('create_time','desc');
$query = $CI->db->get_where('dbc_blog',array('status'=>1),$limit,0); 

?>


<div class="s-widget">
    <!-- Heading -->
    <h5><i class="fa fa-building color"></i>  <?php echo "Top_News";?></h5>
    <!-- Widgets Content -->
    <div class="widget-content hot-properties">
        <?php if($query->num_rows()<=0){?>
        <div class="alert alert-info"><?php echo "no_news";?></div>
        <?php }else{ ?>
        <ul class="list-unstyled">
            <?php 
            foreach ($query->result() as $news) {
            ?>
            <li class="col-xs-12 col-sm-6 col-md-3 col-lg-12">
          

     
<img class="img-responsive img-thumbnail" src="<?php echo get_featured_photo_by_id($news->featured_img);?>" height="70" width="70" alt="img" data-toggle="modal" data-target="#mymodal" >  <br/>                                                                                                                                                                                           
 
  <br/>


 
 <a href="" data-toggle="modal" data-target="#mymodal" > <?=  get_post_data_by_lang($news,'title'); ?> </a>
              
       

                <div class="clearfix"></div>
            </li>




<div id="mymodal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" >
        <h1 style="text-align:center; color:blue;"> <?=  get_post_data_by_lang($news,'title'); ?></h1>
      </differentv>
  </div>
    <div class="modal-body" id="blog_details" >
    
 <center> 
<img class="img-responsive img-thumbnail" src="<?php echo get_featured_photo_by_id($news->featured_img);?>" height="100" width="200" alt="img" ></center>
                <br/>
               <?= get_blog_data_by_lang($news,'description');?>
               <a href="http://localhost:10080/dgrace/index.php/en/news-posts"> Read More </a>
    </div>
    <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-dismiss="modal"> Close </button>
       </div> 
    </div>
  </div>
</div>



            <?php 
            }
            ?>
        </ul>


        <?php }?>
    </div>
</div>
<div style="clear:both"></div>
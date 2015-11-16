<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  
   <div class="carousel-inner" role="listbox">
<?php
 $i = 0;
             while(($row = mysql_fetch_array($query2))) { 
             if ( $i == 0 ) { ?>
   <div class="item active">
       <img src="images/<?php echo $row['image'] ?>" alt="<?php echo $row['title'] ?>">
     </div> 
      <?php 
      $i++ ;
      } 
 else { ?>
<div class="item">
       <img src="images/<?php echo $row['image'] ?>" alt="<?php echo $row['title'] ?>">
     </div> 
     <?php } ?> 
     <?php } ?> 
   </div>
   </div> 
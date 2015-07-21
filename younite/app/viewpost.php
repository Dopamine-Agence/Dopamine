<?php
  
  // if(!isset($_GET['pid'])(Header("Location: ".$_SERVER["HTTP_REFERER"])
  //   die();
  //   ));

  $pid = $_GET['pid'];

  if (!empty($pid)){
    include "connect.php";
    $pid = mysqli_real_escape_string($connect, $pid);
    $sql = "SELECT * FROM posts where id=". $pid;
    $res = mysqli_query($connect, $sql) or die (mysqli_error());
    while ($post=mysqli_fetch_assoc($res)):
?>


<div id="page-lieux">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="js/moment.js"></script>
<script type="text/javascript" src="js/nav.js"></script>

<!-- <div class="retour">
  <a href="#"><img src="img/BackArrow.png"></a>
</div> -->


<div class="viewpost">
   <div id="arrow_up_post"><img src="img/UpArrow.png"></div>
  <div id="arrow_down_post"><img src="img/DownArrow.png"></div>
  <a class="button-post close_post cancel" href="#"></a>
    <div id="cover">
        <img src="timthumb.php?src=<?php echo $post["photo"];?>&h=900&w=1500" alt="cover"/>
    </div>

    <div id="description-lieu">
      <p>#<?php echo $post["tags"];?></p>

      <h2><?php echo $post["address"];?></h2>
      <hr>

      <h3><?php echo $post["title"];?></h3>

      <p class="text-courant"><?php echo $post["content"];?></p>
      
      <p class="heure" data-date="<?php echo $post["created"];?>"><?php echo $post["created"];?></p>
    </div>

<?php
  $sql2 = "SELECT * FROM posts_comments where posts_id=". $pid." ORDER BY date DESC";
  $res2 = mysqli_query($connect, $sql2);
  $nbComment = mysqli_num_rows($res2);
?>
 <div id="comment">
  <p class="nbr-comment"><?php echo $nbComment;?> comment<?php if($nbComment > 1) echo "s";?><p>
    <a href="#" class="post_your_comment"></a>
  <hr class="filet-comment">
</div>
<?php
  while ($comment=mysqli_fetch_assoc($res2)):
?>
  <div id="comment pseudo" class="message">

            <h4 class="pseudo-user">From <span><?php echo $comment["user"];?></span></h4>
            <p class="text-courant">"<?php echo htmlspecialchars_decode(nl2br($comment["comment"]));?>"</p>
            <p class="heure" data-date="<?php echo $comment["date"];?>"><?php echo $post["date"];?></p>
            <hr class="filet-comment">
  </div>


  <?php
  endwhile;
  endwhile;}

?>


 <div id="post-comment">
        <div id="arrow_up"><img src="img/UpArrow.png"></div>
        <div id="arrow_down"><img src="img/DownArrow.png"></div>
        <h4>Post your comment</h4>

        <form method="post" action="post_comment.php">
          
          <input type="text" class="form-control" id="inputUser" name="inputUser" placeholder="Pseudo" required=""/>

          <textarea class="form-control" id="inputComment" name="inputComment" placeholder="Comment" rows="10"></textarea>

          <input type="hidden" name="inputPostId" value="<?php echo $pid; ?>"/>

          <input type="submit" class="post_comments btn-post" value=""/>
        
        </form>

    </div>

</div>




</div>
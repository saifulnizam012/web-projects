<!DOCTYPE html>
<html>
<head>
<meta>
  <title><?php echo $title; ?></title>
</head>
 
<body bgcolor="#FFFFFF" text="#000000">
  <ol>
    <?php
    if (is_array($result) || is_object($result))
{
    foreach ($result as $record): ?>
      <li>
      Name : <?php echo $record->user; ?><br>
      Email : <?php echo $record->email; ?><br>
      Date / Time : <?php echo $record->postdate." / ".$record->posttime; ?><br>
      Comment : <?php echo nl2br($record->comment); ?><br>
      Action : <a href="<?php echo base_url('myguestbook/edit/'); echo $record->id; ?>">Edit</a>
      / <a href="<?php echo base_url('myguestbook/remove/'); echo $record->id; ?>">Delete</a>
      <hr>
      </li>
    <?php endforeach; } else{ header('Location: https://lrgs.ftsm.ukm.my/users/a179830/week7lab/myguestbook/');
     }?>
  </ol>
  <div align="center">
    [ <a href="<?php echo base_url('myguestbook/create/'); ?>">Add</a> ]
  </div>
</body>
  
</html>
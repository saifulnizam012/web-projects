<!DOCTYPE html>
<html>
<head>
<meta>
  <title><?php echo $title; ?></title>
</head>
  
<body bgcolor="#FFFFFF" text="#000000">
<?php if (is_array($result) || is_object($result))
  {
    echo validation_errors(); ?>
  <form name="form1" method="post" action="">
    Nama :
    <input type="text" name="name" size="40" value="<?php echo $result[0]->user; ?>">
    <br>
    Email :
    <input type="text" name="email" size="25" value="<?php echo $result[0]->email; ?>">
    <br>
    Catatan :<br>
    <textarea name="comment" cols="30" rows="8"><?php echo $result[0]->comment; ?></textarea>
    <br>
    <input type="hidden" name="form-submitted" value="edit" />
    <input type="submit" name="Submit" value="Modify Comment">
    <input type="reset">
  <?php } else { header('Location: http://lrgs.ftsm.ukm.my/users/a179830/week7lab/myguestbook/view/');
}
?>
  <br>
</form>
</body>
</html>
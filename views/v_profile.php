 <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="index.php?page=member"><?php echo $lang['my_account']; ?></a>
          <a class="blog-nav-item" href="index.php?page=manager"><?php echo $lang['my_vids']; ?></a>
          <a class="blog-nav-item" href="#"><?php echo $lang['msg']; ?></a>

        </nav>
      </div>
    </div>

<?php
echo (isset($err) ) ? '<div class="alert alert-danger">'.$lang['error'].': '.$err.'</div>' : '';
echo (!isset($err) && isset($_POST['submit']) ) ? '<div class="alert alert-success">'.$lang['profile_ok'].'</div>' : '';
?>

<div class='container'>

	<div class='container'>
		<div class='border-top'></div>
		<h1><?php echo $lang['member_space']; ?><small> <?php echo secure($session->getName() ); ?></small></h1>
		<div class='border-bottom'></div>
	</div>

	<br><br>

	<div class='container'>
	 <div class="panel panel-primary" > <div class="panel-heading">
              <h3 class="panel-title"><?php echo $lang['edit_user']; ?></h3>
            </div>
            <div class="panel-body">
		<form action="" method="post" role="form">
			<div class="form-group">
				<label for="email"><?php echo $lang['email_address']; ?></label>
				<input type="email" required="" placeholder="<?php echo $lang['email_address']; ?>" name="email" value="<?php echo (isset($_POST['email']) ) ? secure($_POST['email']) : secure($session->getEmailAddress() ); ?>" class="form-control"/>
			</div>
			<div class="form-group">
				<label for="username"><?php echo $lang['username']; ?></label>
				<input type="text" required="" placeholder="<?php echo $lang['username']; ?>" name="username" value="<?php echo (isset($_POST['username']) ) ? secure($_POST['username']) : secure($session->getName() ); ?>" class="form-control"/>
			</div>
			<div class="form-group">
				<label for="avatar"><?php echo $lang['avatar']; ?></label>
				<input type="url" placeholder="<?php echo $lang['avatar']; ?>" name="avatar" value="<?php echo (isset($_POST['avatar']) ) ? secure($_POST['avatar']) : secure($session->getAvatarPath() ); ?>" class="form-control"/>
			</div>
			<input type="submit" name="submit" value="<?php echo $lang['profile_update']; ?>" class='btn btn-primary' />
		</form>
		</div></div>
	</div>

</div>
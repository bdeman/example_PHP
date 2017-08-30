<p id="go_back">
<a href="<?= URL::base() ?>"> Ga terug</a>
</p>
<div id="login">
	<h1>Login</h1>
	<div id="login_panel">
		<?=Form::open(URL::base().'admin/login') ?>	
			<div class="login_fields">
				<div class="field">
					<?=Form::label('username', 'Username: ')?>
					<?=Form::input('username',isset($post['username'])? $post['username']:'',array('id' => 'username', 'tabindex' => '1','placeholder' => 'username')) ?>
				</div>
				
				<div class="field">
					<?=Form::label('password', 'Password: ')?>
					<?=Form::password('password',false,array('id' => 'password', 'tabindex' => '2','placeholder' => 'password')) ?>	
				</div>
			</div>
			
			<div class="login_actions">
				<?=Form::button('login', 'Login',array('type' => 'submit', 'tabindex' => '3','class' => 'loginbtn'))?>
			</div>
		
		<?=Form::close()?>
	</div>		
</div>
<?php /* Smarty version 2.6.18, created on 2010-08-11 13:20:34
         compiled from templates/classes/Authenticator_getLoginForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', '_', 'templates/classes/Authenticator_getLoginForm.tpl', 50, false),)), $this); ?>
<div id="login_signup">
    <h1><?php echo ((is_array($_tmp='Login or Signup here')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
:</h1>
    <div id="loginbox">
        <h2><?php echo ((is_array($_tmp='Login Here')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
:</h2>
        <div id="networkselection">
            <?php echo $this->_tpl_vars['selectNetworkUI']; ?>

        </div>
        <div id="loginselection">
		    <?php if ($this->_tpl_vars['user_id']): ?>
		        <input type="hidden" name="user_id" id="form_user_id" value="<?php echo $this->_tpl_vars['user_id']; ?>
"/>
		    <?php else: ?>
                <?php echo ((is_array($_tmp="Username (or email)")) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
:<br/>
                <input type="text" name="username" id="form_username" tabindex="1" value="<?php echo $this->_tpl_vars['username']; ?>
" size="20" /><br/>
            <?php endif; ?>
            <?php echo ((is_array($_tmp='Password')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
:<br/>
            <input type="password" name="password" id="form_password" tabindex="2" size="20" /><br/>
        </div>
        <div id="form_errormsg" class="errormsg">
		    <?php if ($this->_tpl_vars['error'] == null): ?>
		    	&nbsp;
		    <?php else: ?>
		    	<?php echo $this->_tpl_vars['error']; ?>

		    <?php endif; ?>
		</div>

        <input class="submit" type="submit" tabindex="3" name="login_form_submit" value="<?php echo ((is_array($_tmp='Login')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
" onclick="return validateForm(this.form);"/>&nbsp;
    </div>
    <?php if ($this->_tpl_vars['signupUrl']): ?>
    <div id="signupbox">
        <h2><?php echo ((is_array($_tmp='Signup Here')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
:</h2>
		    <input class="submit" type="submit" tabindex="4" name="form_signup" value="<?php echo ((is_array($_tmp='Create a free account')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
" onclick="location.href='<?php echo $this->_tpl_vars['signupUrl']; ?>
';" />
    </div>
    <?php endif; ?>

</div>
            <script type="text/javascript">
        <!--
		<?php echo '
		var messages = {
		'; ?>

		  empty_form: "<?php echo ((is_array($_tmp='You must specify your username and password')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
",
		  username_required: "<?php echo ((is_array($_tmp='Username is required.')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
",
		  username_invalid: "<?php echo ((is_array($_tmp='Username contains invalid characters.')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
",
		  email_invalid: "<?php echo ((is_array($_tmp='A valid email address is required.')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
",
		  password_empty: "<?php echo ((is_array($_tmp='A password is required.')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
",
		  password_invalid: "<?php echo ((is_array($_tmp='Password contains invalid characters.')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
",
		  password_short: "<?php echo ((is_array($_tmp='Password is too short, it must be 6 characters minimum')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
"
		<?php echo '
		};

		document.getElementById("form_username").focus();

		function validateForm(form) {
		  if (!isValidUsername(form.username)) {
			if (isEmpty(form.username)) {
			  document.getElementById("form_errormsg").innerHTML = messages.username_required;
			  return false;
			}
			else {
			  if (!isValidEmail(form.username)) {
				document.getElementById("form_errormsg").innerHTML = messages.username_invalid;
				return false;
			  }
			}
		  }


			if (isEmpty(form.password)){
			  document.getElementById("form_errormsg").innerHTML = messages.password_empty;
			return false;
		  }

		  return true;
		}

		'; ?>

        //-->
    </script>
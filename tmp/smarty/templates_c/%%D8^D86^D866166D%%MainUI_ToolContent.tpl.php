<?php /* Smarty version 2.6.18, created on 2010-08-11 13:17:08
         compiled from templates/classes/MainUI_ToolContent.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', '_', 'templates/classes/MainUI_ToolContent.tpl', 55, false),)), $this); ?>

<?php if ($this->_tpl_vars['sectionSTART']): ?>
        <div class="tool_user_info">
                <?php if ($this->_tpl_vars['userIsValid']): ?>
                    <div><?php echo ((is_array($_tmp='Logged in as')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
: <?php echo $this->_tpl_vars['userListUI']; ?>
</div>
                    <a id="preferences_link" href="<?php echo $this->_tpl_vars['base_ssl_path']; ?>
admin/generic_object_admin.php?object_id=<?php echo $this->_tpl_vars['userId']; ?>
&amp;object_class=User&amp;action=edit"><img src="<?php echo $this->_tpl_vars['common_images_url']; ?>
profile.gif">&nbsp;<?php echo ((is_array($_tmp="Profile / Settings")) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</a>
                    <a id="logout_link" href="<?php echo $this->_tpl_vars['base_ssl_path']; ?>
login/?logout=true<?php echo $this->_tpl_vars['logoutParameters']; ?>
"><img src="<?php echo $this->_tpl_vars['common_images_url']; ?>
logout.gif">&nbsp;<?php echo ((is_array($_tmp='Logout')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</a>
                <?php else: ?>
					<?php if (! $this->_tpl_vars['shrinkLeftArea']): ?>
                    <p>
                        <?php echo ((is_array($_tmp="I am not logged in.")) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
<br>
                        <a id="login_link" href="<?php echo $this->_tpl_vars['base_ssl_path']; ?>
login/"><?php echo ((is_array($_tmp='Login')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</a>
                    </p>
					<?php endif; ?>
                <?php endif; ?>
        </div>

        <?php if (count ( $this->_tpl_vars['languageChooser'] ) > 1): ?>
        <div class="language">
            <form class="language" name="lang_form" method="post" action="<?php echo $this->_tpl_vars['formAction']; ?>
">
                <div><?php echo ((is_array($_tmp='Language')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
:
                <select name="wifidog_language" onchange="javascript: document.lang_form.submit();">
                    <?php $_from = $this->_tpl_vars['languageChooser']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['currLanguage']):
?>
                        <?php echo $this->_tpl_vars['currLanguage']; ?>

                    <?php endforeach; endif; unset($_from); ?>
                </select>
                </div>
            </form>
        </div>
        <?php endif; ?>

        <div class="tool_content">
            <?php echo $this->_tpl_vars['toolContent']; ?>

        </div>

<?php endif; ?>
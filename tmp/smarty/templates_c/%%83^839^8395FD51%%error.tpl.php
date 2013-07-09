<?php /* Smarty version 2.6.18, created on 2010-08-24 18:01:40
         compiled from templates/sites/error.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', '_', 'templates/sites/error.tpl', 4, false),)), $this); ?>
<div id="warning_message_area"><?php echo $this->_tpl_vars['error']; ?>
</div>

<?php if ($this->_tpl_vars['show_tech_support_email']): ?>
    <p><?php echo ((is_array($_tmp='Please get in touch with ')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
 <a href="mailto:<?php echo $this->_tpl_vars['tech_support_email']; ?>
"><?php echo $this->_tpl_vars['tech_support_email']; ?>
</a>.</p>
<?php endif; ?>
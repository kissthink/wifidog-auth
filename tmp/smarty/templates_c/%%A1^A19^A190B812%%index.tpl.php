<?php /* Smarty version 2.6.18, created on 2010-08-11 13:17:07
         compiled from templates/sites/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', '_', 'templates/sites/index.tpl', 55, false),array('modifier', 'sprintf', 'templates/sites/index.tpl', 55, false),)), $this); ?>

<?php if ($this->_tpl_vars['sectionMAINCONTENT']): ?>
	<p>
		<?php if ($this->_tpl_vars['networkNumValidUsers'] == 1): ?>
			<?php echo ((is_array($_tmp=((is_array($_tmp="The %s network currently has one valid user.")) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)))) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['networkName']) : sprintf($_tmp, $this->_tpl_vars['networkName'])); ?>

		<?php else: ?>
			<?php echo ((is_array($_tmp=((is_array($_tmp="The %s network currently has %d valid users.")) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)))) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['networkName'], $this->_tpl_vars['networkNumValidUsers']) : sprintf($_tmp, $this->_tpl_vars['networkName'], $this->_tpl_vars['networkNumValidUsers'])); ?>

		<?php endif; ?>

		<?php if ($this->_tpl_vars['networkNumOnlineUsers'] == 1): ?>
			<?php echo ((is_array($_tmp=((is_array($_tmp="One user is currently online.")) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)))) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['networkNumOnlineUsers']) : sprintf($_tmp, $this->_tpl_vars['networkNumOnlineUsers'])); ?>

		<?php else: ?>
			<?php echo ((is_array($_tmp=((is_array($_tmp="%d users are currently online.")) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)))) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['networkNumOnlineUsers']) : sprintf($_tmp, $this->_tpl_vars['networkNumOnlineUsers'])); ?>

		<?php endif; ?>
		<br/>
		<?php if ($this->_tpl_vars['networkNumDeployedNodes'] == 1): ?>
        		<?php echo ((is_array($_tmp="This network currently has 1 deployed hotspot.")) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>

        <?php else: ?>
        		<?php echo ((is_array($_tmp=((is_array($_tmp="This network currently has %d deployed hotspots.")) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)))) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['networkNumDeployedNodes']) : sprintf($_tmp, $this->_tpl_vars['networkNumDeployedNodes'])); ?>

        <?php endif; ?>

        <?php if ($this->_tpl_vars['networkNumOnlineNodes'] == 1): ?>
            <?php echo ((is_array($_tmp="One hotspot is currently operational.")) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>

        <?php else: ?>
            <?php echo ((is_array($_tmp=((is_array($_tmp="%d hotspots are currently operational.")) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)))) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['networkNumOnlineNodes']) : sprintf($_tmp, $this->_tpl_vars['networkNumOnlineNodes'])); ?>

        <?php endif; ?>

        <?php if ($this->_tpl_vars['networkNumNonMonitoredNodes'] > 0): ?>
            <?php if ($this->_tpl_vars['networkNumNonMonitoredNodes'] == 1): ?>
                <?php echo ((is_array($_tmp="One hotspot isn't monitored so we don't know if it's currently operational.")) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>

            <?php else: ?>
                <?php echo ((is_array($_tmp=((is_array($_tmp="%d hotspots aren't monitored so we don't know if they are currently operational.")) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)))) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['networkNumNonMonitoredNodes']) : sprintf($_tmp, $this->_tpl_vars['networkNumNonMonitoredNodes'])); ?>

            <?php endif; ?>
        <?php endif; ?>
    </p>
<?php endif; ?>